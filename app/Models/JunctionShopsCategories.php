<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JunctionShopsCategories extends Model
{
    use HasFactory;
    protected $table = 'junction_shops_categories';
    protected $fillable = [
        'shop_id',
        'category_id',
    ];
}
