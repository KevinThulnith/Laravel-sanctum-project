<?php

namespace App\Policies;

use App\Models\User;
use App\Models\post;
use Illuminate\Auth\Access\Response;

class PostPolicy
{
    // !User -> post polici
    public function modify(User $user, post $post): Response
    {
        return $user->id === $post->user_id ? Response::allow() : Response::deny('Unuthorized activity');
    }
}
