<?php

use App\Http\Controllers\SearchController;
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
Route::get('/', [App\Http\Controllers\AccountController::class, 'login'])->name('login');
Route::get('/account/signup', [App\Http\Controllers\AccountController::class, 'signup'])->name('signup');
Route::post('/account/store', [App\Http\Controllers\AccountController::class, 'store']);
Route::get('/account/comp', [App\Http\Controllers\AccountController::class, 'comp']);
Route::post('/account/auth', [App\Http\Controllers\AccountController::class, 'auth']);
Route::group(['middleware' => 'auth'], function () {
    Route::get('/account/home', [App\Http\Controllers\AccountController::class, 'home']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/search', [App\Http\Controllers\SearchController::class, 'index'])->name('index');
Route::post('/search', [App\Http\Controllers\SearchController::class, 'type'])->name('type');
Route::get('/detail/{id}', [App\Http\Controllers\SearchController::class, 'detail'])->name('detail');


//ユーザー一覧
Route::get('/users', [UserController::class, 'users']);
//編集画面に遷移
Route::get('/user/edit/{id}', [UserController::class, 'edit']);
//編集ボタン
Route::post('/memberEdit', [UserController::class,'memberEdit']);
//削除ボタン
Route::get('/memberDelete/{id}', [UserController::class,'memberDelete']);


Route::get('/items/', [ItemController::class, 'index'])->name('item.index');
Route::get('/items/create', [ItemController::class, 'showCreateForm'])->name('item.create');
Route::post('/items/create', [ItemController::class, 'create']);

Route::get('/items/edit/{item}', [ItemController::class, 'showEditForm'])->name('item.edit');
Route::post('/items/edit/{item}', [ItemController::class, 'edit']);

Route::get('/items/delete/{item}', [ItemController::class, 'destroy'])->name('item.delete');

