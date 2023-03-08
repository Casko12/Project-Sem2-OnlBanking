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
       $request->validate([
            "name"=>"required|string",
            "email"=>"required|numeric",
            "password"=>"required|numeric",
            "telephone"=>"required|numeric",
            "birthday"=>"required|numeric",
            "address"=>"string|required|numeric",
            "national_id"=>"required"
        ],[
            "required"=>"Vui lòng nhập thông tin",
            "string"=> "Phải nhập vào là một chuỗi văn bản"
        ]);
        try {
            User::create([
                "name"=>$request->get("name"),
                "email"=>$request->get("email"),
                "address"=>$request->get("address"),
                "password"=>$request->get("password"),
                "telephone"=>$request->get("telephone"),
                "birthday"=>$request->get("birthday"),
                "national_id"=>$request->get("national_id"),
            ]);
            return redirect()->action("user/signup")->with("success","Tạo Tài Khoản Thành Công");
        }catch (\Exception $e){
            return redirect()->back()->with("error",$e->getMessage());
        }
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
