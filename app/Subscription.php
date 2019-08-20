<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
	protected $fillable = ['provider_id', 'subscription_type_id', 'subscription_start', 'subscription_end', 'autorenew'];
	
	// Convierte automaticamente las fechas a instancias de Carbon
	protected $dates = [
		'subscription_start',
		'subscription_end'
	];

	public function subscriptionType()
	{
		return $this->belongsTo('App\SubscriptionType');
	}
	public function provider()
	{
		return $this->hasOne('App\Provider');
	}
}
