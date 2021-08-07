<?php

namespace App\Models;

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
        return $this->belongsToMany(User::class);
    }

    /**
     * Get the post account.
     *
     * @return \App\Models\Account
     */
    public function account() {
        return $this->belongsTo(Account::class);
    }
}
