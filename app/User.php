<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property int $member_number
 * @property int $role
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $activated_at
 */
class User extends Authenticatable
{
    use Notifiable;

	const ROLE_WAITING = 0;
	const ROLE_ADMIN = 1;
	const ROLE_MEMBER = 2;

	const ROLES = [
		self::ROLE_WAITING => 'En attente',
		self::ROLE_ADMIN => 'Admin',
		self::ROLE_MEMBER => 'Adhérent'
	];

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
