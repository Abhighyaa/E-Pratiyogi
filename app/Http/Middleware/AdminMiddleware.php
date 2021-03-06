<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;
class AdminMiddleware
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
       
        $user = User::where('email',Auth::user()->email)->first();
        if($user->role->first()->name == 'admin')
                 return $next($request);
        return redirect()->back()->with('error',"You don't have access to this URL");
    }
}
