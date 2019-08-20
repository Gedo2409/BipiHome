<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected $fillable = ['user_id', 'phone', 'email', 'street', 'neighborhood', 'city', 'postal_code'];

	public function user()
	{
		return $this->belongsTo('App\User');
	}
	public function providers()
	{
		return $this->belongsToMany('App\Provider')->withPivot('interaction_type');
	}
	public function favorites()
	{
		return $this->belongsToMany('App\Provider')->withPivot('interaction_type')->wherePivot('interaction_type', 1);
	}
	public function reviews()
	{
		return $this->hasMany('App\Review');
	}
	public function services()
	{
		return $this->belongsToMany('App\Service');
	}
}
