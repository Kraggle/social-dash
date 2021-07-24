@extends('layouts.app', [
'activePage' => 'account-management',
'menuParent' => 'laravel',
'titlePage' => __('Account Management')
])

@define($team = auth()->user()->team)
@define($plus = in_array($team->package->id, [1, 3, 4]))

{{-- TODO: Needs a loader when searching for the Instagram account --}}

@section('content')
  <div class="content">
    <div class="container-fluid">
      @can('add-account', $team)
        <form method="post" enctype="multipart/form-data" action="{{ route('account.store') }}" autocomplete="off"
          class="form-horizontal">
          @csrf
          @method('post')
          <input type="hidden" name="followers" value="50000">

          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">{{ __('Search') }}</h4>
                </div>
                <div class="card-body">
                  <div class="row justify-content-md-center">
                    <div class="col-sm-11">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fal fa-hashtag"></i>
                          </div>
                        </div>
                        <input id="search" class="form-control" type="search" placeholder="Instagram username"
                          value="makemoneyfromhomeuk" />
                        <div class="input-group-append">
                          <button id="find-btn" class="btn btn-success">Search</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div toggle class="card">
                <div class="card-header">
                  <h4 class="card-title">{{ __('Account') }}</h4>
                </div>
                <div class="card-body">
                  <div class="row justify-content-md-center">

                    {{-- username --}}
                    <div class="col-sm-6 pr-0">
                      <label for="input-username">
                        {{ __('Instagram Username') }}
                      </label>
                      @include('forms.text', ['options' => [
                      'name' => 'username',
                      'id' => 'input-username',
                      'prepend' => ['icon' => 'fal fa-hashtag'],
                      'required' => true,
                      'readonly' => true
                      ]])
                    </div>

                    {{-- pk --}}
                    <div class="col-sm-5">
                      <label for="input-pk">
                        {{ __('Instagram ID') }}
                      </label>
                      @include('forms.text', ['options' => [
                      'name' => 'pk',
                      'id' => 'input-pk',
                      'required' => true,
                      'readonly' => true,
                      'prepend' => ['icon' => 'fal fa-fingerprint']
                      ]])
                    </div>

                    @if (auth()->user()->isAdmin())
                      {{-- team_id --}}
                      <div class="col-sm-11">
                        <label for="select-team-id">
                          {{ __('Add to Team') }}
                        </label>
                        @include('forms.select', ['options' => [
                        'name' => 'team_id',
                        'value' => 1,
                        'id' => 'select-team-id',
                        'from' => [
                        'array' => $teams,
                        'value' => 'id',
                        'display' => 'name'
                        ]
                        ]])
                      </div>
                    @endif

                  </div>
                </div>
              </div>

              @if ($plus)
                <div toggle class="card">
                  <div class="card-header">
                    <h4 class="card-title">{{ __('Pricing Options') }}</h4>
                  </div>
                  <div class="card-body">
                    <div class="row justify-content-md-center">

                      {{-- settings --}}
                      <div class="col-sm-11">
                        @include('forms.settings', ['settings' => $settings])
                      </div>

                    </div>
                  </div>
                </div>
              @endif
            </div>

            <div class="col-md-4">
              <div class="row">
                <div class="col-md-12 mb-3 text-right">
                  <a href="{{ route('account.index') }}" class="btn btn-sm btn-warning">{{ __('Back to list') }}</a>
                </div>
              </div>
              <div class="card card-pricing card-primary card-white">
                <div class="card-body">
                  <h1 class="card-title">payment</h1>
                  <img class="card-img" src="http://social-dash.test/white/img/card-primary.png" alt="Image" title="">
                  <ul class="list-group">
                    <li class="list-group-item"><span update="followers">98k</span> followers</li>
                    @if ($plus)
                      @foreach ($settings as $setting)
                        @include('forms.message', ['setting' => $setting])
                      @endforeach
                    @endif
                  </ul>
                  <div class="card-prices">
                    <h3 class="text-on-front">
                      <span class="symbol">£</span><span class="acc-cost">95</span><span class="term">pm</span>
                    </h3>
                    <h5 class="text-on-back"><span class="acc-cost">95</span></h5>
                    <p class="plan">Account cost</p>
                  </div>
                </div>
                <div class="card-footer text-center mb-3 mt-3">
                  <button class="btn btn-round btn-just-icon btn-primary">Pay Now</button>
                </div>
              </div>

            </div>
          </div>
        </form>
      @else
        @include('permission')
      @endcan
    </div>
  </div>
@endsection

@push('js')
  <script type="module" src="{{ asset('js') }}/accounts.js"></script>
@endpush
