<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{
  /**
  * Handle an incoming request.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \Closure  $next
  * @return mixed
  */
  public function handle(Request $request, Closure $next) {
    
    // Set Locale Language Via Session
    if (!empty(\Session::get('locale'))) {
      \App::setLocale(\Session::get('locale'));
    }
    
    return $next($request);
  }
}