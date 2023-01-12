<?php

namespace App\Http\Middleware;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;
use App\Models\User;
use App\Models\Roles;
use Auth;
use Log;

class RedirectIfAdministrator extends Middleware
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
