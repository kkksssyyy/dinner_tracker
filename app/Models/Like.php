<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table = 'likes';

    use HasFactory;

    /**
    * いいねが所属する投稿
    */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
