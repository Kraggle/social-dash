<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    /**
     * Get the post settings.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function settings() {
        return $this->hasMany(Setting::class);
    }

    /**
     * Get the post users.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function users() {
        return $this->hasMany(User::class);
    }

    /**
     * Get the post team.
     *
     * @return \App\Team
     */
    public function team() {
        return $this->hasOne(Team::class);
    }

    /**
     * Get the post account.
     *
     * @return \App\Account
     */
    public function account() {
        return $this->hasOne(Account::class);
    }
}
