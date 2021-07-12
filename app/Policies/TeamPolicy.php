<?php

namespace App\Policies;

use App\Team;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TeamPolicy {
    use HandlesAuthorization;

    /**
     * Determine whether the user can see the teams.
     *
     * @param  \App\User  $user
     * @return boolean
     */
    public function viewAny(User $user) {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can create teams.
     *
     * @param  \App\User  $user
     * @return boolean
     */
    public function create(User $user) {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can update the team.
     *
     * @param  \App\User  $user
     * @return boolean
     */
    public function update(User $user) {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can remove the team.
     *
     * @param  \App\User  $user
     * @return boolean
     */
    public function remove(User $user) {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can add team members.
     *
     * @param  \App\User  $user
     * @return boolean
     */
    public function addMember(User $user, Team $team) {
        if ($user->team->id != $team->id) return false;
        return $user->isTeamAdmin();
    }

    /**
     * Determine whether the user can edit team members.
     *
     * @param  \App\User  $user
     * @return boolean
     */
    public function editMember(User $user, Team $team) {
        if ($user->team->id != $team->id) return false;
        return $user->isTeamAdmin();
    }

    /**
     * Determine whether the user can remove team members.
     *
     * @param  \App\User  $user
     * @return boolean
     */
    public function removeMember(User $user, Team $team) {
        if ($user->team->id != $team->id) return false;
        return $user->isTeamAdmin();
    }
}
