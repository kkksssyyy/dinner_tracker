<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    // createアクション
    public function create()
    {
        return view('posts.create');
    }
    
    public function store(Request $request)
    {
        // フォームから送信されたデータを取得する
        $data = $request->all();

        // バリデーションルールを定義する
        $rules = [
            'title' => 'required|max:255',
            'body' => 'required',
        ];

        // バリデーションを実行する
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            // バリデーションエラーがある場合は、フォームにエラーメッセージを返す
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // ログインユーザーに紐づけて、新しい投稿を作成する
        $post = new Post();
        $post->title = $data['title'];
        $post->body = $data['body'];
        $post->user_id = Auth::id();
        $post->save();

        // リダイレクト先を指定する
        return redirect('/posts/' . $post->id);
    }

    public function show($post_id)
    {
        // 指定された ID の投稿を取得する
        $post = Post::findOrFail($post_id);

        // ログインユーザーがフォローしているユーザーの一覧を取得する
        $following = Auth::user()->followings()->pluck('followee_id');

        // フォローしているユーザーの投稿のみを取得する
        $posts = Post::whereIn('user_id', $following)->latest()->get();

        // 投稿詳細画面にデータを渡して表示する
        return view('posts.show', compact('post', 'posts'));
    }

    // editアクション
    public function edit($post_id)
    {
        $post = Post::findOrFail($post_id);
        return view('posts.edit', ['post' => $post]);
    }

    // updateアクション
    public function update(Request $request, $post_id)
    {
        $post = Post::findOrFail($post_id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();
        return redirect('/posts/' . $post_id);
    }

    // destroyアクション
    public function destroy($post_id)
    {
        $post = Post::findOrFail($post_id);
        $post->delete();

        $user = Auth::user();

        $posts = Post::where('user_id', $user->id)->latest()->get();

        return view('home', ['posts' => $posts]);
    }
}
