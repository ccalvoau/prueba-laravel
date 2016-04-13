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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', [
    'uses' => 'HomeController@index',
    'as' => 'home'
]);

//Route::get('/', 'WelcomeController@index');

// Authentication routes...
Route::get('login', [
    'uses' => 'Auth\AuthController@getLogin',
    'as' => 'login',
]);
Route::post('login', 'Auth\AuthController@postLogin');

Route::get('logout', [
    'uses' => 'Auth\AuthController@getLogout',
    'as' => 'logout',
]);

// Registration routes...
Route::get('register', [
    'uses' => 'Auth\AuthController@getRegister',
    'as' => 'register',

]);
Route::post('register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password', [
    'as' => 'password',
    'uses' => 'Auth\PasswordController@getEmail'
]);

Route::post('password', [
    'as' => 'password',
    'uses' => 'Auth\PasswordController@postEmail'
]);

// Password reset routes...
Route::get('reset/{token}', [
    'as' => 'reset/{token}',
    'uses' => 'Auth\PasswordController@getReset'
]);
Route::post('reset', [
    'as' => 'reset',
    'uses' => 'Auth\PasswordController@postReset'
]);





Route::pattern('id', '\d+');

Route::group(['middleware' => ['auth']], function () {

    Route::resource('cleaners', 'CleanerController');

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

/*
    Route::get('cleaners',
        ['as' => 'cleaners', 'uses' => 'CleanerController@index']);

    Route::get('cleaners/create',
        ['as' => 'cleaners/create', 'uses' => 'CleanerController@create']);*/

    //Route::controller('crud', 'CrudController');

    // LIST
    Route::get('crud', [
        'as' => 'crud.index',
        'uses' => 'CrudController@index'
    ]);
    // CREATE
    Route::get('crud/create', [
        'as' => 'crud.create',
        'uses' => 'CrudController@create'
    ]);
    // STORE
    Route::post('crud', [
        'as' => 'crud.store',
        'uses' => 'CrudController@store'
    ]);
    // SHOW
    Route::get('crud/{id}', [
        'as' => 'crud.show',
        'uses' => 'CrudController@show'
    ]);
    // EDIT
    Route::get('crud/{id}/edit', [
        'as' => 'crud.edit',
        'uses' => 'CrudController@edit'
    ]);
    // UPDATE
    Route::put('crud/{id}', [
        'as' => 'crud.update',
        'uses' => 'CrudController@update'
    ]);
    // DELETE
    Route::delete('crud/{id}', [
        'as' => 'crud.destroy',
        'uses' => 'CrudController@destroy'
    ]);


    /*PAYMENT_INFOS*/
    // LIST
    Route::get('payment_infos', [
        'as' => 'payment_infos.index',
        'uses' => 'PaymentInfoController@index'
    ]);
    // CREATE
    Route::get('payment_infos/create', [
        'as' => 'payment_infos.create',
        'uses' => 'PaymentInfoController@create'
    ]);
    // STORE
    Route::post('payment_infos', [
        'as' => 'payment_infos.store',
        'uses' => 'PaymentInfoController@store'
    ]);
    // SHOW
    Route::get('payment_infos/{id}', [
        'as' => 'payment_infos.show',
        'uses' => 'PaymentInfoController@show'
    ]);
    // EDIT
    Route::get('payment_infos/{id}/edit', [
        'as' => 'payment_infos.edit',
        'uses' => 'PaymentInfoController@edit'
    ]);
    // UPDATE
    Route::put('payment_infos/{id}/edit', [
        'as' => 'payment_infos.update',
        'uses' => 'PaymentInfoController@update'
    ]);
    // DELETE
    Route::delete('payment_infos/{id}', [
        'as' => 'payment_infos.destroy',
        'uses' => 'PaymentInfoController@destroy'
    ]);
    
    
    /*CLIENTS*/
    // LIST
    Route::get('clients', [
        'as' => 'clients.index',
        'uses' => 'ClientController@index'
    ]);
    // CREATE
    Route::get('clients/create', [
        'as' => 'clients.create',
        'uses' => 'ClientController@create'
    ]);
    // STORE
    Route::post('clients', [
        'as' => 'clients.store',
        'uses' => 'ClientController@store'
    ]);
    // SHOW
    Route::get('clients/{id}', [
        'as' => 'clients.show',
        'uses' => 'ClientController@show'
    ]);
    // EDIT
    Route::get('clients/{id}/edit', [
        'as' => 'clients.edit',
        'uses' => 'ClientController@edit'
    ]);
    // UPDATE
    Route::put('clients/{id}/edit', [
        'as' => 'clients.update',
        'uses' => 'ClientController@update'
    ]);
    // DELETE
    Route::delete('clients/{id}', [
        'as' => 'clients.destroy',
        'uses' => 'ClientController@destroy'
    ]);


    /*PLACES*/
    // LIST
    Route::get('places', [
        'as' => 'places.index',
        'uses' => 'PlaceController@index'
    ]);
    // CREATE
    Route::get('places/create', [
        'as' => 'places.create',
        'uses' => 'PlaceController@create'
    ]);
    // STORE
    Route::post('places', [
        'as' => 'places.store',
        'uses' => 'PlaceController@store'
    ]);
    // SHOW
    Route::get('places/{id}', [
        'as' => 'places.show',
        'uses' => 'PlaceController@show'
    ]);
    // EDIT
    Route::get('places/{id}/edit', [
        'as' => 'places.edit',
        'uses' => 'PlaceController@edit'
    ]);
    // UPDATE
    Route::put('places/{id}/edit', [
        'as' => 'places.update',
        'uses' => 'PlaceController@update'
    ]);
    // DELETE
    Route::delete('places/{id}', [
        'as' => 'places.destroy',
        'uses' => 'PlaceController@destroy'
    ]);


    /*MAIL*/
    Route::get('contact', [
        'as' => 'contact',
        'uses' => 'AboutController@create'
    ]);
    Route::post('contact', [
        'as' => 'contact_store',
        'uses' => 'AboutController@store'
    ]);


    /*PDF*/
    Route::get('pdf', [
        'as' => 'pdf',
        'uses' => 'PdfController@invoice'
    ]);
    /*Route::get('pdf', function () {
        $pdf = PDF::loadView('chart');
        //return $pdf->stream();
        return $pdf->download('mecagoentodo.pdf');
    });*/

    /*CALENDAR*/
    Route::get('calendar', [
        'as' => 'calendar',
        'uses' => 'CalendarController@index'
    ]);


    /*CALENDAR*/
    Route::get('chart', [
        'as' => 'chart',
        'uses' => 'ChartController@index'
    ]);
});
