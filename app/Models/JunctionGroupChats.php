<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JunctionGroupChats extends Model
{
    use HasFactory;
    protected $table = 'junction_group_chats';
    protected $fillable = [
        'group_id',
        'object_id',
        'chat_id',
    ];
}
