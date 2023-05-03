<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    use HasFactory;

    /**
    * コメントが所属するユーザ
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
    * コメントが所属する投稿
    */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
