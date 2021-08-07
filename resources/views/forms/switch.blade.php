@php
extract(
    array_merge(
        [
            'id' => '',
            'name' => '',
            'value' => '',
            'disabled' => false,
            'readonly' => false,
            'attrs' => [],
        ],
        $options,
    ),
);

$dot = AppHelper::toDot($name);
$value = old($dot) ?? $value;

@endphp

<input type="hidden" name="{{ $name }}" value="false" {{ $disabled ? 'disabled' : '' }}
  {{ $readonly ? 'readonly' : '' }}{{ AppHelper::makeAttrs($attrs) }}>
<input class="bootstrap-switch" name="{{ $name }}" id="{{ $id }}" type="checkbox"
  {{ AppHelper::checked($value) }} data-off-label="OFF" data-on-label="ON" value="true"
  {{ $disabled ? 'disabled' : '' }} {{ $readonly ? 'readonly' : '' }}{{ AppHelper::makeAttrs($attrs) }} />
