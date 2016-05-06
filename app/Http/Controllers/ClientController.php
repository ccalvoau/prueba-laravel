<?php

namespace Novus\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Lang;
use Novus\Client;
use Novus\ClientType;
use Novus\Http\Requests;
use Novus\Http\Requests\Client\CreateClientRequest;
use Novus\Http\Requests\Client\EditClientRequest;

class ClientController extends Controller
{
    private $path = 'clients';
    protected $instance;

    /**
     * ClientController constructor.
     */
    public function __construct()
    {
        $this->instance = new Client();
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
     * @param CreateClientRequest $request
     * @return \Illuminate\Contracts\View\View
     */
    public function store(CreateClientRequest $request)
    {
        $first_name2 = $this->instance->nullIfBlankUpperCase($request->get('first_name2'));
		$last_name2 = $this->instance->nullIfBlankUpperCase($request->get('last_name2'));
		$description = $this->instance->nullIfBlank($request->get('description'));

        // Setting $data to create persist a new instance of an Object in DB
        $data_client = array(
            'client_type_id' => $request->get('client_type_id'),
            'first_name1' => strtoupper($request->get('first_name1')),
            'first_name2' => $first_name2,
            'last_name1' => strtoupper($request->get('last_name1')),
            'last_name2' => $last_name2,
            'phone_number' => $request->get('phone_number'),
            'email' => strtolower($request->get('email')),
            'description' => $description,
        );

        //dd($data_client);

        // Saving th instance into DB
        Client::create($data_client);

        // Showing flash message to the user
        Session::flash('flash_message', Lang::get('validation.messages.clients.create'));
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
        $client = Client::findOrFail($id);
        $places = $client->places;

        // Setting $data to pass the data into the View
        $data = [
            'id' => $id,
            'client' => $client,
            'places' => $places,
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
        $client = Client::findOrFail($id);

        // Searching for the data for populate the form
        $data = $this->prepareForm();

        // Setting $data to pass the data into the View
        $data = array_add($data, 'id', $id);
        $data = array_add($data, 'client', $client);

        //dd($data);

        // Redirect to Edit View with the $data
        return \View::make($this->path.'.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EditClientRequest $request
     * @param int $id
     * @return \Illuminate\Contracts\View\View
     */
    public function update(EditClientRequest $request, $id)
    {
        $first_name2 = $this->instance->nullIfBlankUpperCase($request->get('first_name2'));
		$last_name2 = $this->instance->nullIfBlankUpperCase($request->get('last_name2'));
		$description = $this->instance->nullIfBlank($request->get('description'));

        // Searching for the instance in DB
        $client = Client::findOrFail($id);

		// Setting $data to update an existent instance of an Object in DB
        $data_client = array(
            'client_type_id' => $request->get('client_type_id'),
            'first_name1' => strtoupper($request->get('first_name1')),
            'first_name2' => $first_name2,
            'last_name1' => strtoupper($request->get('last_name1')),
            'last_name2' => $last_name2,
            'phone_number' => $request->get('phone_number'),
            'email' => strtolower($request->get('email')),
            'description' => $description,
            'status' => $request->get('status'),
        );

        //dd($data_client);

        // Filling the instance with the new $data
        $client->fill($data_client);
        // Updating the instance into DB
        $client->save();

        // Showing flash message to the user
        Session::flash('flash_message', Lang::get('validation.messages.clients.update'));
        Session::flash('flash_type', 'success');


        // METHOD edit
        // Searching the instance into DB given an ID
        $client = Client::findOrFail($id);

        // Searching for the data for populate the form
        $data = $this->prepareForm();

        // Setting $data to pass the data into the View
        $data = array_add($data, 'id', $id);
        $data = array_add($data, 'client', $client);

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
        Client::destroy($id);

        // Showing flash message to the user
        Session::flash('flash_message', Lang::get('validation.messages.clients.destroy'));
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
        $clients = Client::orderBy('id', 'ASC')
            ->get();

        // Setting the list in $data array
        $data = [
            'clients' => $clients,
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
        $client_type = new ClientType();

        // Adding default value to the list
        $client_types = $client_type->getSelectList();

        // Setting the lists in $data array
        $data = [
            'client_types' => $client_types,
        ];

        //dd($data);

        return $data;
    }
}