<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saving extends Model
{
    use HasFactory;

    public $table="savings";

    public $fillable = [
      "account_id",
      "banglaitietkiem_id",
      "name",
      "amount",
      "date_end",
      "period",
      "description",
      "status",
    ];
}
