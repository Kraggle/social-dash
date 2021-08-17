@php
extract(
    AppHelper::arrayMerge(
        AppHelper::formDefaults(),
        [
            'size' => '',
            'style' => '',
        ],
        $settings,
    ),
);

$dot = AppHelper::toDot($name);
$value = old($dot) ?? $value;

@endphp

<input type="hidden" name="{{ $name }}" value="false" {{ $disabled ? 'disabled' : '' }}>
<div class="switch-wrap{{ $size ? " switch-wrap-$size" : '' }}">
  <input name="{{ $name }}" id="{{ $id }}" type="checkbox" data-toggle="switchbutton" {{ AppHelper::checked($value) }} data-off-label="OFF" data-on-label="ON" data-size="{{ $size }}" data-style="{{ $style }}" value="true" {{ $disabled ? 'disabled' : '' }} {{ $readonly ? 'readonly' : '' }} @foreach ($attrs as $attr => $value) {{ $attr }}="{{ $value }}" @endforeach data-style="{{ $class }}" />
  @if ($label)
    <label for="{{ $id }}" class="input-label">{{ $label }}</label>
  @endif
</div>
