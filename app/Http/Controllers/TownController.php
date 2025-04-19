<?php

namespace App\Http\Controllers;

use App\Models\Town;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TownController extends Controller
{
    public function index() {
        $towns = Town::all();
        return view('admin.towns.index', compact('towns'));
    }

    public function create() {
        return view('admin.towns.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $town = new Town();
        $town->name = $request->name;
        $town->description = $request->description;
    
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('towns', 'public');
            $town->image = $path;
        }
    
        $town->save();
    
        return redirect()->route('towns.index')->with('success', 'Town created successfully.');
    }

    public function edit(Town $town) {
        return view('admin.towns.edit', compact('town'));
    }

    public function update(Request $request, Town $town) {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $town->name = $request->name;
        $town->description = $request->description;
    
        if ($request->hasFile('image')) {
            // delete old image
            if ($town->image && Storage::disk('public')->exists($town->image)) {
                Storage::disk('public')->delete($town->image);
            }
    
            $path = $request->file('image')->store('towns', 'public');
            $town->image = $path;
        }
    
        $town->save();
    
        return redirect()->route('towns.index')->with('success', 'Town updated successfully.');
    }

    public function destroy(Town $town) {
        $town->delete();
        return back()->with('success', 'Deleted');
    }
}
