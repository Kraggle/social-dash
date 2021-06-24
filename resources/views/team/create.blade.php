@extends('layouts.app', ['activePage' => 'team-management', 'titlePage' => __('Team Management')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" enctype="multipart/form-data" action="{{ route('team.store') }}"
                        autocomplete="off">
                        @csrf
                        @method('post')

                        <div class="card">
                            <div class="card-header row">
                                <h4 class="card-title col-md-6">{{ __('Team') }}</h4>
                                <div class="col-md-6 mb-3 text-right">
                                    <a href="{{ route('team.index') }}"
                                        class="btn btn-sm btn-warning">{{ __('Back to list') }}</a>
                                </div>
                            </div>
                            <div class="card-body ">

                                {{-- name --}}
                                @php
                                    $name = 'name';
                                    $dot = AppHelper::toDotNotation($name);
                                @endphp
                                <div class="row">
                                    <label class=" col-sm-2 pr-0 col-form-label text-right" for="input-name">
                                        {{ __('Name') }}</label>
                                    <div class="col-sm-8">
                                        <div class="form-group{{ $errors->has($dot) ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has($dot) ? ' is-invalid' : '' }}"
                                                name="{{ $name }}" id="input-name" type="text"
                                                placeholder="{{ __('Team Name') }}" value="{{ old($dot) }}"
                                                required="true" aria-required="true" />
                                            @include('alerts.feedback', ['field' => $dot])
                                        </div>
                                    </div>
                                </div>

                                {{-- package_id --}}
                                @php
                                    $name = 'package_id';
                                    $dot = AppHelper::toDotNotation($name);
                                @endphp
                                <div class="row">
                                    <label class="col-sm-2 pr-0 col-form-label text-right"
                                        for="input-for-table">{{ __('Package') }}</label>
                                    <div class="col-sm-8">
                                        <div class="form-group{{ $errors->has($dot) ? ' has-danger' : '' }}">
                                            <select class="selectpicker" data-style="btn btn-primary" id="input-for-table"
                                                name="{{ $name }}">
                                                @foreach ($packages as $package)
                                                    <option value="{{ $package->id }}"
                                                        {{ AppHelper::selected(old($dot), $package->id) }}>
                                                        {{ $package->name }}</option>
                                                @endforeach
                                            </select>
                                            @include('alerts.feedback', ['field' => $dot])
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn">{{ __('Add Team') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    {{-- <script type="module" src="{{ asset('custom') }}/script/teams.js"></script> --}}
@endpush
