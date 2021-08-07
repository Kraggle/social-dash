@php
extract(
    array_merge(
        [
            'id' => '',
            'name' => '',
            'placeholder' => '',
            'value' => '',
            'disabled' => false,
            'readonly' => false,
            'attrs' => [],
            'group' => [],
        ],
        $options,
    ),
);

$dot = AppHelper::toDot($name);
$value = old($dot) ?? $value;

$g_class = isset($group['class']) ? (is_array($group['class']) ? implode(' ', $group['class']) : $group['class']) : '';
$g_attrs = isset($group['attrs']) ? (is_array($group['attrs']) ? implode(' ', $group['attrs']) : $group['attrs']) : '';

@endphp

<div class="form-check text-start {{ $g_class }}" {{ $g_attrs }}>
  <label class="form-check-label">
    <input type="hidden" name="{{ $name }}" value=0>
    <input class="form-check-input" type="checkbox" name="{{ $name }}" value=1 id="{{ $id }}"
      {{ AppHelper::checked($value) }} {{ $disabled ? 'disabled' : '' }}
      {{ $readonly ? 'readonly' : '' }}{{ AppHelper::makeAttrs($attrs) }}>
    <span class="form-check-sign"></span>
    @php echo $placeholder @endphp
  </label>
</div>
@include('alerts.feedback', ['field' => $dot])
