<?php

namespace App\Http\Controllers;
use App\Mail\OTPMail;
use App\Mail\ReceiverMail;
use App\Mail\SenderMail;
use App\Models\BangLaiTietKiem;
use App\Models\BanglaiVay;
use App\Models\Loan;
use App\Models\Saving;
use Carbon\Carbon;
use App\Models\Account;
use App\Models\Bank;
use App\Models\TransactionHistory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
class UserController extends Controller
{
   public function home(){
       return view("user.home");
   }

    public function userInfo(){

       $user= auth()->user();
        $account = $user->firstAccount;
        $allaccount = $user->Account;

        return view("user.user-info",[
                "account"=>$account,
            "user"=>$user,
            "allaccount"=>$allaccount
        ]);
    }
    public function transacionHistory(Account $account,Request $request){
        $transfer_id = [
            "transfer_id" => $request->get("transfer_id")
        ];
        session(["transfer_id"=>$transfer_id]);
        $user= auth()->user();
        $allaccount = $user->Account;
$account = $user->firstAccount;
        $data = TransactionHistory::with(["Sender","Receiver"])->where("receive_id",$account->id)->orWhere("transfer_id",$account->id)->get()
        ->map(function ($item) use ($account) {
            if ($item->transfer_id == $account->id){
                $item->amount = - $item->amount;
            }else{
                $item->amount = $item->amount;
            }
            return $item;
        });



        if($data != null){
            return view("user.transacion-history",[
                "account"=>$account,
                "user"=>$user,
                "allaccount"=>$allaccount,
                "data"=>$data,

            ]);
        }else{
            return redirect()->back();
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
    public function giaTriCotLoi(){
       return view("user.giatri-cotloi");
    }
    public function loan(){
        $user= auth()->user();
        $account = $user->firstAccount;
        $allaccount = $user->Account;
        $banglai = BanglaiVay::all();


        return view("user.loan",[
            "account"=>$account,
            "user"=>$user,
            "allaccount"=>$allaccount,
            "banglai"=>$banglai
        ]);
    }
    public function dsLoan(){
        $user= auth()->user();
        $account = $user->firstAccount;
        $allaccount = $user->Account;
        $loan = Loan::all();

        return view("user.danhsachkhoanvay",[
            "account"=>$account,
            "user"=>$user,
            "allaccount"=>$allaccount,
            "loan"=>$loan
        ]);
    }
    public function dsGuiTietKiem(Request $request){

        $user= auth()->user();
        $account = $user->firstAccount;
        $allaccount = $user->Account;
        $tietkiem = Saving::all();
        $transfer_id = [
            "transfer_id" => $request->get("transfer_id")
        ];
        session(["transfer_id"=>$transfer_id]);

        return view("user.danhsach-gui-tiet-kiem",[
            "account"=>$account,
            "user"=>$user,
            "allaccount"=>$allaccount,
            "tietkiem"=>$tietkiem
        ]);
    }
    public function contact(){
        return view("user.lien-he");
    }
    public function guiTietKiem(){
        $user= auth()->user();
        $account = $user->firstAccount;
        $allaccount = $user->Account;
        $banglai = BangLaiTietKiem::all();

        return view("user.gui-tiet-kiem",[
            "account"=>$account,
            "user"=>$user,
            "allaccount"=>$allaccount,
            "banglai"=>$banglai
        ]);
//        return view("user.gui-tiet-kiem");
    }
    public function personal(){
        return view("user.loan.personal");

   }
    public function documantUp(){
        return view("user.loan.documantsUpload");

    }
    public function transferForm(Account $account,Request $request){
       $bank = Bank::all();
        $id = $request->get("transfer_id");

        $transfer_id = [
            "transfer_id" => $request->get("transfer_id")
        ];
        session(["transfer_id"=>$transfer_id]);
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
    public function detailHis(TransactionHistory $history,Request $request,Account $account){
        $transfer = session("transfer_id");
        $history_id = $request->get("id");
       $detail = TransactionHistory::with(["Sender","Receiver"])->where("id",$history_id)->first();
        $date = date_format(date_create($detail->created_at),"d-m-Y H:i:s");
        $delivery_code = $detail->delivery_code;

        $description = $detail->description;
        $user = null;
        $account = null;
        $bank = null;
        $amount = null;
                if($detail->receive_id == intval($transfer["transfer_id"])){
                    $account= $detail->Sender->account_number;
                    $bank= $detail->Sender->Bank->name;
                    $user= $detail->Sender->User->name;
                    $amount= "+".$detail->amount;
                    $nguoi = "Người Gửi";
                    $loaigiaodich = "Chuyển tiền đến";
                }elseif ($detail->transfer_id == intval($transfer["transfer_id"])){
                    $bank= $detail->Receiver->Bank->name;
                    $account= $detail->Receiver->account_number;
                    $user= $detail->Receiver->User->name;
                    $amount= -$detail->amount;
                    $nguoi = "Người Nhận:";
                    $loaigiaodich = "Chuyển tiền đi";
                }

           return response()->json([
               "detail"=>$detail,
               "account"=>$account,
               "bank"=>$bank,
               "user"=>$user,
               "date"=>$date,
               "nguoi"=>$nguoi,
               "loaigiaodich"=>$loaigiaodich,
               "amount"=>$amount,
               "description"=>$description,
               "delivery_code"=>$delivery_code



               ]);






    }

    public function addToCart(Account $account,Request $request){

        return view("user.transfer-form",[
            "account"=>$account
        ]);
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
    public function transferConfirm(Request $request){
        $request->validate([
            "account"=>"required|numeric",
            "money"=>"required|numeric",
            "description"=>"required|string"
        ]);
        $otp = random_int(1000,9999);
        session(["otp"=>$otp]);

        $receive_id= $request->get("account");
        $amount = $request->get("money");
        $transfer = session("transfer_id");
        $id = $transfer['transfer_id'];
        $account1 = Account::with("User")->where("id",$transfer["transfer_id"])->first();

        $account = Account::where("account_number",$receive_id)->first();

        if($account!=null){
            $user = User::find($account->user_id);

        }
        if($account1->account_number != $receive_id && $account1->balance >=$amount){
            $reveice =  [
                "receive_id"=> $request->get("account"),
                "description"=>$request->get("description"),
                "amount"=>$request->get("money")
            ];
            session(["reveice"=>$reveice]);
            if($amount>=5000000){
                Mail::to($account1->User->email)->send(new OTPMail());
            }
            return view("user.transfer-confirm",[
                "reveice"=>$reveice,
                "transfer"=>$transfer,
                "user"=>$user,
                "id"=>$id
            ]);
        }
        return redirect()->back();

    }

    public function checkPin(Account $account,Request $request){
        $transfer = session("transfer_id");
        $reveice =session("reveice");

        $id = $account->id;
       $pin = $request->get("pin");
       $account2 = Account::where("account_number",$reveice["receive_id"])->first();

//       $account1 = Account::where('id',$transfer["transfer_id"])->first();
       $transfer_amount = $account->balance -=$reveice["amount"];
       $transfer_receive = $account2->balance +=$reveice["amount"];
       $amount = $reveice['amount'];

       $user = User::find($account->user_id);

       if(Hash::check($pin, $user->pin)){
          $account->update([
              "balance"=> $transfer_amount
          ]);
           $account2->update([
               "balance"=> $transfer_receive
           ]);
           $account->createHistory($account2,$amount);
           return redirect()->to("/transfer-success/$id");
       }

      return redirect()->back();
    }

    public function transferSuccess(Request $request){
        $reveice =session("reveice");
        $transfer = session("transfer_id");
        $pin = $request->get("pin1").$request->get("pin2").$request->get("pin3").$request->get("pin4");
        $otp = session("otp");
        $account2 = Account::with("User")->where("account_number",$reveice["receive_id"])->first();

       $account1 = Account::with("User")->where('id',$transfer["transfer_id"])->first();

        if($account2!=null){
            $user2 = User::find($account2->user_id);
            $user1 = User::find($account1->user_id);
        }
        $transfer_amount = $account1->balance -=$reveice["amount"];
        $transfer_receive = $account2->balance +=$reveice["amount"];
        $amount = $reveice['amount'];
        $description = $reveice['description'];
        session(["account1"=>$account1]);
        session(["account2"=>$account2]);

        if($amount<5000000){
            if(Hash::check($pin, $user1->pin)){

                $account1->update([
                    "balance"=> $transfer_amount
                ]);
                $account2->update([
                    "balance"=> $transfer_receive
                ]);
                $account1->createHistory($account1,$account2,$amount,$description);
                Mail::to($account1->User->email)->send(new SenderMail());
                Mail::to($account2->User->email)->send(new ReceiverMail());
                session()->forget(["reveice"]);

                return view("user.transfer-success",[
                    "account" =>$account2,
                    "reveice" => $reveice,
                    "user1"=>$user1,
                    "user2"=>$user2,
                    "account1"=>$account1
                ]);
            }
            return redirect()->back();
        } else{
            if($pin == $otp){
            $account1->update([
                "balance"=> $transfer_amount
            ]);
            $account2->update([
                "balance"=> $transfer_receive
            ]);
            $account1->createHistory($account1,$account2,$amount,$description);
            Mail::to($account1->User->email)->send(new SenderMail());
            Mail::to($account2->User->email)->send(new ReceiverMail());
            session()->forget(["otp","reveice"]);

            return view("user.transfer-success",[
                "account" =>$account2,
                "reveice" => $reveice,
                "user1"=>$user1,
                "user2"=>$user2,
                "account1"=>$account1
            ]);
        }
            return redirect()->back();
        }





    }

    public function saving(Request $request){
       $thoihan = $request->get("thoihan");
       $amount = $request->get("amount");
//        dd($amount);
       $data = BangLaiTietKiem::where("id",$thoihan)->first();
//       dd($data);

       $date = Carbon::now()->addMonth($data->ky_han);
       $date_end = date_format(date_create(Carbon::now()->addMonth($data->ky_han)),"d-m-Y");
       $lai = $data->lai_suat."%/Năm";
       $kyhan = $data->ky_han." Tháng";
       $day = now()->diffInDays($date_end);

        $tienlai = number_format((($data->lai_suat/365)*$day)*$amount/100)." VND" ;
        $tien = (($data->lai_suat/365)*$day)*$amount/100;
        $saving = [
            "date_end"=>$date,
            "tienlai"=>$tien
        ];
        session(["saving"=>$saving]);
       return response()->json([
           "date_end"=>$date_end,
           "lai"=>$lai,
           "kyhan"=>$kyhan,
           "tienlai"=>$tienlai
       ]);

    }

    public function addSave(Request $request){
       $request->validate([
          "thoihan"=>"required|numeric" ,
          "amount"=>"required|numeric"
       ]);

        $addsave = [
            "thoihan"=>  $request->get("thoihan"),
            "amount"=>  $request->get("amount"),
            "tenso"=>$request->get("tenso"),
            "description"=>$request->get("description")
        ];
        session(["addsave"=>$addsave]);
    }

    public function createSave(Request $request,Account $account){
        $transfer = session("transfer_id");

       $addsave = session("addsave");

       $saving = session("saving");
       $amount = $addsave["amount"];
        $account = Account::with("User")->where('id',$transfer["transfer_id"])->first();

        $pin = $request->get("pin1").$request->get("pin2").$request->get("pin3").$request->get("pin4");
        if(Hash::check($pin,$account->User->pin)){
            if($account->balance >= $amount){
                $account->update([
                    "balance" => $account->balance -= $amount,
                ]);
                Saving::create([
                    "account_id"=>$account->id,
                    "banglaitietkiem_id"=>$addsave["thoihan"],
                    "name"=>$addsave["tenso"],
                    "amount"=>$amount,
                    "date_end"=>$saving["date_end"],
                    "period"=>$saving["tienlai"],
//                    "description"=>$addsave["description"],
                    "status"=>1,
                ]);
            }

           return redirect()->to("/ds-gui-tiet-kiem");
        }
        return redirect()->back();
    }
    public function loans(Request $request){
        $thoihan = $request->get("thoihan");
        $amount = $request->get("amount");
//        dd($amount);
        $data = BanglaiVay::where("id",$thoihan)->first();
//       dd($data);

        $date = Carbon::now()->addMonth($data->ky_han);
        $date_end = date_format(date_create(Carbon::now()->addMonth($data->ky_han)),"d-m-Y");
        $lai = $data->lai_suat."%/Năm";
        $kyhan = $data->ky_han." Tháng";
        $day = now()->diffInDays($date_end);


        $tien = (($data->lai_suat/365)*$day)*$amount/100 ;
        $tienlai = number_format($tien)." VND" ;
        $total = $amount += $tien;
        $total_money = number_format($total)." VND";
        $loans = [
            "date_end"=>$date,
            "tienlai"=>$tien
        ];
        session(["loans"=>$loans]);
        return response()->json([
            "date_end"=>$date_end,
            "lai"=>$lai,
            "kyhan"=>$kyhan,
            "tienlai"=>$tienlai,
            "total_money"=>$total_money
        ]);

    }
    public function addloans(Request $request){
        $request->validate([
            "thoihan"=>"required|numeric" ,
            "amount"=>"required|numeric"
        ]);

        $addloans = [
            "account_id"=>$request->get("account_id"),
            "thoihan"=>  $request->get("thoihan"),
            "amount"=>  $request->get("amount"),
            "tenhoso"=>$request->get("tenhoso"),
            "description"=>$request->get("description")
        ];
        session(["addloans"=>$addloans]);
    }
    public function createLoans(Request $request,Account $account){
        $transfer = session("transfer_id");

        $addloans = session("addloans");
        $loans = session("loans");
        $amount = $addloans["amount"];
        $account = Account::with("User")->where('id',$transfer["transfer_id"])->first();

        $pin = $request->get("pin1").$request->get("pin2").$request->get("pin3").$request->get("pin4");
        if(Hash::check($pin,$account->User->pin)){
            $account->update([
                "balance" => $account->balance -= $amount,
            ]);
            Loan::create([
                "account_id"=>$addloans["account_id"],
                "user_id"=>$account->User->id,
                "banglaivay_id"=>$addloans["thoihan"],
                "money_amount"=>$amount,
                "date_return_money"=>$loans["date_end"],
                "period_save"=>$loans["tienlai"],
                "descriptions"=>$addloans["description"],
                "status"=>2
            ]);
            return redirect()->to("/ds-loan");
        }
        return redirect()->back();
    }
}
