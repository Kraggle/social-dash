<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Account;
use Illuminate\Auth\Access\HandlesAuthorization;

class AccountPolicy {
    use HandlesAuthorization;

    /**
     * Determine whether the user can see the users.
     *
     * @param  \App\Models\User  $user
     * @return boolean
     */
    public function viewAny(User $user) {
        return $user->isAdmin();
    }

    /**
     * Determine whether the authenticate user can create users.
     *
     * @param  \App\Models\User $user
     * @return boolean
     */
    public function create(User $user) {
        return $user->isAdmin();
    }

    /**
     * Determine whether the authenticate user can update the account.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Account  $model
     * @return boolean
     */
    public function update(User $user, Account $model) {
        return $user->isAdmin();
    }

    /**
     * Determine whether the authenticate user can delete the account.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Account  $model
     * @return boolean
     */
    public function delete(User $user, Account $model) {
        return $user->isAdmin();
    }

    /**
     * Determine whether the authenticate user can remove the account.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Account  $model
     * @return boolean
     */
    public function remove(User $user, Account $model) {
        return $user->isAdmin();
    }

    /**
     * Determine whether the authenticate user can manage other accounts.
     *
     * @param  \App\Models\User  $user
     * @return boolean
     */
    public function manageAccounts(User $user) {
        return $user->isAdmin();
    }
}
