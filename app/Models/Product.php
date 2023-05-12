<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'products';
    protected $fillable = [
        'name',
        'decription',
        'short_decription',
        'active',
        'product_link',
        'sale',
        'shop_id',
        'image_id',
        'unit_id',
        'price_id',
        'storage_id',
    ];
}
