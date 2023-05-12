<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopProfile extends Model
{
    use HasFactory;
    protected $table = 'shop_profiles';
    protected $fillable = [
        'number_product',
        'number_product_sale',
        'time_reps',
        'online_last_time',
        'sale',
        'shop_id',
        'updated_at'
    ];
}
