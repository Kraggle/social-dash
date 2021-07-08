@extends('layouts.app', [
'class' => 'forgot-page',
'classPage' => 'forgot-page',
'activePage' => 'forgot',
'titlePage' => __('Forgot Password'),
])

{{-- TODO:: Update this so it actually sends out an email --}}
{{-- TODO:: Styling is all wrong for this page --}}

@section('content')
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <form class="form" id="email-form" method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="card card-white card-login">
              <div class="card-header">
                <img src="{{ asset('white') }}/img/card-primary.png" alt="">
                <h1 class="card-title">{{ __('Forgot Password') }}</h1>
              </div>
              <div class="card-body">
                <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="tim-icons icon-email-85"></i>
                    </div>
                  </div>
                  <input type="email" class="form-control" id="exampleEmails" name="email"
                    placeholder="{{ __('Email...') }}" value="{{ old('email') }}" required>
                </div>
                @include('alerts.feedback', ['field' => 'email'])
              </div>
              <div class="card-footer">
                <a href="#" onclick="event.preventDefault();
                          document.getElementById('email-form').submit();"
                  class="btn btn-primary btn-lg btn-block mb-3">{{ __('Send Password Reset Link') }}</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      demo.checkFullPageBackgroundImage();
    });
  </script>
@endpush
