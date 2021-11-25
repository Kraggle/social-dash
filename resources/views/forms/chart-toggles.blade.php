@php
extract(
    array_merge(
        [
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
 *    id => '',
 *    name => '',
 *    color => '',
 *    display => '',
 *    icon => '',
 *    checked => boolean,
 * ]]
 */

$no_cookie = true;
if ($cookie) {
    foreach ($buttons as $btn) {
        if (isset($cookie->{$btn['id']}) && $cookie->{$btn['id']}) {
            $no_cookie = false;
        }
    }
}

@endphp

<div class="col-auto btn-group {{ $group_class }}" {{ $group_attrs }} role="group">

  @foreach ($buttons as $btn)
    @php
      $checked = $loop->first || false;
      if (!$no_cookie && $cookie) {
          $checked = isset($cookie->{$btn['id']}) ? $cookie->{$btn['id']} : false;
      }
    @endphp

    <input type="checkbox" class="btn-check" name="{{ $btn['name'] ?? '' }}" id="{{ $btn['id'] }}" data-color="{{ $btn['color'] }}" data-label="{{ $btn['display'] }}" {{ AppHelper::checked($btn['checked'] ?? $checked) }}>
    <label class="btn btn-outline-{{ $btn['color'] }}" for="{{ $btn['id'] }}">
      <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">{{ $btn['display'] }}</span>
      <span class="d-block d-sm-none">
        @icon($btn['icon'])
      </span>
    </label>
  @endforeach

</div>
