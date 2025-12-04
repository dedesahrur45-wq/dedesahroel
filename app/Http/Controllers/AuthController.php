<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Tampilkan form login
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Proses login dengan FormRequest validation
     */
    public function login(LoginRequest $request)
    {
        $validated = $request->validated();

        // Cek kredensial pengguna
        if (Auth::attempt($validated, $request->filled('remember'))) {
            // Login berhasil
            $request->session()->regenerate();

            $user = Auth::user();
            if (($user->role ?? null) === 'admin') {
                return redirect()->intended('/')->with('success', 'Login berhasil! (Admin)');
            }

            return redirect()->intended('/')->with('success', 'Login berhasil!');
        }

        // Login gagal
        throw ValidationException::withMessages([
            'email' => 'Email atau password salah.',
        ]);
    }

    /**
     * Proses logout
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Logout berhasil!');
    }
}
