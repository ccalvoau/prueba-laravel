<?php

namespace Novus\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Lang;
use Novus\Http\Requests;
use Novus\Http\Requests\Vehicle\CreateVehicleRequest;
use Novus\Http\Requests\Vehicle\EditVehicleRequest;
use Novus\Vehicle;

class VehicleController extends Controller
{
    private $path = 'vehicles';
    protected $instance;

    /**
     * VehicleController constructor.
     */
    public function __construct()
    {
        $this->instance = new Vehicle();
    }

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
        return \View::make($this->path.'.index', $data);
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
        return \View::make($this->path.'.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateVehicleRequest $request
     * @return \Illuminate\Contracts\View\View
     */
    public function store(CreateVehicleRequest $request)
    {
		$description = $this->instance->nullIfBlank($request->get('description'));

        // Generating the name of profile picture and saving it into public
        $vehicle_picture = $this->instance->savePicture($request, 'vehicle_picture', 400, 400, 'vehicle_pictures', 'default.jpg');

        // Setting $data to create persist a new instance of an Object in DB
        $data_vehicle = array(
            'registration_no' => strtoupper($request->get('registration_no')),
            'vin' => strtoupper($request->get('vin')),
            'engine_no' => strtoupper($request->get('engine_no')),
            'make' => strtoupper($request->get('make')),
            'colour' => strtoupper($request->get('colour')),
            'type' => strtoupper($request->get('type')),
            'year' => $request->get('year'),
            'plate' => strtoupper($request->get('plate')),
            'registration_expire' => strtoupper($request->get('registration_expire')),
            'owner' => strtoupper($request->get('owner')),
            'vehicle_picture' => $vehicle_picture,
            'description' => $description,
        );

        //dd($data_vehicle);

        // Saving th instance into DB
        Vehicle::create($data_vehicle);

        // Showing flash message to the user
        Session::flash('flash_message', Lang::get('validation.messages.vehicles.create'));
        Session::flash('flash_type', 'success');

        // Setting the list in $data array
        $data = $this->listTable();

        //dd($data);

        // Redirect to index View with the list
        return \View::make($this->path.'.index', $data);
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
        $vehicle = Vehicle::findOrFail($id);

        // Setting $data to pass the data into the View
        $data = [
            'id' => $id,
            'vehicle' => $vehicle,
        ];

        //dd($data);

        // Redirect to Show View with the $data
        return \View::make($this->path.'.show', $data);
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
        $vehicle = Vehicle::findOrFail($id);

        // Searching for the data for populate the form
        $data = $this->prepareForm();

        // Setting $data to pass the data into the View
        $data = array_add($data, 'id', $id);
        $data = array_add($data, 'vehicle', $vehicle);

        //dd($data);

        // Redirect to Edit View with the $data
        return \View::make($this->path.'.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EditVehicleRequest $request
     * @param $id
     * @return \Illuminate\Contracts\View\View
     */
    public function update(EditVehicleRequest $request, $id)
    {
		$description = $this->instance->nullIfBlank($request->get('description'));

        // Searching for the instance in DB
        $vehicle = Vehicle::findOrFail($id);

        // Generating the name of profile picture and saving it into public
        $vehicle_picture = $this->instance->savePicture($request, 'vehicle_picture', 400, 400, 'vehicle_pictures', $vehicle->vehicle_picture);

		// Setting $data to update an existent instance of an Object in DB
        $data_vehicle = array(
            'registration_no' => strtoupper($request->get('registration_no')),
            'vin' => strtoupper($request->get('vin')),
            'engine_no' => strtoupper($request->get('engine_no')),
            'make' => strtoupper($request->get('make')),
            'colour' => strtoupper($request->get('colour')),
            'type' => strtoupper($request->get('type')),
            'year' => $request->get('year'),
            'plate' => strtoupper($request->get('plate')),
            'registration_expire' => strtoupper($request->get('registration_expire')),
            'owner' => strtoupper($request->get('owner')),
            'vehicle_picture' => $vehicle_picture,
            'description' => $description,
            'status' => $request->get('status'),
        );

        //dd($data_vehicle);

        // Filling the instance with the new $data
        $vehicle->fill($data_vehicle);
        // Updating the instance into DB
        $vehicle->save();

        // Showing flash message to the user
        Session::flash('flash_message', Lang::get('validation.messages.vehicles.update'));
        Session::flash('flash_type', 'success');


        // METHOD edit
        // Searching the instance into DB given an ID
        $vehicle = Vehicle::findOrFail($id);

        // Searching for the data for populate the form
        $data = $this->prepareForm();

        // Setting $data to pass the data into the View
        $data = array_add($data, 'id', $id);
        $data = array_add($data, 'vehicle', $vehicle);

        //dd($data);

        // Redirect to Edit View with the $data
        return \View::make($this->path.'.edit', $data);
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
        Vehicle::destroy($id);

        // Showing flash message to the user
        Session::flash('flash_message', Lang::get('validation.messages.vehicles.destroy'));
        Session::flash('flash_type', 'success');

        // Setting the list in $data array
        $data = $this->listTable();

        // Redirect to index View with the list
        return \View::make($this->path.'.index', $data);
    }

    /**
     * Search the data for the List
     *
     * @return array
     */
    public function listTable()
    {
        // Searching the data
        $vehicles = Vehicle::orderBy('id', 'ASC')
            ->get();

        // Setting the list in $data array
        $data = [
            'vehicles' => $vehicles,
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

        // Adding default value to the list

        // Setting the lists in $data array
        $data = [
        ];

        //dd($data);

        return $data;
    }
}