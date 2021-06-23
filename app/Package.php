<?php

namespace App;

use App\Team;
use Illuminate\Database\Eloquent\Model;

class Package extends Model {
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'cost', 'access'
    ];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'access' => '[]',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'access' => 'object',
    ];

    /**
     * Get the teams for the role
     *
     * @return \App\Team
     */
    public function teams() {
        return $this->hasMany(Team::class);
    }
}
