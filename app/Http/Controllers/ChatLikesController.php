<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChatLikesController extends Controller
{
    public function store(Chat $chat)
    {
        $chat->like(current_user());
        return back();
    }

    public function destroy(Chat $chat)
    {
        $chat->dislike(current_user());
        return back();
    }
}
