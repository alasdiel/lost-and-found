<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showProfile(){
        return view('Profile');
    }
    public function updateProfile(Request $request){
        $valid = $request->validate([
            'first_name' => 'sometimes|string|max:50',
            'last_name' => 'sometimes|string|max:30',
            'username' => 'sometimes|string|max:20|unique:users,username,' . auth()->id(),
            'password' => 'nullable|string|min:8|max:255|confirmed',
            'contact_email' => 'nullable|email|unique:users,contact_email,' . auth()->id(),
            'contact_number' => 'nullable|string|regex:/^(09\d{9}|\+639\d{9})$/'
        ]);

        $user = auth()->user();
        $user->first_name = $valid['first_name'];
        $user->last_name = $valid['last_name'];
        $user->username = $valid['username'];
        $user->contact_email = $valid['contact_email'];
        $user->contact_number = $valid['contact_number'];
        
        // Only update password if it is provided
        if ($valid['password']) {
            $user->password = bcrypt($valid['password']);
        }

        $user->save();

        return redirect()->route('show.profile')->with('success', 'Profile updated successfully!');
    }
}
