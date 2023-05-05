<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    use HasFactory;

    protected $fillable = [
        'follower_id',
        'followee_id',
    ];

    public function followers()
    {
        return $this->belongsToMany(User::class, 'follows', 'followee_id', 'follower_id')->withTimestamps();
    }
}
