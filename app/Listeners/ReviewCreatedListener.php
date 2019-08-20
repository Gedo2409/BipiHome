<?php

namespace App\Listeners;

use App\Events\ReviewCreatedEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Provider;
use App\Customer;
use App\Interaction;
use Carbon\Carbon;

class ReviewCreatedListener
{
    /**
    * Create the event listener.
    *
    * @return void
    */
    public function __construct()
    {
        //
    }
    
    /**
    * Handle the event.
    *
    * @param  ReviewCreatedEvent  $event
    * @return void
    */
    public function handle(ReviewCreatedEvent $event)
    {
        $provider = Provider::find($event->review->provider_id);
        $provider->customers()->save(
            Customer::find($event->review->customer_id), [
                'interaction_type' => Interaction::where('name', 'reviewed')->first()->id, 
                'created_at' => Carbon::now()
            ]
        );
    }
}
