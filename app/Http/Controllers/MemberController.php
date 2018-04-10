<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    //
    public function member()
    {
        $user = Auth::user();
        return view('member', compact('user'));
    }
}
