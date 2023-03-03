<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   public function home(){
       return view("user.home");
   }
    public function userPage(){
        return view("user.user-page");
    }
    public function login(){
        return view("user.login");
    }
    public function trans(){
        return view("user.trans");
    }
    public function veChungToi(){
        return view("user.ve-chung-toi");
    }
}
