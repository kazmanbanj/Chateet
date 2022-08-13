<?php

namespace App\Listeners;

use App\Models\User;
use Illuminate\Queue\InteractsWithQueue;
use App\Notifications\NewUserNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;

class SendNewUserNotification
{
    public function handle($event)
    {
        $admins = User::where('is_admin', 1)->get();

        Notification::send($admins, new NewUserNotification($event->user));
    }
}
