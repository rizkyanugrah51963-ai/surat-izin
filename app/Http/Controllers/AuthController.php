<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
class AuthController extends Controller
{
public function showLogin()
{
return view('auth.login', ['title' => 'Login']);
}
public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string']
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard')->with('success', 'Login berhasil!');
        }

        throw ValidationException::withMessages([
            'email' => __('auth.failed'),
        ]);
}
public function showRegister(): View
{
return view('auth.register', ['title' => 'Daftar']);
}
public function register(Request $request): RedirectResponse
{
$validated = $request->validate([
'name' => 'required|string|min:3|max:100',
'email' => 'required|email|unique:users,email',
'password' => ['required', 'confirmed', Password::defaults()]
]);
User::create([
'name' => $validated['name'],
'email' => $validated['email'],
'password' => Hash::make($validated['password']),
]);
return redirect()->route('login')->with('success', 'Registrasi berhasil. Silakan login.');
}
public function logout(Request $request): RedirectResponse
{
Auth::logout();
$request->session()->invalidate();
$request->session()->regenerateToken();
return redirect()->route('login')->with('success', 'Anda telah logout.');
}
}