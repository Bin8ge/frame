<?php

/**
 *
 */
class Request1
{
    public static function hander(Closure $next)
    {
        return function() use ($next){
            echo "前置 -- Request1<br>";
            // 这里怎么执行我们所需要执行的方法
            $next();
            echo "后置 -- Request1<br>";
        };
    }
}
class Request3
{
    public static function hander(Closure $next)
    {
        return function() use ($next){
            echo "前置 -- Request3<br>";
            // 这里怎么执行我们所需要执行的方法
            $next();
            echo "后置 -- Request3<br>";
        };
    }
}
class Request2
{
    public static function hander()
    {
        return function() {
            echo "前置 -- Request2<br>";
            // 这里怎么执行我们所需要执行的方法
            echo (new Controller)->index();
            echo "后置 -- Request2<br>";
        };
    }
}

$request = function (){
  return Request2::hander();
};
(
  Request3::hander(
    Request1::hander(
      $request()
    )
  )
)();

// $request2 = function() use ($request){
//     return Request1::hander(
//       $request()
//     );
// };
//
// $reques3 = function() use ($request2){
//     return Request3::hander(
//       $request2()
//     );
// };




class Controller
{
    public function index()
    {
        echo "this is controller <br>";
    }
}
//
