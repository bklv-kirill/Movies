<?php

namespace App\Listeners;

use App\Events\CinemaCreatedOrUpdatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CinemaCreatedOrUpdatedListener
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
    public function handle(CinemaCreatedOrUpdatedEvent $event): void
    {
    }
}
