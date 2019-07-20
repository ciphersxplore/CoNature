<?php

namespace App\Http\Middleware;

use Closure;

class facilitator
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
        if ($request->user()->access == 'Admin' || $request->user()->access == 'Handler' || $request->user()->access == 'Contributor') {
            return redirect('/home');
        }

        return $next($request);
    }
}
