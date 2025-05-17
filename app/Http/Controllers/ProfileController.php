<?php

namespace App\Http\Controllers;
use \App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function showProfile(){
        $posts = Form::where('user_id', auth()->id())->get();
        return view('User_profile', [
            'user' => auth()->user(),
            'posts' => $posts
        ]);
    }
    public function updateProfile(Request $request){
        $valid = $request->validate([
            'first_name' => 'sometimes|string|max:50',
            'last_name' => 'sometimes|string|max:30',
            'username' => 'sometimes|string|max:20|unique:users,username,' . auth()->id(),
            'password' => 'nullable|string|min:8|max:255|confirmed',
            'contact_email' => 'nullable|email|unique:users,contact_email,' . auth()->id(),
            'contact_number' => [
                'nullable',
                'string',
                'regex:/^(09\d{9}|\+639\d{9})$/'
            ],
        ]);

        $user = auth()->user();
        if ($request->filled('password')) {
            $valid['password'] = Hash::make($valid['password']);
        } else {
            unset($valid['password']);
        }
        $user->update($valid);

        return redirect()->route('show.profile')->with('success', 'Profile updated successfully!');
    }
}
