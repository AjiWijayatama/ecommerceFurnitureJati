<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Notifications\Notifiable;
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

    public function resetPassword(Request $request)
    {
        // Validasi form reset password
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8', // Password dan konfirmasi password
            'token' => 'required', // Token reset password
        ]);

        // Temukan user berdasarkan email
        $user = User::where('email', $request->email)->first();

        // Jika user ditemukan, reset password
        if ($user) {
            // Validasi token dan reset password
            $status = Password::reset(
                $request->only('email', 'password', 'password_confirmation', 'token'),
                function ($user, $password) {
                    $user->forceFill([
                        'password' => Hash::make($password),
                    ])->save();
                }
            );

            if ($status == Password::PASSWORD_RESET) {
                return redirect()->route('login.form')->with('success', 'Password reset successful!');
            }

            return back()->withErrors(['email' => 'Failed to reset password']);
        }

        return back()->withErrors(['email' => 'Email not found']);
    }



    /**
     * Mengirimkan link reset password ke email
     */
    public function sendResetLink(Request $request)
    {
        // Validasi email
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        // Mengirimkan link reset password ke email pengguna
        $response = Password::sendResetLink(
            $request->only('email')
        );

        // Mengecek apakah email berhasil dikirim
        if ($response == Password::RESET_LINK_SENT) {
            return back()->with('success', 'We have emailed your password reset link!');
        }

        return back()->withErrors(['email' => 'We couldn’t find a user with that email address.']);
    }


    // Proses Register User Baru
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'phone_number' => 'nullable|string|max:20',  // Validasi untuk phone_number
            'address' => 'nullable|string',  // Validasi untuk address
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,  // Menyimpan phone_number
            'address' => $request->address,  // Menyimpan address
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

        // $request->has('remember') akan true kalau checkbox dicentang
        Auth::login($user, $request->has('remember')); 

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