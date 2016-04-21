<?php

namespace App\Http\Middleware;

use Illuminate\Contracts\Auth\Guard;
use Closure;
use Auth;

class AdminMiddleware
{
    /**
         * The Guard implementation.
         *
         * @var Guard
         */
        protected $auth;

        /**
         * Create a new filter instance.
         *
         * @param  Guard  $auth
         * @return void
         */
        public function __construct(Guard $auth)
        {
            $this->auth = $auth;
        }

        /**
         * Handle an incoming request.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \Closure  $next
         * @return mixed
         */
        public function handle($request, Closure $next, $role)
        {
            if ($this->auth->guest())
            {
                return redirect()->guest('login');
            }
            else
            {
            if (!$request->user()->hasRole($role))
            {
                return response()->view('errors.401', [],401);
            }
                return $next($request);
            }            
        }
        /*public function handle($request, Closure $next, $role)
        {         
            if($role == "Admin")         
                return $next($request);
         
            else         
                return response('Unauthorized.', 401);         
        }*/
        //fast method without DB
}