<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class SearchController extends Controller
{
    // タイトルもしくは説明文に部分一致する投稿を取得して表示する
    public function search(Request $request)
    {
        $searchText = $request->input('search_text');
        $posts = Post::where('title', 'like', '%' . $searchText . '%')
                ->orWhere('body', 'like', '%' . $searchText . '%')
                ->get();
        return view('search.results', ['posts' => $posts]);
    }
}
