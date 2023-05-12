<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JunctionUserAddress extends Model
{
    use HasFactory;
    protected $table = 'junction_user_address';
    protected $fillable = [
        'user_id',
        'address_id',
        'status',
    ];
}
