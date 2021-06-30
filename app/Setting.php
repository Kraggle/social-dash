<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model {
    public static function boot() {
        parent::boot();

        static::deleting(function ($setting) {
            $setting->account()->detach();
            $setting->team()->detach();
            $setting->post()->detach();
            $setting->user()->detach();
            $setting->default()->detach();
        });
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'value', 'default_id', 'account_id', 'user_id', 'team_id', 'post_id'
    ];

    /**
     * Get the account for the setting.
     *
     * @return \App\Team
     */
    public function account() {
        return $this->belongsTo(Account::class);
    }

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
