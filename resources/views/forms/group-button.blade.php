@php

extract($group);

$class[] = 'btn-group';
if ($size) {
    $class[] = "btn-group-$size";
}
if ($label) {
    $class[] = 'floating-label';
    $class[] = 'has-value';
    $attrs['data-label'] = $label;
}
$class = AppHelper::makeClass($class);

@endphp

<div class="{{ $class }}" @foreach ($attrs as $attr => $value) {{ $attr }}="{{ $value }}" @endforeach role="group">

  @yield($yield)

</div>
