<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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

Route::get('student', 'App\Http\Controllers\StudentController@showForm');


Route::post('student-add', 'App\Http\Controllers\StudentController@insertStudent');
Route::get('student-all', 'App\Http\Controllers\StudentController@allStudent');
Route::get('student-single/{id}', 'App\Http\Controllers\StudentController@singleStudent');
Route::get('student-delete/{id}', 'App\Http\Controllers\StudentController@deleteStudent');



