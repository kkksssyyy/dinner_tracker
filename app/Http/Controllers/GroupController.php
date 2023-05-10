<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Group;
use App\Models\GroupUser;

class GroupController extends Controller
{

    public function index()
    {
        // ログインユーザが所属しているグループを取得する
        $user = Auth::user();
        $groups = $user->groups;

        return view('groups.index', compact('groups'));
    }
    
    public function create()
    {
        return view('groups.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        $group = new Group;
        $group->name = $validatedData['name'];
        $group->save();

        // ログインユーザが所属しているグループを取得する
        $user = Auth::user();

        $group_user = new GroupUser;
        $group_user->group_id = $group->id;
        $group_user->user_id = $user->id;
        $group_user->save();

        return redirect('/groups')->with('success', 'Group created successfully.');
    }

    public function show($group_id)
    {
        // 指定したグループの情報を取得する処理
        $group = Group::findOrFail($group_id);
        return view('groups.show', ['group' => $group]);
    }

    public function edit($group_id)
    {
        $group = Group::findOrFail($group_id);
        return view('groups.edit', ['group' => $group]);
    }

    public function update(Request $request, $group_id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        $group = Group::findOrFail($group_id);
        $group->name = $validatedData['name'];
        $group->save();

        return redirect('/groups')->with('success', 'Group updated successfully.');
    }

    public function destroy($group_id)
    {
        $group = Group::findOrFail($group_id);
        $group->delete();

        return redirect('/groups')->with('success', 'Group deleted successfully.');
    }

}
