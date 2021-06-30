<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model {
    public static function boot() {
        parent::boot();

        static::deleting(function ($team) {
            $team->settings()->delete();

            foreach ($team->accounts as $account) {
                $account->delete();
            }

            foreach ($team->members as $member) {
                $member->dissociate();
            }

            $team->package()->dissociate();
        });
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'package_id'
    ];

    /**
     * Get the users in the team.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function members() {
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
     * Get the team package.
     *
     * @return App\Package
     */
    public function package() {
        return $this->belongsTo(Package::class);
    }
}
