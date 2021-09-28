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

Route::get('/', [TaskController::class, 'show'] );

Route::get('/createnew', [TaskController::class, 'createnew'] )->name('task_form');

Route::post('/savenew', [TaskController::class, 'store'] )->name('create_task');

Route::get('/edit/{id}', [TaskController::class, 'editTask'] )->name('edit_task');

Route::post('/edit/{id}', [TaskController::class, 'edit'] )->name('update_task');

Route::get('/delete/{id}', [TaskController::class, 'delete'] )->name('delete_task');
