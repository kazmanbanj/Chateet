<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Http\Controllers\Controller;

class ChatsController extends Controller
{
    public function index()
    {
        $chats = auth()->user()->timeline();
            // this is to ensure we have chats by people we follow
        return view('chats.index', compact('chats'));
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