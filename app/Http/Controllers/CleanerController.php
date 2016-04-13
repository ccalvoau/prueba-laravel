<?php

namespace Novus\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Novus\Cleaner;
use Novus\Document;
use Novus\Http\Requests;
use Novus\Http\Requests\Cleaner\CreateCleanerRequest;
use Novus\Http\Requests\Cleaner\EditCleanerRequest;

class CleanerController extends Controller
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
        return \View::make('cleaners.index', $data);
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
        return \View::make('cleaners.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param CreateCleanerRequest $request
     * @return mixed
     */
    public function store(CreateCleanerRequest $request)
    {
        $first_name2 = $request->get('first_name2');
        $first_name2 = trim($first_name2) !== '' ? $first_name2 : null;
        $last_name2 = $request->get('$last_name2');
        $last_name2 = trim($last_name2) !== '' ? $last_name2 : null;

        $data = array(
            'id_number' => strtoupper($request->get('id_number')),
            'document_id' => $request->get('document_id'),
            'first_name1' => strtoupper($request->get('first_name1')),
            'first_name2' => $first_name2,
            'last_name1' => strtoupper($request->get('last_name1')),
            'last_name2' => $last_name2,
            'gender' => $request->get('gender'),
            'birthday' => $request->get('birthday'),
            'phone_number' => str_replace('-', ' ', $request->get('phone_number')),
            'email' => strtolower($request->get('email')),
            'tfn' => $request->get('tfn'),
            'abn' => $request->get('abn'),
            'dlicence_no' => strtoupper($request->get('dlicence_no')),
            'own_vehicle' => $request->get('own_vehicle'),
            'description' => $request->get('description'),
        );

        var_dump($data);
        dd($data);

        $cleaner = Cleaner::create($data);

        Session::flash('flash_message', 'Cleaner added!');

        return redirect('cleaners');
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
        $cleaner = Cleaner::findOrFail($id);
        $payment_infos = $cleaner->paymentInfo;

        // Formatting the data from DB to the View


        // Setting $data to pass the data into the View
        $data = [
            'id' => $id,
            'cleaner' => $cleaner,
            'payment_infos' => $payment_infos,
        ];

        //dd($data);

        // Showing flash message to the user
        //Session::flash('flash_message', 'Showing Client '.$id.' successfully!');

        // Redirect to Show View with the $data
        return \View::make('cleaners.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return 'Showing Information for Editing Cleaner: '.$id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return 'Showing Information for Cleaner: '.$id.' Updated';
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
        Cleaner::destroy($id);

        // Showing flash message to the user
        Session::flash('flash_message', 'Cleaner: '.$id.' has been deleted successfully!');

        // Setting the list in $data array
        $data = $this->listTable();

        // Redirect to index View with the list
        return \View::make('cleaners.index', $data);
    }

    /**
     * Search the data for the List
     *
     * @return array
     */
    public function listTable()
    {
        // Searching the data
        $cleaners = Cleaner::orderBy('id', 'ASC')
            ->get();

        // Setting the list in $data array
        $data = [
            'cleaners' => $cleaners,
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
        $documents = Document::get()->pluck('name', 'id');

        // Adding default value to the list
        $documents = array_add($documents, '', 'SELECT AN OPTION');

        // Setting the lists in $data array
        $data = [
            'documents' => $documents,
        ];

        //dd($data);

        return $data;
    }
}
