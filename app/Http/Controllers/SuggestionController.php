<?php

namespace App\Http\Controllers;

use App\Models\Suggestion;
use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class SuggestionController extends Controller
{
    public function create()
    {
        return view('suggestions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email',
            'message' => 'required|string|max:1000',
        ]);

        $data = ['name' => $request->name,
                'message' => $request->message
                ];
        // Mail::to($request->email)->send(new TestMail($data));
    
        Suggestion::create($request->only('name', 'phone', 'email', 'message'));
        if ($request->phone == '09262339873') {
            return redirect('/phyochitko#contact')->with('success', 'Your message sent successfully. Thank you for your message!');
        }
    
        return redirect()->route('suggest')->with('success', 'အကြံပြုချက် ပေးပို့ပြီးပါပြီ။');
    }

    public function index()
    {
        $suggestions = Suggestion::latest()->paginate(10);
        return view('suggestions.index', compact('suggestions'));
    }

    // Show edit form
    public function edit($id)
    {
        $suggestion = Suggestion::findOrFail($id);
        return view('suggestions.edit', compact('suggestion'));
    }

    // Handle update
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email',
            'message' => 'required|string|max:1000',
        ]);

        $suggestion = Suggestion::findOrFail($id);
        $suggestion->update($request->only('name', 'phone', 'email', 'message'));

        return redirect()->route('suggestions.index')->with('success', 'အကြံပြုချက် ပြင်ဆင်ပြီးပါပြီ။');
    }

    public function destroy($id)
    {
        Suggestion::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'ဖျက်ပြီးပါပြီ။');
    }
}
