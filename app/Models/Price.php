<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;
    protected $table = 'prices';
    protected $fillable = [
        'object_id',
        'price',
        'deal_price',
        'start_deal',
        'end_deal',
    ];
}
