<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //if(Auth::User('role')=="Restricted_user"){
           // $user_id = $request->session()->get('user')['id'];
           // return redirect('profile/$user_id');
        //}
            return $next($request);
    }
}
