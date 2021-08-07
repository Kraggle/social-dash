@extends('layouts.app', [
'class' => 'reset-page',
'classPage' => 'reset-page',
'activePage' => 'reset',
'titlePage' => __('Password Reset'),
])

@section('content')
  <div class="content d-flex align-items-center">
    <div class="container">
      <div class="mx-auto" style="width:375px; max-width:calc(100vw - 80px)">
        <form class="form" id="reset-form" method="POST" action="{{ route('password.update') }}">
          @csrf

          <input type="hidden" name="token" value="{{ $token }}">
          <div class="card card-auth">
            <div class="card-header header-image">
              <img class="card-img" src="{{ asset('images') }}/card-primary.png" alt="">
              <h1 class="card-title" style="font-size: 3.4rem">{{ __('Password Reset') }}</h1>
            </div>
            <div class="card-body">
              <div class="input-group mb-4{{ $errors->has('email') ? ' has-danger' : '' }}">
                <div class="input-group-text">
                  <i class="fal fa-envelope"></i>
                </div>
                <input type="email" class="form-control" id="exampleEmails" name="email"
                  placeholder="{{ __('Email...') }}" value="{{ old('email') }}" required>
              </div>
              @include('alerts.feedback', ['field' => 'email'])
              <div class="input-group mb-2{{ $errors->has('password') ? ' has-danger' : '' }}">
                <div class="input-group-text">
                  <i class="fal fa-lock-alt"></i>
                </div>
                <input type="password" class="form-control" id="examplePassword" name="password"
                  placeholder="{{ __('Password...') }}" required>
              </div>
              @include('alerts.feedback', ['field' => 'password'])
              <div class="input-group mb-2{{ $errors->has('password_confirmation') ? ' has-danger' : '' }}">
                <div class="input-group-text">
                  <i class="fal fa-lock-alt"></i>
                </div>
                <input type="password" class="form-control" id="examplePassword" name="password_confirmation"
                  placeholder="{{ __('Password Confirmation...') }}" required>
                @include('alerts.feedback', ['field' => 'password_confirmation'])
              </div>
            </div>
            <div class="card-footer">
              <div class="d-grid">
                <a href="#" onclick="event.preventDefault(); document.getElementById('reset-form').submit();"
                  class="btn btn-primary btn-lg mb-3">{{ __('Reset Password') }}</a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    // $(document).ready(function() {
    //   demo.checkFullPageBackgroundImage();
    // });
  </script>
@endpush
