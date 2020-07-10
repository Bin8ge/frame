<?php


namespace App;


class Index
{
    public function index()
    {
//        return 'this is app \index';
//        return app('db')->select();

        return \LaravelStar\Support\Facades\DB::select();
    }

}