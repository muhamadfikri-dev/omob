<?php

namespace App\Http\Middleware;

use App\User;
use Illuminate\Support\Facades\Auth;
use Closure;

class Teacher
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
        $user = User::where('nis', Auth::user()->nis)->first();
        if ($user->role == 3) {
            return abort(401);
        }
        return $next($request);
    }
}
