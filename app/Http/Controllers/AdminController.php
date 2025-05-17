<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class AdminController extends Controller
{
    public function showDashboard()
    {
        $posts = Form::where('status', 1)->orderBy('last_seen_date', 'desc')->get();
        return view('Admin_dashboard', compact('posts'));
    }

    public function handle(Request $request, $id)
    {
        $post = Form::findOrFail($id);

        if ($request->input('action') === 'approve') {
            $post->status = 0;
            $post->save();
            return back()->with('success', 'Post approved.');
        }

        if ($request->input('action') === 'decline') {
            $post->delete();
            return back()->with('success', 'Post declined and deleted.');
        }

        return back()->with('error', 'Invalid action.');
    }
}
