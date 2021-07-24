<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy {
    use HandlesAuthorization;

    /**
     * Determine whether the user can see the posts.
     *
     * @param  \App\Models\User  $user
     * @return boolean
     */
    public function viewAny(User $user) {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can create posts.
     *
     * @param  \App\Models\User  $user
     * @return boolean
     */
    public function create(User $user) {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can update the post.
     *
     * @param  \App\Models\User  $user
     * @return boolean
     */
    public function update(User $user) {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can remove the post.
     *
     * @param  \App\Models\User  $user
     * @return boolean
     */
    public function remove(User $user) {
        return $user->isAdmin();
    }
}
