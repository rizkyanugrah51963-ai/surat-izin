<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect('/login-siswa');
        }

        // asumsi siswa TIDAK ada di tabel users
        // dan login siswa pakai guard / session sendiri
        // jika siswa ada role, bisa disesuaikan

        return $next($request);
    }
}
