<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Tampilkan halaman register
     */

    public function showRegisterForm()
    {
        return view('auth.register');
    }


    // Proses Register User Baru
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user',  // Pastikan role default adalah user
        ]);

        return redirect()->route('login.form')->with('success', 'Register successful!');
    }

    /**
     * Tampilkan halaman form login
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $adminEmail    = 'admin1@gmail.com';
        $adminPassword = 'admin123';

        // Jika email dan password sama dengan admin lokal
        if ($request->email === $adminEmail && $request->password === $adminPassword) {
            $admin = User::where('email', $adminEmail)->first();
            if ($admin) {
                Auth::login($admin);
                return redirect()->route('admin.dashboard')->with('success', 'Welcome Admin!');
            } else {
                return back()->with('error', 'Admin tidak ditemukan di database.');
            }
        }

        // Cek user biasa
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->with('error', 'Akun belum terdaftar.');
        }

        if (!Hash::check($request->password, $user->password)) {
            return back()->with('error', 'Email atau password salah.');
        }

        Auth::login($user);

        return $user->role === 'admin'
            ? redirect()->route('admin.dashboard')->with('success', 'Login sebagai admin.')
            : redirect()->route('index')->with('success', 'Login berhasil!');
    }

    /**
     * Logout user.
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('produk.index');
    }
}