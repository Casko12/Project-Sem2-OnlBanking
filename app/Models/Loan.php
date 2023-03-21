<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;
    public $fillable=[
        "money_amount",
        "date_return_money",
        "period_loan",
        "image_loan1",
        "image_loan2",
        "status_loan",

    ];
    public function Account()
    {
        return $this->belongsTo(Account::class);
    }
}
