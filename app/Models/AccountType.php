<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountType extends Model
{
    use HasFactory;

    public $table="account_types";

    public $fillable=[
        "type_name",
        "interest",
        "status",
    ];

    public function Account(){
        return $this->belongsTo(Account::class);
    }
}
