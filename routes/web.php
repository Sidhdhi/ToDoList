<?php

use Illuminate\Support\Facades\Route;
use App\Models\Task;
use App\Http\Controllers\TaskController;

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

Route::get('/', 'App\Http\Controllers\TaskController@show' );

Route::get('createnew', 'App\Http\Controllers\TaskController@createnew' );

Route::get('savenew', 'App\Http\Controllers\TaskController@store' );

Route::get('delete/{id}', 'App\Http\Controllers\TaskController@deletes' );