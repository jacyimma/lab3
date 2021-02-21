<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/user/{name}/{lastname}', function ($name,$lastname) {
    return 'User name: '.$name.' '.$lastname;
});

Route::get('/user/{id}','App\Http\Controllers\StudentController@display');