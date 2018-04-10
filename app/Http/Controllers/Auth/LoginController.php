<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
	/*
	|--------------------------------------------------------------------------
	| Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles authenticating users for the application and
	| redirecting them to your home screen. The controller uses a trait
	| to conveniently provide its functionality to your applications.
	|
	*/

	use AuthenticatesUsers {
		login as protected trait_login;
	}

	/**
	 * Where to redirect users after login.
	 *
	 * @var string
	 */
	protected $redirectTo = '/home';

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest')->except('logout');
	}

	/**
	 * @param Request $request
	 * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
	 * @throws \Illuminate\Validation\ValidationException
	 */
	public function login(Request $request)
	{
		$user = User::where('email', $request->input('email'))->firstOrFail();

		if ($user->role == User::ROLE_WAITING || $user->role == User::ROLE_EXCLUDE) {

			if ($user->role == User::ROLE_WAITING) {
				$request->session()->flash('error', 'Votre compte est toujours en attente.');
			} else {
				$request->session()->flash('error', 'Votre compte à été exclu.');
			}

			return redirect()->route('home');
		}

		return $this->trait_login($request);
	}
}
