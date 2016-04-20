<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class ProfileMiddleware
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
        if ($request->input('modify') == Auth::user()->id) {
            return $next($request);
        }elseif($request->input('show') == Auth::user()->id){
            return $next($request);
        }
        return redirect('cms');
    }
}
