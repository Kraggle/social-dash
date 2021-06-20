@extends('layouts.app', [
'activePage' => 'account-management',
'menuParent' => 'laravel',
'titlePage' => __('Account Management')
])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{ __('Search') }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-md-center">
                                <div class="col-sm-11">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fal fa-hashtag"></i>
                                            </div>
                                        </div>
                                        <input name="search" class="form-control" type="search"
                                            placeholder="Instagram username" />
                                        <div class="input-group-append">
                                            <button id="find-btn" class="btn btn-success">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form method="post" enctype="multipart/form-data" action="{{ route('account.store') }}"
                        autocomplete="off" class="form-horizontal">
                        @csrf
                        @method('post')

                        <div toggle class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{ __('New Account') }}</h4>
                            </div>
                            <div class="card-body">
                                <div class="row justify-content-md-center">

                                    {{-- username --}}
                                    <div class="col-sm-6 pr-0">
                                        <label class="">{{ __('Instagram Username') }}</label>
                                        <div class="input-group{{ $errors->has('username') ? ' has-danger' : '' }}">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fal fa-hashtag"></i>
                                                </div>
                                            </div>
                                            <input class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}"
                                                type="text" name="username" id="username" value="{{ old('username') }}">
                                        </div>
                                        @include('alerts.feedback', ['field' => 'username'])
                                    </div>

                                    {{-- pk --}}
                                    <div class="col-sm-5">
                                        <label class="">{{ __('Instagram ID') }}</label>
                                        <div class="input-group{{ $errors->has('pk') ? ' has-danger' : '' }}">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fal fa-fingerprint"></i>
                                                </div>
                                            </div>
                                            <input class="form-control{{ $errors->has('pk') ? ' is-invalid' : '' }}"
                                                type="text" name="pk" id="pk" value="{{ old('pk') }}">
                                        </div>
                                        @include('alerts.feedback', ['field' => 'pk'])
                                    </div>

                                    <div class="col-sm-11">
                                        <label>{{ __('Add to Team') }}</label>
                                        <div class="form-group">
                                            <select name="team_id" class="selectpicker" data-style="btn btn-primary">
                                                @php $selected = old('team_id') ?? 1 @endphp
                                                @foreach ($teams as $team)
                                                    <option value="{{ $team->id }}"
                                                        {{ $selected == $team->id ? ' selected' : '' }}>
                                                        {{ $team->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div toggle class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{ __('More Options') }}</h4>
                            </div>
                            <div class="card-body">
                                <div class="row justify-content-md-center">
                                    <div class="col-sm-11">
                                        @foreach ($settings as $setting)
                                            @php echo AppHelper::makeSetting($setting) @endphp
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn">{{ __('Add Account') }}</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12 mb-3 text-right">
                            <a href="{{ route('account.index') }}"
                                class="btn btn-sm btn-warning">{{ __('Back to list') }}</a>
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
    <script type="module" src="{{ asset('custom') }}/script/accounts.js"></script>
@endpush
