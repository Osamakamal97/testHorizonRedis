<?php

namespace App\Providers;

use App\Events\NewStudentRegisterEvent;
use App\Listeners\SendHelloToNewStudentListener;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        NewStudentRegisterEvent::class => [
            SendHelloToNewStudentListener::class,
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
