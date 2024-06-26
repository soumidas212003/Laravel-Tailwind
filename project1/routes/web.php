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
Route::get('/prac1', function () {
    return view('practice1');
});
Route::get('/work1', function () {
    return view('work1');
});
Route::get('/work2', function () {
    return view('work2');
});
Route::get('/footer', function () {
    return view('footer');
});
Route::get('/feedback', function () {
    return view('feedback');
});
Route::get('/profile', function () {
    return view('profile');
});