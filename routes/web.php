<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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
Route::middleware(["auth","admin"])->group(function (){


});
@include_once ("admin.php");

Route::get('/',[App\Http\Controllers\UserController::class,"home"]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user-page',[App\Http\Controllers\UserController::class,"userPage"]);
Route::get('/login',[App\Http\Controllers\UserController::class,"login"]);
Route::get('/trans',[App\Http\Controllers\UserController::class,"trans"]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
