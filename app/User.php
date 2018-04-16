<?php

namespace App;

use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

/**
 * @property int id
 * @property string first_name
 * @property string last_name
 * @property string email
 * @property string password
 * @property string created_at
 * @property string updated_at
 * @property string activated_at
 * @property int role
 * @property int member_number
 * @property int|null activated_by
 */
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
		'first_name', 'last_name', 'email', 'password', 'member_number', 'role', 'activated_at', 'activated_by'
	];

	/**
	 * Return name of activated_by user or Nobody
	 *
	 * @return string
	 */
	public function activatedBy()
	{
		return !is_null($this->activated_by) ? self::find($this->activated_by)->name : 'Nobody';
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
