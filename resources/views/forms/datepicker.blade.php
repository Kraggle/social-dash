@php
extract(
    array_merge(
        [
            'id' => '',
            'class' => '',
            'icon' => 'fal fa-calendar',
            'group_class' => 'input-group-sm pe-0',
            'group_attrs' => '',
            'cookie' => false,
            'settings' => [],
        ],
        $options ?? [],
    ),
);

$settings = array_merge(
    [
        'alt-input' => 'true',
        'alt-format' => 'F j, Y',
        'date-format' => 'Y-m-d',
        'max-date' => 'today',
        'default-date' => date('Y-m-d'),
        'month-selector-type' => 'static',
    ],
    $settings,
);

$settings['flatpickr'] = '';

if ($cookie && isset($cookie->$id)) {
    $settings['default-date'] = $cookie->$id;
}

@endphp

<div class="input-group date flatpickr {{ $group_class }}" {{ $group_attrs }}>
  <div class="input-group-text">
    <i class="{{ $icon }}"></i>
  </div>
  <input type="text" class="form-control {{ $class }}" id="{{ $id ?? '' }}" @foreach ($settings as $key => $value) data-{{ $key }}="{{ $value }}" @endforeach value="{{ $settings['default-date'] }}">
</div>
