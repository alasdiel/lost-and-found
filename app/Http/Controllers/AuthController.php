<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
