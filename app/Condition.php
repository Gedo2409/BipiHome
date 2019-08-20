<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
	protected $fillable = ['display_name', 'description', 'icon'];

	public function providers()
	{
		return $this->belongsToMany('App\Provider');
	}
}
