<?php
Route::get('/user-info',[App\Http\Controllers\UserController::class,"userInfo"])->name("userInfo");
Route::get('/transacion-history/{account}',[App\Http\Controllers\UserController::class,"transacionHistory"])->name("transacionHistory");
Route::get('/gui-tiet-kiem',[App\Http\Controllers\UserController::class,"guiTietKiem"]);
Route::get('/saving',[App\Http\Controllers\UserController::class,"saving"]);
Route::get('/ds-gui-tiet-kiem',[App\Http\Controllers\UserController::class,"dsGuiTietKiem"]);
Route::get('/loan',[App\Http\Controllers\UserController::class,"loan"]);
Route::get('/ds-loan',[App\Http\Controllers\UserController::class,"dsLoan"]);
Route::get('/findname',[App\Http\Controllers\UserController::class,"findName"]);
Route::get('/showmoney',[App\Http\Controllers\UserController::class,"showMoney"]);
Route::get('/transfer-confirm',[App\Http\Controllers\UserController::class,"transferConfirm"]);
//Route::post('/transfer-confirm',[App\Http\Controllers\UserController::class,"addToCart1"]);
Route::get('/money-transfer',[App\Http\Controllers\UserController::class,"transferForm"])->name("moneyTransfer");
//Route::get('/money-transfer/{account}',[App\Http\Controllers\UserController::class,"addToCart"]);
Route::get('/transfer-success',[App\Http\Controllers\UserController::class,"transferSuccess"]);
//Route::post('/transfer-success',[App\Http\Controllers\UserController::class,"checkPin"]);
Route::get('/detailHis',[App\Http\Controllers\UserController::class,"detailHis"]);
