<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;
    protected $table = 'partners';
    protected $fillable = [
        'sender_id',
        'receiver_id',
        'status_id',
    ];
    
    public function partnersable()
    {
        return $this->morphTo();
    }
}
