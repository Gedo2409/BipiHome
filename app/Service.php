<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
	protected $fillable = ['provider_id', 'price', 'display_name', 'description'];

	public function provider()
	{
		return $this->hasOne('App\Provider');
	}
	public function customers()
	{
		return $this->belongsToMany('App\Customer');
	}
}
