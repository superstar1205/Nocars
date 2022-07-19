<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Events\LoginEvent;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

/**
 * Class LoginController
 * @package App\Http\Controllers
 *
 * Handles all the pages before a user is logged in.
 */
class LoginController extends Controller
{
    /**
     * Main index / entry point for users
     */
    public function index()
    {
        // if user is logged in redirect to home
        if (Auth::check()) {
            return redirect('/home');
        }
        return view('index');
    }

    /**
     * Show the login form
     */
    public function showLogin()
    {
        // if user is logged in redirect to home
        if (Auth::check()) {
            return redirect('/home');
        }
        return view('auth.login');
    }


    /**
     * Login the user
     */
    public function doLogin(LoginRequest $request) {

        // fetch user, if they exist
        $username = $request->username;
        $user = User::where('username', $username)->first();

        // check user exists and password is correct
        if ($user && Hash::check($request->password, $user->password)) {

            // log the user in
            Auth::login($user);

            // dispatch the login event
            event(new LoginEvent($user));

            // regenerate the session
            $request->session()->regenerate();

            // check if password needs a rehash
            if (Hash::needsRehash(Auth::user()->password)) {
                $user->password = Hash::make($request->password);
                $user->save();
            }

            // send them to the homepage
            return redirect()->route('home');
        }

        // invalid "username or password"
        return redirect('/login')->with('error', "Invalid username or password");
    }


    /**
     * Show the forgot password form
     */
    public function showForgotPassword()
    {
        return view('auth.forgot');
    }

    /**
     * Show the forgot password form
     */
    public function showResetPassword()
    {
        return view('auth.reset');
    }

    /**
     * Show the registration form
     */
    public function showRegister()
    {
        return view('auth.register');
    }

}
