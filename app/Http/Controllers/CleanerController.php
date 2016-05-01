<?php

namespace Novus\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\Session;
use Lang;
use Novus\Cleaner;
use Novus\Country;
use Novus\Document;
use Novus\EnglishLevel;
use Novus\Http\Requests;
use Novus\Http\Requests\Cleaner\CreateCleanerRequest;
use Novus\Http\Requests\Cleaner\EditCleanerRequest;
use Novus\Language;
use Novus\Role;
use Novus\User;

class CleanerController extends Controller
{
    private $path = 'cleaners';
    protected $instance;

    /**
     * CleanerController constructor.
     */
    public function __construct()
    {
        $this->instance = new Cleaner();
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
     * @param CreateCleanerRequest $request
     * @return \Illuminate\Contracts\View\View
     */
    public function store(CreateCleanerRequest $request)
    {
        $first_name2 = $this->instance->nullIfBlankUpperCase($request->get('first_name2'));
		$last_name2 = $this->instance->nullIfBlankUpperCase($request->get('last_name2'));
		$tfn = $this->instance->nullIfBlank($request->get('tfn'));
		$abn = $this->instance->nullIfBlank($request->get('abn'));
		$licence_no = $this->instance->nullIfBlankUpperCase($request->get('licence_no'));
		$description = $this->instance->nullIfBlank($request->get('description'));

        // Generating the name of profile picture and saving it into public
        $profile_picture = $this->instance->savePicture($request, 'profile_picture', 200, 200, 'profile_pictures', 'default.jpg');

        // Generating the name of licence picture and saving it into public
        $licence_picture = $this->instance->savePicture($request, 'licence_picture', 400, 260, 'licence_pictures', 'default.jpg');

        // ADDING CLEANER AS A USER
        // Setting $data to create persist a new instance of an Object in DB
        $data_user = array(
            'cleaner_id' => 0,
            'first_name' => strtoupper($request->get('first_name1')),
            'last_name' => strtoupper($request->get('last_name1')),
            'email' => strtolower($request->get('email')),
            'password' => bcrypt('87654321'),
            'profile_picture' => $profile_picture,
            'role_id' => $request->get('role_id'),
            'description' => $description,
            'status' => false,
        );

        //dd($data_user);

        // Saving the instance into DB
        $user = User::create($data_user);
        $user_id = $user->id;
        $user_email = $user->email;

        $data = [
            'name' => $user->name,
            'email' => $user->email,
        ];

        \Mail::send('emails.welcome_user',
            $data,
            function ($message) use ($user) {
                $message->from('novus@gmail.com', Lang::get('validation.attributes.contact.email.from_description'));
                $message->to($user->email);
                $message->subject(Lang::get('passwords.email.welcome.subject'));
        });

        // ADDING CLEANER
        // Setting $data to create persist a new instance of an Object in DB
        $data_cleaner = array(
            'user_id' => $user_id,
            'id_number' => strtoupper($request->get('id_number')),
            'document_id' => $request->get('document_id'),
            'first_name1' => strtoupper($request->get('first_name1')),
            'first_name2' => $first_name2,
            'last_name1' => strtoupper($request->get('last_name1')),
            'last_name2' => $last_name2,
            'phone_number' => $request->get('phone_number'),
            'email' => strtolower($request->get('email')),
            'gender' => $request->get('gender'),
            'date_of_birth' => $request->get('date_of_birth'),
            'country_id' => $request->get('country_id'),
            'language_id' => $request->get('language_id'),
            'english_level_id' => $request->get('english_level_id'),
            'profile_picture' => $profile_picture,
            'tfn' => $tfn,
            'abn' => $abn,
            'licence_no' => $licence_no,
            'licence_picture' => $licence_picture,
            'own_vehicle' => $request->get('own_vehicle'),
            'description' => $description,
            'status' => false,
        );

        //dd($data_cleaner);

        // Saving th instance into DB
		$cleaner = Cleaner::create($data_cleaner);

        $user = new User();
        $user->updateCleanerIdByEmail($cleaner->id, $user_email);

        // Showing flash message to the user
        Session::flash('flash_message', Lang::get('validation.messages.cleaners.create_user'));
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
        if(Auth::user()->hasAnyRole([1,2]) || (Auth::user()->hasAnyRole([3,4]) && Auth::user()->cleaner_id == $id))
        {
            // Deleting flash message to the user
            Session::forget('flash_message');
            Session::forget('flash_type');

            // Searching the instance into DB given an ID
            $cleaner = Cleaner::findOrFail($id);
            $payment_infos = $cleaner->paymentInfo;
    
            // Setting $data to pass the data into the View
            $data = [
                'id' => $id,
                'cleaner' => $cleaner,
                'payment_infos' => $payment_infos,
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
        if(Auth::user()->hasAnyRole([1,2]) || (Auth::user()->hasAnyRole([3,4]) && Auth::user()->cleaner_id == $id))
        {
            // Deleting flash message to the user
            Session::forget('flash_message');
            Session::forget('flash_type');

            // Searching the instance into DB given an ID
            $cleaner = Cleaner::findOrFail($id);

            // Searching for the data for populate the form
            $data = $this->prepareForm();

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
     * @param EditCleanerRequest $request
     * @param $id
     * @return \Illuminate\Contracts\View\View
     */
    public function update(EditCleanerRequest $request, $id)
    {
        $first_name2 = $this->instance->nullIfBlankUpperCase($request->get('first_name2'));
		$last_name2 = $this->instance->nullIfBlankUpperCase($request->get('last_name2'));
		$tfn = $this->instance->nullIfBlank($request->get('tfn'));
		$abn = $this->instance->nullIfBlank($request->get('abn'));
		$licence_no = $this->instance->nullIfBlankUpperCase($request->get('licence_no'));
		$description = $this->instance->nullIfBlank($request->get('description'));

        // Searching for the instance in DB
        $cleaner = Cleaner::findOrFail($id);

        // Generating the name of profile picture and saving it into public
        $profile_picture = $this->instance->savePicture($request, 'profile_picture', 200, 200, 'profile_pictures', $cleaner->profile_picture);

        if($request->file('profile_picture') !== null)
        {
            $user = new User();
            $user->updateProfilePictureById($cleaner->user_id, $profile_picture);
        }

        // Generating the name of licence picture and saving it into public
        $licence_picture = $this->instance->savePicture($request, 'licence_picture', 400, 260, 'licence_pictures', $cleaner->licence_picture);

		// Setting $data to update an existent instance of an Object in DB
        $data_cleaner = array(
            'id_number' => strtoupper($request->get('id_number')),
            'document_id' => $request->get('document_id'),
            'first_name1' => strtoupper($request->get('first_name1')),
            'first_name2' => $first_name2,
            'last_name1' => strtoupper($request->get('last_name1')),
            'last_name2' => $last_name2,
            'phone_number' => $request->get('phone_number'),
            'email' => strtolower($request->get('email')),
            'gender' => $request->get('gender'),
            'date_of_birth' => $request->get('date_of_birth'),
            'country_id' => $request->get('country_id'),
            'language_id' => $request->get('language_id'),
            'english_level_id' => $request->get('english_level_id'),
            'profile_picture' => $profile_picture,
            'tfn' => $tfn,
            'abn' => $abn,
            'licence_no' => $licence_no,
            'licence_picture' => $licence_picture,
            'own_vehicle' => $request->get('own_vehicle'),
            'description' => $description,
            'status' => $request->get('status'),
        );

        //dd($data_cleaner);

        // Filling the instance with the new $data
        $cleaner->fill($data_cleaner);
        // Updating the instance into DB
        $cleaner->save();

        // Showing flash message to the user
        Session::flash('flash_message', Lang::get('validation.messages.cleaners.update'));
        Session::flash('flash_type', 'success');


        // METHOD edit
        // Searching the instance into DB given an ID
        $cleaner = Cleaner::findOrFail($id);

        // Searching for the data for populate the form
        $data = $this->prepareForm();

        // Setting $data to pass the data into the View
        $data = array_add($data, 'id', $id);
        $data = array_add($data, 'cleaner', $cleaner);

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
        Cleaner::destroy($id);

        // Showing flash message to the user
        Session::flash('flash_message', Lang::get('validation.messages.cleaners.destroy'));
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
        $document = new Document();
        $nationality = new Country();
        $language = new Language();
        $english_level = new EnglishLevel();
        $role = new Role();

        // Adding default value to the list
        $documents = $document->getSelectList();
        $nationalities = $nationality->getSelectList();
        $languages = $language->getSelectList();
        $english_levels = $english_level->getSelectList();
        $roles = $role->getSelectList( "CLEANER" );

        // Setting the lists in $data array
        $data = [
            'documents' => $documents,
            'nationalities' => $nationalities,
            'languages' => $languages,
            'english_levels' => $english_levels,
            'roles' => $roles,
        ];

        //dd($data);

        return $data;
    }
}