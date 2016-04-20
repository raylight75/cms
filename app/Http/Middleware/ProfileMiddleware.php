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
        if ($request->input('modify') !== '2') {
            return redirect('cms');
        }
        return $next($request);
    }
}
