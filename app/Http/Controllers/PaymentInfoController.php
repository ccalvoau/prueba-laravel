<?php

namespace Novus\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Novus\Bank;
use Novus\Cleaner;
use Novus\Http\Requests;
use Novus\Http\Requests\PaymentInfo\CreatePaymentInfoRequest;
use Novus\Http\Requests\PaymentInfo\EditPaymentInfoRequest;
use Novus\PaymentInfo;

class PaymentInfoController extends Controller
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
        return \View::make('payment_infos.index', $data);
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
        return \View::make('payment_infos.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param CreatePaymentInfoRequest $request
     * @return \Illuminate\Contracts\View\View
     */
    public function store(CreatePaymentInfoRequest $request)
    {
        $description = $request->get('description');
        $description = trim($description) !== '' ? $description : null;

        // Setting $data to create persist a new instance of an Object in DB
        $data_payment_info = array(
            'cleaner_id' => $request->get('cleaner_id'),
            'bank_id' => $request->get('bank_id'),
            'bsb' => $request->get('bsb'),
            'account_number' => $request->get('account_number'),
            'description' => $description,
            'is_default' => true,
        );

        //dd($data_payment_info);

        // Saving th instance into DB
        $payment_info = PaymentInfo::create($data_payment_info);

        // Showing flash message to the user
        Session::flash('flash_message', 'Payment Information: '.$payment_info.' has been added successfully!');

        // Setting the list in $data array
        $data = $this->listTable();

        //dd($data);

        // Redirect to index View with the list
        return \View::make('payment_infos.index', $data);
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
        $payment_info = PaymentInfo::findOrFail($id);

        // Formatting the data from DB to the View


        // Setting $data to pass the data into the View
        $data = [
            'id' => $id,
            'payment_info' => $payment_info,
        ];

        //dd($data);

        // Showing flash message to the user
        //Session::flash('flash_message', 'Showing Payment Information: '.$id.' successfully!');

        // Redirect to Show View with the $data
        return \View::make('payment_infos.show', $data);
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
        $payment_info = PaymentInfo::findOrFail($id);

        // Formatting the data from DB to the View


        // Setting the relationship data


        // Searching for the data for populate the form
        $data = $this->prepareForm();

        // Setting $data to pass the data into the View
        $data = array_add($data, 'id', $id);
        $data = array_add($data, 'payment_info', $payment_info);

        //dd($data);

        // Redirect to Edit View with the $data
        return \View::make('payment_infos.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param EditPaymentInfoRequest $request
     * @param $id
     * @return \Illuminate\Contracts\View\View
     */
    public function update(EditPaymentInfoRequest $request, $id)
    {
        $description = $request->get('description');
        $description = trim($description) !== '' ? $description : null;

        // Setting $data to update an existent instance of an Object in DB
        $data_payment_info = array(
            'cleaner_id' => $request->get('cleaner_id'),
            'bank_id' => $request->get('bank_id'),
            'bsb' => $request->get('bsb'),
            'account_number' => $request->get('account_number'),
            'description' => $description,
            'is_default' => $request->get('is_default'),
        );

        //dd($data_place);

        // Shearching for the instance in DB
        $payment_info = PaymentInfo::findOrFail($id);
        // Filling the instance with the new $data
        $payment_info->fill($data_payment_info);
        // Updating the instance into DB
        $payment_info->save();

        // Showing flash message to the user
        Session::flash('flash_message', 'Payment Information: '.$id.' has been updated successfully!');


        // METHOD edit
        // Shearching the instance into DB given an ID
        $payment_info = PaymentInfo::findOrFail($id);

        // Formatting the data from DB to the View


        // Setting the relationship data


        // Shearching for the data for populate the form
        $data = $this->prepareForm();

        // Setting $data to pass the data into the View
        $data = array_add($data, 'id', $id);
        $data = array_add($data, 'payment_info', $payment_info);

        //dd($data);

        // Redirect to Edit View with the $data
        return \View::make('payment_infos.edit', $data);
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
        PaymentInfo::destroy($id);

        // Showing flash message to the user
        Session::flash('flash_message', 'Payment Information: '.$id.' has been deleted successfully!');

        // Setting the list in $data array
        $data = $this->listTable();

        // Redirect to index View with the list
        return \View::make('payment_infos.index', $data);
    }

    /**
     * Search the data for the List
     *
     * @return array
     */
    public function listTable()
    {
        // Searching the data
        $payment_infos = PaymentInfo::orderBy('id', 'ASC')
            ->get();

        // Setting the list in $data array
        $data = [
            'payment_infos' => $payment_infos,
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
        $banks = Bank::get()->pluck('name', 'id');
        $cleaners = Cleaner::get()->pluck('full_name', 'id');

        // Adding default value to the list
        $banks = array_add($banks, '', 'SELECT AN OPTION');
        $cleaners = array_add($cleaners, '', 'SELECT AN OPTION');

        // Setting the lists in $data array
        $data = [
            'banks' => $banks,
            'cleaners' => $cleaners,
        ];

        //dd($data);

        return $data;
    }
}
