<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ItemController;
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



Route::get('/search/', function () {
    return view('search.index');
})->name('search.index');



Route::get('/items/create', [ItemController::class, 'showCreateForm'])->name('item.create');
Route::post('/items/create', [ItemController::class, 'create']);

Route::get('/items/edit/{item}', [ItemController::class, 'showEditForm'])->name('item.edit');
Route::post('/items/edit/{item}', [ItemController::class, 'edit']);

Route::get('/items/delete/{item}', [ItemController::class, 'destroy'])->name('item.delete');
