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
     * Get the users for the account.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function users() {
        return $this->belongsToMany(User::class);
    }
}
