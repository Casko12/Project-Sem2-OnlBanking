<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    use HasFactory;

    public $table="checks";

    public $fillable=[
      "user_id",
      "role",
    ];
}
