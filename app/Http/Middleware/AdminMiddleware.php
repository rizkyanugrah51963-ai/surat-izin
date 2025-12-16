<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // JIKA BUKAN LOGIN ADMIN
        if (!auth('admin')->check()) {

            // Jika siswa / user biasa sudah login
            if (auth()->check()) {
                abort(403, 'AKSES ADMIN DITOLAK');
            }

            // Jika belum login sama sekali
            return redirect()->route('admin.login');
        }

        return $next($request);
    }
}
