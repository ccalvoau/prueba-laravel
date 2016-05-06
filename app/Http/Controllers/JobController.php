<?php

namespace Novus\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Lang;
use Novus\Client;
use Novus\ClientType;
use Novus\Http\Requests;
use Novus\Http\Requests\Job\CreateJobRequest;
use Novus\Http\Requests\Job\EditJobRequest;
use Novus\Job;
use Novus\Team;

class JobController extends Controller
{
    private $path = 'jobs';
    protected $instance;

    /**
     * JobController constructor.
     */
    public function __construct()
    {
        $this->instance = new Job();
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
     * @param CreateJobRequest $request
     * @return \Illuminate\Contracts\View\View
     */
    public function store(CreateJobRequest $request)
    {
        $description = $this->instance->nullIfBlank($request->get('description'));

        // Setting $data to create persist a new instance of an Object in DB
        $data_job = array(
            'client_id' => $request->get('client_id'),
            'client_type_id' => $request->get('client_type_id'),
            'place_id' => $request->get('place_id'),
            'team_id' => $request->get('team_id'),
            'job_date' => $request->get('job_date'),
            'job_time' => $request->get('job_time'),
            'description' => $description,
            'status_job_id' => 2,
        );

        //dd($data_job);

        // Saving the instance into DB
        Job::create($data_job);

        // Showing flash message to the user
        Session::flash('flash_message', Lang::get('validation.messages.jobs.create'));
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
        $job = Job::findOrFail($id);

        // Setting $data to pass the data into the View
        $data = [
            'id' => $id,
            'job' => $job,
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
        $job = Job::findOrFail($id);

        // Searching for the data for populate the form
        $data = $this->prepareForm();

        // Setting $data to pass the data into the View
        $data = array_add($data, 'id', $id);
        $data = array_add($data, 'job', $job);

        //dd($data);

        // Redirect to Edit View with the $data
        return \View::make($this->path.'.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EditJobRequest $request
     * @param int $id
     * @return \Illuminate\Contracts\View\View
     */
    public function update(EditJobRequest $request, $id)
    {
        $description = $this->instance->nullIfBlank($request->get('description'));

        // Searching for the instance in DB
        $job = Job::findOrFail($id);

		// Setting $data to update an existent instance of an Object in DB
        $data_job = array(
            'client_type_id' => $request->get('client_type_id'),
            'first_name1' => strtoupper($request->get('first_name1')),
            'last_name1' => strtoupper($request->get('last_name1')),
            'phone_number' => $request->get('phone_number'),
            'email' => strtolower($request->get('email')),
            'description' => $description,
            'status' => $request->get('status'),
        );

        //dd($data_job);

        // Filling the instance with the new $data
        $job->fill($data_job);
        // Updating the instance into DB
        $job->save();

        // Showing flash message to the user
        Session::flash('flash_message', Lang::get('validation.messages.jobs.update'));
        Session::flash('flash_type', 'success');


        // METHOD edit
        // Searching the instance into DB given an ID
        $job = Job::findOrFail($id);

        // Searching for the data for populate the form
        $data = $this->prepareForm();

        // Setting $data to pass the data into the View
        $data = array_add($data, 'id', $id);
        $data = array_add($data, 'job', $job);

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
        Job::destroy($id);

        // Showing flash message to the user
        Session::flash('flash_message', Lang::get('validation.messages.jobs.destroy'));
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
        $jobs = Job::orderBy('id', 'ASC')
            ->get();

        // Setting the list in $data array
        $data = [
            'jobs' => $jobs,
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
        $client = new Client();
        $client_type = new ClientType();
        $team = new Team();

        // Adding default value to the list
        $clients = $client->getSelectList();
        $client_types = $client_type->getSelectList();
        $teams = $team->getSelectList();

        // Setting the lists in $data array
        $data = [
            'clients' => $clients,
            'client_types' => $client_types,
            'teams' => $teams,
        ];

        //dd($data);

        return $data;
    }
}