<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy {
    use HandlesAuthorization;

    /**
     * Determine whether the user can see the users.
     *
     * @param  \App\User  $user
     * @return boolean
     */
    public function viewAny(User $user) {
        return $user->isAdmin();
    }

    /**
     * Determine whether the authenticate user can create users.
     *
     * @param  \App\User $user
     * @return boolean
     */
    public function create(User $user) {
        return $user->isAdmin();
    }

    /**
     * Determine whether the authenticate user can update the user.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return boolean
     */
    public function update(User $user, User $model) {
        return $user->isAdmin();
    }

    /**
     * Determine whether the authenticate user can delete the user.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return boolean
     */
    public function delete(User $user, User $model) {
        return $user->isAdmin() && $user->id != $model->id;
    }

    /**
     * Determine whether the authenticate user can manage other users.
     *
     * @param  \App\User  $user
     * @return boolean
     */
    public function manageUsers(User $user) {
        return $user->isAdmin();
    }

    /**
     * Determine whether the authenticate user can manage accounts.
     *
     * @param  \App\User  $user
     * @return boolean
     */
    public function manageAccounts(User $user) {
        return $user->isAdmin();
    }

    /**
     * Determine whether the authenticate user can manage teams.
     *
     * @param  \App\User  $user
     * @return boolean
     */
    public function manageTeams(User $user) {
        return $user->isAdmin();
    }

    /**
     * Determine whether the authenticate user can manage packages.
     *
     * @param  \App\User  $user
     * @return boolean
     */
    public function managePackages(User $user) {
        return $user->isAdmin();
    }

    /**
     * Determine whether the authenticate user can manage posts.
     *
     * @param  \App\User  $user
     * @return boolean
     */
    public function managePosts(User $user) {
        return $user->isAdmin();
    }

    /**
     * Determine whether the authenticate user can manage defaults.
     *
     * @param  \App\User  $user
     * @return boolean
     */
    public function manageDefaults(User $user) {
        return $user->isAdmin();
    }
}
