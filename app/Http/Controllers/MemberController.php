<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{

    public function member()
    {
        $user = Auth::user();
        return view('member', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $validateRules = [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
        ];
        if ($request->input('email') != Auth::user()->email) {
            $validateRules['email'] = 'required|string|email|max:255|unique:users';
        }

        $validateData = $request->validate($validateRules);

        $validateData['password'] = bcrypt($validateData['password']);

        $user->fill($validateData);

        $user->save();

        $request->session()->flash('success', 'Your account has been updated!');
        return redirect('/member');
    }
}
