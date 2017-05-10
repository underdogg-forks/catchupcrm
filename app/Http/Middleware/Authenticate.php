<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

use Config;


class Authenticate
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param  string|null $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                /*
                                if (Auth::user()->can('manage_admin')) {
                                    return redirect()->guest(Config::get('kagi.admin_login_return_path', '/admin/dashboard'));
                                } else {
                                    return redirect()->guest(Config::get('kagi.login_return_path', '/'));
                                }
                */
                return redirect()->guest('login');
                //return redirect()->guest(Config::get('kagi.auth_fail_redirect', '/login'));

            }
        }

        return $next($request);
    }
}
