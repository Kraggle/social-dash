@php
$yield = AppHelper::makeId();
$settings = $settings ?? [];
@endphp
@extends('forms.group-button')

@php
extract(AppHelper::arrayMerge(AppHelper::formDefaults(), ['buttons' => []], $settings));

$no_cookie = true;
$btns = [];
foreach ($buttons as $btn) {
    $new_btn = array_merge(
        [
            'display' => '',
            'value' => '',
            'color' => 'primary',
            'name' => '',
            'id' => AppHelper::makeId(),
            'icon' => '',
            'checked' => false,
        ],
        $btn,
    );

    if ($cookie && isset($cookie->{$btn['id']})) {
        $no_cookie = false;
        $new_btn['checked'] = $cookie->{$btn['id']};
    }

    $btns[] = $new_btn;
}

$checked = $cookie && isset($cookie->$name) ? $cookie->$name : false;

@endphp

@section($yield)
  @foreach ($btns as $btn)
    <input type="checkbox" class="btn-check" name="{{ $btn['name'] ?? '' }}" id="{{ $btn['id'] }}" data-color="{{ $btn['color'] }}" data-label="{{ $btn['display'] }}" {{ AppHelper::checked($btn['checked'] ?? $checked) }}>
    <label class="btn btn-outline-{{ $btn['color'] }}" for="{{ $btn['id'] }}">
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
