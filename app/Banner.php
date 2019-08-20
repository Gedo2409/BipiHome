<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
	protected $fillable = ['title', 'provider_id'];
	public static $image_path = 'img/banners/';
	
	public function provider()
	{
		return $this->hasOne('App\Provider');
	}
}
