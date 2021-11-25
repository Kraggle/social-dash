@php

use App\Models\Package;

$packages = Package::orderBy('cost', 'asc')->get();

$name = 'package_id';
$colors = ['danger', 'info', 'warning', 'success', 'primary'];

@endphp

<div class="row">
  @foreach ($packages as $package)
    @continue($package->id == 1)
    @php
      $id = AppHelper::makeId();
      $color = $colors[$loop->index];
      $checked = AppHelper::checked($package->name == (old($name) ?? 'Advanced'));
    @endphp

    <div class="col-sm-4 package-column">
      <input class="d-none" type="radio" name="{{ $name }}" value={{ $package->stripe_id }} id="{{ $id }}" {{ $checked }}>
      <label class="package-button" for="{{ $id }}">
        <div class="card card-pricing card-package">
          <div class="card-body">
            <h3 class="card-title mt-3" style="font-size:4em">{{ $package->name }}</h3>
            <img class="card-img" src="{{ asset('images') }}/card-{{ $color }}.png" alt="Image">
            <ul class="list-group">
              @foreach ($package->access as $access => $on)
                @php $on = AppHelper::isTrue($on) @endphp
                <li class="list-group-item {{ !$on ? 'mark-not' : 'mark-is' }}">
                  {{ ucfirst($access) }}@icon('fa fa-{{ !$on ? 'times' : 'check' }}')
                </li>
              @endforeach
            </ul>
            <div class="card-prices">
              <h3 class="text-on-front">
                <span>£</span>{{ $package->cost }}<span class="term">pm</span>
              </h3>
              <h5 class="text-on-back">{{ $package->cost }}</h5>
              <p class="plan">{{ $package->name }} plan</p>
            </div>
          </div>
          <div class="card-footer text-center mb-3 mt-3">
            <a href="javascript:void(0)" class="btn btn-{{ $color }} rounded-pill"></a>
          </div>
        </div>
      </label>
    </div>

  @endforeach
</div>
