<?php

namespace Novus\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Novus\Http\Requests;
use Novus\Http\Requests\Crud\CreateCrudRequest;
use Novus\Http\Requests\Crud\EditCrudRequest;
use Novus\Usuario;
use Novus\UsuarioProfile;

class CrudController extends Controller
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

        // Redirect to index View with the list
        return \View::make('crud.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Shearching for the data for populate the form
        $data = $this->prepareForm();

        // Redirect to create View with $data
        return \View::make('crud.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCrudRequest $request)
    {
        // Setting $data to create persist a new instance of an Object in DB
        $data_usuario = array(
            'first_name' => strtoupper($request->get('first_name')),
            'last_name' => strtoupper($request->get('last_name')),
            'birthday' => $request->get('birthday'),
            'status' => $request->get('status'),
        );

        // Saving th instace into DB
        $usuario = Usuario::create($data_usuario);

        /*
        // Otra opcion para guardar datos
        $usuario = new Usuario();
        $usuario->fill($request->all());
        $usuario->save();
        */

        // Setting $data to create persist a new instance of an Object in DB
        $data_usuario_profile = array(
            'usuario_id' => $usuario->id,
            'facebook' => $request->get('facebook'),
            'twitter' => $request->get('twitter'),
            'description' => $request->get('description'),
        );

        // Saving th instace into DB
        $usuario_profile = UsuarioProfile::create($data_usuario_profile);

        // Showing flash message to the user
        Session::flash('flash_message', 'CRUD added successfully!');

        // Setting the list in $data array
        $data = $this->listTable();

        // Redirect to index View with the list
        return \View::make('crud.index', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Shearching the instance into DB given an ID
        $usuario = Usuario::findOrFail($id);

        // Formatting the data from DB to the View
        $usuario->birthday = $usuario->convertDateDBToView($usuario->birthday);

        // Setting $data to pass the data into the View
        $data = [
            'id' => $id,
            'usuario' => $usuario,
        ];

        // Showing flash message to the user
        Session::flash('flash_message', 'Showing CRUD '.$id.' successfully!');

        // Redirect to Show View with the $data
        return \View::make('crud.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Shearching the instance into DB given an ID
        $usuario = Usuario::with('usuarioProfile')->findOrFail($id);

        // Formatting the data from DB to the View
        $usuario->birthday = $usuario->convertDateDBToView($usuario->birthday);

        // Setting the relationship data
        $usuario->facebook = $usuario->usuarioProfile->facebook;
        $usuario->twitter = $usuario->usuarioProfile->twitter;
        $usuario->description = $usuario->usuarioProfile->description;

        // Shearching for the data for populate the form
        $data = $this->prepareForm();

        // Setting $data to pass the data into the View
        $data = array_add($data, 'id', $id);
        $data = array_add($data, 'usuario', $usuario);

        // Redirect to Edit View with the $data
        return \View::make('crud.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditCrudRequest $request, $id)
    {
        // Setting $data to update an existent instance of an Object in DB
        $data_usuario = [
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'birthday' => $request->get('birthday'),
            'status' => $request->get('status'),
        ];

        // Shearching for the instance in DB
        $usuario = Usuario::findOrFail($id);
        // Filling the instance with the new $data
        $usuario->fill($data_usuario);
        // Updating the instance into DB
        $usuario->save();

        // Setting $data to update an existent instance of an Object in DB
        $data_usuario_profile = [
            'facebook' => $request->get('facebook'),
            'twitter' => $request->get('twitter'),
            'description' => $request->get('description'),
        ];

        // Shearching for the instance in DB
        $usuario_profile = UsuarioProfile::findOrFail($id);
        // Filling the instance with the new $data
        $usuario_profile->fill($data_usuario_profile);
        // Updating the instance into DB
        $usuario_profile->save();

        // Showing flash message to the user
        Session::flash('flash_message', 'Updating CRUD '.$id.' successfully!');


        // METHOD edit
        // Shearching the instance into DB given an ID
        $usuario = Usuario::with('usuarioProfile')->findOrFail($id);

        // Formatting the data from DB to the View
        $usuario->birthday = $usuario->convertDateDBToView($usuario->birthday);

        // Setting the relationship data
        $usuario->facebook = $usuario->usuarioProfile->facebook;
        $usuario->twitter = $usuario->usuarioProfile->twitter;
        $usuario->description = $usuario->usuarioProfile->description;

        // Shearching for the data for populate the form
        $data = $this->prepareForm();

        // Setting $data to pass the data into the View
        $data = array_add($data, 'id', $id);
        $data = array_add($data, 'usuario', $usuario);

        // Redirect to Edit View with the $data
        return \View::make('crud.edit', $data);
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
        Usuario::destroy($id);
        UsuarioProfile::destroy($id);

        // Showing flash message to the user
        Session::flash('flash_message', 'CRUD '.$id.' deleted successfully!');

        // Setting the list in $data array
        $data = $this->listTable();

        // Redirect to index View with the list
        return \View::make('crud.index', $data);
    }

    public function listTable()
    {
        // FLUENT
        /*
        $result = \DB::table('usuarios')
            ->select(
                'usuarios.*',
                'usuario_profiles.id as iiii',
                'usuario_profiles.facebook'
            )
            ->orderBy('id', 'ASC')
            ->leftJoin('usuario_profiles', 'usuarios.id', '=', 'usuario_profiles.usuario_id')
            ->get();
        */

        // ORM
        /*
        $usuarios = Usuario::first();
        $usuarios = Usuario::get();

        $usuarios = Usuario::with('usuarioProfile')
            ->where('status', '=', 'A')
            ->orderBy('first_name', 'ASC')
            ->get();
        */

        // Shearching the data
        $usuarios = Usuario::with('usuarioProfile')
            ->orderBy('id', 'ASC')
            ->get();

        // Setting the list in $data array
        return $data = [
            'usuarios' => $usuarios,
        ];
    }

    public function prepareForm()
    {
        // Setting list manually
        $status = [
            'A' => 'ACTIVE',
            'I' => 'INACTIVE'
        ];
        // Adding default value to the list
        $status = array_add($status, '', 'SELECT AN OPTION');

        // Setting the lists in $data array
        return $data = [
            'status' => $status,
        ];
    }
}
