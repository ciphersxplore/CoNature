<?php

namespace App\Http\Middleware;

use Closure;

class contributor
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
        if ($request->user()->access == 'Facility' || $request->user()->access == 'Handler' || $request->user()->access == 'Admin') {
            return redirect('/home');
        }

        return $next($request);
    }
}
