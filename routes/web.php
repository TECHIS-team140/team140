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


//ユーザー一覧
Route::get('/users', [UserController::class, 'users']);

Route::get('/user/edit/{id}', [UserController::class, 'edit']);

//編集ボタン
Route::post('/memberEdit', [UserController::class,'memberEdit']);
//削除ボタン
Route::get('/memberDelete/{id}', [UserController::class,'memberDelete']);




Route::get('/items/create', [ItemController::class, 'showCreateForm'])->name('item.create');
Route::post('/items/create', [ItemController::class, 'create']);

Route::get('/items/edit/{item}', [ItemController::class, 'showEditForm'])->name('item.edit');
Route::post('/items/edit/{item}', [ItemController::class, 'edit']);

Route::get('/items/delete/{item}', [ItemController::class, 'destroy'])->name('item.delete');
