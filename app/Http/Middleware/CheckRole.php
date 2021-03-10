<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
  /**
  * Handle an incoming request.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \Closure  $next
  * @return mixed
  */
  public function handle(Request $request, Closure $next) {
    /**
    * if user is not logged in return to Login page
    * */

    if (!auth()->check()) {
      return redirect()->route('login');
    }

    /**
    * if user is not user return to `/`
    * */

    if (auth()->user()->role === 'user') {
      return redirect('/');
    }
    return $next($request);
  }
}