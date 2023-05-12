<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'profiles';
    protected $fillable = [
        'first_name',
        'last_name',
        'birth_date',
        'shopping_point',
        'user_id',
        'shop_id',
        'updated_at',
    ];
}
