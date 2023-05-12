<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $table = 'videos';
    protected $fillable = [
        'url',
        'object_id',
    ];
    
    public function videoable()
    {
        return $this->morphTo();
    }
}
