<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JunctionShopsChats extends Model
{
    use HasFactory;
    protected $table = 'junction_shops_chats';
    protected $fillable = [
        'shop_id',
        'object_id',
        'chat_id',
    ];
}
