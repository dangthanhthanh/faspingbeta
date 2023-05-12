<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $fillable = [
        'object_id',
        'content',
        'comment_id',
        'user_id',
    ];
    public function Commentable()
    {
        return $this->morphTo();
    }
}
