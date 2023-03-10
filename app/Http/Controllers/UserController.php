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
    public function userInfo(User $user){
       $user_id= $user->id;
        $account = Account::where("user_id",$user_id)->first();

        return view("user.user-info",[
            "user"=>$user,
                "account"=>$account
        ]);
    }
    public function login2(){
        return view("user.login2");
    }
    public function postLogin(Request $request) {
        $rules = [
            'national_id' =>'required',
            'password' => 'required|min:6'
        ];
        $messages = [
            'email.required' => 'Email là trường bắt buộc',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect('login2')->withErrors($validator)->withInput();
        } else {
            $national_id = $request->input('national_id');
            $password = $request->input('password');

            if( Auth::attempt(['national_id' => $national_id, 'password' =>$password])) {
                return redirect('user-page');
            } else {
                Session::flash('error', 'Email hoặc mật khẩu không đúng!');
                return redirect('login2');
            }
        }
    }
    public function signup(){
        return view("user.signup");
    }
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|string",
            "email" => "required|numeric",
            "password" => "required|string",
            "telephone" => "required|numeric",
            "birthday" => "required|numeric",
            "address" => "string|required",
            "national_id" => "required"
        ], [
            "required" => "Vui lòng nhập thông tin",
            "string" => "Phải nhập vào là một chuỗi văn bản"
        ]);
        try {
            User::create([
                "name" => $request->get("name"),
                "email" => $request->get("email"),
                "address" => $request->get("address"),
                "password" => $request->get("password"),
                "telephone" => $request->get("telephone"),
                "birthday" => $request->get("birthday"),
                "national_id" => $request->get("national_id"),
            ]);
            return redirect()->to("user/signup")->with("success", "Tạo Tài Khoản Thành Công");
        } catch (\Exception $e) {
            return redirect()->back()->with("error", $e->getMessage());
        }
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
        $id = $account->id;
        $reveice_id =  [
            "receive_id"=> $request->get("account"),
            "description"=>$request->get("description"),
            "amount"=>$request->get("money")
        ];
        session(["reveice_id"=>$reveice_id]);
//       $amount = [
//            "amount"=>$request->get("money")
//        ];
//       $desc = [
//            "description"=>$request->get("description")
//        ];

//       session(["amount"=>$amount]);
//       session(["desc"=>$desc]);

        return redirect()->to("/transfer-confirm/$id");
    }
    public function transferConfirm(Account $account,Request $request){
        $transfer = session("transfer_id");
        $reveice =session("reveice_id");





        $account = Account::where("account_number",$reveice["receive_id"])->first();

        if($account!=null){
            $user = User::find($account->user_id);
        }
        return view("user.transfer-confirm",[
            "reveice"=>$reveice,
            "transfer"=>$transfer,
            "user"=>$user,
            "account"=>$account
        ]);
    }
    public function transactionHistory(){
        return view("user.transaction-history");
    }
    public function transferSuccess(Account $account){
        return view("user.transfer-success");
    }

}
