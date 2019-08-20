<?php

namespace App\Listeners;

use App\Events\CustomerContactedProviderEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Interaction;
use App\Customer;
use App\Provider;
use Carbon\Carbon;

class CustomerContactedProviderListener
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
     * @param  CustomerContactedProviderEvent  $event
     * @return void
     */
    public function handle(CustomerContactedProviderEvent $event)
    {
        $provider = Provider::find($event->provider_id);
        $provider->customers()->save(
            Customer::find($event->customer_id), [
                'interaction_type' => Interaction::where('name', 'contacted')->first()->id, 
                'created_at' => Carbon::now()
            ]
        );
    }
}
