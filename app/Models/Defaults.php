<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\AppHelper;

class Defaults extends Model {
    public static function boot() {
        parent::boot();

        static::deleting(function ($default) {
            $default->settings()->delete();
        });
    }

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
        return $this->hasMany(Setting::class, 'default_id');
    }

    public static function for($table) {
        $defaults = Defaults::where('for_table', $table)->get();
        $return = (object) [];
        foreach ($defaults as $default)
            $return->{$default->options->key} = $default;
        return $return;
    }

    public function default() {
        switch ($this->options->type) {
            case 'checkbox':
                return AppHelper::isTrue($this->options->default ?? false);
            case 'text':
                foreach ($this->options->values as $value) {
                    if (AppHelper::isTrue($value->default ?? false))
                        return $value->value;
                }
                return $this->options->values[0]->value;
            case 'number':
                return $this->options->default ?? $this->options->min_value ?? 0;
        }
    }

    public function cost($value = null) {
        $o = $this->options;
        if (!AppHelper::isTrue($o->has_cost)) return 0;

        switch ($o->type) {
            case 'checkbox':
                return AppHelper::isTrue($value ?? $o->default ?? false) ? $o->on_cost : $o->off_cost;
            case 'text':
                foreach ($o->values as $value) {
                    if (($value && $value == $value->value) || (!$value && AppHelper::isTrue($value->default ?? false)))
                        return $value->cost;
                }
                return $o->values[0]->cost;
            case 'number':
                $min = $o->min_value;
                $max = $o->max_value;
                $cost_min = $o->min_cost ?? 0;
                $cost_max = $o->max_cost ?? 0;
                $per = ($value ?? $o->default - $min) / ($max - $min);
                return round(($cost_max - $cost_min) * $per + $cost_min);
        }
    }
}
