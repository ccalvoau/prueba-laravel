<?php

namespace Novus\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Lang;
use Novus\Availability;
use Novus\Cleaner;
use Novus\Http\Requests;
use Novus\Http\Requests\Cleaner\EditAvailabilityRequest;

class AvailabilityController extends Controller
{
    private $path = 'availabilities';
    protected $instance;

    /**
     * CleanerController constructor.
     */
    public function __construct()
    {
        $this->instance = new Availability();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::user()->hasAnyRole([1]) || (Auth::user()->hasAnyRole([3,4]) && Auth::user()->cleaner_id == $id))
        {
            // Deleting flash message to the user
            Session::forget('flash_message');
            Session::forget('flash_type');

            // Searching the instance into DB given an ID
            $cleaner = Cleaner::findOrFail($id);

            // Setting $data to pass the data into the View
            $data = [
                'id' => $id,
                'cleaner' => $cleaner,
            ];

            //dd($data);

            // Redirect to Show View with the $data
            return \View::make($this->path.'.show', $data);
        }
        else
        {
            // Showing flash message to the user
            Session::flash('flash_message', Lang::get('validation.messages.no_permission'));
            Session::flash('flash_type', 'danger');

            // Redirect to Show View with the $data
            return \View::make('home');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::user()->hasAnyRole([1]) || (Auth::user()->hasAnyRole([3,4]) && Auth::user()->cleaner_id == $id))
        {
            // Searching the instance into DB given an ID
            $cleaner = Cleaner::findOrFail($id);

            // Searching for the data for populate the form
            $data = [];

            // Setting $data to pass the data into the View
            $data = array_add($data, 'id', $id);
            $data = array_add($data, 'cleaner', $cleaner);

            //dd($data);

            // Redirect to Edit View with the $data
            return \View::make($this->path.'.edit', $data);
        }
        else
        {
            // Showing flash message to the user
            Session::flash('flash_message', Lang::get('validation.messages.no_permission'));
            Session::flash('flash_type', 'danger');

            // Redirect to Show View with the $data
            return \View::make('home');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EditAvailabilityRequest $request
     * @param $id
     * @return \Illuminate\Contracts\View\View
     */
    public function update(EditAvailabilityRequest $request, $id)
    {
        // Searching for the instance in DB
        $availability = Availability::findOrFail($id);

        // Setting $data to update an existent instance of an Object in DB
        $data_availability = array(
            'timetable' => $request->get('h_timetable'),
        );

        //dd($data_availability);

        // Filling the instance with the new $data
        $availability->fill($data_availability);
        // Updating the instance into DB
        $availability->save();

        // Showing flash message to the user
        Session::flash('flash_message', Lang::get('validation.messages.availabilities.update'));
        Session::flash('flash_type', 'success');


        // METHOD edit
        // Searching the instance into DB given an ID
        $cleaner = Cleaner::findOrFail($id);

        // Searching for the data for populate the form
        $data = [];

        // Setting $data to pass the data into the View
        $data = array_add($data, 'id', $id);
        $data = array_add($data, 'cleaner', $cleaner);

        //dd($data);

        // Redirect to Edit View with the $data
        return \View::make($this->path.'.edit', $data);
    }
}
