<?php
require_once 'middleware.php';
class Controller
{
    public function index()
    {
        echo "this is controller <br>";
    }
}

class pipeline
{
    protected $pipes = [
        request::class,
        session::class,
        cookie::class,
    ];

    public function then(Closure $desctination)
    {
        $pipeline = array_reduce(
          $this->pipes(),
          $this->carry(),
          $desctination
        );
        return $pipeline();
    }

    public function pipes()
    {
        return $this->pipes;
    }
    public function carry()
    {
        return function($stack, $pipe){
            return function() use ($stack, $pipe){
                return $pipe::hander($stack);
            };
        };
    }
}
$controller = function(){
    echo (new Controller)->index();
};
$p = new pipeline();
$p->then($controller);
