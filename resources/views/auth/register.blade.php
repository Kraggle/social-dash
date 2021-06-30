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
            <form class="form" id="register-form" method="POST" action="{{ route('register') }}">
              @csrf

              {{-- @include('forms.text', ['options' => [
              'name' => 'user',
              'value' => app('request')->input('user'),
              'required' => true,
              'prepend' => ['icon' => 'fal fa-hashtag'],
              'placeholder' => __('Instagram username...')
              ]]) --}}

              @include('forms.text', ['options' => [
              'name' => 'name',
              'required' => true,
              'prepend' => ['icon' => 'fal fa-user'],
              'placeholder' => __('Name...'),
              // 'group' => ['attrs' => 'toggle', 'class' => 'd-none']
              ]])

              @include('forms.text', ['options' => [
              'name' => 'email',
              'required' => true,
              'prepend' => ['icon' => 'fal fa-envelope'],
              'placeholder' => __('Email...'),
              // 'group' => ['attrs' => 'toggle', 'class' => 'd-none']
              ]])

              @include('forms.text', ['options' => [
              'name' => 'password',
              'type' => 'password',
              'required' => true,
              'prepend' => ['icon' => 'fal fa-lock-alt'],
              'placeholder' => __('Password...'),
              // 'group' => ['attrs' => 'toggle', 'class' => 'd-none']
              ]])

              @include('forms.text', ['options' => [
              'name' => 'password_confirmation',
              'type' => 'password',
              'required' => true,
              'prepend' => ['icon' => 'fal fa-lock-alt'],
              'placeholder' => __('Confirm Password...'),
              // 'group' => ['attrs' => 'toggle', 'class' => 'd-none']
              ]])

              @include('forms.check', ['options' => [
              'name' => 'policy',
              'placeholder' => __('I agree with the ') . " <a href=\"#\">" . __('terms and conditions') . "</a>",
              // 'group' => ['attrs' => 'toggle', 'class' => 'd-none']
              ]])

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
      {{-- </div> --}}
    </div>
  </div>
@endsection

@push('js')
  <script type="module" src="{{ asset('js') }}/register.js"></script>
@endpush
