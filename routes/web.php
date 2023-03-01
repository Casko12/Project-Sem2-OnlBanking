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

Route::get("/admin_ql",[App\Http\Controllers\AdminController::class,"admin_ql"]);
Route::get("/liststaff",[App\Http\Controllers\AdminController::class,"liststaff"]);
Route::get("/createstaff",[App\Http\Controllers\AdminController::class,"createstaff"]);

Route::get('/',[App\Http\Controllers\UserController::class,"home"]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
