<?php

namespace Novus\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\Session;
use Lang;
use Novus\Cleaner;
use Novus\Http\Requests;
use Novus\Http\Requests\User\CreateUserRequest;
use Novus\Http\Requests\User\EditUserRequest;
use Novus\Role;
use Novus\User;

class UserController extends Controller
{
    private $path = 'users';
    protected $instance;

    /**
     * UserController constructor.
     */
    public function __construct()
    {
        $this->instance = new User();
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
        $data = $this->prepareForm("ADMIN");

        //dd($data);

        // Redirect to create View with $data
        return \View::make($this->path.'.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateUserRequest $request
     * @return \Illuminate\Contracts\View\View
     */
    public function store(CreateUserRequest $request)
    {
		$description = $this->instance->nullIfBlank($request->get('description'));

        // Generating the name of profile picture and saving it into public
        $profile_picture = $this->instance->savePicture($request, 'profile_picture', 200, 200, 'profile_pictures', 'default.jpg');

        // Setting $data to create persist a new instance of an Object in DB
        $data_user = array(
            'cleaner_id' => 0,
            'first_name' => strtoupper($request->get('first_name')),
            'last_name' => strtoupper($request->get('last_name')),
            'email' => strtolower($request->get('email')),
            'password' => bcrypt('87654321'),
            'role_id' => $request->get('role_id'),
            'profile_picture' => $profile_picture,
            'description' => $description,
            'status' => false,
        );

        //dd($data_user);

		// Saving the instance into DB
        $user = User::create($data_user);

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

        // Showing flash message to the user
        Session::flash('flash_message', Lang::get('validation.messages.users.create'));
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
        if(Auth::user()->hasAnyRole([1,2]))
        {
            // Deleting flash message to the user
            Session::forget('flash_message');
            Session::forget('flash_type');

            // Searching the instance into DB given an ID
            $user = User::findOrFail($id);

            // Formatting the data from DB to the View
            if($user->role_id == 3 || $user->role_id == 4)
            {
                $cleaner = new Cleaner();
                $user->cleaner_id = $cleaner->getCleanerIdByUserId($user->id);
            }

            // Setting $data to pass the data into the View
            $data = [
                'id' => $id,
                'user' => $user,
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
        if(Auth::user()->hasAnyRole([1,2]))
        {
            // Deleting flash message to the user
            Session::forget('flash_message');
            Session::forget('flash_type');

            // Searching the instance into DB given an ID
            $user = User::findOrFail($id);

            // Searching for the data for populate the form
            $data = $this->prepareForm("ALL");

            // Setting $data to pass the data into the View
            $data = array_add($data, 'id', $id);
            $data = array_add($data, 'user', $user);

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
     * @param EditUserRequest $request
     * @param $id
     * @return \Illuminate\Contracts\View\View
     */
    public function update(EditUserRequest $request, $id)
    {
		$description = $this->instance->nullIfBlank($request->get('description'));

        // Searching for the instance in DB
        $user = User::findOrFail($id);

        // Generating the name of profile picture and saving it into public
        $profile_picture = $this->instance->savePicture($request, 'profile_picture', 200, 200, 'profile_pictures', $user->profile_picture);

        //$admin_to_cleaner = false; NOT POSSIBLE
        $cleaner_to_admin = false;
        if($user->isAdmin())
        {
            $cleaner_id = 0;
            if($request->get('role_id') == 3 || $request->get('role_id') == 4)
            {
                $cleaner_id = $request->get('h_cleaner_id');
                //$admin_to_cleaner = true;
            }
        }
        else
        {
            $cleaner_id = $request->get('h_cleaner_id');
            if($request->get('role_id') == 1 || $request->get('role_id') == 2)
            {
                $cleaner_id = 0;
                $cleaner_to_admin = true;
            }
        }

		// Setting $data to update an existent instance of an Object in DB
        $data_user = array(
            'cleaner_id' => $cleaner_id,
            'first_name' => strtoupper($request->get('first_name')),
            'last_name' => strtoupper($request->get('last_name')),
            'email' => strtolower($request->get('email')),
            'role_id' => $request->get('role_id'),
            'profile_picture' => $profile_picture,
            'description' => $description,
            'status' => $request->get('status'),
        );

        //dd($data_user);

        // Filling the instance with the new $data
        $user->fill($data_user);
        // Updating the instance into DB
        $user->save();
        if($cleaner_to_admin)
        {
            $cleaner = new Cleaner();
            $cleaner->updateCleanerToAdmin($user->id);
        }

        // Showing flash message to the user
        Session::flash('flash_message', Lang::get('validation.messages.users.update'));
        Session::flash('flash_type', 'success');


        // METHOD edit
        // Searching the instance into DB given an ID
        $user = User::findOrFail($id);

        // Searching for the data for populate the form
        $data = $this->prepareForm("ALL");

        // Setting $data to pass the data into the View
        $data = array_add($data, 'id', $id);
        $data = array_add($data, 'user', $user);

        //dd($data);

        // Redirect to Edit View with the $data
        return \View::make($this->path.'.edit', $data);
    }

    /**
     * Search the data for the List
     *
     * @return array
     */
    public function listTable()
    {
        // Searching the data
        $users = User::orderBy('id', 'ASC')
            ->get();

        // Setting the list in $data array
        $data = [
            'users' => $users,
        ];

        //dd($data);

        return $data;
    }

    /**
     * Search the data for the Form
     *
     * @return array
     */
    public function prepareForm($option)
    {
        // Searching for the data to populate the Form
        $role = new Role();

        // Adding default value to the list
        $roles = $role->getSelectList($option);

        // Setting the lists in $data array
        $data = [
            'roles' => $roles,
        ]; 

        //dd($data);

        return $data;
    }
}