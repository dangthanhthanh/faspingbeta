<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopProfile extends Model
{
    use HasFactory;
    protected $table = 'shop_profiles';
    protected $fillable = [
        'phone_number',
        'time_reps',
        'online_last_time',
        'address_id',
    ];
    public function address(){
        return $this->hasOne(Address::class,"id","address_id");
    }
}
