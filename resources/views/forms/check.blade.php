@php
extract(AppHelper::arrayMerge(AppHelper::formDefaults(), ['size' => ''], $settings));

$dot = AppHelper::toDot($name);
$value = old($dot) ?? $value;

if ($size) {
    $group['class'][] = "form-check-$size";
}

if (!$placeholder) {
    $placeholder = $label;
}

if ($placeholder) {
    $group['class'][] = 'form-check-labelled';
}

@endphp

<div class="form-check {{ AppHelper::makeClass($group['class']) }}" @foreach ($group['attrs'] as $attr => $value) {{ $attr }}="{{ $value }}" @endforeach>
  <label class="form-check-label" for="{{ $id }}">
    <input type="hidden" name="{{ $name }}" value=0>
    <input class="form-check-input" type="checkbox" name="{{ $name }}" value=1 id="{{ $id }}" {{ AppHelper::checked($value) }} {{ $disabled ? 'disabled' : '' }} {{ $readonly ? 'readonly' : '' }}>
    <span class="form-check-sign"></span>
    @if ($placeholder)
      <span class="form-check-placeholder">{!! $placeholder !!}</span>
    @endif
  </label>
</div>
@include('alerts.feedback', ['field' => $dot])
