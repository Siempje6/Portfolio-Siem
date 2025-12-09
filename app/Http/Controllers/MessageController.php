<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function create() {
        return view('contact.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'message' => 'required|string',
        ]);

        Message::create($data);

        return redirect()->route('contact.form')->with('success', 'Bericht verstuurd!');
    }
}
