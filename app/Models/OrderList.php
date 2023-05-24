<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderList extends Model
{
    use HasFactory;
    protected $table = 'order_lists';
    protected $fillable = [
        'decription',
        'status',
        'user_id',
        'address_id',
        'created_at',
    ];
    public function orders(){
        return $this->hasMany(Order::class,"order_list_id");
    }
    public function address(){
        return $this->hasOne(Address::class,'id','address_id');
    }
    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
