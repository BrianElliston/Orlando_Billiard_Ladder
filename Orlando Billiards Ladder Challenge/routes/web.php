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

Route::get('/standings', function () {
    return view('users.standings');
});


Route::get('/contact', function () {
    return view('users.contact');
});


Route::get('/rules', function () {
    return view('users.rules');
});

Route::get('/create', function () {
    return view('users.create');
});

Route::get('/about', function () {
    return view('users.about');
});




Route::resource('/users', 'UserController');

