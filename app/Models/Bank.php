<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;

    public $table="banks";

    public $fillable = [
      "name",
    ];
    public function Account(){
        return $this->hasMany(Account::class);
    }
}
