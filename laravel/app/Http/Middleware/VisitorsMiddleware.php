<?php

namespace App\Http\Middleware;

use Closure;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class VisitorsMiddleware
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
        if(Sentinel::check() == false)
            return $next($request);
        elseif(Sentinel::getUser()->roles()->first()->slug=='admin')
            return redirect('/ahome');
        elseif(Sentinel::getUser()->roles()->first()->slug=='moderator')
            return redirect('/mhome');
        elseif(Sentinel::getUser()->roles()->first()->slug=='user')
            return redirect('/uhome');
    }
}
