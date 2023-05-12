<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderList extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'order_lists';
    protected $fillable = [
        'decription',
        'address_id',
        'status_id',
        'user_id',
        'deleted_at',
        'created_at',
        'updated_at'
    ];
}
