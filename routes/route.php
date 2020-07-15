<?php
use LaravelStar\Support\Facades\Route;
Route::get('c','Index@index');
Route::get('h',function (){
    return 'this is bingo';
});