<?php
// 扩展
// 10 面向过程
// 22：10
// echo (function(){
//   return (function (){
//       echo "先初始化 cookie<br>";
//
//         echo (function (){
//             echo "前置 -- Request2 <br>";
//
//             echo (new Controller)->index();
//
//             echo "后置 -- Request2<br>";
//         })();
//
//       echo "后置 -- 设置cookie和session  <br>";
//   })();
// })();
class Controller
{
    public function index()
    {
        echo "this is controller <br>";
    }
}
class cookie
{
    public static function hander(\Closure $next)
    {
        echo "先初始化 cookie <br>";
        $next();
        echo "后置 -- 设置cookie  <br>";
    }
}
class session
{
    public static function hander(\Closure $next)
    {
        echo "先初始化 session <br>";
        $next();
        echo "后置 -- session  <br>";
    }
}
class Request
{
    public static function hander(\Closure $next)
    {
        echo "前置 -- Request2<br>";
        $next();
        echo "后置 -- Request2<br>";
    }
}
$controller = function(){
    echo (new Controller)->index();
};

$request = function() use ($controller) {
    Request::hander($controller);
};
$session = function() use ($request) {
    session::hander($request);
};
cookie::hander($session);

// (
//     cookie::hander(
//         session::hander(
//             Request::hander(
//               $controller
//             )
//         )
//     )
// )();
