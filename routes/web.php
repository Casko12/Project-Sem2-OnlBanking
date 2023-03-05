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

Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->name('home');
Route::get('/user-page',[App\Http\Controllers\UserController::class,"userPage"]);
Route::get('/login',[App\Http\Controllers\UserController::class,"login"]);
Route::get('/trans',[App\Http\Controllers\UserController::class,"trans"]);
Route::get('/ve-chung-toi',[App\Http\Controllers\UserController::class,"veChungToi"]);
Route::get('/phat-trien',[App\Http\Controllers\UserController::class,"phatTrien"]);
Route::get('/an-toan',[App\Http\Controllers\UserController::class,"anToan"]);
Route::get('/loan',[App\Http\Controllers\UserController::class,"loan"]);
Route::get('/personal',[App\Http\Controllers\UserController::class,"personal"]);
Route::get('/documantUp',[App\Http\Controllers\UserController::class,"documantUp"]);

Route::get('/admin/listStaff',[App\Http\Controllers\AdminController::class,"listStaff"]);
Route::get('/admin/createStaff',[App\Http\Controllers\AdminController::class,"createStaff"]);
Route::get('/admin/editStaff',[App\Http\Controllers\AdminController::class,"editStaff"]);

Route::get('/admin/listUser',[App\Http\Controllers\AdminController::class,"listUser"]);
Route::get('/admin/createUser',[App\Http\Controllers\AdminController::class,"createUser"]);
Route::get('/admin/editUser',[App\Http\Controllers\AdminController::class,"editUser"]);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
