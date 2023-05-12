<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPartner extends Model
{
    use HasFactory;
    protected $table = 'status_partners';
    protected $fillable = [
        'name'
    ];
}
