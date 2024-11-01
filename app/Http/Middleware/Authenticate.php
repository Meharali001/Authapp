<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            // Check the guard being used
            if ($request->is('Admin/*')) {
                return route('AdminViewLogin'); // Redirect to admin login if the route starts with 'Admin'
            } else {
                return route('UserViewLogin'); // Redirect to user login for all other routes
            }
        }
    }
}

