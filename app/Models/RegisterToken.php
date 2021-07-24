<?php

namespace App\Models;

use App\Helpers\AppHelper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RegisterToken extends Model {
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'token', 'team_id', 'role_id', 'valid_until'
    ];

    /**
     * Get the team
     *
     * @return \App\Models\Team
     */
    public function team() {
        return $this->belongsTo(Team::class);
    }

    /**
     * Get the role
     *
     * @return \App\Models\Role
     */
    public function role() {
        return $this->belongsTo(Role::class);
    }
}
