@extends('layouts.app', [
'class' => 'register-page',
'classPage' => 'register-page',
'activePage' => 'register',
'titlePage' => __('Register')
])

@section('content')
  <div class="content d-flex align-items-center" style="height:100vh">
    <div class="container">
      <div class="col-md-7 mr-auto ml-auto">
        <div class="card card-register card-white">
          <div class="card-header">
            <img class="card-img" src="{{ asset('white') }}/img/card-primary.png" alt="Card image">
            <h4 class="card-title">{{ __('Register') }}</h4>
          </div>
          <div class="card-body">
            <form class="form row" id="register-form" method="POST" action="{{ route('register') }}">
              @csrf

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
                'prepend' => ['icon' => 'fal fa-user'],
                'value' => 'Kraig'
                ]])
              </div>

              <div class="col-sm-6" style="padding-left: 5px">
                {{-- last name --}}
                @include('forms.text', ['options' => [
                'name' => 'lastname',
                'placeholder' => __('Last Name...'),
                'prepend' => ['icon' => 'fal fa-text-size'],
                'value' => 'Larner'
                ]])
              </div>

              <div class="col-sm-12">
                @include('forms.text', ['options' => [
                'name' => 'email',
                'required' => true,
                'prepend' => ['icon' => 'fal fa-envelope'],
                'placeholder' => __('Email...'),
                'value' => 'kraggle@live.co.uk'
                // 'group' => ['attrs' => 'toggle', 'class' => 'd-none']
                ]])
              </div>

              <div class="col-sm-6" style="padding-right: 5px">
                {{-- password --}}
                @include('forms.text', ['options' => [
                'name' => 'password',
                'type' => 'password',
                'required' => true,
                'placeholder' => __('Password...'),
                'prepend' => ['icon' => 'fal fa-lock-alt'],
                'value' => 'Kra1984ggle'
                ]])
              </div>

              <div class="col-sm-6" style="padding-left: 5px">
                {{-- confirm password --}}
                @include('forms.text', ['options' => [
                'name' => 'password_confirmation',
                'type' => 'password',
                'required' => true,
                'placeholder' => __('Confirm Password...'),
                'prepend' => ['icon' => 'fal fa-lock-alt'],
                'value' => 'Kra1984ggle'
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
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script type="module" src="{{ asset('js') }}/register.js"></script>
@endpush
