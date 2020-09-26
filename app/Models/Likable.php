<?php

namespace App\Models;

use App\Models\Like;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

trait Likable
{
    public function scopeWithLikes(Builder $query)
    {
        $query->leftJoinSub(
            'select chat_id, sum(liked) likes, sum(!liked) dislikes from likes group by chat_id', 'likes', 'likes.chat_id', 'chats.id'
        );
    }

    // this is for the like btn
    public function like($user = null, $liked = true)
    {
        $this->likes()->updateOrCreate([
            'user_id' => $user ? $user->id : auth()->id(),
        ],
        [            
            'liked' => $liked
        ]);
    }

    // this is for the dislike btn
    public function dislike($user = null)
    {
        return $this->like($user, false);
    }
    
    public function isLikedBy(User $user)
    {
        return (bool) $user->likes->where('chat_id', $this->id)->where('liked', true)->count();
    }

    public function isDislikedBy(User $user)
    {
        return (bool) $user->likes->where('chat_id', $this->id)->where('liked', false)->count();
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}