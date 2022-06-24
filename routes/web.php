<?php

use App\Http\Controllers\Backend\CompanyController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\PostCategoryController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('company', CompanyController::class);
Route::resource('post', PostController::class);
Route::resource('postcategory', PostCategoryController::class);
