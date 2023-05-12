<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mess extends Model
{
    use HasFactory;
    protected $table = 'messes';
    protected $fillable = [
        'content',
        'datetime',
        'sender_id',
        'chat_id',
        'status',
    ];
    public function messable()
    {
        return $this->morphTo();
    }
}
