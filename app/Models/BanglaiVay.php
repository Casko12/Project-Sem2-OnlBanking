<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BanglaiVay extends Model
{
    use HasFactory;

    public $table="banglaivays";

    public $fillable=[
        "ky_han",
        "lai_suat",

    ];
}
