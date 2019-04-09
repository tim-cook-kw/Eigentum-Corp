<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('.layouts.homelayouts');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/post1', function () {
    return view('post1');
});
Route::get('/post2', function () {
    return view('post2');
});
Route::get('/post3', function () {
    return view('post3');
});
Route::get('/post4', function () {
    return view('post4');
});

