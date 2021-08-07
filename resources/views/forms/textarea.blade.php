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

@endphp

@section($yield)
  <textarea class="form-control{{ $errors->has($dot) ? ' is-invalid' : '' }}" name="{{ $name }}"
    id="{{ $id }}" placeholder="{{ $placeholder }}" {{ $required ? ' required="true" ' : '' }}
    {{ $disabled ? 'disabled' : '' }}
    {{ $readonly ? 'readonly' : '' }}{{ AppHelper::makeAttrs($attrs) }}>{{ $value }}</textarea>
@endsection
