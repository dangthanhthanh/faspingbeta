<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;
    protected $table = 'providers';
    protected $fillable = [
        'provider_name',
        'provider_id',
        'user_id',
    ];
}
