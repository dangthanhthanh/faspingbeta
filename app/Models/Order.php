<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'price',
        'quantity',
        'product_id',
        'order_list_id',
    ];
    public function product(){
        return $this->hasOne(Product::class,"product_id");
    }
    public function order_list(){
        return $this->belongsTo(OrderList::class,"order_list_id");
    }
}
