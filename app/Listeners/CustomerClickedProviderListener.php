<?php

namespace App\Listeners;

use App\Events\CustomerClickedProviderEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Carbon\Carbon;
use App\ProviderClick;

class CustomerClickedProviderListener
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
     * @param  CustomerClickedProviderEvent  $event
     * @return void
     */
    public function handle(CustomerClickedProviderEvent $event)
    {
        $pc = ProviderClick::create(['provider_id' => $event->provider->id, 'created_at' => Carbon::now()]);
    }
}
