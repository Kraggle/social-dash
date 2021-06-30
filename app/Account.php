<?php

namespace App;

use App\User;
use App\Post;
use App\Setting;
use App\Casts\CastSettings;
use App\Model;

class Account extends Model {
    public static function boot() {
        parent::boot();

        static::deleting(function ($account) {
            $account->settings()->delete();
            $account->posts()->delete();
            $account->users()->detach();
        });
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'pk', 'team_id'
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
     * Get the account users.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function users() {
        return $this->belongsToMany(User::class);
    }

    /**
     * Get the accounts team.
     *
     * @return App\Team
     */
    public function team() {
        return $this->belongsTo(Team::class);
    }
}
