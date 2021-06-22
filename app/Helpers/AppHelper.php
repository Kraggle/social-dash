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
        $hidden = AppHelper::isTrue($options->hidden ?? '');
        $key = $options->key;
        $type = $options->type;
        $has_cost = false;
        $cost = 0;
        $default = null;
        // AppHelper::print($setting, $type, true);
        ob_start(); ?>

        <div class="row">
            <div class="col-sm-12">
                <label><?php echo $setting->name ?></label>
            </div>

            <?php if ($type == 'checkbox') {
                $default = AppHelper::isTrue(old($key) ?? $options->default ?? 0);
                $has_cost = $options->on_cost || $options->off_cost;
                $cost = $default ? $options->on_cost ?? 0 : $options->off_cost ?? 0; ?>

                <div class="col has-switch mb-2">
                    <input class="bootstrap-switch" type="checkbox" name="<?= $key ?>" <?= AppHelper::checked($default) ?> data-off-label="NO" data-on-label="YES" data-on-cost="<?= $options->on_cost ?>" data-off-cost="<?= $options->off_cost ?>" data-default-cost="" has-cost>
                </div>

            <?php } elseif ($type == 'text') {
                $default = old($key);
                foreach ($options->values as $option) {
                    if (!$default && $option->default)
                        $default = $option->value;
                    if ($default == $option->value)
                        $cost = $option->cost ?? 0;
                    if ($option->cost) $has_cost = true;
                } ?>

                <div class="col pr-0 mb-2">
                    <select name="<?= $key ?>" class="selectpicker" data-size="7" data-style="btn btn-primary" data-default-cost="" has-cost>
                        <?php foreach ($options->values as $option) { ?>
                            <option value="<?= $option->value ?>" data-cost="<?= $option->cost ?>" <?= AppHelper::selected($default, $option->value) ?> data-content="
                                <span><?= $option->value ?></span>
                                <span class='select-cost'>£<?= $option->cost ?></span>">
                            </option>
                        <?php } ?>
                    </select>
                </div>

            <?php } elseif ($type == 'number') {
                $min = $options->min_value;
                $max = $options->max_value;
                $cost_min = $options->min_cost ?? 0;
                $cost_max = $options->max_cost ?? 0;
                $has_cost = $cost_min || $cost_max;
                $step = $options->step ?? 1;
                $default = old($key) ?? $options->default ?? $min;
                $per = (($default - $min) / ($max - $min));
                $cost = round((($cost_max - $cost_min) * $per) + $cost_min); ?>

                <div class="col-sm-2 pr-0 mb-2">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fal fa-lambda"></i>
                            </span>
                        </div>
                        <input type="number" class="form-control pl-2 pr-0" id="<?= $key ?>" name="<?= $key ?>" min="<?= $min ?>" max="<?= $max ?>" step="<?= $step ?>" value="<?= $default ?>" />
                    </div>
                </div>

                <div class="col mb-2">
                    <div id="noUi_<?= $key ?>" name="<?= $key ?>" class="slider slider-primary" data-min="<?= $min ?>" data-max="<?= $max ?>" data-min-cost="<?= $cost_min ?>" data-max-cost="<?= $cost_max ?>" data-step="<?= $step ?>" data-default="<?= $default ?>" style="margin-top: 18px;"></div>
                </div>

            <?php }

            if ($has_cost) { ?>
                <div class=" col-md-auto mb-2" style="padding:8px 0 10px 15px">
                    <span class="">£</span>
                    <span id="<?= $key ?>_cost" class=""><?= $cost ?></span>
                </div>
            <?php }

            if ($setting->description) { ?>
                <div class="col-sm-auto">
                    <button toggle="<?= $key ?>" class="btn-sm btn-link">
                        <span class="fal fa-info-circle"></span>
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

        if ($hidden) {
            ob_start(); ?>
            <input type="hidden" name="<?= $key ?>" value="<?= $default ?>" data-cost="<?= $cost ?>">
<?php $content = ob_get_contents();
            ob_end_clean();
        }

        if ($echo) echo $content;
        return $content;
    }
}
