<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shop extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'shops';
    protected $fillable = [
        'name',
        'short_decription',
        'active',
        'user_id',
        'deleted_at',
        'shop_profile_id',
        'background_id',
        'created_at',
    ];
}
