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

//mobile get api
Route::get('/mobile/list', [App\Http\Controllers\MobileController::class, 'index'])->name('mobile');
//mobile post api
Route::post('/mobile/store', [App\Http\Controllers\MobileController::class, 'store'])->name('mobile.store');
//mobile update api
Route::put('/mobile/update/{id}', [App\Http\Controllers\MobileController::class, 'update'])->name('mobile.update');
//mobile delete api
Route::delete('/mobile/delete/{id}', [App\Http\Controllers\MobileController::class, 'destroy'])->name('mobile.destroy');

//accessories get api
Route::get('/accessories/list', [App\Http\Controllers\AccessoriesController::class, 'index'])->name('accessories');
//accessories post api
Route::post('/accessories/store', [App\Http\Controllers\AccessoriesController::class, 'store'])->name('accessories.store');
//accessories update api
Route::put('/accessories/update/{id}', [App\Http\Controllers\AccessoriesController::class, 'update'])->name('accessories.update');
//accessories delete api
Route::delete('/accessories/delete/{id}', [App\Http\Controllers\AccessoriesController::class, 'destroy'])->name('accessories.destroy');
// Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
