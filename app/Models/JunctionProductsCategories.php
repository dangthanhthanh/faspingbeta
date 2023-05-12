<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JunctionProductsCategories extends Model
{
    use HasFactory;
    protected $table = 'junction_products_categories';
    protected $fillable = [
        'product_id',
        'category_id',
    ];
}
