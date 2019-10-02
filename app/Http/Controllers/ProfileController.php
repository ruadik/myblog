<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('pages.profile', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'email' => [
                        'required',
                        Rule::unique('users')->ignore(Auth::user()->id),
                        ],
            'avatar' => 'image'
        ]);

        $user = Auth::user();
        $user->edit($request->all());
        $user->generatePassword($request->password);
        $user->uploadAvatar($request->file('avatar'));

        return redirect()->back()->with('status', 'Данные профиля обновлены!');
    }
}
