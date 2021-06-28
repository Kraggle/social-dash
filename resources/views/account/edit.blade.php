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
                  <div class="col-sm-6 pr-0">
                    <label for="input-username">
                      {{ __('Instagram Username') }}
                    </label>
                    @include('forms.text', ['options' => [
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
                    @include('forms.text', ['options' => [
                    'name' => 'pk',
                    'value' => $account->pk ?? '',
                    'id' => 'input-pk',
                    'required' => true,
                    'readonly' => true,
                    'prepend' => ['icon' => 'fal fa-fingerprint']
                    ]])
                  </div>

                  {{-- team_id --}}
                  <div class="col-sm-11">
                    <label for="select-team-id">
                      {{ __('Add to Team') }}
                    </label>
                    @include('forms.select', ['options' => [
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

                </div>
              </div>
            </div>

            <div toggle class="card">
              <div class="card-header">
                <h4 class="card-title">{{ __('Pricing') }}</h4>
              </div>
              <div class="card-body">
                <div class="row justify-content-md-center">
                  <div class="col-sm-11">
                    @include('forms.settings', ['settings' => $account->getAllSettings()])
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
  <script type="module" src="{{ asset('js') }}/accounts.js"></script>
@endpush
