<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // dd(Auth::user()->roles[0]);
        if (Auth::check() && Auth::user()->role == ‘admin’) {
            return $next($request);
          }
         return redirect(‘/’);



        // if (Auth::check() && Auth::user()->roles[0]->name== 'admin') {
        //     return $next($request);
        //   }
        //  return redirect('/home');
    }




//     public function handle($request, Closure $next)
// {
//    if (Auth::check() && Auth::user()->role == ‘admin’) {
//      return $next($request);
//    }
//   return redirect(‘/’);
// }
}
