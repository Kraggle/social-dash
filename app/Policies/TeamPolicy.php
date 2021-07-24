<?php

namespace App\Policies;

use App\Helpers\AppHelper;
use App\Models\Team;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TeamPolicy {
    use HandlesAuthorization;

    /**
     * Determine whether the user can see the teams.
     *
     * @param  \App\Models\User  $user
     * @return boolean
     */
    public function viewAny(User $user) {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can create teams.
     *
     * @param  \App\Models\User  $user
     * @return boolean
     */
    public function create(User $user) {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can update the team.
     *
     * @param  \App\Models\User  $user
     * @return boolean
     */
    public function update(User $user) {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can remove the team.
     *
     * @param  \App\Models\User  $user
     * @return boolean
     */
    public function remove(User $user) {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can add team members.
     *
     * @param  \App\Models\User  $user
     * @return boolean
     */
    public function addMember(User $user, Team $team) {
        if ($user->team->id != $team->id) return false;
        return $user->isTeamAdmin() || $user->canManageTeam('create');
    }

    /**
     * Determine whether the user can edit team members.
     *
     * @param  \App\Models\User  $user
     * @return boolean
     */
    public function editMember(User $user, Team $team) {
        if ($user->team->id != $team->id) return false;
        return $user->isTeamAdmin() || $user->canManageTeam('update');
    }

    /**
     * Determine whether the user can remove team members.
     *
     * @param  \App\Models\User  $user
     * @return boolean
     */
    public function removeMember(User $user, Team $team) {
        if ($user->team->id != $team->id) return false;
        return $user->isTeamAdmin() || $user->canManageTeam('delete');
    }

    /**
     * Determine whether the user can add team accounts.
     *
     * @param  \App\Models\User  $user
     * @return boolean
     */
    public function addAccount(User $user) {
        return $user->isAdmin() || $user->isTeamAdmin() || $user->canManageTeamAccounts('create');
    }

    /**
     * Determine whether the user can edit team accounts.
     *
     * @param  \App\Models\User  $user
     * @return boolean
     */
    public function editAccount(User $user, Team $team) {
        if ($user->team->id != $team->id) return false;
        return $user->isAdmin() || $user->isTeamAdmin() || $user->canManageTeamAccounts('update');
    }

    /**
     * Determine whether the user can remove team accounts.
     *
     * @param  \App\Models\User  $user
     * @return boolean
     */
    public function removeAccount(User $user, Team $team) {
        if ($user->team->id != $team->id) return false;
        return $user->isAdmin() || $user->isTeamAdmin() || $user->canManageTeamAccounts('delete');
    }
}
