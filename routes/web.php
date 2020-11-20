<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudContoller;
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

Route::get('crud-app', 'App\Http\Controllers\CrudContoller@showForm');
Route::get('all-data', 'App\Http\Controllers\CrudContoller@showData');

//Get data
Route::post('crud-add', 'App\Http\Controllers\CrudContoller@createData');

