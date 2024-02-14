<?php

namespace App\Listeners;

use App\Events\GanreCreatedOrUpdatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class GanreCreatedOrUpdatedListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(GanreCreatedOrUpdatedEvent $event): void
    {
    }
}
