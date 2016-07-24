<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;

class VisitorHasRegister extends Event
{
    use SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($visitor)
    {
        $this->visitor    = $visitor->toArray();
        $this->adminName  = config('admin.name');
        $this->adminEmail = config('admin.email');
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
