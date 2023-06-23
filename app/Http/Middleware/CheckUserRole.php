<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if (!Auth::check()) {
            // User is not authenticated, redirect to login page
            return redirect()->route('login');
        }

        $user = Auth::user();

        // Check if the user has the required role
        if ($user->role !== $role) {
            // Redirect to appropriate dashboard or deny access
            if ($role === 'candidate') {
                return redirect()->route('candidate');
            } elseif ($role === 'company') {
                return redirect()->route('company');
            }
        }
        return $next($request);
    }
}
