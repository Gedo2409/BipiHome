<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use App\Events\UserCreatedEvent;

class User extends Authenticatable
{
	use Notifiable;
	use EntrustUserTrait;
	
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
	protected $dispatchesEvents = [
		'created' => UserCreatedEvent::class,
	];
	public function role()
	{
		return $this->belongsToMany('App\Role');
	}
	public function profile()
	{
		return $this->hasOne('App\Customer');
	}
	public function provider()
	{
		return $this->hasOne('App\Provider');
	}
	
}
