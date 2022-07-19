<?php

namespace App\Listeners;

use App\Models\Logg;
use App\Events\LogoutEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LogoutListener
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
     * @param  LogoutEvent  $event
     * @return void
     */
    public function handle(LogoutEvent $event)
    {
        // get user
        $user = $event->user;

        // log the login
        Logg::create([
            'type' => 'auth',
            'title' => $user->name . ' logged out',
            'user_id' => $user->id,
            'target_id' => $user->id,
            'content' => $user->name . " logged out at " . date('Y-m-d H:i:s')
        ]);
    }
}
