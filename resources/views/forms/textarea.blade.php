@php $yield = AppHelper::makeId() @endphp
@extends('forms.group')

@php
$yield = AppHelper::makeId();
$settings = $settings ?? [];
@endphp

@php
extract(AppHelper::arrayMerge(AppHelper::formDefaults(), $settings));

$dot = AppHelper::toDot($name);
$value = old($dot) ?? $value;

@endphp

@section($yield)
  <div class="input-wrap">
    <textarea class="form-control{{ $errors->has($dot) ? ' is-invalid' : '' }}" name="{{ $name }}" id="{{ $id }}" placeholder="{{ $placeholder }}" {{ $required ? ' required="true" ' : '' }} {{ $disabled ? 'disabled' : '' }} {{ $readonly ? 'readonly' : '' }} @foreach ($attrs as $attr => $value) {{ $attr }}="{{ $value }}" @endforeach>{{ $value }}</textarea>
  </div>
@endsection
