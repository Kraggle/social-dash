{{-- test --}}
@php
extract(
    array_merge(
        [
            'name' => '',
            'prepend' => false,
            'append' => false,
        ],
        $options,
    ),
);

$dot = AppHelper::toDot($name);
$group = $prepend || $append ? 'input-group' : 'form-group';
@endphp

<div class="{{ $group }} {{ $errors->has($dot) ? 'has-danger' : '' }}">

  @if ($prepend)
    <div class="input-group-prepend">
      <span class="input-group-text">
        @if (is_array($prepend))
          <span class="{{ $prepend['icon'] }}"></span>
        @else
          {{ $prepend }}
        @endif
      </span>
    </div>
  @endif

  @yield($yield)

  @if ($append)
    <div class="input-group-append">
      <span class="input-group-text">
        @if (is_array($prepend))
          <span class="{{ $append['icon'] }}"></span>
        @else
          {{ $append }}
        @endif
      </span>
    </div>
  @endif


</div>
@include('alerts.feedback', ['field' => $dot])
