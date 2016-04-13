<?php

namespace Novus\Http\Controllers;

use Illuminate\Http\Request;

use Novus\Http\Requests;
use Novus\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
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
        return Make::view('welcome');
    }
}
