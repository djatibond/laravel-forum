<?php

namespace App\Policies;

use App\User;
use App\Forum;
use Illuminate\Auth\Access\HandlesAuthorization;

class ForumPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Forum $forum)
    {
        return $forum->user_id == $user->id;
//        abort(401)
    }

    public function delete(User $user, Forum $forum)
    {
        return $forum->user_id == $user->id;
    }
}
