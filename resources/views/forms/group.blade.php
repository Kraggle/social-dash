@php
$prepend = $prepend ?? '';
$append = $append ?? '';

extract($group);

if (isset($class) && !is_array($class)) {
    $class = [$class];
}

$class[] = 'input-group';
if ($size) {
    $class[] = "input-group-$size";
}
if ($label) {
    $class[] = 'floating-label';
    $attrs['data-label'] = $label;
}
$class = AppHelper::makeClass($class);

@endphp

<div class="{{ $class }}{{ $errors->has($dot) ? ' has-danger' : '' }}" @foreach ($attrs as $attr => $value) {{ $attr }}="{{ $value }}" @endforeach>

  @include('forms.pender', ['settings' => $prepend])

  @yield($yield)

  @include('forms.pender', ['settings' => $append])

</div>
@include('alerts.feedback', ['field' => $dot])
