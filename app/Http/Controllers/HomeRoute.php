<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeRoute extends Controller
{
    public function showHome ()
    {
        return view('Homepage'); //change to Homepage when OK
    }
}
