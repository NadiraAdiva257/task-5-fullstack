<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/categories', [App\Http\Controllers\CategoriesController::class, 'index'])->name('categories');
Route::get('/categories/tambah', [App\Http\Controllers\CategoriesController::class, 'tambah']);
Route::post('/categories/store', [App\Http\Controllers\CategoriesController::class, 'store']);
Route::get('/categories/edit/{id}', [App\Http\Controllers\CategoriesController::class, 'edit']);
Route::post('/categories/update/{id}', [App\Http\Controllers\CategoriesController::class, 'update']);
Route::get('/categories/hapus/{id}', [App\Http\Controllers\CategoriesController::class, 'delete']);
Route::get('/articles', [App\Http\Controllers\ArticlesController::class, 'index'])->name('articles');
Route::get('/articles/tambah', [App\Http\Controllers\ArticlesController::class, 'tambah']);
Route::post('/articles/store', [App\Http\Controllers\ArticlesController::class, 'store']);
Route::get('/articles/edit/{id}', [App\Http\Controllers\ArticlesController::class, 'edit']);
Route::post('/articles/update/{id}', [App\Http\Controllers\ArticlesController::class, 'update']);
Route::get('/articles/hapus/{id}', [App\Http\Controllers\ArticlesController::class, 'delete']);
