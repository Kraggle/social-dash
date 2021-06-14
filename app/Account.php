<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Account extends Model {
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'pk'
    ];

    /**
     * Get the account settings.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function settings() {
        return $this->hasMany(Setting::class);
    }

    /**
     * Get the account posts.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function posts() {
        return $this->hasMany(Post::class);
    }

    /**
     * Get the accounts team.
     *
     * @return \App\Team
     */
    public function team() {
        return $this->belongsTo(Team::class);
    }
}
