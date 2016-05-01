<?php

namespace Novus\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Lang;
use Novus\Http\Requests;
use Novus\Http\Requests\ContactFormRequest;

class AboutController extends Controller
{
    private $path = 'contacts';
    private $email = '';
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \View::make($this->path.'.contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Novus\Http\Requests\ContactFormRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactFormRequest $request)
    {
        $this->email = $request->get('email');

        // Setting $data to formatting the email
        $data = array(
            'name' => strtoupper($request->get('name')),
            'email' => $this->email,
            'user_message' => $request->get('user_message'),
        );
        
        \Mail::send('emails.contact',
            $data,
            function ($message) {
                $message->from('novus@gmail.com', Lang::get('validation.attributes.contact.email.from_description'));
                $message->to( $this->email );
                $message->subject(Lang::get('validation.attributes.contact.email.subject'));
            });

        // Showing flash message to the user
        Session::flash('flash_message', Lang::get('validation.messages.email_sent'));
        Session::flash('flash_type', 'success');

        return \View::make($this->path.'.contact');
    }
}