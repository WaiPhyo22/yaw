<?php

namespace App\Http\Controllers;

use App\Models\Tradition;
use Illuminate\Http\Request;

class TraditionController extends Controller
{
    public function index()
    {
        $traditions = Tradition::latest()->paginate(10);
        return view('admin.traditions.index', compact('traditions'));
    }

    public function create()
    {
        return view('admin.traditions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
        ]);

        Tradition::create($request->all());
        return redirect()->route('traditions.index')->with('success', 'Tradition created successfully.');
    }

    public function edit(Tradition $tradition)
    {
        return view('admin.traditions.edit', compact('tradition'));
    }

    public function update(Request $request, Tradition $tradition)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
        ]);

        $tradition->update($request->all());
        return redirect()->route('traditions.index')->with('success', 'Tradition updated successfully.');
    }

    public function destroy(Tradition $tradition)
    {
        $tradition->delete();
        return redirect()->route('traditions.index')->with('success', 'Tradition deleted successfully.');
    }

    // 🔸 Public View
    public function publicList()
    {
        $traditions = Tradition::latest()->paginate(6);
        return view('frontend.traditions', compact('traditions'));
    }
}
