<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            if (Auth::user()->role_id == '1' || Auth::user()->role_id == 3) {
                return $next($request);
            } else {
                // Điều hướng về client
                return redirect()->route('home');
            }
        } else {
            return redirect()->route('auth.login')->with(
                [
                    'msg' => 'Bạn phải đăng nhập trước!'
                ]
            );
        }
    }
}
