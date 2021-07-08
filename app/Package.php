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
        'name',  'key', 'description', 'cost', 'options'
    ];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'options' => '{}',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'options' => 'object',
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
