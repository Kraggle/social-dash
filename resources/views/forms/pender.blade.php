@if ($settings)
  @if (is_array($settings))
    @if (isset($settings['icon']))
      <div class="input-group-text">
        <i class="{{ $settings['icon'] }}"></i>
      </div>
    @elseif (isset($settings['btn']))
      @php
        extract(
            array_merge(
                [
                    'type' => 'button',
                    'class' => 'btn btn-primary',
                    'href' => '#',
                    'id' => '',
                    'display' => 'Button',
                ],
                $settings['btn'],
            ),
        );
      @endphp
      @if ($type == 'a')
        <a class="{{ $class }}" href="{{ $href }}" id="{{ $id }}">
          {{ $display }}
        </a>
      @else
        <button type="button" class="{{ $class }}" href="{{ $href }}" id="{{ $id }}">
          {{ $display }}
        </button>
      @endif
    @endif
  @else
    <div class="input-group-text">
      {{ $settings }}
    </div>
  @endif
@endif
