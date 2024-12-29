<?php

namespace App\Http\Controllers;

use App\Models\LanguageClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClassController extends Controller
{
    public function index()
    {
        $classes = LanguageClass::where('user_id', Auth::id())->orderBy('date')->get();
        return view('classes.index', compact('classes'));
    }

    public function create()
    {
        return view('classes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'date' => 'required|date',
            'start_time' => 'required',
            'end_time' => 'required|after:start_time',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $iconName = null;
        if ($request->hasFile('icon')) {
            $iconName = time() . '.' . $request->icon->extension();
            $request->icon->storeAs('class_icons', $iconName, 'public');
        }

        LanguageClass::create([
            'user_id' => Auth::id(),
            'subject' => $request->subject,
            'date' => $request->date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'icon' => $iconName,
        ]);

        return redirect()->route('classes.index')->with('success', 'Kelas berhasil ditambahkan.');
    }
}
