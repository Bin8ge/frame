<?php
// 扩展

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
