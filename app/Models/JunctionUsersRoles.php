<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JunctionUsersRoles extends Model
{
    use HasFactory;
    protected $table = 'junction_users_roles';
    protected $fillable = [
        'user_id',
        'role_id',
    ];
}
