<?php

namespace Novus\Http\Controllers;

use Illuminate\Http\Request;

use Novus\Http\Requests;
use Novus\Http\Controllers\Controller;

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Searching the instance into DB given an ID
        //$client = Client::findOrFail($id);

        // Formatting the data from DB to the View


        // Setting $data to pass the data into the View
        $data = [
            //'id' => $id,
            //'client' => $client,
        ];

        //dd($data);

        // Showing flash message to the user
        //Session::flash('flash_message', 'Showing Client '.$id.' successfully!');

        // Redirect to Show View with the $data
        return \View::make('calendar', $data);
    }
}
