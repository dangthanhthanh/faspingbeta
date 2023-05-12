<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JunctionUsersPartners extends Model
{
    use HasFactory;
    protected $table = 'junction_users_partners';
    protected $fillable = [
        'user_id',
        'object_id',
        'status_id',
    ];
}
