<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin_ql(){
        return view("admin.admin");
    }
 public function liststaff(){
        return view("admin.staff.liststaff");
    }
 public function createstaff(){
        return view("admin.staff.createstaff");
    }
}
