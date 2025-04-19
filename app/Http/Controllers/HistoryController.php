<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        $histories = History::latest()->paginate(10);
        return view('admin.histories.index', compact('histories'));
    }

    public function create()
    {
        return view('admin.histories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        History::create($request->only('title', 'content'));

        return redirect()->route('histories.index')->with('success', 'History added successfully.');
    }

    public function edit(History $history)
    {
        return view('admin.histories.edit', compact('history'));
    }

    public function update(Request $request, History $history)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $history->update($request->only('title', 'content'));

        return redirect()->route('histories.index')->with('success', 'History updated successfully.');
    }

    public function destroy(History $history)
    {
        $history->delete();
        return redirect()->route('histories.index')->with('success', 'History deleted.');
    }
}
