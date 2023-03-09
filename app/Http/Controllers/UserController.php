<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Bank;
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
       $bank = Bank::all();
       return view("user.transfer-form",[
           "bank"=>$bank
       ]);
    }

    public function findName(Request $request){
       $account = $request->get("account");
       $bank_id = $request->get("bank_id");
       $search = Account::where("bank_id",$bank_id)->where("account_number",$account)->first()->user_id;
       $user = User::find($search);

       if($user != null){
           return response()->json(["user"=>$user->name]);
       }else{
           return response()->json(["user"=> ""]);
       }
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
