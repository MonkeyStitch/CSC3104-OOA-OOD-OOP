<?php

namespace App\Http\Middleware;

use Closure;

class CheckDrivers
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
        if ($request->user()->is_drivers) {
            return $next($request);
        }

        return redirect(config('redirect_page.permission.drivers'));
    }
}
