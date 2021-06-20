<?php

namespace App\Helpers;

use App\Defaults;

class AppHelper {
    /**
     * Change an elements name e.g. `name[value]` to
     * dot notation e.g. `name.value`.
     *
     * @param string $var
     * @return string
     */
    public static function toDotNotation($var) {
        return preg_replace(['/\[/', '/\]/'], ['.', ''], $var);
    }

    public static function isTrue($value) {
        return in_array($value, ['on', 'true', true, 1, '1'], true);
    }

    public static function checked($value) {
        return AppHelper::isTrue($value) ? ' checked' : '';
    }

    public static function selected($value, $other) {
        return $value == $other ? ' selected' : '';
    }

    public static function print(...$values) {
        foreach ($values as $value) {
            if (in_array(gettype($value), ['array', 'object', 'boolean']))
                error_log(json_encode($value, JSON_PRETTY_PRINT));
            else
                error_log($value);
        }
    }

    /**
     * Builds a html element of the given default.
     *
     * @param App\Defaults $setting
     * @param bool $echo
     * @return string
     */
    public static function makeSetting(Defaults $setting, bool $echo = false) {
        $options = $setting->options;
        $key = $options->key;
        $type = $options->type;
        $cost = 0;
        // AppHelper::print($setting, $type, true);
        ob_start(); ?>

        <div class="row">
            <div class="col-sm-12">
                <label><?php echo $setting->name ?></label>
            </div>

            <?php if ($type == 'checkbox') {
                $default = AppHelper::isTrue(old($key) ?? $options->default ?? 0);
                $cost = $default ? $options->on_cost : $options->off_cost; ?>

                <div class="col has-switch mb-2">
                    <input class="bootstrap-switch" type="checkbox" name="<?= $key ?>" <?= AppHelper::checked($default) ?> data-off-label="NO" data-on-label="YES" data-on-cost="<?= $options->on_cost ?>" data-off-cost="<?= $options->off_cost ?>" data-default-cost="" has-cost>
                </div>

            <?php } elseif ($type == 'text') {
                $selected = old($key);
                foreach ($options->values as $option) {
                    if (!$selected && $option->default)
                        $selected = $option->value;
                    if ($selected == $option->value)
                        $cost = $option->cost;
                } ?>

                <div class="col pr-0 mb-2">
                    <select name="<?= $key ?>" class="selectpicker" data-size="7" data-style="btn btn-primary" data-default-cost="" has-cost>
                        <?php foreach ($options->values as $option) { ?>
                            <option value="<?= $option->value ?>" data-cost="<?= $option->cost ?>" <?= AppHelper::selected($selected, $option->value) ?> data-content="
                                <span><?= $option->value ?></span>
                                <span class='select-cost'>£<?= $option->cost ?></span>">
                            </option>
                        <?php } ?>
                    </select>
                </div>

            <?php } elseif ($type == 'number') { ?>

                <div class="col pr-0 mb-2">
                    <input type="range" class="form-control-range" name="<?= $key ?>" step="<?= $options->step ?? 1 ?>" min="<?= $options->min_value ?>" max="<?= $options->max_value ?>" value="<?= old($key) ?? $options->default ?? $options->min_value ?>">
                </div>

            <?php } ?>

            <div class=" col-md-auto" style="padding:8px 0 10px 15px">
                <span class="">£</span>
                <span id="<?= $key ?>_cost" class=""><?= $cost ?></span>
            </div>

            <?php if ($setting->description) { ?>
                <div class="col-sm-auto">
                    <button toggle="<?= $key ?>" class="btn-sm btn-link">
                        <i class="fal fa-info-circle"></i>
                    </button>
                </div>
                <div toggle="<?= $key ?>" class="col-sm-12 text-black-50 font-italic d-none mb-2" style="font-size:0.725rem; line-height:1.3;">
                    <span><?= $setting->description ?></span>
                </div>
            <?php } ?>
        </div>

<?php
        $content = ob_get_contents();
        ob_end_clean();
        if ($echo) echo $content;
        return $content;
    }
}
