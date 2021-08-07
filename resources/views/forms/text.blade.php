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
            'type' => 'text',
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
  <input class="form-control{{ $errors->has($dot) ? ' is-invalid' : '' }}" name="{{ $name }}"
    id="{{ $id }}" type="{{ $type }}" placeholder="{{ $placeholder }}" value="{{ $value }}"
    {{ $required ? ' required=true ' : '' }} {{ $disabled ? 'disabled' : '' }}
    {{ $readonly ? 'readonly' : '' }}{{ AppHelper::makeAttrs($attrs) }} />
@endsection
