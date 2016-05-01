<?php

namespace Novus\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Lang;
use Novus\Cleaner;
use Novus\Http\Requests;
use Novus\Http\Requests\Team\CreateTeamRequest;
use Novus\Http\Requests\Team\EditTeamRequest;
use Novus\Team;
use Novus\Vehicle;

class TeamController extends Controller
{
    private $path = 'teams';
    protected $instance;

    /**
     * TeamController constructor.
     */
    public function __construct()
    {
        $this->instance = new Team();
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
     * @param CreateTeamRequest $request
     * @return \Illuminate\Contracts\View\View
     */
    public function store(CreateTeamRequest $request)
    {
        $cleaner_id3 = $this->instance->zeroIfBlank($request->get('h_cleaner_id3'));
		$cleaner_id4 = $this->instance->zeroIfBlank($request->get('h_cleaner_id4'));
		$cleaner_id5 = $this->instance->zeroIfBlank($request->get('h_cleaner_id5'));
		$cleaner_id6 = $this->instance->zeroIfBlank($request->get('h_cleaner_id6'));
		$vehicle_id = $this->instance->nullIfBlank($request->get('vehicle_id'));
		$description = $this->instance->nullIfBlank($request->get('description'));

        // Setting $data to create persist a new instance of an Object in DB
        $data_team = array(
            'alias' => strtoupper($request->get('alias')),
            'leader' => $request->get('leader'),
            'cleaner_id2' => $request->get('h_cleaner_id2'),
            'cleaner_id3' => $cleaner_id3,
            'cleaner_id4' => $cleaner_id4,
            'cleaner_id5' => $cleaner_id5,
            'cleaner_id6' => $cleaner_id6,
            'vehicle_id' => $vehicle_id,
            'description' => $description,
        );

        //dd($data_team);

        // Saving th instance into DB
        $team = Team::create($data_team);

        // Showing flash message to the user
        Session::flash('flash_message', Lang::get('validation.messages.teams.create'));
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
        $team = Team::findOrFail($id);

        // Setting $data to pass the data into the View
        $data = [
            'id' => $id,
            'team' => $team,
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
        $team = Team::findOrFail($id);

        // Searching for the data for populate the form
        $data = $this->prepareForm();

        // Setting $data to pass the data into the View
        $data = array_add($data, 'id', $id);
        $data = array_add($data, 'team', $team);

        //dd($data);

        // Redirect to Edit View with the $data
        return \View::make($this->path.'.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EditTeamRequest $request
     * @param $id
     * @return \Illuminate\Contracts\View\View
     */
    public function update(EditTeamRequest $request, $id)
    {
        $cleaner_id3 = $this->instance->nullIfBlank($request->get('h_cleaner_id3'));
		$cleaner_id4 = $this->instance->nullIfBlank($request->get('h_cleaner_id4'));
		$cleaner_id5 = $this->instance->nullIfBlank($request->get('h_cleaner_id5'));
		$cleaner_id6 = $this->instance->nullIfBlank($request->get('h_cleaner_id6'));
		$vehicle_id = $this->instance->nullIfBlank($request->get('vehicle_id'));
		$description = $this->instance->nullIfBlank($request->get('description'));

        // Searching for the instance in DB
        $team = Team::findOrFail($id);

		// Setting $data to update an existent instance of an Object in DB
        $data_team = array(
            'alias' => strtoupper($request->get('alias')),
            'leader' => $request->get('leader'),
            'cleaner_id2' => $request->get('h_cleaner_id2'),
            'cleaner_id3' => $cleaner_id3,
            'cleaner_id4' => $cleaner_id4,
            'cleaner_id5' => $cleaner_id5,
            'cleaner_id6' => $cleaner_id6,
            'vehicle_id' => $vehicle_id,
            'description' => $description,
            'status' => $request->get('status'),
        );

        //dd($data_team);

        // Filling the instance with the new $data
        $team->fill($data_team);
        // Updating the instance into DB
        $team->save();

        // Showing flash message to the user
        Session::flash('flash_message', Lang::get('validation.messages.teams.update'));
        Session::flash('flash_type', 'success');


        // METHOD edit
        // Searching the instance into DB given an ID
        $team = Team::findOrFail($id);

        // Searching for the data for populate the form
        $data = $this->prepareForm();

        // Setting $data to pass the data into the View
        $data = array_add($data, 'id', $id);
        $data = array_add($data, 'team', $team);

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
        Team::destroy($id);

        // Showing flash message to the user
        Session::flash('flash_message', Lang::get('validation.messages.teams.destroy'));
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
        $teams = Team::orderBy('id', 'ASC')
            ->get();

        // Setting the list in $data array
        $data = [
            'teams' => $teams,
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
        $cleaner = new Cleaner();
        $vehicle = new Vehicle();

        // Adding default value to the list
        $leaders = $cleaner->getSelectList();
        $cleaners = $cleaner->getSelectListNoDefault();
        $vehicles = $vehicle->getSelectList();

        // Setting the lists in $data array
        $data = [
            'leaders' => $leaders,
            'cleaners' => $cleaners,
            'vehicles' => $vehicles,
        ];

        //dd($data);

        return $data;
    }
}