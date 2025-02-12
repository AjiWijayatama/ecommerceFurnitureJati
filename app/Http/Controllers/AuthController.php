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

        $credentials = $request->only('email', 'password');

        // Cek apakah email terdaftar di database
        $user = User::where('email', $request->email)->first();

        if ($user) {
            if (Auth::attempt($credentials)) {
                return redirect()->route('index')->with('success', 'Login Successful!');
            } else{
                 // Jika password salah
                 return back()->with('error', 'Invalid credentials!');
            }

        }

        // Jika email tidak terdaftar
        return back()->with('error', 'Email not registered!')->with('signup_message', 'Belum memiliki akun? Daftar sekarang!');
    }

    /**
     * Logout user
     */
    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json(['message' => 'Logged out successfully']);
    }
}
