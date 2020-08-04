<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use App\Models\Roles;
use Auth;

class RedirectIfAdministrator
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
            if(Roles::isAdmin(Auth::user()->id)){
                return $next($request);
            }
        }
        return redirect('/');
        //return $next($request);
    }
}
