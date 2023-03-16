<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;
    public $fillable=[
        "money_amount",
        "date_loan_money",
        "date_return_money",
        "image_loan1",
        "image_loan2",
        "interest",
        "status_loan",
        "date_created_loan"
    ];
    public function Account()
    {
        return $this->belongsTo(Account::class);
    }
}
