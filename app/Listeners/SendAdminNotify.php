<?php

namespace App\Listeners;

use App\Events\VisitorHasRegister;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;

class SendAdminNotify
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
     * @param  VisitorHasRegister  $event
     * @return void
     */
    public function handle(VisitorHasRegister $event)
    {
        Mail::send('emails.admin_vistor_notify', $event->visitor, function($message) use ($event) {
            $message->from('trio.purnomo@gmail.com', 'Laravel Test');
            $message->to($event->adminEmail);
            $message->subject('New Visitor Registration ' . $event->visitor['name']);
        });
    }
}
