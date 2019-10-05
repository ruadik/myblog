<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('admin.users.index', ['users'=>$users]);
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'avatar' => 'image',
        ]);

        $user = User::add($request->all());
        $user->generatePassword($request->password);
        $user->uploadAvatar($request->avatar);
        $user->makeNormal();
        $user->toggleBan($request->is_ban);
        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required',Rule::unique('users')->ignore($id),],
            'email' => ['required',Rule::unique('users')->ignore($id),],
            'avatar' => 'nullable|image'
        ]);

        $user = User::find($id);
        $user->edit($request->all());
        $user->generatePassword($request->password);
        $user->uploadAvatar($request->avatar);
        $user->toggleBan($request->is_ban);

        return redirect()->route('users.index');
    }

    public function isBan($id)
    {
        $user = User::find($id);
        $user->toggleBanIndex();

        return redirect()->back();
    }

    public function destroy($id)
    {
        User::find($id)->remove();
        return redirect()->route('users.index');
    }
}
