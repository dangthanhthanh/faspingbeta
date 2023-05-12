<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityDistrict extends Model
{
    use HasFactory;
    protected $table = 'city_districts';
    protected $fillable = [
        'name',
        'slug',
    ];
}
