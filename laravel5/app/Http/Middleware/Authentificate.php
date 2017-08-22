<?php

namespace App\Http\Middleware;

use Closure;

class Authentificate
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
        if ( isset($_SERVER['X-USERNAME']) && ($_SERVER['X-USERNAME'] === 'admin') ) {
            if ( isset($_SERVER['X-PASSWORD']) && ($_SERVER['X-PASSWORD'] === hash_hmac('ripemd160', '123456', 'strawberry')) ) {
                return $next($request);
            }
        }
        header('HTTP/l.1 401 Unauthorized');
        die();
    }
}