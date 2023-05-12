<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Method extends Model
{
    use HasFactory;
    protected $table = 'methods';
    protected $fillable = [
        'name',
        'value',
        'quantity',
        'product_id',
        'price_id',
    ];
}
