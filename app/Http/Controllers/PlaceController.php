<?php

namespace Novus\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Novus\Client;
use Novus\Http\Requests;
use Novus\Http\Requests\Place\CreatePlaceRequest;
use Novus\Http\Requests\Place\EditPlaceRequest;
use Novus\Place;
use Novus\State;
use Novus\StreetType;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Setting the list in $data array
        $data = $this->listTable();

        //dd($data);

        // Redirect to index View with the list
        return \View::make('places.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Searching for the data for populate the form
        $data = $this->prepareForm();

        //dd($data);

        // Redirect to create View with $data
        return \View::make('places.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param CreatePlaceRequest $request
     * @return \Illuminate\Contracts\View\View
     */
    public function store(CreatePlaceRequest $request)
    {
        $postcode = $request->get('postcode');
        $postcode = trim($postcode) !== '' ? $postcode : null;
        $referecep = $request->get('referecep');
        $referecep = trim($referecep) !== '' ? $referecep : null;

        // Setting $data to create persist a new instance of an Object in DB
        $data_place = array(
            'client_id' => $request->get('client_id'),
            'unit_number' => $request->get('unit_number'),
            'street_number' => $request->get('street_number'),
            'street_name' => strtoupper($request->get('street_name')),
            'street_type_id' => $request->get('street_type_id'),
            'suburb' => strtoupper($request->get('suburb')),
            'state_id' => $request->get('state_id'),
            'postcode' => $postcode,
            'referecep' => $referecep,
            'verified' => false,
        );

        //dd($data_place);

        // Saving th instance into DB
        $place = Place::create($data_place);

        // Showing flash message to the user
        Session::flash('flash_message', 'Place: '.$place.' has been added successfully!');

        // Setting the list in $data array
        $data = $this->listTable();

        //dd($data);

        // Redirect to index View with the list
        return \View::make('places.index', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Searching the instance into DB given an ID
        $place = Place::findOrFail($id);

        // Formatting the data from DB to the View


        // Setting $data to pass the data into the View
        $data = [
            'id' => $id,
            'place' => $place,
        ];

        //dd($data);

        // Showing flash message to the user
        //Session::flash('flash_message', 'Showing Place: '.$id.' successfully!');

        // Redirect to Show View with the $data
        return \View::make('places.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Searching the instance into DB given an ID
        $place = Place::findOrFail($id);

        // Formatting the data from DB to the View


        // Setting the relationship data


        // Searching for the data for populate the form
        $data = $this->prepareForm();

        // Setting $data to pass the data into the View
        $data = array_add($data, 'id', $id);
        $data = array_add($data, 'place', $place);

        //dd($data);

        // Redirect to Edit View with the $data
        return \View::make('places.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param EditPlaceRequest $request
     * @param $id
     * @return \Illuminate\Contracts\View\View
     */
    public function update(EditPlaceRequest $request, $id)
    {
        $postcode = $request->get('postcode');
        $postcode = trim($postcode) !== '' ? $postcode : null;
        $referencep = $request->get('referencep');
        $referencep = trim($referencep) !== '' ? $referencep : null;

        // Setting $data to update an existent instance of an Object in DB
        $data_place = array(
            'client_id' => $request->get('client_id'),
            'unit_number' => $request->get('unit_number'),
            'street_number' => $request->get('street_number'),
            'street_name' => strtoupper($request->get('street_name')),
            'street_type_id' => $request->get('street_type_id'),
            'suburb' => strtoupper($request->get('suburb')),
            'state_id' => $request->get('state_id'),
            'postcode' => $postcode,
            'referencep' => $referencep,
            'verified' => false,
        );

        //dd($data_place);

        // Shearching for the instance in DB
        $place = Place::findOrFail($id);
        // Filling the instance with the new $data
        $place->fill($data_place);
        // Updating the instance into DB
        $place->save();

        // Showing flash message to the user
        Session::flash('flash_message', 'Place: '.$id.' has been updated successfully!');


        // METHOD edit
        // Shearching the instance into DB given an ID
        $place = Place::findOrFail($id);

        // Formatting the data from DB to the View


        // Setting the relationship data


        // Shearching for the data for populate the form
        $data = $this->prepareForm();

        // Setting $data to pass the data into the View
        $data = array_add($data, 'id', $id);
        $data = array_add($data, 'place', $place);

        //dd($data);

        // Redirect to Edit View with the $data
        return \View::make('places.edit', $data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Deleting an instance in DB given an ID
        Place::destroy($id);

        // Showing flash message to the user
        Session::flash('flash_message', 'Place: '.$id.' has been deleted successfully!');

        // Setting the list in $data array
        $data = $this->listTable();

        // Redirect to index View with the list
        return \View::make('places.index', $data);
    }

    /**
     * Search the data for the List
     *
     * @return array
     */
    public function listTable()
    {
        // Searching the data
        $places = Place::orderBy('id', 'ASC')
            ->get();

        // Setting the list in $data array
        $data = [
            'places' => $places,
        ];
        
        //dd($data);

        return $data;
    }

    /**
     * Search the data for the Form
     *
     * @return array
     */
    public function prepareForm()
    {
        // Searching for the data to populate the Form
        $clients = Client::get()->pluck('short_name', 'id');
        $street_types = StreetType::get()->pluck('name', 'id');
        $states = State::get()->pluck('name', 'id');

        // Adding default value to the list
        $clients = array_add($clients, '', 'SELECT AN OPTION');
        $street_types = array_add($street_types, '', 'SELECT AN OPTION');
        $states = array_add($states, '', 'SELECT AN OPTION');

        // Setting the lists in $data array
        $data = [
            'clients' => $clients,
            'street_types' => $street_types,
            'states' => $states,
        ];

        //dd($data);

        return $data;
    }
}
