<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\ReviewCreatedEvent;

class Review extends Model
{
	protected $fillable = ['customer_id', 'provider_id', 'grade', 'review', 'is_approved'];

	protected $dispatchesEvents = [
		'created' => ReviewCreatedEvent::class,
	];

	public function customer()
	{
		return $this->belongsTo('App\Customer');
	}
	public function provider()
	{
		return $this->belongsTo('App\Provider');
	}
}
