<?php

namespace App\Models;

use App\Helpers\AppHelper;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'name', 'email', 'password', 'picture', 'role_id', 'team_id', 'permission'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'permission' => 'object',
    ];

    /**
     * Get the role of the user
     *
     * @return \App\Models\Role
     */
    public function role() {
        return $this->belongsTo(Role::class);
    }

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    // protected $attributes = [
    //     'permission' => [
    //         'member' => ['create' => '0', 'update' => '0', 'delete' => '0'],
    //         'account' => ['create' => '0', 'update' => '0', 'delete' => '0', 'share' => '0'],
    //         'client' => ['add' => '0', 'remove' => '0'],
    //     ],
    // ];

    /**
     * Get the team of the user
     *
     * @return \App\Models\Team
     */
    public function team() {
        return $this->belongsTo(Team::class);
    }

    /**
     * Get the user settings.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function settings() {
        return $this->hasMany(Setting::class);
    }

    /**
     * Get the user posts.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function posts() {
        return $this->hasMany(Post::class);
    }

    /**
     * Get the user accounts.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function accounts() {
        return $this->belongsToMany(Account::class);
    }

    /**
     * Get the path to the profile picture
     *
     * @return string
     */
    public function profilePicture() {
        if ($this->picture) {
            return "/storage/{$this->picture}";
        }

        return 'http://i.pravatar.cc/200';
    }

    /**
     * Check if the user has admin role
     *
     * @return boolean
     */
    public function isAdmin() {
        return $this->role_id == 1;
    }

    /**
     * Check if the user has admin role
     *
     * @return boolean
     */
    public function notAdmin() {
        return $this->role_id != 1;
    }

    /**
     * Check if the user has creator role
     *
     * @return boolean
     */
    public function isGuest() {
        return $this->role_id == 2;
    }

    /**
     * Check if the user has user role
     *
     * @return boolean
     */
    public function isTeamAdmin() {
        return $this->role_id == 3;
    }

    /**
     * Check if the user can manage team members
     *
     * @return boolean
     */
    public function canManageTeam($rule = null) {
        $allow = AppHelper::oneTrue($this->permission->member ?? []);
        if ($rule) $allow = AppHelper::isTrue($this->permission->member->$rule ?? false);
        return $this->isTeamAdmin() || $allow;
    }

    /**
     * Check if the user can manage team accounts
     *
     * @return boolean
     */
    public function canManageTeamAccounts($rule = null) {
        $allow = AppHelper::oneTrue($this->permission->account ?? []);
        if ($rule) $allow = AppHelper::isTrue($this->permission->account->$rule ?? false);
        return $this->isTeamAdmin() || $allow;
    }

    /**
     * Check if the user can manage team clients
     *
     * @return boolean
     */
    public function canManageTeamClients($rule = null) {
        $allow = AppHelper::oneTrue($this->permission->client ?? []);
        if ($rule) $allow = AppHelper::isTrue($this->permission->client->$rule ?? false);
        return $this->isTeamAdmin() || $allow;
    }

    /**
     * Check if the user is a team member
     *
     * @return boolean
     */
    public function isTeamMember() {
        return $this->role_id == 4;
    }

    /**
     * Check if the user is in a team
     *
     * @return boolean
     */
    public function isInTeam() {
        return in_array($this->role_id, [3, 4]);
    }
}
