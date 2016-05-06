<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*PATTERNS*/
use Novus\Cleaner;
use Novus\Role;
use Novus\User;



Route::get('/', 'WelcomeController@index')->name('welcome');


/*LOGIN*/
// Authentication routes...
Route::get('login', 'Auth\AuthController@getLogin')->name('login');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout')->name('logout');

// Registration routes... (ONLY DEVELOPMENT)
/*Route::get('register', 'Auth\AuthController@getRegister')->name('register');
Route::post('register', 'Auth\AuthController@postRegister');*/

// Password reset password link request routes...
Route::get('password', 'Auth\PasswordController@getEmail')->name('password');
Route::post('password', 'Auth\PasswordController@postEmail')->name('password');

// Password reset password routes...
Route::get('reset/{token}/{email}', 'Auth\PasswordController@getReset')->name('reset/{token}/{email}');
Route::post('reset', 'Auth\PasswordController@postReset')->name('reset');

// Password set password link request (first time user) routes...
Route::get('password_set/{email}', 'Auth\PasswordController@getSetEmail')->name('password_set/{email}');
Route::post('password_set', 'Auth\PasswordController@postSetEmail')->name('password_set');

// Password set password (first time user) routes...
Route::get('set_password/{token}/{email}', 'Auth\PasswordController@getSetPassword')->name('set_password/{token}/{email}');
Route::post('set_password', 'Auth\PasswordController@postSetPassword')->name('set_password');


