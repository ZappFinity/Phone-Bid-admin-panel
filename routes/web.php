<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();
//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');


//blog get api
Route::get('/blog/list', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');
//blog post api
Route::post('/blog/store', [App\Http\Controllers\BlogController::class, 'store'])->name('blog.store');
//blog update api
Route::put('/blog/update/{id}', [App\Http\Controllers\BlogController::class, 'update'])->name('blog.update');
//blog delete api
Route::delete('/blog/delete/{id}', [App\Http\Controllers\BlogController::class, 'destroy'])->name('blog.destroy');

// Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
