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
            'group' => [
                'class' => ['flatpickr', 'has-value'],
                'attrs' => ['flatpickr' => ''],
                'size' => '',
            ],
            'data' => [
                'flatpickr' => '',
                'alt-input' => 'true',
                'alt-format' => 'F j, Y',
                'date-format' => 'Y-m-d',
                'max-date' => 'today',
                'default-date' => date('Y-m-d'),
                'month-selector-type' => 'static',
            ],
            'prepend' => ['icon' => 'fal fa-calendar'],
        ],
        $settings,
    ),
);

if ($cookie && isset($cookie->$id)) {
    $data['default-date'] = $cookie->$id;
}

$dot = AppHelper::toDot($name);

@endphp

@section($yield)
  <input type="text" class="form-control {{ $class }}" id="{{ $id ?? '' }}" @foreach ($data as $key => $value) data-{{ $key }}="{{ $value }}" @endforeach value="{{ $data['default-date'] }}">
@endsection
