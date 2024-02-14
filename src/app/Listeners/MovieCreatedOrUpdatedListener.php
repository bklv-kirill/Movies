<?php

namespace App\Listeners;

use App\Events\MovieCreatedOrUpdatedEvent;
use App\Models\CinemaMovie;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
class MovieCreatedOrUpdatedListener
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
    public function handle(MovieCreatedOrUpdatedEvent $event): void
    {
        CinemaMovie::query()->where("movie_id", $event->movie_id)->delete();
        foreach ($event->cinemas as $cinema_id) {
            CinemaMovie::query()->create(["movie_id" => $event->movie_id, "cinema_id" => $cinema_id]);
        }
    }
}
