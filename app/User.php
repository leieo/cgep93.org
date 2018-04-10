<?php

namespace App;

use Illuminate\Database\Query\Builder;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	use Notifiable;

	const ROLE_WAITING = 0;
	const ROLE_ADMIN = 1;
	const ROLE_MEMBER = 2;
	const ROLE_EXCLUDE = 3;

	const ROLES = [
		self::ROLE_WAITING => 'En attente',
		self::ROLE_ADMIN => 'Admin',
		self::ROLE_MEMBER => 'Adhérent',
		self::ROLE_EXCLUDE => 'Exclu'
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'email', 'password', 'member_number', 'role', 'activated_at', 'activated_by'
	];

	public function activatedBy()
	{
		if (!is_null($this->activated_by)) {
			return self::find($this->activated_by)->name;
		} else {
			return 'Nobody';
		}
	}

	/**
	 * @param Builder $query
	 * @return mixed
	 */
	public function scopeByRole($query, $role)
	{
		return $query->where('role', $role)->orderBy('activated_at', 'DESC')->get();
	}
}
