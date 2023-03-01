<?php

use App\Http\Controllers\SearchController;
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

Route::get('/search/', function () {
    return view('search.index');
})->name('search.index');



Route::get('/items/create', [ItemController::class, 'showCreateForm'])->name('item.create');
Route::post('/items/create', [ItemController::class, 'create']);

Route::get('/items/edit/{item}', [ItemController::class, 'showEditForm'])->name('item.edit');
Route::post('/items/edit/{item}', [ItemController::class, 'edit']);

Route::get('/items/delete/{item}', [ItemController::class, 'destroy'])->name('item.delete');

/* 商品一覧画面 */
//一覧画面
Route::get('/search', [App\Http\Controllers\SearchController::class, 'index'])->name('index');
//DBのtype変換
Route::post('/search', [App\Http\Controllers\SearchController::class, 'type'])->name('type');
// 本の詳細
Route::get('/detail/{id}', [App\Http\Controllers\SearchController::class, 'detail'])->name('detail');