Route::group(['middleware'=>['auth']], function () {

    Route::pattern('id', '\d+');

    /*HOME*/
    Route::get('home', 'HomeController@index')->name('home');

    /*
    // \Novus\Providers\AuthServiceProvider::
    Route::get('cleaners/{id}/edit', function($id){
        $user = Auth::loginUsingId(1);

        $cleaner = \Novus\Cleaner::findOrFail($id);

        //dd($user->name);

        if (Gate::denies('cleaner-edit', $user, $cleaner))
        {
            return redirect('/');
        }
        return $cleaner->full_name;
    });
    */

    /*USERS*/
    Route::group(['as'=>'users::', 'prefix'=>'users', 'middleware'=>'roles'], function() {
        $controller_name = 'UserController';

        // INDEX
        Route::get('/', ['uses'=>$controller_name.'@index', 'as'=>'index', 'roles'=>[1,2]]);
        // CREATE
        Route::get('/create', ['uses'=>$controller_name.'@create', 'as'=>'create', 'roles'=>[1,2]]);
        // STORE
        Route::post('/', ['uses'=>$controller_name.'@store', 'as'=>'store', 'roles'=>[1,2]]);
        // SHOW
        Route::get('/{id}', ['uses'=>$controller_name.'@show', 'as'=>'show', 'roles'=>[1,2]]);
        // EDIT
        Route::get('/{id}/edit', ['uses'=>$controller_name.'@edit', 'as'=>'edit', 'roles'=>[1,2]]);
        // UPDATE
        Route::put('/{id}/edit', ['uses'=>$controller_name.'@update', 'as'=>'update', 'roles'=>[1,2]]);
        // DELETE
        Route::delete('/{id}', ['uses'=>$controller_name.'@destroy', 'as'=>'destroy', 'roles'=>[1,2]]);
    });

    /*CLEANERS*/
    Route::group(['as'=>'cleaners::', 'prefix'=>'cleaners', 'middleware'=>'roles'], function() {
        $controller_name = 'CleanerController';

        // INDEX
        Route::get('/', ['uses'=>$controller_name.'@index', 'as'=>'index', 'roles'=>[1,2,3,4]]);
        // CREATE
        Route::get('/create', ['uses'=>$controller_name.'@create', 'as'=>'create', 'roles'=>[1,2]]);
        // STORE
        Route::post('/', ['uses'=>$controller_name.'@store', 'as'=>'store', 'roles'=>[1,2]]);
        // SHOW
        Route::get('/{id}', ['uses'=>$controller_name.'@show', 'as'=>'show', 'roles'=>[1,2,3,4]]);
        // EDIT
        Route::get('/{id}/edit', ['uses'=>$controller_name.'@edit', 'as'=>'edit', 'roles'=>[1,2,3,4]]);
        // UPDATE
        Route::put('/{id}/edit', ['uses'=>$controller_name.'@update', 'as'=>'update', 'roles'=>[1,2,3,4]]);
        // DELETE
        Route::delete('/{id}', ['uses'=>$controller_name.'@destroy', 'as'=>'destroy', 'roles'=>[1]]);
    });

    Route::get('users/{email}/user.json', function($email)
    {
        $response = User::where('email', $email)->get()->first();
        return $response;
    })->name('users/user.json');
    
    Route::get('cleaners/{email}/cleaner.json', function($email)
    {
        $response = Cleaner::where('email', $email)->get()->first();
        return $response;
    })->name('cleaners/cleaner.json');

    Route::get('roles/cleaner.json', function()
    {
        $response = Role::whereNotIn('id', [1,2])->get()->pluck('name', 'id');
        return $response;
    })->name('roles/cleaner.json');

    /*AVAILABILITIES*/
    Route::group(['as'=>'availabilities::', 'prefix'=>'availabilities', 'middleware'=>'roles'], function() {
        $controller_name = 'AvailabilityController';

        // SHOW
        Route::get('/{id}', ['uses'=>$controller_name.'@show', 'as'=>'show', 'roles'=>[1,3,4]]);
        // EDIT
        Route::get('/{id}/edit', ['uses'=>$controller_name.'@edit', 'as'=>'edit', 'roles'=>[1,3,4]]);
        // UPDATE
        Route::put('/{id}/edit', ['uses'=>$controller_name.'@update', 'as'=>'update', 'roles'=>[1,3,4]]);
    });

    /*PAYMENT_INFOS*/
    Route::group(['as'=>'payment_infos::', 'prefix'=>'payment_infos', 'middleware'=>'roles'], function() {
        $controller_name = 'PaymentInfoController';

        // INDEX
        Route::get('/', ['uses'=>$controller_name.'@index', 'as'=>'index', 'roles'=>[1,2,3,4]]);
        // LIST
        Route::get('/{id}/display', ['uses'=>$controller_name.'@display', 'as'=>'display', 'roles'=>[3,4]]);
        // CREATE
        Route::get('/create', ['uses'=>$controller_name.'@create', 'as'=>'create', 'roles'=>[1,2,3,4]]);
        // STORE
        Route::post('/', ['uses'=>$controller_name.'@store', 'as'=>'store', 'roles'=>[1,2,3,4]]);
        // SHOW
        Route::get('/{id}', ['uses'=>$controller_name.'@show', 'as'=>'show', 'roles'=>[1,2,3,4]]);
        // EDIT
        Route::get('/{id}/edit', ['uses'=>$controller_name.'@edit', 'as'=>'edit', 'roles'=>[1,2,3,4]]);
        // UPDATE
        Route::put('/{id}/edit', ['uses'=>$controller_name.'@update', 'as'=>'update', 'roles'=>[1,2,3,4]]);
        // DELETE
        Route::delete('/{id}', ['uses'=>$controller_name.'@destroy', 'as'=>'destroy', 'roles'=>[1]]);
    });

    /*CLIENTS*/
    Route::group(['as'=>'clients::', 'prefix'=>'clients', 'middleware'=>'roles'], function() {
        $controller_name = 'ClientController';

        // INDEX
        Route::get('/', ['uses'=>$controller_name.'@index', 'as'=>'index', 'roles'=>[1,2]]);
        // CREATE
        Route::get('/create', ['uses'=>$controller_name.'@create', 'as'=>'create', 'roles'=>[1,2]]);
        // STORE
        Route::post('/', ['uses'=>$controller_name.'@store', 'as'=>'store', 'roles'=>[1,2]]);
        // SHOW
        Route::get('/{id}', ['uses'=>$controller_name.'@show', 'as'=>'show', 'roles'=>[1,2]]);
        // EDIT
        Route::get('/{id}/edit', ['uses'=>$controller_name.'@edit', 'as'=>'edit', 'roles'=>[1,2]]);
        // UPDATE
        Route::put('/{id}/edit', ['uses'=>$controller_name.'@update', 'as'=>'update', 'roles'=>[1,2]]);
        // DELETE
        Route::delete('/{id}', ['uses'=>$controller_name.'@destroy', 'as'=>'destroy', 'roles'=>[1]]);
    });

    /*PLACES*/
    Route::group(['as'=>'places::', 'prefix'=>'places', 'middleware'=>'roles'], function() {
        $controller_name = 'PlaceController';

        // INDEX
        Route::get('/', ['uses'=>$controller_name.'@index', 'as'=>'index', 'roles'=>[1,2]]);
        // CREATE
        Route::get('/create', ['uses'=>$controller_name.'@create', 'as'=>'create', 'roles'=>[1,2]]);
        // STORE
        Route::post('/', ['uses'=>$controller_name.'@store', 'as'=>'store', 'roles'=>[1,2]]);
        // SHOW
        Route::get('/{id}', ['uses'=>$controller_name.'@show', 'as'=>'show', 'roles'=>[1,2]]);
        // EDIT
        Route::get('/{id}/edit', ['uses'=>$controller_name.'@edit', 'as'=>'edit', 'roles'=>[1,2]]);
        // UPDATE
        Route::put('/{id}/edit', ['uses'=>$controller_name.'@update', 'as'=>'update', 'roles'=>[1,2]]);
        // DELETE
        Route::delete('/{id}', ['uses'=>$controller_name.'@destroy', 'as'=>'destroy', 'roles'=>[1]]);
    });

    /*TEAMS*/
    Route::group(['as'=>'teams::', 'prefix'=>'teams', 'middleware'=>'roles'], function() {
        $controller_name = 'TeamController';

        // INDEX
        Route::get('/', ['uses'=>$controller_name.'@index', 'as'=>'index', 'roles'=>[1,2,3,4]]);
        // CREATE
        Route::get('/create', ['uses'=>$controller_name.'@create', 'as'=>'create', 'roles'=>[1,2]]);
        // STORE
        Route::post('/', ['uses'=>$controller_name.'@store', 'as'=>'store', 'roles'=>[1,2]]);
        // SHOW
        Route::get('/{id}', ['uses'=>$controller_name.'@show', 'as'=>'show', 'roles'=>[1,2,3,4]]);
        // EDIT
        Route::get('/{id}/edit', ['uses'=>$controller_name.'@edit', 'as'=>'edit', 'roles'=>[1,2,3,4]]);
        // UPDATE
        Route::put('/{id}/edit', ['uses'=>$controller_name.'@update', 'as'=>'update', 'roles'=>[1,2,3,4]]);
        // DELETE
        Route::delete('/{id}', ['uses'=>$controller_name.'@destroy', 'as'=>'destroy', 'roles'=>[1]]);
    });

    /*VEHICLES*/
    Route::group(['as'=>'vehicles::', 'prefix'=>'vehicles', 'middleware'=>'roles'], function() {
        $controller_name = 'VehicleController';

        // INDEX
        Route::get('/', ['uses'=>$controller_name.'@index', 'as'=>'index', 'roles'=>[1,2]]);
        // CREATE
        Route::get('/create', ['uses'=>$controller_name.'@create', 'as'=>'create', 'roles'=>[1,2]]);
        // STORE
        Route::post('/', ['uses'=>$controller_name.'@store', 'as'=>'store', 'roles'=>[1,2]]);
        // SHOW
        Route::get('/{id}', ['uses'=>$controller_name.'@show', 'as'=>'show', 'roles'=>[1,2]]);
        // EDIT
        Route::get('/{id}/edit', ['uses'=>$controller_name.'@edit', 'as'=>'edit', 'roles'=>[1,2]]);
        // UPDATE
        Route::put('/{id}/edit', ['uses'=>$controller_name.'@update', 'as'=>'update', 'roles'=>[1,2]]);
        // DELETE
        Route::delete('/{id}', ['uses'=>$controller_name.'@destroy', 'as'=>'destroy', 'roles'=>[1]]);
    });

    /*JOBS*/
    Route::group(['as'=>'jobs::', 'prefix'=>'jobs', 'middleware'=>'roles'], function() {
        $controller_name = 'JobController';

        // INDEX
        Route::get('/', ['uses'=>$controller_name.'@index', 'as'=>'index', 'roles'=>[1,2]]);
        // CREATE
        Route::get('/create', ['uses'=>$controller_name.'@create', 'as'=>'create', 'roles'=>[1,2]]);
        // STORE
        Route::post('/', ['uses'=>$controller_name.'@store', 'as'=>'store', 'roles'=>[1,2]]);
        // SHOW
        Route::get('/{id}', ['uses'=>$controller_name.'@show', 'as'=>'show', 'roles'=>[1,2]]);
        // EDIT
        Route::get('/{id}/edit', ['uses'=>$controller_name.'@edit', 'as'=>'edit', 'roles'=>[1,2]]);
        // UPDATE
        Route::put('/{id}/edit', ['uses'=>$controller_name.'@update', 'as'=>'update', 'roles'=>[1,2]]);
        // DELETE
        Route::delete('/{id}', ['uses'=>$controller_name.'@destroy', 'as'=>'destroy', 'roles'=>[1]]);

        
    });


    /*AJAX*/
    Route::group(['as'=>'ajax::', 'prefix'=>'ajax', 'middleware'=>'roles'], function() {
        $controller_name = 'AjaxController';

        // Get Places given client_id
        Route::get('place/{client_id}/job.json', ['uses'=>$controller_name.'@getPlacesByClientId', 'as'=>'place/{client_id}/job.json', 'roles'=>[1,2]]);
        // Get Client Type given client_id
        Route::get('client_type/{client_id}/job.json', ['uses'=>$controller_name.'@getClientTypeByClientId', 'as'=>'client_type/{client_id}/job.json', 'roles'=>[1,2]]);
        // Get Team Leader given team_id
        Route::get('leader/{team_id}/job.json', ['uses'=>$controller_name.'@getLeaderByTeamId', 'as'=>'leader/{team_id}/job.json', 'roles'=>[1,2]]);
        // Get Previous Jobs given client_id and place_id
        Route::get('jobs/{client_id}/{place_id}/job.json', ['uses'=>$controller_name.'@getJobsByClientAndPlaceId', 'as'=>'jobs/{client_id}/{place_id}/job.json', 'roles'=>[1,2]]);

    });

    /*CALENDAR*/
    Route::get('calendar', 'CalendarController@index')->name('calendar');

    /*CONTACT*/
    Route::group(['as'=>'contacts::', 'prefix'=>'contacts'], function() {
        Route::get('contact', 'AboutController@create')->name('create');
        Route::post('contact', 'AboutController@store')->name('store');
    });

    /*PDF*/
    Route::get('pdf', 'PdfController@invoice')->name('pdf');

    /*CHARTS*/
    Route::get('charts', 'ChartController@index')->name('charts');

    /*Route::get('pdf', function () {
        $pdf = PDF::loadView('chart');
        //return $pdf->stream();
        return $pdf->download('mecagoentodo.pdf');
    });*/
});
