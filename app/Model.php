<?php

namespace App;

use Illuminate\Database\Eloquent\Model as BaseModel;

class Model extends BaseModel {
    /**
     * Get all settings, including defaults.
     *
     * @return object
     */
    public function getAllSettings() {
        $defaults = (object) [];
        foreach (Defaults::where('for_table', $this->table)->get() as $default)
            $defaults->{$default->options->key} = $default;
        // error_log(json_encode($defaults, JSON_PRETTY_PRINT));

        $settings = (object) [];
        foreach ($this->settings as $setting)
            $settings->{$setting->default->options->key} = $setting;
        // error_log(json_encode($settings, JSON_PRETTY_PRINT));

        foreach ($settings as $value) {
            switch ($value->default->options->type) {
                case 'checkbox':
                    $value->value = in_array($value->value, [1, '1', true, 'true', 'on']);
                    break;
                case 'number':
                    $value->value = intval($value->value);
                    break;
            }
        }

        foreach ($defaults as $key => $value) {
            if (!isset($settings->$key)) {
                $default;
                switch ($value->options->type) {
                    case 'checkbox':
                        $default = ($value->options->default ?? '') == 'on';
                        break;
                    case 'text':
                        foreach ($value->options->values as $choice) {
                            if (isset($choice->default)) {
                                $default = $value->options->value ?? '';
                                break;
                            }
                        }
                        if (!isset($default))
                            $default = $value->options->values[0]->value ?? '';
                        break;
                    case 'number':
                        $default = $value->options->default ?? 0;
                        break;
                }
                $settings->$key = (object) [
                    'value' => $default,
                    'default' => $value
                ];
            }
        }

        // error_log(json_encode($settings, JSON_PRETTY_PRINT));
        return $settings;
    }
}
