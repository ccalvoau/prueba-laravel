<?php

namespace Novus\Http\Controllers;

use Novus\Http\Requests;

class WelcomeController extends Controller
{
    /**
     * WelcomeController constructor.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Redirect to welcome View
        return \View::make('welcome');
    }
}