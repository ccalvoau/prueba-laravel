<?php

namespace Novus\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class RedirectIfAuthenticated
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->check()) {
            switch ($this->auth->user()->idrol)
            {
                case '1':
                    # Super Administrator 
                    return redirect()->to('super');
                    break;
                case '2':
                    # Administrator
                    return redirect()->to('admin');
                    break;
                case '3':
                    # Leader
                    return redirect()->to('leader');
                    break;
                case '4':
                    # Cleaner
                    return redirect()->to('cleaner');
                    break;
                default:
                    return redirect()->to('login');
                    break;
            }
            return redirect()->route('home');
        }

        return $next($request);
    }
}