<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    public $table="accounts";

    public $fillable=[
        "account_number",
        "bank_id",
        "user_id",
        "account_type_id",
        "date_created",
        "balance",
        "status",
    ];

    public function Bank(){
        return $this->belongsTo(Bank::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
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



}
