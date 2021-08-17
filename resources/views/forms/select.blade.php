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
            'from' => [],
            'options' => [],
            'group' => [
                'class' => ['has-value'],
            ],
        ],
        $settings,
    ),
);

$dot = AppHelper::toDot($name);
$value = old($dot) ?? $value;
$from = (object) $from;

@endphp

@section($yield)
  <select class="selectpicker" data-style="btn" id="{{ $id }}" name="{{ $name }}" {{ $disabled ? 'disabled' : '' }} {{ $readonly ? 'readonly' : '' }} @foreach ($attrs as $attr => $value) {{ $attr }}="{{ $value }}" @endforeach>
    @if (isset($from->array) && isset($from->value) && isset($from->display))
      @foreach ($from->array as $option)
        <option value="{{ $option->{$from->value} }}" {{ AppHelper::selected($value, $option->{$from->value}) }}>
          {{ $option->{$from->display} }}</option>
      @endforeach
    @else
      @foreach ($options as $key => $option)
        <option value="{{ $key }}" {{ AppHelper::selected($value, $key) }}>{{ $option }}</option>
      @endforeach
    @endif
  </select>
@endsection
