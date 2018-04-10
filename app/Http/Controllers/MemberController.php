<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    //
    public function member()
    {
        $user_name = Auth::user()->name;
    	//$user_name = User::select('name')->where('email', $email)->first();
		return \View::make('member', compact('user_name'));
        //return \View::make('member')->with('user_name', $user_name);
    }
}
