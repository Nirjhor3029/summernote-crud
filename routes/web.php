<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\TodoController;
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

Route::get('/', [PageController::class,'homePage'])->name('home');

Route::get('/create', [TodoController::class,'todoCreate'])->name('todo.create');
Route::post('/todo-post',[TodoController::class,'todoPost'])->name('todo.post');

Route::get('/update/{id}', [TodoController::class,'todoUpdate'])->name('todo.update');
Route::post('/update-todo-post/{id}',[TodoController::class,'todoUpdatePost'])->name('todo.update.post');

Route::get('/todo-delete/{id}',[TodoController::class,'todoDelete'])->name('todo.delete');
Route::get('/task/{id}',[TodoController::class,'todoView'])->name('todo.view');
Route::get('/task-download/{id}',[TodoController::class,'todoDownload'])->name('todo.download');