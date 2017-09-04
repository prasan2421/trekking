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
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/grid', function () {
    return view('grid');
});
Route::get('/register', function () {
    return view('register');
});
Route::post('/register', function () {
    return view('register');
});
Route::post('/register/submit', 'makeController@submit' );