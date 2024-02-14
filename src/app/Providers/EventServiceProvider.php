<?php

namespace App\Providers;

use App\Events\AuthorCreatedOrUpdatedEvent;
use App\Events\AuthorDeletedEvent;
use App\Events\CinemaCreatedOrUpdatedEvent;
use App\Events\CinemaDeletedEvent;
use App\Events\GanreCreatedOrUpdatedEvent;
use App\Events\GanreDeletedEvent;
use App\Events\MovieCreatedOrUpdatedEvent;
use App\Events\MovieDeletedEvent;
use App\Listeners\AuthorCreatedOrUpdatedListener;
use App\Listeners\AuthorDeletedListener;
use App\Listeners\CinemaCreatedOrUpdatedListener;
use App\Listeners\CinemaDeletedListener;
use App\Listeners\GanreCreatedOrUpdatedListener;
use App\Listeners\GanreDeletedListener;
use App\Listeners\MovieCreatedOrUpdatedListener;
use App\Listeners\MovieDeletedListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        MovieCreatedOrUpdatedEvent::class => [
            MovieCreatedOrUpdatedListener::class
        ],
        MovieDeletedEvent::class => [
            MovieDeletedListener::class
        ],

        CinemaCreatedOrUpdatedEvent::class => [
            CinemaCreatedOrUpdatedListener::class
        ],
        CinemaDeletedEvent::class => [
            CinemaDeletedListener::class
        ],

        AuthorCreatedOrUpdatedEvent::class => [
            AuthorCreatedOrUpdatedListener::class
        ],
        AuthorDeletedEvent::class => [
            AuthorDeletedListener::class
        ],

        GanreCreatedOrUpdatedEvent::class => [
            GanreCreatedOrUpdatedListener::class
        ],
        GanreDeletedEvent::class => [
            GanreDeletedListener::class
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
