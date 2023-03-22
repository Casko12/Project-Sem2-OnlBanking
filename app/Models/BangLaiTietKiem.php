<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BangLaiTietKiem extends Model
{
    use HasFactory;


    public $table="banglaitietkiems";

    public $fillable=[
        "ky_han",
        "lai_suat",

    ];
}
