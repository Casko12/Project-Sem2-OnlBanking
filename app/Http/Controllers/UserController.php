<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Bank;
use App\Models\Loan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   public function home(){
       return view("user.home");
   }
    public function userInfo(){
       $user_id= auth()->id();

       $user = User::find($user_id);

        $account = Account::where("user_id",$user_id)->first();

        return view("user.user-info",[
                "account"=>$account,
            "user"=>$user
        ]);
    }



    public function loan(){
        return view("user.loan");
   }
   public function addLoan(Request $request){
       Loan::created([
           "money_amount"=>$request->get("money_amount"),
           "date_loan_money"=>$request->get("date_loan_money"),
           "image_loan1"=>$request->get("image_loan1"),
           "image_loan2"=>$request->get("image_loan2")
       ]);
   }

    public function transferForm(Account $account){
       $bank = Bank::all();
       return view("user.transfer-form",[
           "bank"=>$bank,
           "account"=>$account
       ]);
    }

    public function findName(Request $request){
       $account = $request->get("account");
       $bank_id = $request->get("bank_id");
       $search = Account::where("bank_id",$bank_id)->where("account_number",$account)->first();


       if($search != null){
           $user = User::find($search->user_id);
           return response()->json(["user"=>$user->name]);
       }else{
           return response()->json(["user"=> ""]);
       }
    }

    public function showMoney(Request $request){
    }
    public function addToCart(Account $account,Request $request){
        $id = $request->get("transfer_id");
        $transfer_id = [
            "transfer_id" => $request->get("transfer_id")
        ];
        session(["transfer_id"=>$transfer_id]);
        return redirect()->to("/money-transfer/$id");
    }

    public function addToCart1(Account $account,Request $request){
        $request->validate([
            "account"=>"required|numeric",
            "money"=>"required|numeric",
            "description"=>"required|string"
        ]);
        $receive_id= $request->get("account");
        $amount = $request->get("money");
        $id = $account->id;
        if($account->account_number != $receive_id && $account->balance >=$amount){
        $reveice_id =  [
            "receive_id"=> $request->get("account"),
            "description"=>$request->get("description"),
            "amount"=>$request->get("money")
        ];
        session(["reveice_id"=>$reveice_id]);
        return redirect()->to("/transfer-confirm/$id");
        }
        return redirect()->back();
    }
    public function transferConfirm(Account $account,Request $request){
        $transfer = session("transfer_id");
        $id = $transfer['transfer_id'];
        $reveice =session("reveice_id");
        $account = Account::where("account_number",$reveice["receive_id"])->first();
//        dd($transfer,$reveice,$account);
        if($account!=null){
            $user = User::find($account->user_id);
        }
        return view("user.transfer-confirm",[
            "reveice"=>$reveice,
            "transfer"=>$transfer,
            "user"=>$user,
            "account"=>$account,
            "id"=>$id
        ]);
    }

    public function checkPin(Request $request){
        $transfer = session("transfer_id");
        $reveice =session("reveice_id");
        $id = $transfer["transfer_id"];
       $pin = $request->get("pin");
       $account2 = Account::where("account_number",$reveice["receive_id"])->first();
       $account1 = Account::where('id',$transfer["transfer_id"])->first();
       $transfer_amount = $account1->balance -=$reveice["amount"];
       $transfer_receive = $account2->balance +=$reveice["amount"];
       $amount = $reveice['amount'];

       $user = User::find($account1->user_id);

       if(Hash::check($pin, $user->pin)){
          $account1->update([
              "balance"=> $transfer_amount
          ]);
           $account2->update([
               "balance"=> $transfer_receive
           ]);
           $account1->createHistory($account2,$amount);
           return redirect()->to("/transfer-success/$id");
       }

      return redirect()->back();
    }
    public function transactionHistory(){
        return view("user.transaction-history");
    }
    public function transferSuccess(Account $account){
        $reveice =session("reveice_id");
        $account = Account::where("account_number",$reveice["receive_id"])->first();
//        dd($reveice,$account);
        if($account!=null){
            $user = User::find($account->user_id);
        }
        return view("user.transfer-success",[
            "account" =>$account,
            "reveice" => $reveice,
            "user"=>$user
        ]);
    }

    public function userHome(User $user){
       return view ("user.user-home",compact("user"));
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
}
