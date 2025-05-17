<?php

namespace App\Http\Controllers;
use App\Models\Form;
use Illuminate\Http\Request;

class HomeRoute extends Controller
{
    public function showHome()
    {
        $posts = Form::orderBy('last_seen_date', 'desc')->get();
        return view('Homepage', compact('posts'));
    }
}
