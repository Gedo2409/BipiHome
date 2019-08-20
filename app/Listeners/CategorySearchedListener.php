<?php

namespace App\Listeners;

use App\Events\CategorySearchedEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\CategorySearch;
use Carbon\Carbon;

class CategorySearchedListener
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
     * @param  CategorySearchedEvent  $event
     * @return void
     */
    public function handle(CategorySearchedEvent $event)
    {
        CategorySearch::create([
            'category_id' => $event->category->id,
            'created_at' => Carbon::now()
        ]);
    }
}
