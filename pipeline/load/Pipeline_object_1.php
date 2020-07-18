<?php

class Request1
{
    public static function hander(Closure $next)
    {
        echo "前置 -- Request1\n";
        // 这里怎么执行我们所需要执行的方法
        $next();
        echo "后置 -- Request1\n";
    }
}
class Request3
{
    public static function hander(Closure $next)
    {
        echo "前置 -- Request3\n";
        // 这里怎么执行我们所需要执行的方法
        $next();
        echo "后置 -- Request3\n";
    }
}
class Request2
{
    public static function hander(Closure $next)
    {
        echo "前置 -- Request2\n";
        // 这里怎么执行我们所需要执行的方法
        $next();
        echo "后置 -- Request2\n";
    }
}

class Controller
{
    public function index()
    {
        echo "this is controller \n";
    }
}

/**
 *
 */
class pipeline
{
    // 定义了我们的管道
    private $pipes = [
        'Request3',
        'Request2',
        'Request1',
    ];

    public function getSlice()
    {
        return function($stack, $pipe){
            return function() use ($stack, $pipe){
                return $pipe::hander($stack);
            };
        };
    }
    public function then()
    {
        $pipeline = array_reduce($this->pipes, $this->getSlice(), $this->controller());
        return $pipeline();
    }

    public function controller()
    {
        return function(){
            echo (new Controller)->index();
        };
    }
}

$p = new pipeline();
$p->then();
