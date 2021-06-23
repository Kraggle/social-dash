@extends('layouts.app', ['activePage' => 'package-management', 'menuParent' => 'laravel', 'titlePage' => __('Package
Management')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" enctype="multipart/form-data" action="{{ route('package.update', $package) }}"
                        autocomplete="off">
                        @csrf
                        @method('put')

                        <div class="card ">
                            <div class="card-header">
                                <h4 class="card-title">{{ __('Edit Package') }}</h4>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <a href="{{ route('package.index') }}"
                                            class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                                    </div>
                                </div>

                                {{-- name --}}
                                @php
                                    $name = 'name';
                                    $dot = AppHelper::toDotNotation($name);
                                @endphp
                                <div class="row">
                                    <label class="col-sm-2 pr-0 col-form-label text-right"
                                        for="input-{{ $name }}">{{ __('Name') }}</label>
                                    <div class="col-sm-8">
                                        <div class="form-group{{ $errors->has($dot) ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has($dot) ? ' is-invalid' : '' }}"
                                                name="{{ $name }}" id="input-{{ $name }}" type="text"
                                                placeholder="{{ __('Name') }}"
                                                value="{{ old($dot) ?? $package->name }}" required="true"
                                                aria-required="true" />
                                            @include('alerts.feedback', ['field' => $dot])
                                        </div>
                                    </div>
                                </div>

                                {{-- description --}}
                                @php
                                    $name = 'description';
                                    $dot = AppHelper::toDotNotation($name);
                                @endphp
                                <div class="row">
                                    <label class="col-sm-2 col-form-label pr-0 text-right"
                                        for="input-{{ $name }}">{{ __('Description') }}</label>
                                    <div class="col-sm-8">
                                        <div class="form-group{{ $errors->has($dot) ? ' has-danger' : '' }}">
                                            <textarea cols="30" rows="10"
                                                class="form-control{{ $errors->has($dot) ? ' is-invalid' : '' }}"
                                                name="{{ $name }}" id="input-{{ $name }}" type="text"
                                                placeholder="{{ __('Description') }}" required="true"
                                                aria-required="true">{{ old($dot) ?? $package->description }}</textarea>
                                            @include('alerts.feedback', ['field' => $dot])
                                        </div>
                                    </div>
                                </div>

                                {{-- cost --}}
                                @php
                                    $name = 'cost';
                                    $dot = AppHelper::toDotNotation($name);
                                @endphp
                                <div class="row">
                                    <label class="col-sm-2 col-form-label pr-0 text-right"
                                        for="input-{{ $name }}">{{ __('Cost') }}</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">£</span>
                                            </div>
                                            <input id="input-{{ $name }}" class="form-control"
                                                name="{{ $name }}" type="number" step=".01" min="0"
                                                placeholder="25.00" value="{{ old($dot) ?? $package->cost }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card ">
                            <div class="card-header">
                                <h4 class="card-title">{{ __('Access Permissions') }}</h4>
                            </div>
                            <div class="card-body">

                                <div class="row justify-content-center">
                                    <div class="row col-10">
                                        <div class="col pr-0">
                                            <label for="checkbox-{{ $name }}">{{ __('Comments') }}</label>
                                        </div>
                                        <div class="col pr-0">
                                            <label for="checkbox-{{ $name }}">{{ __('Followers') }}</label>
                                        </div>
                                        <div class="col pr-0">
                                            <label for="checkbox-{{ $name }}">{{ __('Following') }}</label>
                                        </div>
                                        <div class="col pr-0">
                                            <label for="checkbox-{{ $name }}">{{ __('Hashtags') }}</label>
                                        </div>
                                        <div class="col pr-0">
                                            <label for="checkbox-{{ $name }}">{{ __('Scheduling') }}</label>
                                        </div>
                                        <div class="col pr-0">
                                            <label for="checkbox-{{ $name }}">{{ __('Teams') }}</label>
                                        </div>
                                        <div class="col">
                                            <label for="checkbox-{{ $name }}">{{ __('Reporting') }}</label>
                                        </div>
                                    </div>

                                    <div class="row col-10">
                                        @php $access = $package->access; @endphp

                                        {{-- default --}}
                                        @php
                                            $name = 'access[comments]';
                                            $dot = AppHelper::toDotNotation($name);
                                        @endphp
                                        <div class="col pr-0 has-switch">
                                            <div class="form-group center-me-switch">
                                                <input class="bootstrap-switch" name="{{ $name }}" type="checkbox"
                                                    {{ AppHelper::checked(old($dot) ?? ($access->comments ?? 0)) }}
                                                    data-off-label="NO" data-on-label="YES" />
                                            </div>
                                        </div>

                                        {{-- followers --}}
                                        @php
                                            $name = 'access[followers]';
                                            $dot = AppHelper::toDotNotation($name);
                                        @endphp
                                        <div class="col pr-0 has-switch">
                                            <div class="form-group center-me-switch">
                                                <input class="bootstrap-switch" name="{{ $name }}" type="checkbox"
                                                    {{ AppHelper::checked(old($dot) ?? ($access->followers ?? 0)) }}
                                                    data-off-label="NO" data-on-label="YES" />
                                            </div>
                                        </div>

                                        {{-- following --}}
                                        @php
                                            $name = 'access[following]';
                                            $dot = AppHelper::toDotNotation($name);
                                        @endphp
                                        <div class="col pr-0 has-switch">
                                            <div class="form-group center-me-switch">
                                                <input class="bootstrap-switch" name="{{ $name }}" type="checkbox"
                                                    {{ AppHelper::checked(old($dot) ?? ($access->following ?? 0)) }}
                                                    data-off-label="NO" data-on-label="YES" />
                                            </div>
                                        </div>

                                        {{-- hashtags --}}
                                        @php
                                            $name = 'access[hashtags]';
                                            $dot = AppHelper::toDotNotation($name);
                                        @endphp
                                        <div class="col pr-0 has-switch">
                                            <div class="form-group center-me-switch">
                                                <input class="bootstrap-switch" name="{{ $name }}" type="checkbox"
                                                    {{ AppHelper::checked(old($dot) ?? ($access->hashtags ?? 0)) }}
                                                    data-off-label="NO" data-on-label="YES" />
                                            </div>
                                        </div>

                                        {{-- scheduling --}}
                                        @php
                                            $name = 'access[scheduling]';
                                            $dot = AppHelper::toDotNotation($name);
                                        @endphp
                                        <div class="col pr-0 has-switch">
                                            <div class="form-group center-me-switch">
                                                <input class="bootstrap-switch" name="{{ $name }}" type="checkbox"
                                                    {{ AppHelper::checked(old($dot) ?? ($access->scheduling ?? 0)) }}
                                                    data-off-label="NO" data-on-label="YES" />
                                            </div>
                                        </div>

                                        {{-- teams --}}
                                        @php
                                            $name = 'access[teams]';
                                            $dot = AppHelper::toDotNotation($name);
                                        @endphp
                                        <div class="col pr-0 has-switch">
                                            <div class="form-group center-me-switch">
                                                <input class="bootstrap-switch" name="{{ $name }}" type="checkbox"
                                                    {{ AppHelper::checked(old($dot) ?? ($access->teams ?? 0)) }}
                                                    data-off-label="NO" data-on-label="YES" />
                                            </div>
                                        </div>

                                        {{-- reporting --}}
                                        @php
                                            $name = 'access[reporting]';
                                            $dot = AppHelper::toDotNotation($name);
                                        @endphp
                                        <div class="col has-switch">
                                            <div class="form-group center-me-switch">
                                                <input class="bootstrap-switch" name="{{ $name }}" type="checkbox"
                                                    {{ AppHelper::checked(old($dot) ?? ($access->reporting ?? 0)) }}
                                                    data-off-label="NO" data-on-label="YES" />
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-rose">{{ __('Update package') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
