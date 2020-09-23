<?php

namespace App\Http\Controllers;

use App\Models\Chat;

class ChatsController extends Controller
{
    public function index()
    {
        // this is to ensure we have chats by people we follow
        return view('chats.index', [
            'chats' => auth()->user()->timeline()
        ]);
    }

    public function store()
    {
        $attributes = request()->validate(['body' => 'required|max:5000']);

        Chat::create([
            'user_id' => auth()->id(),
            'body' => $attributes['body']
        ]);

        return redirect('/chats');
    }
}