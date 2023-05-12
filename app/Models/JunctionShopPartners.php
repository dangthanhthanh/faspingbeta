<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JunctionShopPartners extends Model
{
    use HasFactory;
    protected $table = 'junction_shop_partners';
    protected $fillable = [
        'shop_id',
        'object_id',
        'status_id',
    ];
}
