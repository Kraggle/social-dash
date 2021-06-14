<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model {
    /**
     * Get the users in the team.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function users() {
        return $this->hasMany(User::class);
    }

    /**
     * Get the team settings.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function settings() {
        return $this->hasMany(Setting::class);
    }

    /**
     * Get the team accounts.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function accounts() {
        return $this->hasMany(Account::class);
    }

    /**
     * Get the team posts.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function posts() {
        return $this->hasMany(Post::class);
    }
}
