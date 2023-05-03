<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    use HasFactory;

    /**
     * 投稿が所属するユーザ
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

     /**
     * 投稿が所有するコメント
     */
    public function posts()
    {
        return $this->hasMany(Comment::class);
    }

    /**
    * 投稿が所有する写真
    */
    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    /**
    * 投稿が所有するいいね
    */
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
