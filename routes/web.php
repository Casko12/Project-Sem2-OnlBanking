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

@include_once "admin.php";


Route::get('/',[App\Http\Controllers\UserController::class,"home"]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->name('home');
Route::get('/user-page/{user}',[App\Http\Controllers\UserController::class,"userPage"]);
Route::get('/login2',[App\Http\Controllers\UserController::class,"login2"]);
Route::get('/signup',[App\Http\Controllers\UserController::class,"signup"]);
Route::post('/store',[App\Http\Controllers\UserController::class,"store"]);
Route::get('/ve-chung-toi',[App\Http\Controllers\UserController::class,"veChungToi"]);
Route::get('/phat-trien',[App\Http\Controllers\UserController::class,"phatTrien"]);
Route::get('/an-toan',[App\Http\Controllers\UserController::class,"anToan"]);
Route::get('/loan',[App\Http\Controllers\UserController::class,"loan"]);
Route::get('/personal',[App\Http\Controllers\UserController::class,"personal"]);
Route::get('/documantUp',[App\Http\Controllers\UserController::class,"documantUp"]);
Route::get('/money-transfer/{account}',[App\Http\Controllers\UserController::class,"transferForm"]);
Route::get('/findname',[App\Http\Controllers\UserController::class,"findName"]);
Route::get('/showmoney',[App\Http\Controllers\UserController::class,"showMoney"]);
Route::get('/transfer-confirm',[App\Http\Controllers\UserController::class,"transferConfirm"]);
Route::get('/transaction-history',[App\Http\Controllers\UserController::class,"transactionHistory"]);
Route::get('/transfer-success',[App\Http\Controllers\UserController::class,"transferSuccess"]);





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
