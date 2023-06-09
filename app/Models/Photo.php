<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'photos';

    use HasFactory;

    protected $fillable = ['path', 'post_id', 'description'];

     /**
     * 写真が所属する投稿
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
