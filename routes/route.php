<?php
use LaravelStar\Support\Facades\Route;
Route::get('c','IndexController@index');
Route::get('h',function (){
    return 'this is bingo';
});
Route::post('/ee',function (){
    return 'this is bingo';
});