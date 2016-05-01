<?php

namespace Novus\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Session;
use Lang;
use Novus\Cleaner;
use Novus\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Novus\User;

class PasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Create a new password controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->subject = trans('passwords.email.password.subject');
    }

    /**
     * Rewrite function getReset from ResetsPasswords
     * 
     * @param null $token
     * @param $email
     * @return mixed
     * @throws NotFoundHttpException
     */
    public function getReset($token = null, $email)
    {
        if (is_null($token)) {
            throw new NotFoundHttpException;
        }

        $data = [
            'token' => $token,
            'email' => $email,
        ];

        //dd($data);

        // Redirect to reset password
        return \View::make('auth.reset', $data);
    }

    /**
     * Validate an user email (first time user).
     *
     * @param $email
     * @return \Illuminate\Contracts\View\View
     */
    public function getSetEmail($email)
    {
        $user = new User();
        $user->validateEmail($email);

        $user_o = $user->getUserByEmail($email);
        if($user_o->isNotAdmin())
        {
            $cleaner = new Cleaner();
            $cleaner->validateCleaner($email);
        }

        // Showing flash message to the user
        Session::flash('status', Lang::get('validation.messages.users.user_validated'));

        $data = [
            'email' => $email,
        ];

        //dd($data);

        // Redirect to set password after validated the email
        return \View::make('auth.password_set', $data);
    }

    /**
     * Send a reset link to the given user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postSetEmail(Request $request)
    {
        $this->validate($request, ['email' => 'required|email']);

        $request_type = $request->get('request_type');

        if ($request_type == "set")
        {
            $this->subject = trans('passwords.email.set_password.subject');
        }

        \Config::set('auth.password.email', 'emails.set_password');

        $response = Password::sendResetLink($request->only('email'), function (Message $message) {
            $message->subject($this->getEmailSubject());
        });

        \Config::set('auth.password.email', 'emails.password');

        // Showing flash message to the user
        Session::flash('status', Lang::get('validation.messages.users.set_password_link'));

        $data = [
            'email' => $request->get('email'),
        ];
        
        //dd($data);

        // Redirect to set password after validated the email
        return \View::make('auth.password_set',$data);
    }

    /**
     * Display the password set view for the given token.
     * 
     * @param null $token
     * @return \Illuminate\Contracts\View\View
     * @throws NotFoundHttpException
     */
    public function getSetPassword($token = null, $email)
    {
        if (is_null($token)) {
            throw new NotFoundHttpException;
        }
        
        $data = [
            'token' => $token,
            'email' => $email,
        ];
        
        //dd($data);

        // Redirect to set password after validated the email
        return \View::make('auth.set_password', $data);
    }

    /**
     * Reset the given user's password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postSetPassword(Request $request)
    {
        $this->validate($request, [
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        $credentials = $request->only(
            'email', 'password', 'password_confirmation', 'token'
        );

        $response = Password::reset($credentials, function ($user, $password) {
            $this->resetPassword($user, $password);
        });

        switch ($response) {
            case Password::PASSWORD_RESET:
                return redirect($this->redirectPath())->with('status', trans($response));

            default:
                return redirect()->back()
                    ->withInput($request->only('email'))
                    ->withErrors(['email' => trans($response)]);
        }
    }
}