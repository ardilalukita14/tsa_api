<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\BaseController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\BaseController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\BaseController::class, 'contact'])->name('contact');
Route::get('/action', [App\Http\Controllers\BaseController::class, 'action'])->name('action');
Route::get('/doctores', [App\Http\Controllers\BaseController::class, 'doctores'])->name('doctores');
Route::get('/news', [App\Http\Controllers\BaseController::class, 'news'])->name('news');
Route::get('/covid', [App\Http\Controllers\BaseController::class, 'covid19'])->name('covid19');