<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class HomeController extends Controller
{
    // ホーム画面
    public function index()
    {
        // ログイン中のユーザーがフォローしているユーザーのIDを取得
        $followings = Auth::user()->followings()->pluck('users.id')->toArray();

        // 自分自身の投稿も含めるために、自分のIDも追加
        $user = Auth::user();
        $followings[] = $user->id;

        // フォローしているユーザーの投稿一覧を取得
        $posts = Post::whereIn('user_id', $followings)->latest()->get();

        return view('home', ['posts' => $posts]);
    }
}
