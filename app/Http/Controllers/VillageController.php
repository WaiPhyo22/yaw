<?php

namespace App\Http\Controllers;

use App\Models\Village;
use App\Models\Town;
use Illuminate\Http\Request;

class VillageController extends Controller
{
    public function index()
    {
        $villages = Village::with('town')->latest()->paginate(10);
        return view('admin.villages.index', compact('villages'));
    }

    public function create()
    {
        $towns = Town::all();
        return view('admin.villages.create', compact('towns'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'town_id' => 'required|exists:towns,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Village::create($request->all());
        return redirect()->route('villages.index')->with('success', 'Village created successfully.');
    }

    public function edit(Village $village)
    {
        $towns = Town::all();
        return view('admin.villages.edit', compact('village', 'towns'));
    }

    public function update(Request $request, Village $village)
    {
        $request->validate([
            'town_id' => 'required|exists:towns,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $village->update($request->all());
        return redirect()->route('villages.index')->with('success', 'Village updated successfully.');
    }

    public function destroy(Village $village)
    {
        $village->delete();
        return redirect()->route('villages.index')->with('success', 'Village deleted successfully.');
    }
}