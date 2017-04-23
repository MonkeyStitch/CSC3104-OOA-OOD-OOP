<?php

namespace App\Http\Middleware;

use Closure;

class CheckMembers
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
        if ($request->user()->is_members) {
            return $next($request);
        }

        return redirect(config('redirect_page.permission.members'));
    }
}
