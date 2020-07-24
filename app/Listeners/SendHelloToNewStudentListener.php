<?php

namespace App\Listeners;

use App\Mail\HelloMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendHelloToNewStudentListener implements ShouldQueue
{
    /**
     * Handle the event.
     *
     * @param object $event
     * @return void
     */
    public function handle($event)
    {
        Mail::to('user@example.com')->send(new HelloMail($event->student));
    }
}
