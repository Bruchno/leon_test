<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class SentinelAdminUser
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
        $user = Sentinel::getUser();
        $admin = Sentinel::findRoleBySlug('administrator');

        if (!$user->inRole($admin)) {
            return redirect()->route('login');
        }
        return $next($request);
    }
}