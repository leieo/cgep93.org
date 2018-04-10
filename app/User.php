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
	const ROLE_REFUSED = 3;

	const ROLES = [
		self::ROLE_WAITING => 'En attente',
		self::ROLE_ADMIN => 'Admin',
		self::ROLE_MEMBER => 'Adhérent',
		self::ROLE_REFUSED => 'Refusé'
	];

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'email', 'password',
	];

	protected $dateFormat = 'd-m-Y H:i:s';

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];


	/**
	 * @param Builder $query
	 * @return mixed
	 */
	public function scopeByRole($query, $role)
	{
		return $query->where('role', $role)->orderBy('activated_at', 'DESC')->get();
	}
}
