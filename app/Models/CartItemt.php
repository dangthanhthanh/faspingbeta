<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItemt extends Model
{
    use HasFactory;
    protected $table = 'cart_itemts';
    protected $fillable = [
        'quantity',
        'product_id',
        'user_id',
    ];
}
