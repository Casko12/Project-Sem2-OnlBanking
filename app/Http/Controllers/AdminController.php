<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin_ql(){
        return view("admin.admin");
    }

    public function listStaff(){
        return view("admin.nhanvien.list");
    }
    public function createStaff(){
        return view("admin.nhanvien.create");
    }

    public function editStaff(){
        return view("admin.nhanvien.edit");
    }
    public function listUser(){
        return view("admin.user.list");
    }
    public function createUser(){
        return view("admin.user.create");
    }
    public function editUser(){
        return view("admin.user.edit");
    }

}
