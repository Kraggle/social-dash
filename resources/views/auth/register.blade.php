@extends('layouts.app', [
'class' => 'register-page',
'activePage' => 'register',
'titlePage' => __('Register')
])

@php
$token = app('request')->input('token') ?? false;
$valid = null;
if ($token) {
    $column = App\Models\RegisterToken::where('token', $token)->first();
    $valid = $column ? AppHelper::valid(new DateTime($column->valid_until)) : false;
}
@endphp

@section('content')
  <div class="content d-flex align-items-center">
    <div class="container">
      <div class="mx-auto" style="width:618px; max-width:calc(100vw - 80px);">
        @if ($valid === null || $valid)

          <div class="card card-auth">
            <div class="card-header header-image">
              <img class="card-img" src="{{ asset('images') }}/card-primary.png" alt="Card image">
              <h3 class="card-title">{{ __('Register') }}</h3>
            </div>
            <div class="card-body">
              <form class="form" id="register-form" method="POST" action="{{ route('register') }}">
                @csrf

                @if ($token)
                  <input type="hidden" name="token" value="{{ $token }}">
                @endif

                {{-- @include('forms.text', ['settings' => [
              'name' => 'user',
              'value' => app('request')->input('user'),
              'required' => true,
              'prepend' => ['icon' => 'fal fa-hashtag'],
              'placeholder' => __('Instagram username...')
              ]]) --}}

                <div class="row row-sm">
                  {{-- first name --}}
                  <div class="col-sm-6">
                    @include('forms.text', ['settings' => [
                    'name' => 'name',
                    'required' => true,
                    'placeholder' => __('First Name...'),
                    'prepend' => ['icon' => 'fal fa-user']
                    ]])
                  </div>

                  {{-- last name --}}
                  <div class="col-sm-6">
                    @include('forms.text', ['settings' => [
                    'name' => 'lastname',
                    'placeholder' => __('Last Name...'),
                    'prepend' => ['icon' => 'fal fa-text-size']
                    ]])
                  </div>
                </div>

                <div class="row row-sm">
                  {{-- email --}}
                  <div class="col-12">
                    @include('forms.text', ['settings' => [
                    'name' => 'email',
                    'required' => true,
                    'prepend' => ['icon' => 'fal fa-envelope'],
                    'placeholder' => __('Email...')
                    ]])
                  </div>
                </div>

                <div class="row row-sm">
                  {{-- password --}}
                  <div class="col-sm-6">
                    @include('forms.text', ['settings' => [
                    'name' => 'password',
                    'type' => 'password',
                    'required' => true,
                    'placeholder' => __('Password...'),
                    'prepend' => ['icon' => 'fal fa-lock-alt']
                    ]])
                  </div>

                  {{-- confirm password --}}
                  <div class="col-sm-6">
                    @include('forms.text', ['settings' => [
                    'name' => 'password_confirmation',
                    'type' => 'password',
                    'required' => true,
                    'placeholder' => __('Confirm Password...'),
                    'prepend' => ['icon' => 'fal fa-lock-alt']
                    ]])
                  </div>
                </div>

              </form>

              {{-- <div class="card-message">
              <p class="card-text">First find the instagram account you would like to analyse.</p>
            </div> --}}

            </div>

            {{-- <div id="find-btn" class="card-footer d-flex justify-content-center" unhide="d-flex">
            <a href="javascript:void(0)" class="btn btn-primary btn-gradient btn-lg rounded-pill">
              find account
            </a>
          </div> --}}

            <div id="submit-btn" class="card-footer justify-content-center d-flex" unhide="d-flex">
              <a href="javascript:void(0)" class="btn btn-primary btn-gradient btn-lg rounded-pill">
                lets go
              </a>
            </div>

          </div>
        @else
          <div class="card card-register">
            <div class="card-body">
              <div class="row justify-content-center">
                <div class="col-md-auto mt-5">
                  <i class="fad fa-exclamation-triangle text-warning" style="font-size:250px" aria-hidden="true"></i>
                </div>
              </div>
              <h4 class="text-center fz-xl m-5">
                {{ __('The provided token has expired. You cannot register with this.') }}
              </h4>
            </div>
          </div>
        @endif
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script type="module" src="{{ AH::asset('js/pages/auth', '/register.js') }}"></script>
@endpush
