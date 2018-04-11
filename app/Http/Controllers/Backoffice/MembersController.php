<?php

namespace App\Http\Controllers\Backoffice;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MembersController extends Controller
{
	/**
	 * Display all accepted members.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function accepted()
	{
		$users = User::byRole(User::ROLE_MEMBER);

		return view('backoffice.member.index', [
			'users' => $users,
			'status' => User::ROLES[User::ROLE_MEMBER],
			'type' => User::ROLE_MEMBER
		]);
	}

	/**
	 * Display all waiting members.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function waiting()
	{
		$users = User::byRole(User::ROLE_WAITING);

		return view('backoffice.member.index', [
			'users' => $users,
			'status' => User::ROLES[User::ROLE_WAITING],
			'type' => User::ROLE_WAITING
		]);
	}

	/**
	 * Display all refused members.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function excluded()
	{
		$users = User::byRole(User::ROLE_EXCLUDE);

		return view('backoffice.member.index', [
			'users' => $users,
			'status' => User::ROLES[User::ROLE_EXCLUDE],
			'type' => User::ROLE_EXCLUDE
		]);
	}

	/**
	 * Accept a member request
	 *
	 * @param User $user
	 * @return \Illuminate\Http\Response
	 */
	public function accept(User $user)
	{
		$user->role = User::ROLE_MEMBER;
		$user->activated_at = Carbon::now();
		$user->activated_by = Auth::user()->id;
		$user->save();

		return redirect()->back();
	}

	/**
	 * Refuse a member request
	 *
	 * @param User $user
	 * @return \Illuminate\Http\Response
	 */
	public function exclude(User $user)
	{
		$user->role = User::ROLE_EXCLUDE;
		$user->save();

		return redirect()->back();
	}
}
