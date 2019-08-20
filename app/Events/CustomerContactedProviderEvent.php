<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class CustomerContactedProviderEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $customer_id;
    public $provider_id;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($customer_id, $provider_id)
    {
        $this->customer_id = $customer_id;
        $this->provider_id = $provider_id;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
