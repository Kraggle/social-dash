@php $yield = AppHelper::makeId() @endphp
@extends('forms.group', ['options' => $options, 'yield' => $yield])

@php
extract(
    array_merge(
        [
            'id' => '',
            'name' => '',
            'placeholder' => '',
            'value' => '',
            'options' => [],
            'from' => [],
            'disabled' => false,
            'readonly' => false,
            'required' => false,
            'prepend' => false,
            'append' => false,
            'attrs' => [],
        ],
        $options,
    ),
);

$dot = AppHelper::toDot($name);
$value = old($dot) ?? $value;
$from = (object) $from;

@endphp

@section($yield)
  <select class="selectpicker" data-style="btn btn-primary" id="{{ $id }}" name="{{ $name }}"
    {{ $disabled ? 'disabled' : '' }} {{ $readonly ? 'readonly' : '' }} {{ AppHelper::makeAttrs($attrs) }}>
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
