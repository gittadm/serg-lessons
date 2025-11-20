<?php

namespace lesson_20_11;

use App\Events\DoorKnockEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LogDoorKnockListener
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
     * @param  \App\Events\DoorKnockEvent  $event
     * @return void
     */
    public function handle(DoorKnockEvent $event)
    {
        info('Listener done!!' . $event->number);
    }
}
