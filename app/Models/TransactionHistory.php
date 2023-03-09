<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionHistory extends Model
{
    use HasFactory;

    public $table="transaction_history";

    public $fillable=[
      "transfer_id",
      "receive_id",
      "amount",
      "status",
    ];
}
