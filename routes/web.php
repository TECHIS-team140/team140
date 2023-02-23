<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ItemController;
use \App\Http\Controllers\UserController;
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

Route::get('/search/', function () {
    return view('search.index');
})->name('search.index');

Route::get('/users', [UserController::class, 'users']);

Route::get('/user/edit', [UserController::class, 'edit']);
Route::post('/delete', [UserController::class, 'delete']);
Route::post('/edit', [UserController::class, 'edit']);



Route::get('/items/create', [ItemController::class, 'showCreateForm'])->name('item.create');
Route::post('/items/create', [ItemController::class, 'create']);

Route::get('/items/edit/{item}', [ItemController::class, 'showEditForm'])->name('item.edit');
Route::post('/items/edit/{item}', [ItemController::class, 'edit']);

Route::get('/items/delete/{item}', [ItemController::class, 'destroy'])->name('item.delete');
