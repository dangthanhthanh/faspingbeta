<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactChat extends Model
{
    use HasFactory;
    protected $table = 'contact_chats';
    protected $fillable = [
        'object_id',
        'status',
        'user_id',
        'chat_id',
    ];
    
    public function contactChatable()
    {
        return $this->morphTo();
    }
}
