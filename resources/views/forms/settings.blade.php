@php
use App\Models\Defaults;
@endphp

@foreach ($settings ?? [] as $setting)
  @php
    $isDefault = $setting instanceof Defaults;
    $default = $isDefault ? $setting : $setting->default;
    
    $options = $default->options;
    $hidden = AppHelper::isTrue($options->hidden ?? 0);
    $type = $options->type;
    
    $key = $options->key;
    $name = "settings[$key]";
    
    $has_msg = isset($options->message);
    
    $value = $isDefault ? null : $setting->value;
    $value = old(AppHelper::toDot($name)) ?? ($value ?? $default->default());
    
    $has_cost = AppHelper::isTrue($options->has_cost);
    $cost = $default->cost($value);
  @endphp

  @if (!$hidden)
    <div class="row">
      <div class="col-sm-12">
        <label>
          {{ $default->name }}
          @if ($options->subtitle)
            <span class="fz-sm fw-light ms-2">{{ $options->subtitle }}</span>
          @endif
        </label>
      </div>
  @endif

  @if ($type == 'checkbox') {{-- checkbox --}}

    @if ($hidden)
      @php $value = $value ? 'true' : 'false'; @endphp
      <input type="hidden" name="{{ $name }}" value="{{ $value }}" {{ $has_cost ? " data-cost=$cost has-cost" : '' }}>
    @else
      <input type="hidden" name="{{ $name }}" value="false">
      <div class="col has-switch mb-2">
        <input class="bootstrap-switch" type="checkbox" name="{{ $name }}" {{ AppHelper::checked($value) }} data-off-label="NO" data-on-label="YES" value="true" {{ $has_msg ? 'has-msg' : '' }} {{ $has_cost ? " has-cost data-on-cost=$options->on_cost data-off-cost=$options->off_cost" : '' }}>
      </div>
    @endif

  @elseif($type == 'text') {{-- text --}}

    @if ($hidden)
      <input type="hidden" name="{{ $name }}" value="{{ $value }}" {{ $has_cost ? " data-cost=$cost has-cost" : '' }}>
    @else
      <div class="col pe-0 mb-2">
        <select name="{{ $name }}" class="selectpicker" data-style="btn" {{ $has_cost ? ' has-cost' : '' }} {{ $has_msg ? 'has-msg' : '' }}>
          @foreach ($options->values as $option)
            <option title="{{ $option->value }}" value="{{ $option->key ?? $option->value }}" {{ $has_cost ? " data-cost=$option->cost" : '' }} {{ AppHelper::selected($value, $option->value) }} data-content="<span>{{ $option->value }}</span><span class='select-cost'>{{ $has_cost ? "£$option->cost" : '' }}</span>">
            </option>
          @endforeach
        </select>
      </div>
    @endif

  @elseif ($type == 'number') {{-- number --}}
    @php
      $min = $options->min_value;
      $max = $options->max_value;
      $cost_min = $options->min_cost ?? 0;
      $cost_max = $options->max_cost ?? 0;
      $step = $options->step ?? 1;
    @endphp

    @if ($hidden)
      <input type="hidden" name="{{ $name }}" value="{{ $value }}" {{ $has_cost ? " data-cost=$cost has-cost" : '' }}>
    @else
      <div class="col-sm-2 pe-0 mb-2">
        <div class="input-group">
          <span class="input-group-text">
            @icon('fal fa-lambda')
          </span>
          <input type="number" class="form-control ps-2 pe-0" id="{{ $key }}" name="{{ $name }}" min="{{ $min }}" max="{{ $max }}" step="{{ $step }}" value="{{ $value }}" {{ $has_msg ? 'has-msg' : '' }} {{ $has_cost ? " has-cost data-min-cost=$cost_min data-max-cost=$cost_max" : '' }} />
        </div>
      </div>

      <div class="col mb-2">
        <div id="noUi_{{ $key }}" name="{{ $name }}" class="slider slider-primary" data-min="{{ $min }}" data-max="{{ $max }}" {{ $has_msg ? 'has-msg' : '' }} {{ $has_cost ? " data-min-cost=$cost_min data-max-cost=$cost_max" : '' }} data-step="{{ $step }}" data-default="{{ $value }}" style="margin-top: 18px;"></div>
      </div>
    @endif

  @endif

  @if (!$hidden)
    @if ($has_cost)
      <div class=" col-md-auto mb-2" style="padding:8px 0 10px 15px">
        <span class="">£</span>
        <span id="{{ $key }}_cost" class="">{{ $cost }}</span>
      </div>
    @endif

    @if ($default->description)
      <div class="col-sm-auto">
        <button toggle="{{ $key }}" class="btn-sm btn-link">
          <span class="fal fa-info-circle"></span>
        </button>
      </div>
      <div toggle="{{ $key }}" class="col-sm-12 text-black-50 font-italic d-none mb-2" style="font-size:0.725rem; line-height:1.3;">
        <span>{{ $default->description }}</span>
      </div>
    @endif
    </div>
  @endif

@endforeach
