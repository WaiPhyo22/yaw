<?php

namespace App\Http\Controllers;

use App\Models\Town;
use App\Models\Festival;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FestivalController extends Controller
{
    public function index()
    {
        $festivals = Festival::latest()->paginate(10);
        return view('admin.festivals.index', compact('festivals'));
    }

    public function create()
    {
        $towns = Town::all();
        return view('admin.festivals.create', compact('towns'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'festival_date' => 'nullable|date',
            'town_id' => 'nullable|exists:towns,id',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $festival = new Festival();
        $festival->name = $request->name;
        $festival->festival_date = $request->festival_date;
        $festival->town_id = $request->town_id;
        $festival->description = $request->description;
    
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('festivals', 'public');
            $festival->image = $path;
        }
    
        $festival->save();
    
        return redirect()->route('festivals.index')->with('success', 'Festival created successfully.');
    }

    public function edit(Festival $festival)
    {
        $towns = Town::all();
        return view('admin.festivals.edit', compact('festival', 'towns'));
    }

    public function update(Request $request, Festival $festival)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'festival_date' => 'nullable|date',
            'town_id' => 'nullable|exists:towns,id',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $data = $request->only(['name', 'festival_date', 'town_id', 'description']);
    
        if ($request->hasFile('image')) {
            // Delete old image
            if ($festival->image && file_exists(storage_path('app/public/' . $festival->image))) {
                Storage::disk('public')->delete($festival->image);
            }
    
            // Upload new image
            $path = $request->file('image')->store('festivals', 'public');
            $data['image'] = $path;
        }
    
        $festival->update($data);
    
        return redirect()->route('festivals.index')->with('success', 'Festival updated successfully.');
    }

    public function destroy(Festival $festival)
    {
        $festival->delete();
        return redirect()->route('festivals.index')->with('success', 'Festival deleted successfully.');
    }
}
