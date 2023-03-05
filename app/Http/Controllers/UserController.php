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
    public function phatTrien(){
       return view("user.phat-trien");
    }
    public function anToan(){
        return view("user.an-toan");
    }
    public function loan(){
        return view("user.loan.loan");
    }
    public function personal(){
        return view("user.loan.personal");

   }
    public function documantUp(){
        return view("user.loan.documantsUpload");

    }

}
