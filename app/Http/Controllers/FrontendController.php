<?php

namespace App\Http\Controllers;

use App\Models\Town;
use App\Models\History;
use App\Models\Village;
use App\Models\Festival;
use App\Models\Tradition;
use App\Models\Suggestion;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home() {
        $towns = Town::all();
        return view('frontend.home', compact('towns'));
    }

    public function about() {
        return view('frontend.about');
    }

    public function histories() {
        $histories = History::all();
        return view('frontend.history', compact('histories'));
    }

    public function historiesDetail($id) {
        $history = History::findOrFail($id);
        return view('frontend.history_detail', compact('history'));
    }

    public function villages(Request $request) {
        $villages = Village::with('town')
        ->when($request->search, function ($query, $search) {
            $query->where('name', 'LIKE', "%{$search}%");
        })
        ->get()
        ->groupBy(function ($village) {
            return $village->town->name ?? 'Unknown Town';
        });

        return view('frontend.village', compact('villages'));
    }

    public function festivals(Request $request) {
        $year = $request->input('year', now()->year); // Default to current year
        $years = Festival::selectRaw('YEAR(festival_date) as year')
                        ->distinct()
                        ->orderByDesc('year')
                        ->pluck('year');

        // Get festivals for the selected year
        $festivals = Festival::whereYear('festival_date', $year)
                             ->orderBy('festival_date')
                             ->get();

        return view('frontend.festival', compact('festivals', 'year', 'years'));
    }
    // public function festivalshow($id)
    // {
    //     $festival = Festival::findOrFail($id);
    //     return view('frontend.festival_show', compact('festival'));
    // }

    public function festivalDetail($id) {
        $festival = Festival::with('town', 'traditions')->findOrFail($id);
        return view('frontend.festival_detail', compact('festival'));
    }

    public function suggest() {
        return view('frontend.suggest');
    }

    public function storeSuggestion(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'nullable|email',
            'message' => 'required|string',
        ]);

        Suggestion::create($request->all());

        return redirect()->back()->with('success', 'Your suggestion has been submitted!');
    }
}
