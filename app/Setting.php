<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model {
    /**
     * Get the team for the setting.
     *
     * @return \App\Team
     */
    public function team() {
        return $this->belongsTo(Team::class);
    }

    /**
     * Get the post for the setting.
     *
     * @return \App\Post
     */
    public function post() {
        return $this->belongsTo(Post::class);
    }

    /**
     * Get the user for the setting.
     *
     * @return \App\User
     */
    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the default for the setting.
     *
     * @return \App\Defaults
     */
    public function default() {
        return $this->belongsTo(Defaults::class);
    }
}
