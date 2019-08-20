<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Category extends Model
{
	protected $fillable = ['display_name', 'description', 'icon'];

	public function providers()
	{
		return $this->hasMany('App\Provider');
	}
	public function clicks(){
		return $this->hasMany('App\CategorySearch');
	}
	public function clicksThisDay(){
		return $this->clicks->where('created_at', '>=', Carbon::now()->startOfDay());
	}
	public function clicksThisMonth(){
		return $this->clicks->where('created_at', '>=', Carbon::now()->startOfMonth());
	}
	public function clicksThisYear(){
		return $this->clicks->where('created_at', '>=', Carbon::now()->startOfMonth());
	}
	public function clicksLastDays($days){
		return $this->clicks->where('created_at', '>=', Carbon::now()->addDays(-$days));
	}

}
