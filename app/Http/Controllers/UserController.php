<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // ユーザの詳細表示
    public function show($user_id)
    {
        $user = User::findOrFail($user_id);
        return view('users.show', compact('user'));
    }

    public function mypage()
    {
        $user = Auth::user();
        return view('users.mypage', compact('user'));
    }
}
