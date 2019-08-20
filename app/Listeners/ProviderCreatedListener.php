<?php

namespace App\Listeners;

use App\Events\ProviderCreatedEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\SubscriptionType;

class ProviderCreatedListener
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
    * @param  ProviderCreatedEvent  $event
    * @return void
    */
    public function handle(ProviderCreatedEvent $event)
    {
        //$subType = SubscriptionType::where('name', 'free')->first();
        //$event->provider->attachRole($role);    
    }
}
