<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function home(){
       return view("user.home");
   }
    public function userPage(){
        return view("user.user-page");
    }
    public function login2(){
        return view("user.login2");
    }
    public function store(Request $request){
       $user = new User();
       $user->name = $request->name;
       $user->birthday = $request->birthday;
       $user->email = $request->email;
       $user->password = $request->password;
       $user->address = $request->address;
       $user->telephone = $request->telephone;
       $user->national_id = $request->national_id;
       $user->save();
        return redirect()->action('signup')->with("Success","Tạo Tài Khoản Thành Công");
    }
    public function signup(){
        return view("user.signup");
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
    public function transferForm(){
       return view("user.transfer-form");
    }
    public function transferConfirm(){
        return view("user.transfer-confirm");
    }
    public function transactionHistory(){
        return view("user.transaction-history");
    }
    public function transferSuccess(){
        return view("user.transfer-success");
    }
}
