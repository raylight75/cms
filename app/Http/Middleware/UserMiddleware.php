<?php

namespace App\Http\Middleware;

use App\Repositories\UserRepository;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Closure;

class UserMiddleware
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    protected $user;

    /**
     * Create a new filter instance.
     *
     * @param  Guard $auth
     * @return void
     */
    public function __construct(Guard $auth, UserRepository $user)
    {
        $this->auth = $auth;
        $this->user = $user;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->has('update')) {
            $user = $this->user->userWhereId($request);
        } else {
            $user = $this->user->findOrFailFirst($request);
        }
        if ($user->id === $this->auth->user()->id) {
            return $next($request);
        }
        return redirect('backend/profile')
            ->withErrors('Your are not autorized to view resources');
    }
}
