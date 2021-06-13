<?php

namespace App\Policies;

use App\User;
use App\Account;
use Illuminate\Auth\Access\HandlesAuthorization;

class AccountPolicy {
    use HandlesAuthorization;

    /**
     * Determine whether the user can see the users.
     *
     * @param  \App\User  $user
     * @return boolean
     */
    public function viewAny(User $user) {
        return true;
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
     * Determine whether the authenticate user can update the account.
     *
     * @param  \App\User  $user
     * @param  \App\Account  $model
     * @return boolean
     */
    public function update(User $user, Account $model) {
        return false;
    }

    /**
     * Determine whether the authenticate user can delete the account.
     *
     * @param  \App\User  $user
     * @param  \App\Account  $model
     * @return boolean
     */
    public function delete(User $user, Account $model) {
        return $user->isAdmin() || $user->id != $model->id;
    }

    /**
     * Determine whether the authenticate user can remove the account.
     *
     * @param  \App\User  $user
     * @param  \App\Account  $model
     * @return boolean
     */
    public function remove(User $user, Account $model) {
        return $user->id != $model->id;
    }

    /**
     * Determine whether the authenticate user can manage other accounts.
     *
     * @param  \App\User  $user
     * @return boolean
     */
    public function manageAccounts(User $user) {
        return $user->isAdmin();
    }
}
