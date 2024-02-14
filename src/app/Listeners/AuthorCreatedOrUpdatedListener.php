<?php

namespace App\Listeners;

use App\Events\AuthorCreatedOrUpdatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AuthorCreatedOrUpdatedListener
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
    public function handle(AuthorCreatedOrUpdatedEvent $event): void
    {
    }
}
