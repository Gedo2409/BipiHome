<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interaction extends Model
{
	protected $fillable = ['display_name', 'description'];

	public function providers()
	{
		return $this->belongsToMany('App\Provider');
	}
}
