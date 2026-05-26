<?php

use Illuminate\Support\Facades\Route;


Route::view("/test","template/template");
Route::view("/main","mainpage");
Route::view("/about","about");
Route::view("/menu","menu");
Route::view("/career","career");
Route::view("/contact","contact");




Route::get('/home', function () {
    return view ("home");
});

Route::get('/', function () {
    return view('welcome');
});