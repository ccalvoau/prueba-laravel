<?php

namespace Novus\Http\Controllers;

use Novus\Http\Requests;

class HomeController extends Controller
{
    /**
     * HomeController constructor.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Redirect to home View
        return \View::make('home');
    }
}