<?php
Route::get('/admin/liststaff',[App\Http\Controllers\AdminController::class,"listStaff"]);
Route::get('/admin/createstaff',[App\Http\Controllers\AdminController::class,"createStaff"]);
Route::get('/admin/editstaff/{user}',[App\Http\Controllers\AdminController::class,"editStaff"]);
Route::post('/admin/editstaff/{user}',[App\Http\Controllers\AdminController::class,"update"]);
Route::get('/admin/detailstaff/{user}',[App\Http\Controllers\AdminController::class,"detailStaff"]);
Route::post('/admin/detailstaff/{user}',[App\Http\Controllers\AdminController::class,"updateStatusStaff"]);
Route::get('/createAccount',[App\Http\Controllers\AdminController::class,"createAccount"]);

Route::get('/admin/listuser',[App\Http\Controllers\AdminController::class,"listUser"]);
Route::get('/admin/createuser',[App\Http\Controllers\AdminController::class,"createUser"]);
Route::get('/admin/edituser/{user}',[App\Http\Controllers\AdminController::class,"editUser"]);
Route::post('/admin/edituser/{user}',[App\Http\Controllers\AdminController::class,"update"]);
Route::get('/admin/detailuser/{user}',[App\Http\Controllers\AdminController::class,"detailStaff"]);
Route::post('/admin/detailuser/{user}',[App\Http\Controllers\AdminController::class,"updateStatusUser"]);

Route::get('/admin/danhsach-khoanvay',[App\Http\Controllers\AdminController::class,"listKhoanvay"]);
Route::get('/admin/danhsach-khoanvay-create',[App\Http\Controllers\AdminController::class,"createLaiSuatKhoanvay"]);
Route::get('/admin/danhsach-khoanvay-edit',[App\Http\Controllers\AdminController::class,"editLaiSuatKhoanvay"]);





Route::get('/admin/danhsach-guitietkiem',[App\Http\Controllers\AdminController::class,"listGuitietkiem"]);


