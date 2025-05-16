<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;


Log::info('auth()->id(): ' . auth()->id());

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showReport()
    {
        return view('Form_submission');
    }

    public function report(Request $request)
    {
        $valid = $request->validate([
            'lost_or_found' => 'required|in:lost,found',
            'item_name' => 'required|string|max:255',
            'last_seen_date' => 'required|date',
            'last_seen_location' => 'required|string|max:255',
            'other_details' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        // Handle file upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
        }

        Form::create([
            'user_id' => auth()->id(),
            'lost_or_found' => $valid['lost_or_found'],
            'item_name' => $valid['item_name'],
            'last_seen_date' => $valid['last_seen_date'],
            'last_seen_location' => $valid['last_seen_location'],
            'other_details' => $valid['other_details'] ?? null,
            'image_path' => $imagePath
        ]);

        return redirect()->route('show.home')->with('success', 'Report submitted successfully!');
    }
}
