@extends('layouts.app', [
'class' => 'register-page',
'classPage' => 'register-page',
'activePage' => 'register',
'title' => __('Register')
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
                        <div class="form-group mb-0 {{ $errors->has('name') ? ' has-danger' : '' }}">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fal fa-hashtag"></i>
                                    </div>
                                </div>
                                <input type="text" name="user" class="form-control" placeholder="{{ __('Instagram username...') }}" value="{{ old('user') ?? app('request')->input('user') }}" required>
                            </div>
                            @include('alerts.feedback', ['field' => 'user'])
                        </div>
                        <div toggle class="form-group mb-0 {{ $errors->has('name') ? ' has-danger' : '' }} d-none">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fal fa-user"></i>
                                    </div>
                                </div>
                                <input type="text" name="name" class="form-control" placeholder="{{ __('Name...') }}" value="{{ old('name') }}" required>
                            </div>
                            @include('alerts.feedback', ['field' => 'name'])
                        </div>
                        <div toggle class="form-group mb-0 {{ $errors->has('name') ? ' has-danger' : '' }} d-none">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="email" placeholder="{{ __('Email...') }}" value="{{ old('email') }}" required>
                            </div>
                            @include('alerts.feedback', ['field' => 'email'])
                        </div>
                        <div toggle class="form-group mb-0 {{ $errors->has('name') ? ' has-danger' : '' }} d-none">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="tim-icons icon-lock-circle"></i>
                                    </div>
                                </div>
                                <input type="password" name="password" placeholder="{{ __('Password...') }}" class="form-control" required>
                            </div>
                            @include('alerts.feedback', ['field' => 'password'])
                        </div>
                        <div toggle class="input-group d-none">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-lock-circle"></i>
                                </div>
                            </div>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="{{ __('Confirm Password...') }}" required>
                        </div>
                        <div toggle class="form-check text-left d-none">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="policy" value="1" {{ old('policy') ? 'checked' : 'checked' }}>
                                <span class="form-check-sign"></span>
                                {{ __('I agree with the ') }} <a href="#">{{ __('terms and conditions') }}</a>
                            </label>
                        </div>
                    </form>

                    <div class="card-message">
                        <p class="card-text">First find the instagram account you would like to analyse.</p>
                    </div>

                </div>

                <div id="find-btn" class="card-footer d-flex justify-content-center" unhide="d-flex">
                    <a href="javascript:void(0)" class="btn btn-primary btn-round btn-lg">
                        find account
                    </a>
                </div>

                <div id="submit-btn" class="card-footer justify-content-center d-none" unhide="d-flex">
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
<script>
    $(document).ready(function() {
        demo.checkFullPageBackgroundImage();
    });

</script>

<script type="module" src="{{ asset('custom') }}/script/register.js"></script>
@endpush
