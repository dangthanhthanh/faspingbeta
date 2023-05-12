<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JunctionUsersChats extends Model
{
    use HasFactory;
    protected $table = 'junction_users_chats';
    protected $fillable = [
        'user_id',
        'object_id',
        'chat_id',
    ];
}
