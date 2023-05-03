<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $table = 'requests';

    use HasFactory;

    /**
     * リクエストが所属するグループ
     */
    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    /**
     * リクエストが所属するユーザ
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

     /**
     * リクエストが所属する投稿
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
