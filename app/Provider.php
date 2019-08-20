<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\ProviderCreatedEvent;
use Carbon\Carbon;

class Provider extends Model
{
	protected $fillable = ['user_id', 'active', 'description', 'name', 'phone', 'street', 'neighborhood', 'city', 'postal_code', 'category_id'];
	
	protected $dispatchesEvents = [
		'created' => ProviderCreatedEvent::class,
	];

	public function user(){
		return $this->belongsTo('App\User');
	}
	public function banners(){
		return $this->hasMany('App\Banner');
	}
	public function conditions(){
		return $this->belongsToMany('App\Condition');
	}
	public function reviews(){
		return $this->hasMany('App\Review');
	}
	public function reviewsLastDays($days){
		return $this->customers()->where('interaction_type', 4)->where('customer_provider.created_at', '>=', Carbon::now()->addDays(-$days));
	}
	public function reviewsThisMonth(){
		return $this->customers()->where('interaction_type', 4)->where('customer_provider.created_at', '>=', Carbon::now()->startOfMonth());
	}
	public function reviewsPastMonth(){
		return $this->customers()->where('interaction_type', 4)
			->where('customer_provider.created_at', '>=', Carbon::now()->subMonth()->startOfMonth())
			->where('customer_provider.created_at', '<=', Carbon::now()->startOfMonth());
	}
	public function customers(){ // Regresa los customers que han interactuado con el provider, se usa en muchos metodos.
		return $this->belongsToMany('App\Customer')->withPivot('interaction_type');
	}

	public function contacted(){
		return $this->customers()->where('interaction_type', 2);
	}
	public function contactedLastDays($days){
		return $this->customers()->where('interaction_type', 2)->where('customer_provider.created_at', '>=', Carbon::now()->addDays(-$days));
	}
	public function contactedThisMonth(){
		return $this->customers()->where('interaction_type', 2)->where('customer_provider.created_at', '>=', Carbon::now()->startOfMonth());
	}
	public function contactedPastMonth(){
		return $this->customers()->where('interaction_type', 2)
			->where('customer_provider.created_at', '>=', Carbon::now()->subMonth()->startOfMonth())
			->where('customer_provider.created_at', '<=', Carbon::now()->startOfMonth());
	}
	public function favorites(){
		return $this->customers()->where('interaction_type', 1);
	}
	public function favoritesLastDays($days){
		return $this->customers()->where('interaction_type', 1)->where('customer_provider.created_at', '>=', Carbon::now()->addDays(-$days));
	}
	public function favoritesThisMonth(){
		return $this->customers()->where('interaction_type', 1)->where('customer_provider.created_at', '>=', Carbon::now()->startOfMonth());
	}
	public function favoritesPastMonth(){
		return $this->customers()->where('interaction_type', 1)
			->where('customer_provider.created_at', '>=', Carbon::now()->subMonth()->startOfMonth())
			->where('customer_provider.created_at', '<=', Carbon::now()->startOfMonth());
	}
	public function services(){
		return $this->hasMany('App\Service');
	}
	public function subscription(){
		return $this->hasOne('App\Subscription');
	}
	public function category(){
		return $this->belongsTo('App\Category');
	}
	public function pics(){
		return $this->hasMany('App\Pic');
	}
	public function clicks(){
		return $this->hasMany('App\ProviderClick');
	}
	public function clicksThisDay(){
		return $this->clicks()->where('created_at', '>=', Carbon::now()->startOfDay());
	}
	public function clicksThisMonth(){
		return $this->clicks()->where('created_at', '>=', Carbon::now()->startOfMonth());
	}
	public function clicksPastMonth(){
		return $this->clicks()
			->where('created_at', '>=', Carbon::now()->subMonth()->startOfMonth())
			->where('created_at', '<=', Carbon::now()->startOfMonth());
	}
	public function clicksThisYear(){
		return $this->clicks()->where('created_at', '>=', Carbon::now()->startOfMonth());
	}
	public function clicksLastDays($days){
		return $this->clicks()->where('created_at', '>=', Carbon::now()->addDays(-$days));
	}
}
