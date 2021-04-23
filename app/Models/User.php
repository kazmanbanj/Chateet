<?php

namespace App\Models;

use App\Models\Chat;
use App\Models\User;
use Illuminate\Notifications\Notifiable;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, Followable;

    protected $guarded = [];
    
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute($value)
    {
        return asset($value ?: '/images/test1.jpg');
    }

    public function timeline()
    {
        // return Chat::where('user_id', $this->id)->latest()->get();
        $friends = $this->follows()->pluck('id');
        $friends->push($this->id);

        return Chat::whereIn('user_id', $friends)
            ->orWhere('user_id', $this->id)->latest()->withLikes()->orderByDesc('id')->paginate(15);
    }

    public function chats()
    {
        return $this->hasMany(Chat::class)->latest();
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
    
    public function path($append = '')
    {
        $path = route('profile', $this->username);
        return $append ? "{$path}/{$append}" : $path;
    }
}
