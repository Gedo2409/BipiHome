<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubscriptionType extends Model
{
	protected $fillable = ['name', 'display_name', 'description', 'price'];

	public function subscriptions()
	{
		return $this->hasMany('App\Subscription');
	}
	public function providers()
	{
		return $this->hasMany('App\Provider');
	}
}
