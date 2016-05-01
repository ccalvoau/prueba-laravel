<?php

namespace Novus\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use Lang;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->user() === null)
        {
            // Showing flash message to the user
            Session::flash('flash_message_danger', Lang::get('validation.messages.no_permission'));

            return \View::make('login');
        }
        $actions = $request->route()->getAction();
        $roles = isset($actions['roles']) ? $actions['roles'] : null;

        if ($request->user()->hasAnyRole($roles) || !$roles)
        {
            return $next($request);
        }

        // Showing flash message to the user
        Session::flash('flash_message_danger', Lang::get('validation.messages.no_permission'));

        return \View::make('home');
    }
}
