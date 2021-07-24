<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description'];

    /**
     * Get the users for the role
     *
     * @return \App\Models\User
     */
    public function users() {
        return $this->hasMany(User::class);
    }

    /**
     * Get the role tokens.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function tokens() {
        return $this->hasMany(RegisterToken::class);
    }
}
