<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\CalendarEvent;
use App\Events\LogoutEvent;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class LoggedInController
 * @package App\Http\Controllers
 *
 * Handles any misc tasks after a user is logged in that is not
 * handled elsewhere in a specific controller.
 */
class LoggedInController extends Controller
{
    /**
     * create a new controller instance.
     */
    public function __construct()
    {
        // user can only access this if they're logged in and verified
        $this->middleware([
            'auth'
        ]);
    }

    /**
     * Show the home page
     */
    public function home()
    {
        // get user details
        $user = Auth::user();

        // get users name
        $name = $user->name;

        return view('home', compact('name'));
    }

    /**
     * Logout user on any other sessions
     */
    public function logoutOtherSessions(Request $request)
    {
        Auth::logoutOtherDevices($request->password);
        return redirect('/');
    }

    /**
     * Logout the user
     */
    public function logout(Request $request)
    {
        // dispatch the login event
        event(new LogoutEvent(Auth::user()));

        // log user out
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}
