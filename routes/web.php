<?php

use Illuminate\Support\Facades\Auth;
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

@include_once "admin.php";

Route::middleware(["auth"])->group(function (){
    @include_once "user.php";
});

Route::get('/',[App\Http\Controllers\UserController::class,"home"]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->name('home');

Route::get('/ve-chung-toi',[App\Http\Controllers\UserController::class,"veChungToi"]);
Route::get('/phat-trien',[App\Http\Controllers\UserController::class,"phatTrien"]);
Route::get('/an-toan',[App\Http\Controllers\UserController::class,"anToan"]);
Route::get('/loan',[App\Http\Controllers\UserController::class,"loan"]);
Route::post('/addLoan',[App\Http\Controllers\UserController::class,"addLoan"]);












