@extends('layouts.app', ['activePage' => 'account-management', 'titlePage' => __('Account Management')])

@define($team = $account->team)

@section('content')
  <div class="content">
    <div class="container-fluid">
      @can('edit-account', $team)
        <div class="row">
          <div class="col-md-8">
            <form method="post" enctype="multipart/form-data" action="{{ route('account.update', $account) }}" autocomplete="off">
              @csrf
              @method('put')

              <div class="card">
                <div class="card-header row">
                  <h3 class="card-title col-md-6">{{ __('Account') }}</h3>
                </div>
                <div class="card-body ">

                  <div class="row justify-content-md-center">

                    {{-- username --}}
                    <div class="col-sm-6 pe-0">
                      <label for="input-username">
                        {{ __('Instagram Username') }}
                      </label>
                      @include('forms.text', ['settings' => [
                      'name' => 'username',
                      'value' => $account->username ?? '',
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
                      @include('forms.text', ['settings' => [
                      'name' => 'pk',
                      'value' => $account->pk ?? '',
                      'id' => 'input-pk',
                      'required' => true,
                      'readonly' => true,
                      'prepend' => ['icon' => 'fal fa-fingerprint']
                      ]])
                    </div>

                    {{-- team_id --}}
                    @if (auth()->user()->isAdmin())
                      <div class="col-sm-11">
                        <label for="select-team-id">
                          {{ __('Add to Team') }}
                        </label>
                        @include('forms.select', ['settings' => [
                        'name' => 'team_id',
                        'value' => $account->team_id ?? 1,
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

              <div toggle class="card">
                <div class="card-header">
                  <h3 class="card-title">{{ __('Pricing') }}</h3>
                </div>
                <div class="card-body">
                  <div class="row justify-content-md-center">
                    <div class="col-sm-11">
                      @include('forms.settings', ['settings' => $account->getAllSettings()])
                    </div>
                  </div>
                </div>

                <div class="card-footer mx-auto">
                  <button type="submit" class="btn btn-primary btn-gradient">{{ __('Save Account') }}</button>
                </div>
              </div>

            </form>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-12 mb-3 text-end">
                <a href="{{ route('account.index') }}" class="btn btn-sm btn-warning btn-gradient">{{ __('Back to list') }}</a>
              </div>
            </div>
            {{-- <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Example') }}</h3>
                    </div>
                    <div class="card-body">

                    </div>
                </div> --}}
          </div>
        </div>
      @else
        @include('permission')
      @endcan
    </div>
  </div>
@endsection

@push('js')
  <script type="module" src="{{ asset('js') }}/accounts.js"></script>
@endpush
