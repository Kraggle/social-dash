@extends('layouts.app', [
'class' => 'forgot-page',
'classPage' => 'forgot-page',
'activePage' => 'forgot',
'titlePage' => __('Forgot Password'),
])

@section('content')
  <div class="content d-flex align-items-center">
    <div class="container">
      <div class="mx-auto" style="width: 375px; max-width:calc(100vw - 80px)">
        <form class="form" id="email-form" method="POST" action="{{ route('password.email') }}">
          @csrf
          <div class="card card-auth">
            <div class="card-header header-image">
              <img class="card-img" src="{{ asset('images') }}/card-primary.png" alt="">
              <h1 class="card-title" style="font-size: 3.4rem">{{ __('Forgot Password') }}</h1>
            </div>
            <div class="card-body">
              <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                <div class="input-group-text">
                  <i class="fal fa-envelope"></i>
                </div>
                <input type="email" class="form-control" id="exampleEmails" name="email"
                  placeholder="{{ __('Email...') }}" value="{{ old('email') }}" required>
              </div>
              @include('alerts.feedback', ['field' => 'email'])
            </div>
            <div class="card-footer">
              <div class="d-grid">
                <a href="#" onclick="event.preventDefault(); document.getElementById('email-form').submit();"
                  class="btn btn-primary btn-lg btn-block mb-3">{{ __('Send Password Reset Link') }}</a>
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
