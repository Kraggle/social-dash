@extends('layouts.app', ['activePage' => 'account-management', 'titlePage' => __('Account Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <form method="post" enctype="multipart/form-data" action="{{ route('account.update', $account) }}"
            autocomplete="off">
            @csrf
            @method('put')

            <div class="card">
              <div class="card-header row">
                <h4 class="card-title col-md-6">{{ __('Account') }}</h4>
              </div>
              <div class="card-body ">

                <div class="row justify-content-md-center">

                  {{-- username --}}
                  @php
                    $name = 'username';
                    $dot = AppHelper::toDotNotation($name);
                  @endphp
                  <div class="col-sm-6 pr-0">
                    <label for="input-{{ $name }}">{{ __('Instagram Username') }}</label>
                    <div class="input-group{{ $errors->has($dot) ? ' has-danger' : '' }}" disabled>
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fal fa-hashtag"></i>
                        </div>
                      </div>
                      <input class="form-control{{ $errors->has($dot) ? ' is-invalid' : '' }}" type="text"
                        name="{{ $name }}" id="{{ $name }}" value="{{ $account->username }}" disabled>
                    </div>
                    @include('alerts.feedback', ['field' => $dot])
                  </div>

                  {{-- pk --}}
                  @php
                    $name = 'pk';
                    $dot = AppHelper::toDotNotation($name);
                  @endphp
                  <div class="col-sm-5">
                    <label class="">{{ __('Instagram ID') }}</label>
                    <div class="input-group{{ $errors->has($dot) ? ' has-danger' : '' }}" disabled>
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fal fa-fingerprint"></i>
                        </div>
                      </div>
                      <input class="form-control{{ $errors->has($dot) ? ' is-invalid' : '' }}" type="text"
                        name="{{ $name }}" id="{{ $name }}" value="{{ $account->pk }}" disabled>
                    </div>
                    @include('alerts.feedback', ['field' => $dot])
                  </div>

                  {{-- team_id --}}
                  @php
                    $name = 'team_id';
                    $dot = AppHelper::toDotNotation($name);
                  @endphp
                  <div class="col-sm-11">
                    <label>{{ __('Add to Team') }}</label>
                    <div class="form-group">
                      <select name="{{ $name }}" class="selectpicker" data-style="btn btn-primary">
                        @php $selected = old($dot) ?? $account->team_id ?? 1 @endphp
                        @foreach ($teams as $team)
                          <option value="{{ $team->id }}" {{ AppHelper::selected($selected, $team->id) }}>
                            {{ $team->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                </div>
              </div>
            </div>

            <div toggle class="card">
              <div class="card-header">
                <h4 class="card-title">{{ __('Advanced Options') }}</h4>
              </div>
              <div class="card-body">
                <div class="row justify-content-md-center">
                  <div class="col-sm-11">
                    @foreach ($account->getAllSettings() as $setting)
                      @php echo AppHelper::makeSetting($setting) @endphp
                    @endforeach
                  </div>
                </div>
              </div>

              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn">{{ __('Save Account') }}</button>
              </div>
            </div>

          </form>
        </div>
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-12 mb-3 text-right">
              <a href="{{ route('account.index') }}" class="btn btn-sm btn-warning">{{ __('Back to list') }}</a>
            </div>
          </div>
          {{-- <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ __('Example') }}</h4>
                    </div>
                    <div class="card-body">

                    </div>
                </div> --}}
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script type="module" src="{{ asset('custom') }}/script/accounts.js"></script>
@endpush
