<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;
use Session;

class AuthController extends Controller
{
    // Show login form
    public function showLogin()
    {
        return view('components.auth');
    }

    // Show register form
    public function showRegister()
    {
        return view('components.auth');
    }

    // Handle registration
    public function register(Request $request)
    {
        try{
            
            $request->validate([
                'username' => 'required|string|max:255',
                'phone_number' => 'nullable|string|max:15',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6|confirmed',
                'agreement' => 'required',
                'subscription' => 'nullable|boolean',
            ]);

            $user = User::create([
                'name' => $request->username,
                'phone' => $request->phone,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'agreement' => $request->agreement,
                'subscription' => $request->subscription,
            ]);

            return redirect()->route('/home?page=about')->with('success', 'Registration successful! Please log in.');
        } catch (Exception $e) {
            return back()->with('error', 'Something went wrong: ' . $e->getMessage());
        }
    }

    // Handle login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        try {
            $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);
    
            if (Auth::attempt($credentials)) {
                $request->session()->put('user', Auth::user());
                return redirect('/dashboard');
            }
    
            return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
        } catch (Exception $e) {
            return back()->with('error', 'Login failed: ' . $e->getMessage());
        }

        // return back()->withErrors(['email' => 'Invalid credentials']);
    }

    // Logout and clear session
    public function logout(Request $request)
    {
        $request->session()->forget('user');
        Auth::logout();
        return redirect()->route('login');
    }
}
