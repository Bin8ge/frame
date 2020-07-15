<?php
namespace App\Providers;


use LaravelStar\Support\Facades\Route;
use LaravelStar\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'App\Http\Controller';
    public function register()
    {

//        echo 'register';
        $this->app->instance('route',$this->app->make('route'));

    }

    public function boot()
    {
//        echo 'boot';

        Route::namespace($this->namespace)->register($this->app->getBasePath().'/routes/route.php');
    }

}