<?php

namespace App\Http\Middleware;

use Closure;

class CheckOwner
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

        //debug(config('redirect_page.permission.owner'));

        if ($request->user()->is_owner) {
            return $next($request);
        }

        return redirect(config('redirect_page.permission.owner'));
    }
}
