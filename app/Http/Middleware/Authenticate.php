<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

use function PHPUnit\Framework\isEmpty;

class Authenticate extends Middleware
{
    // /**
    //  * Get the path the user should be redirected to when they are not authenticated.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return string|null
    //  */
    // protected function redirectTo($request)
    // {
    //     if (! $request->expectsJson()) {
    //         return route('home');
    //     }
    // }

    public function handle($request, Closure $next, ...$guards)
    {
        if(! session('user')){
          return redirect('/');  
        }

        return $next($request);
    }
}
