<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\UserCreatedEvent' => [
            'App\Listeners\UserCreatedListener',
        ],
        'App\Events\ProviderCreatedEvent' => [
            'App\Listeners\ProviderCreatedListener',
        ],
        // para análisis estadístico
        'App\Events\CustomerContactedProviderEvent' => [
            'App\Listeners\CustomerContactedProviderListener',
        ],
        'App\Events\CustomerClickedProviderEvent' => [
            'App\Listeners\CustomerClickedProviderListener',
        ],
        'App\Events\CategorySearchedEvent' => [
            'App\Listeners\CategorySearchedListener',
        ],
        'App\Events\ReviewCreatedEvent' => [
            'App\Listeners\ReviewCreatedListener',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
