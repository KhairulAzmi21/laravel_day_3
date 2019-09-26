<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        // if this user does not have a role,
        if(!auth()->user()->hasRole($role)){
            return redirect("home")->with('role_check', 'You are not permitted because you are not admin');
            // dd("you are not permitted to do this");
        }
        // if yes, go to next request
        return $next($request);
    }
}
