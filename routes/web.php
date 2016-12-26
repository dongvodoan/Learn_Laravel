<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
});

// Route::get('employees/search', 'SearchController@filter');
Route::get('/search', ['as' => 'search','uses' => 'SearchController@getsearch']);

// Auth::routes();

Route::get('/login', 'AuthController@login');

Route::post('/check', 'AuthController@check');

Route::get('/logout', 'AuthController@logout');
// Route::get('/home', 'HomeController@index');

Route::resource('departments', 'DepartmentController');

Route::resource('employees', 'EmployeeController');