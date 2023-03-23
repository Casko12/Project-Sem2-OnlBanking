<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    public $table = "loans";
    public $fillable=[
        "account_id",
        "user_id",
        "banglaivay_id",
        "amount",
        "date_end",
        "status",
        "period",
        "image_loan1",
        "image_loan2",
        "description",


    ];
    public function Account()
    {
        return $this->belongsTo(Account::class);
    }
}
