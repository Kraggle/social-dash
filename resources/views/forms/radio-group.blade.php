@php
$yield = AppHelper::makeId();
$settings = $settings ?? [];
@endphp
@extends('forms.group-button')

@php
extract(
    AppHelper::arrayMerge(
        AppHelper::formDefaults(),
        [
            'color' => 'primary',
            'buttons' => [],
        ],
        $settings,
    ),
);

$btns = [];
foreach ($buttons as $btn) {
    $btns[] = array_merge(
        [
            'display' => '',
            'value' => '',
            'id' => AppHelper::makeId(),
            'icon' => '',
        ],
        $btn,
    );
}

$checked = $cookie && isset($cookie->$name) ? $cookie->$name : false;

@endphp

@section($yield)
  @foreach ($btns as $btn)
    <input type="radio" class="btn-check" name="{{ $name }}" id="{{ $btn['id'] }}" value="{{ $btn['value'] }}" {{ AppHelper::checked(($checked && $btn['id'] == $checked) || (!$checked && $loop->index == 0)) }}>
    <label class="btn btn-outline-{{ $color }}" for="{{ $btn['id'] }}">
      @if ($btn['icon'])
        <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">{{ $btn['display'] }}</span>
        <span class="d-block d-sm-none">
          @icon($btn['icon'])
        </span>
      @else
        <span class="d-block">{{ $btn['display'] }}</span>
      @endif
    </label>
  @endforeach
@endsection
