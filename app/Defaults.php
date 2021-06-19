<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Defaults extends Model {
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'for_table', 'options'
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
     * Get the defaults settings.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function settings() {
        return $this->hasMany(Setting::class);
    }
}
