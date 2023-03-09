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
    public function userPage(User $user){
       $user_id= $user->id;
        $account = Account::where("user_id",$user_id)->where("account_type_id",1)->where("account_number",2130284)->first();

        return view("user.user-page",[
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
