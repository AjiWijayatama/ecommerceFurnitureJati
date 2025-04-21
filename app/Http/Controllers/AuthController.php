<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Register a new user
     */

    public function showRegisterForm()
    {
        return view('auth.register');
    }



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
     * Login user
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
         // Tentukan email dan password admin
        $adminEmail = 'admin1@gmail.com'; // Ganti dengan email admin yang kamu inginkan
        $adminPassword = 'admin123'; // Ganti dengan password admin yang kamu inginkan

        // Jika email yang dimasukkan adalah email admin
        if ($request->email == $adminEmail && $request->password == $adminPassword) {
            // Login sebagai admin secara manual
            $user = User::where('email', $adminEmail)->first();
            
            if ($user) {
                Auth::login($user); // Login user admin
                return redirect()->route('admin.dashboard')->with('success', 'Welcome Admin!');
            }else {
                return back()->with('error', 'Admin not found in the system!');
            } 
        }
        // Jika bukan admin, lakukan login seperti biasa
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            // Cek peran pengguna setelah login
            $user = Auth::user();

            // Jika admin, arahkan ke halaman dashboard admin
            if ($user->role == 'admin') {
                return redirect()->route('admin.dashboard')->with('success', 'Login Successful!');
            } else {
                // Jika bukan admin, arahkan ke halaman utama
                return redirect()->route('index')->with('success', 'Login Successful!');
            }
        }
        // Jika email atau password salah
        return back()->with('error', 'Email or password is incorrect!')->with('signup_message', 'Belum memiliki akun? Daftar sekarang!');
        // Cek apakah email terdaftar di database
        $user = User::where('email', $request->email)->first();
    }

    /**
     * Logout user
     */
    public function logout(Request $request)
    {
        Auth::logout(); // Logout user dari sesi

        $request->session()->invalidate(); // Hapus sesi pengguna
        $request->session()->regenerateToken(); // Regenerasi token CSRF untuk keamanan

        return redirect()->route('produk.index'); // Redirect ke halaman utama
    }
}
