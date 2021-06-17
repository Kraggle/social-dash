<?php
/*

=========================================================
* Argon Dashboard PRO - v1.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard-pro-laravel
* Copyright 2018 Creative Tim (https://www.creative-tim.com) & UPDIVISION (https://www.updivision.com)

* Coded by www.creative-tim.com & www.updivision.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

*/

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'picture'
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
     * Get the role of the user
     *
     * @return \App\Role
     */
    public function role() {
        return $this->belongsTo(Role::class);
    }

    /**
     * Get the team of the user
     *
     * @return \App\Team
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
