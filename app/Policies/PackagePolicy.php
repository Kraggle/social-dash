<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PackagePolicy {
    use HandlesAuthorization;

    /**
     * Determine whether the user can see the packages.
     *
     * @param  \App\Models\User  $user
     * @return boolean
     */
    public function viewAny(User $user) {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can create packages.
     *
     * @param  \App\Models\User  $user
     * @return boolean
     */
    public function create(User $user) {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can update the package.
     *
     * @param  \App\Models\User  $user
     * @return boolean
     */
    public function update(User $user) {
        return $user->isAdmin();
    }
}
