<?php
// 扩展
// 10 面向过程
// 22：10
echo (function(){
  return (function (){
      echo "先初始化 cookie<br>";

        echo (function (){
            echo "前置 -- Request2 <br>";

            echo (new Controller)->index();

            echo "后置 -- Request2<br>";
        })();

      echo "后置 -- 设置cookie和session  <br>";
  })();
})();
class Controller
{
    public function index()
    {
        echo "this is controller <br>";
    }
}

/**
 *
 */
class Request1
{
    public function hander()
    {
        echo "前置 -- Request1\n";

        echo "后置 -- Request1\n";
    }
}

class Request2
{
    public function hander()
    {
        echo "前置 -- Request2\n";

        echo "后置 -- Request2\n";
    }
}
class Request3
{
    public function hander()
    {
        echo "前置 -- Request3\n";

        echo "后置 -- Request3\n";
    }
}
