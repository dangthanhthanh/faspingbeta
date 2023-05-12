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

    protected $fillable = [
        'user_name',
        'email',
        'email_verified_at',
        'password',
        'active',
        'deleted_at',
        'avatar_id',
    ];
    
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile_id()
    {
        return $this->hasOne(Profile::class);
    }
    public function roles_id()
    {
        return $this->hasOne(Roles::class);
    }
    public function provider_id()
    {
        return $this->belongsToMany(Provider::class);
    }
    public function avatar_id()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }
    
}
