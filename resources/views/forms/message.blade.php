@php
use App\Models\Defaults;

$default = null;
if ($setting instanceof Defaults) {
    $default = $setting;
} else {
    $default = $setting->default;
    $value = $setting->value;
}

$options = $default->options;
$key = "settings[{$options->key}]";
$dot = AppHelper::toDot($key);

switch ($options->type) {
    case 'checkbox':
        $value = AppHelper::isTrue(old($dot) ?? ($value ?? ($options->default ?? false)));
        break;
    case 'text':
        $value = old($dot) ?? ($value ?? '');
        foreach ($options->values as $option) {
            if (!$value && $option->default) {
                $value = $option->value;
            }
        }
        break;
    case 'number':
        $value = old($dot) ?? ($value ?? ($options->default ?? $min));
        break;
}

$span = "<span update=\"$key\">$value</span>";

@endphp

@if (isset($options->message) && $options->message)
  <li class="list-group-item">
    @php echo preg_replace('/\{.*\}/', $span, $options->message) @endphp
  </li>
@endif
