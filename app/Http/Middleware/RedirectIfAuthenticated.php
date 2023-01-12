<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\Roles;
use Log;
use App\Models\User;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guardx
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::check()) {
            if(User::checkUserRole(Auth::user()->email) == 'guest')
            {
                return redirect('/');
            }
            elseif (User::checkUserRole(Auth::user()->email) == 'author' || User::checkUserRole(Auth::user()->email) == 'administrator')
            {
                return $next($request);
            }
        }
        return redirect('/');
    }
}

