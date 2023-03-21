<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Account extends Model
{
    use HasFactory;

    public $table="accounts";

    public $fillable=[
        "account_number",
        "bank_id",
        "user_id",
        "balance",
        "status",
    ];
    /**
     * @var mixed
     */


    public function Bank(){
        return $this->belongsTo(Bank::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }
    public function Loan(){
        return $this->belongsTo(Loan::class);
    }
     public function AccountType(){
        return $this->belongsTo(AccountType::class);
    }
     public function TransactionHistory(){
        return $this->hasMany(TransactionHistory::class);
    }

    public function scopeBankFilter($query,$bank_id){
        if($bank_id && $bank_id !=0){
            return$query->where("bank_id",$bank_id);
        }
            return $query;
    }
    public function createHistory($account1,$account2,$amount){
        $reveice =session("reveice_id");

            DB::table("transaction_history")->insert([
                "transfer_id"=>$account1->id,
                "receive_id"=>$account2->id,
                "amount"=>$amount,
                "created_at"=>now()
            ]);

        //phat su kien
//        event(new NewOrder($this));



    }


}
