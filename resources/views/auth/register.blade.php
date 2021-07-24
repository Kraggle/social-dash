@extends('layouts.app', [
'class' => 'register-page',
'classPage' => 'register-page',
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
  <div class="content d-flex align-items-center" style="height:100vh">
    <div class="container">
      <div class="col-md-7 mr-auto ml-auto">
        @if ($valid === null || $valid)
          <div class="card card-register card-white">
            <div class="card-header">
              <img class="card-img" src="{{ asset('white') }}/img/card-primary.png" alt="Card image">
              <h4 class="card-title">{{ __('Register') }}</h4>
            </div>
            <div class="card-body">
              <form class="form row" id="register-form" method="POST" action="{{ route('register') }}">
                @csrf

                @if ($token)
                  <input type="hidden" name="token" value="{{ $token }}">
                @endif

                {{-- @include('forms.text', ['options' => [
              'name' => 'user',
              'value' => app('request')->input('user'),
              'required' => true,
              'prepend' => ['icon' => 'fal fa-hashtag'],
              'placeholder' => __('Instagram username...')
              ]]) --}}


                <div class="col-sm-6" style="padding-right: 5px">
                  {{-- first name --}}
                  @include('forms.text', ['options' => [
                  'name' => 'firstname',
                  'required' => true,
                  'placeholder' => __('First Name...'),
                  'prepend' => ['icon' => 'fal fa-user']
                  ]])
                </div>

                <div class="col-sm-6" style="padding-left: 5px">
                  {{-- last name --}}
                  @include('forms.text', ['options' => [
                  'name' => 'lastname',
                  'placeholder' => __('Last Name...'),
                  'prepend' => ['icon' => 'fal fa-text-size']
                  ]])
                </div>

                <div class="col-sm-12">
                  @include('forms.text', ['options' => [
                  'name' => 'email',
                  'required' => true,
                  'prepend' => ['icon' => 'fal fa-envelope'],
                  'placeholder' => __('Email...')
                  ]])
                </div>

                <div class="col-sm-6" style="padding-right: 5px">
                  {{-- password --}}
                  @include('forms.text', ['options' => [
                  'name' => 'password',
                  'type' => 'password',
                  'required' => true,
                  'placeholder' => __('Password...'),
                  'prepend' => ['icon' => 'fal fa-lock-alt']
                  ]])
                </div>

                <div class="col-sm-6" style="padding-left: 5px">
                  {{-- confirm password --}}
                  @include('forms.text', ['options' => [
                  'name' => 'password_confirmation',
                  'type' => 'password',
                  'required' => true,
                  'placeholder' => __('Confirm Password...'),
                  'prepend' => ['icon' => 'fal fa-lock-alt']
                  ]])
                </div>

              </form>

              {{-- <div class="card-message">
              <p class="card-text">First find the instagram account you would like to analyse.</p>
            </div> --}}

            </div>

            {{-- <div id="find-btn" class="card-footer d-flex justify-content-center" unhide="d-flex">
            <a href="javascript:void(0)" class="btn btn-primary btn-round btn-lg">
              find account
            </a>
          </div> --}}

            <div id="submit-btn" class="card-footer justify-content-center d-flex" unhide="d-flex">
              <a href="javascript:void(0)" class="btn btn-primary btn-round btn-lg">
                lets go
              </a>
            </div>

          </div>
        @else
          <div class="card card-register card-white">
            <div class="card-body">
              <div class="row justify-content-center">
                <div class="col-md-auto mt-5">
                  <i class="fad fa-exclamation-triangle text-warning" style="font-size:250px"></i>
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
  <script type="module" src="{{ asset('js') }}/register.js"></script>
@endpush
