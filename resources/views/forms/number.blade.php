@php
$yield = AppHelper::makeId();
$settings = $settings ?? [];
@endphp
@extends('forms.group')

@php
extract(
    AppHelper::arrayMerge(
        AppHelper::formDefaults(),
        [
            'type' => 'number',
            'min' => '',
            'max' => '',
            'step' => '',
        ],
        $settings,
    ),
);

$dot = AppHelper::toDot($name);
$value = old($dot) ?? $value;

@endphp

@section($yield)
  <div class="input-wrap">
    <input class="form-control{{ $errors->has($dot) ? ' is-invalid' : '' }}" name="{{ $name }}" id="{{ $id }}" type="{{ $type }}" placeholder="{{ $placeholder }}" value="{{ $value }}" {{ $required ? 'required=true' : '' }} {{ $disabled ? 'disabled' : '' }} {{ $readonly ? 'readonly' : '' }} {{ strlen($min) ? "min=$min" : '' }} {{ strlen($max) ? "max=$max" : '' }} {{ strlen($step) ? "step=$step" : '' }} @foreach ($attrs as $attr => $value) {{ $attr }}="{{ $value }}" @endforeach />
  </div>
@endsection
