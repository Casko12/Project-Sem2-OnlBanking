<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */



    protected $fillable = [
        'name',
        'email',
        'password',
        'birthday',
        'address',
        'national_id',
        'image_face',
        'image_id1',
        'image_id2',
        'status',
        'pin',
        'telephone',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function Admin(){
        return $this->hasOne(Admin::class);
    }
    public function Account(){
        return $this->hasMany(Account::class);
    }
    public function firstAccount(){
        return $this->hasOne(Account::class);
    }

    public function scopeSearch($query,$search){
        if ($search && $search !=0){
            return $query->where("name","like","%$search%");
        }
        return $query;
    }
}
