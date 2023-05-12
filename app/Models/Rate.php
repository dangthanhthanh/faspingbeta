<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;
    protected $table = 'rates';
    protected $fillable = [
        'point',
        'content',
        'user_id',
        'object_id',
    ];
    public function rateable()
    {
        return $this->morphTo();
    }
}
