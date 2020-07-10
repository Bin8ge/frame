<?php


namespace App;


class Index
{
    public function index()
    {
//        return 'this is app \index';
        return app('config')->all();
    }

}