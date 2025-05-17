<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showSign_up ()
    {
        return view('auth.Sign_up');
    }

    public function showLog_in ()
    {
        return view('auth.Log_in');
    }

    public function sign_up (Request $request){
        $valid = $request->validate([
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:30',
            'username' => 'required|string|max:20|unique:users',
            'password' => 'required|string|min:8|max:255|confirmed',
            'contact_email' => 'nullable|email|unique:users,contact_email',
            'contact_number' => [
                'nullable',
                'string',
                'regex:/^(09\d{9}|\+639\d{9})$/'
            ],
        ]);
        
        $valid['password'] = Hash::make($valid['password']);
        
        $user = User::create($valid);

        Auth::login($user);
        return redirect()->route('show.home')->with('success', 'Successfully registered!');

    }

    public function login(Request $request){
        $valid = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

        $attempt = Auth::attempt($valid);
        if ($attempt) {
            $request->session()->regenerate();
            return redirect()->route('show.home');
        }

        throw ValidationException::withMessages([
            'credentials' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout (Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('show.home');
    }
}