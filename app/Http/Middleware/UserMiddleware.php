<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use App\User;

class UserMiddleware
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
        $user = User::find($request->all())->first();
        if ($user->id === Auth::user()->id) {
            return $next($request);
        }
        return redirect('backend/profile')->withErrors('Your are not autorized to view resources');
    }
}
