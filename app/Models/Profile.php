<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'profiles';
    protected $fillable = [
        'first_name',
        'last_name',
        'birth_date',
        'phone_number',
        'address_id',
        'shopping_point',
    ];
    public function address(){
        return $this->hasOne(Address::class);
    }
}
