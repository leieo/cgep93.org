<?php

namespace App\Http\Controllers\Backoffice;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
	public function refused()
	{
		$users = User::byRole(User::ROLE_REFUSED);

		return view('backoffice.member.index', [
			'users' => $users,
			'status' => User::ROLES[User::ROLE_REFUSED],
			'type' => User::ROLE_REFUSED
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
		$user->save();

		return redirect()->route('admin.members.waiting');
	}

	/**
	 * Refuse a member request
	 *
	 * @param User $user
	 * @return \Illuminate\Http\Response
	 */
	public function refuse(User $user)
	{
		$user->role = User::ROLE_REFUSED;
		$user->save();

		return redirect()->route('admin.members.waiting');
	}
}
