<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,SoftDeletes;
    protected $table = 'users';
    protected $fillable = [
        'user_name',
        'email',
        'email_verified_at',
        'password',
        'active',
        'deleted_at',
        'avatar_id',
        'profile_id',
        'shop_id',
        'deleted_at',
    ];
    
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function avatar(){
        return $this->hasOne(Image::class,'avatar_id');
    }
    public function profile(){
        return $this->hasOne(Profile::class,'profile_id');
    }
    public function shop(){
        return $this->hasOne(Shop::class,'shop_id');
    }
    
}
