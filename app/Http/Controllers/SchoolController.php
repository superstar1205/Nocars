<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class SchoolController
 * @package App\Http\Controllers
 *
 * Handles any misc tasks after a user is logged in that is not
 * handled elsewhere in a specific controller.
 */
class SchoolController extends Controller
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
     * Show school classes
     */
    public function showClasses()
    {
        return view('school.classes');
    }

    /**
     * Show school baseline
     */
    public function showBaseline()
    {
        return view('school.baseline');
    }

    /**
     * Show school setup
     */
    public function showDetails()
    {
        return view('school.details');
    }

    /**
     * Show holidays
     */
    public function showHolidays()
    {
        return view('school.holidays');
    }

}
