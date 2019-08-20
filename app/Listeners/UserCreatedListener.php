<?php

namespace App\Listeners;

use App\Events\UserCreatedEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Role;
use App\Customer;

class UserCreatedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param  UserCreatedEvent  $event
     * @return void
     */
    public function handle(UserCreatedEvent $event)
    {
        $role = Role::where('name', 'customer')->first();
        $event->user->attachRole($role);
        $c = Customer::create([
            'user_id' => $event->user->id,
            'email' => $event->user->email,
            'phone' => 'vacio',
        ]);
    }
}
