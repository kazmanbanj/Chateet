<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    public function index()
    {
        $notifications = auth()->user()->unreadNotifications;
        // foreach ($notifications as $value) {
        //     # code...
        //     dd($value);
        // }
        return view('notifications', compact('notifications'));
    }

    public function markNotification(Request $request)
    {
        auth()->user()
            ->unreadNotifications
            ->when($request->input('id'), function ($query) use ($request) {
                return $query->where('id', $request->input('id'));
            })
            ->markAsRead();

        return response()->noContent();
    }

    public function ReadNotification($id)
    {
    $userUnreadNotification = auth()->user()
                                    ->unreadNotifications
                                    ->where('id', $id)
                                    ->first();
        
    if($userUnreadNotification) {
        $userUnreadNotification->markAsRead();
    }
    return back();
    }
}
