@php
$yield = AppHelper::makeId();
$settings = $settings ?? [];
@endphp
@extends('forms.group')

@php
extract(AppHelper::arrayMerge(AppHelper::formDefaults(), $settings));

$dot = AppHelper::toDot($name);
$value = old($dot) ?? $value;

if (!$placeholder && $label) {
    $placeholder = ' ';
}

@endphp

@section($yield)
  <div class="input-wrap">
    <input class="form-control{{ $errors->has($dot) ? ' is-invalid' : '' }}" name="{{ $name }}" id="{{ $id }}" type="{{ $type }}" placeholder="{{ $placeholder }}" value="{{ $value }}" {{ $required ? ' required=true ' : '' }} {{ $disabled ? 'disabled' : '' }} {{ $readonly ? 'readonly' : '' }} @foreach ($attrs as $attr => $value) {{ $attr }}="{{ $value }}" @endforeach />
    @if ($label)
      <label for="{{ $id }}" class="input-label">{{ $label }}</label>
    @endif
  </div>
@endsection
