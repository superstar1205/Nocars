<?php

namespace App\Listeners;

use Carbon\Carbon;
use App\Models\Logg;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Http\Request;

class LoginListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        // get user
        $user = $event->user;

        // reset last login session data
        session([
            'lastLoginIP' => null,
            'lastLoginAt' => null
        ]);

        // if user has a valid last login date/time set the session variable
        if (preg_match('/\d\d\d\d-\d\d-\d\d \d\d:\d\d:\d\d/', $user->last_login_at)) {
            session([
                'lastLoginIP' => $user->last_login_ip,
                'lastLoginAt' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $user->last_login_at)
            ]);
        }

        // update db
        $user->last_login_at = Carbon::createFromFormat('Y-m-d H:i:s', now(), 'UTC')->format('Y-m-d H:i:s');
        $user->last_login_ip = $this->request->ip();
        $user->save();

        // log the login
        Logg::create([
            'type' => 'auth',
            'title' => $user->name . ' logged in',
            'user_id' => $user->id,
            'target_id' => $user->id,
            'content' => $user->namen . " logged in at " . date('Y-m-d H:i:s') . " from IP: " . $this->request->ip()
        ]);
    }
}
