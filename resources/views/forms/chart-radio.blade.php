@php
extract(
    array_merge(
        [
            'name' => 'radio-group',
            'color' => 'warning',
            'buttons' => [],
            'group_class' => '',
            'group_attrs' => '',
            'cookie' => false,
        ],
        $settings ?? [],
    ),
);

/**
 * $buttons = [[
 *    value => '',
 *    id => '',
 *    display => '',
 *    icon => ''
 * ]]
 */

$checked = $cookie && isset($cookie->$name) ? $cookie->$name : false;

@endphp

<div class="col-auto btn-group {{ $group_class }}" {{ $group_attrs }} role="group">

  @foreach ($buttons as $btn)
    <input type="radio" class="btn-check" name="{{ $name }}" id="{{ $btn['id'] }}" value="{{ $btn['value'] }}" {{ AppHelper::checked(($checked && $btn['id'] == $checked) || (!$checked && $loop->index == 0)) }}>
    <label class="btn btn-outline-{{ $color }}" for="{{ $btn['id'] }}">
      <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">{{ $btn['display'] }}</span>
      <span class="d-block d-sm-none">
        <i class="{{ $btn['icon'] }}"></i>
      </span>
    </label>
  @endforeach
</div>
