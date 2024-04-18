<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/setup', function () {
    return view('video1');
});
Route::get('/setup2', function () {
    return view('video2');
});