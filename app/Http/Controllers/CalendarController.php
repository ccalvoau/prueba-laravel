<?php

namespace Novus\Http\Controllers;

use Novus\Http\Requests;

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Redirect to Show View
        return \View::make('calendar');
    }
}
