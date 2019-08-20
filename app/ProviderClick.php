<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProviderClick extends Model
{
	protected $fillable = ['provider_id'];
	protected $table = 'provider_clicks';

	public function provider()
	{
		return $this->belongsTo('App\Provider');
	}
}
