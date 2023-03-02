<?php
Route::get("/admin_ql",[App\Http\Controllers\AdminController::class,"admin_ql"]);
Route::get("/liststaff",[App\Http\Controllers\AdminController::class,"liststaff"]);
Route::get("/createstaff",[App\Http\Controllers\AdminController::class,"createstaff"]);
