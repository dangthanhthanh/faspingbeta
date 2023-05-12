<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emotion extends Model
{
    use HasFactory;
    protected $table = 'emotions';
    protected $fillable = [
        'like',
        'user_id',
        'object_id',
    ];
    public function emotionable()
    {
        return $this->morphTo();
    }
}
