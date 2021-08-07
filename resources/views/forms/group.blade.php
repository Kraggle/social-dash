{{-- test --}}
@php
extract(
    array_merge(
        [
            'name' => '',
            'prepend' => false,
            'append' => false,
            'group' => [],
        ],
        $options,
    ),
);

$class = isset($group['class']) ? (is_array($group['class']) ? implode(' ', $group['class']) : $group['class']) : '';
$class = ($prepend || $append ? 'input-group' : 'form-group') . " $class";
$attrs = isset($group['attrs']) ? (is_array($group['attrs']) ? implode(' ', $group['attrs']) : $group['attrs']) : '';

@endphp

<div class="{{ $class }}{{ $errors->has($dot) ? ' has-danger' : '' }}" {{ $attrs }}>

  @if ($prepend)
    <div class="input-group-text">
      @if (is_array($prepend))
        <i class="{{ $prepend['icon'] }}"></i>
      @else
        {{ $prepend }}
      @endif
    </div>
  @endif

  @yield($yield)

  @if ($append)
    <div class="input-group-text">
      @if (is_array($prepend))
        <i class="{{ $append['icon'] }}"></i>
      @else
        {{ $append }}
      @endif
    </div>
  @endif


</div>
@include('alerts.feedback', ['field' => $dot])
