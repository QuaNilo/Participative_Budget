<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAccess
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // Check if the user has either ROLE_SUPER_ADMIN or ROLE_ADMIN
            if (Auth::user()->hasRole([Role::ROLE_SUPER_ADMIN, Role::ROLE_ADMIN])) {
                return $next($request);
            }
        }

        // Redirect or return response for unauthorized access
        return redirect()->route('home'); // Redirect to home route or show error message
    }
}
