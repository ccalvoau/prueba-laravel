<?php

namespace Novus\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\Session;
use Lang;
use Novus\Bank;
use Novus\Cleaner;
use Novus\Http\Requests;
use Novus\Http\Requests\PaymentInfo\CreatePaymentInfoRequest;
use Novus\Http\Requests\PaymentInfo\EditPaymentInfoRequest;
use Novus\PaymentInfo;

class PaymentInfoController extends Controller
{
    private $path = 'payment_infos';
    protected $instance;

    /**
     * PaymentInfoController constructor.
     */
    public function __construct()
    {
        $this->instance = new PaymentInfo();
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function display($id)
    {
        // Setting the list in $data array
        $data = $this->listTable($id);

        //dd($data);

        // Redirect to index View with the list
        return \View::make($this->path.'.display', $data);
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
        
        $cleaner_id = '';
        if(Auth::user()->hasAnyRole([3,4]))
        {
            $cleaner_id = Auth::user()->cleaner_id;
        }
        $data = array_add($data, 'cleaner_id', $cleaner_id);

        //dd($data);

        // Redirect to create View with $data
        return \View::make($this->path.'.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreatePaymentInfoRequest $request
     * @return \Illuminate\Contracts\View\View
     */
    public function store(CreatePaymentInfoRequest $request)
    {
        $description = $this->instance->nullIfBlank($request->get('description'));

        // Setting $data to create persist a new instance of an Object in DB
        $data_payment_info = array(
            'cleaner_id' => $request->get('cleaner_id'),
            'bank_id' => $request->get('bank_id'),
            'bsb' => $this->instance->cleanInputMask($request->get('bsb')),
            'account_number' => $this->instance->cleanInputMask($request->get('account_number')),
            'description' => $description,
            'is_default' => $request->get('is_default')
        );

        //dd($data_payment_info);

        if($request->get('is_default') == "true")
        {
            // Set the default payment in FALSE before adding the Payment Information
            $this->instance->setDefaultToFalse($request->get('cleaner_id'));
        }

        // Saving th instance into DB
        PaymentInfo::create($data_payment_info);

        // Showing flash message to the user
        Session::flash('flash_message', Lang::get('validation.messages.payment_infos.create'));
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
        $payment_info = PaymentInfo::findOrFail($id);

        // Formatting the data from DB to the View


        // Setting $data to pass the data into the View
        $data = [
            'id' => $id,
            'payment_info' => $payment_info,
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
        $payment_info = PaymentInfo::findOrFail($id);

        // Formatting the data from DB to the View


        // Setting the relationship data


        // Searching for the data for populate the form
        $data = $this->prepareForm();

        // Setting $data to pass the data into the View
        $data = array_add($data, 'id', $id);
        $data = array_add($data, 'payment_info', $payment_info);

        $cleaner_id = '';
        if(Auth::user()->hasAnyRole([3,4]))
        {
            $cleaner_id = Auth::user()->cleaner_id;
        }
        $data = array_add($data, 'cleaner_id', $cleaner_id);

        //dd($data);

        // Redirect to Edit View with the $data
        return \View::make($this->path.'.edit', $data);
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
		$description = $this->instance->nullIfBlank($request->get('description'));

        // Searching for the instance in DB
        $payment_info = PaymentInfo::findOrFail($id);

		// Setting $data to update an existent instance of an Object in DB
        $data_payment_info = array(
            'cleaner_id' => $request->get('cleaner_id'),
            'bank_id' => $request->get('bank_id'),
            'bsb' => $request->get('bsb'),
            'account_number' => $request->get('account_number'),
            'description' => $description,
            'is_default' => $request->get('is_default'),
        );

        // Set the default payment in FALSE before updating the Payment Information
        if($request->get('is_default'))
        {
            $this->instance->setDefaultToFalse($request->get('cleaner_id'));
        }

        //dd($data_place);

        // Filling the instance with the new $data
        $payment_info->fill($data_payment_info);
        // Updating the instance into DB
        $payment_info->save();

        // Showing flash message to the user
        Session::flash('flash_message', Lang::get('validation.messages.payment_infos.update'));
        Session::flash('flash_type', 'success');


        // METHOD edit
        // Searching the instance into DB given an ID
        $payment_info = PaymentInfo::findOrFail($id);

        // Formatting the data from DB to the View


        // Setting the relationship data


        // Searching for the data for populate the form
        $data = $this->prepareForm();

        // Setting $data to pass the data into the View
        $data = array_add($data, 'id', $id);
        $data = array_add($data, 'payment_info', $payment_info);

        $cleaner_id = '';
        if(Auth::user()->hasAnyRole([3,4]))
        {
            $cleaner_id = Auth::user()->cleaner_id;
        }
        $data = array_add($data, 'cleaner_id', $cleaner_id);

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
        PaymentInfo::destroy($id);

        // Showing flash message to the user
        Session::flash('flash_message', Lang::get('validation.messages.payment_infos.destroy'));
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
    public function listTable($id = null)
    {
        //dd($id);
        // Searching the data
        if(is_null($id)){
            $payment_infos = PaymentInfo::orderBy('is_default', 'asc')->get();
        }
        else
        {
            $payment_infos = PaymentInfo::where('cleaner_id', $id)->orderBy('is_default', 'asc')->get();
        }
        
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
        $bank = new Bank();
        $cleaner = new Cleaner();

        // Adding default value to the list
        $banks = $bank->getSelectList();
        $cleaners = $cleaner->getSelectList();

        // Setting the lists in $data array
        $data = [
            'banks' => $banks,
            'cleaners' => $cleaners,
        ];

        //dd($data);

        return $data;
    }
}