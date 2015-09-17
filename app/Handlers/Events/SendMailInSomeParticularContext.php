<?php

namespace App\Handlers\Events;

use App\Events\WorkPerformed;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailInSomeParticularContext
{
    /**
     * Create the event handler.
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
     * @param  WorkPerformed  $event
     * @return void
     */
    public function handle(WorkPerformed $event)
    {
        //
    }
}
