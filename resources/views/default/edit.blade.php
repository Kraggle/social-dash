@extends('layouts.app', ['activePage' => 'default-management', 'titlePage' => __('Default Management')])

@php $options = $default->options @endphp

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <form method="post" enctype="multipart/form-data" action="{{ route('default.update', $default) }}"
                        autocomplete="off">
                        @csrf
                        @method('put')

                        <div class="card">
                            <div class="card-header row">
                                <h4 class="card-title col-md-6">{{ __('Default') }}</h4>
                            </div>
                            <div class="card-body ">

                                @php
                                    $name = 'name';
                                    $dot = AppHelper::toDotNotation($name);
                                @endphp
                                <div class="row justify-content-md-center">
                                    <label class="col-sm-2 pr-0 col-form-label text-right"
                                        for="input-name">{{ __('Name') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-group{{ $errors->has($dot) ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has($dot) ? ' is-invalid' : '' }}"
                                                name="{{ $name }}" id="input-name" type="text"
                                                placeholder="{{ __('Some Name') }}"
                                                value="{{ old($dot) ?? ($default->name ?? '') }}" required="true"
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
                                <div class="row justify-content-md-center">
                                    <label class="col-sm-2 pr-0 col-form-label text-right"
                                        for="input-description">{{ __('Description') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-group{{ $errors->has($dot) ? ' has-danger' : '' }}">
                                            <textarea class="form-control{{ $errors->has($dot) ? ' is-invalid' : '' }}"
                                                name="{{ $name }}" id="input-description"
                                                placeholder="{{ __('A nice description about what the variable is for!') }}">{{ old($dot) ?? ($default->description ?? '') }}</textarea>
                                            @include('alerts.feedback', ['field' => $dot])
                                        </div>
                                    </div>
                                </div>

                                {{-- for_table --}}
                                @php
                                    $name = 'for_table';
                                    $dot = AppHelper::toDotNotation($name);
                                    $table = old($dot) ?? ($default->for_table ?? 'accounts');
                                @endphp
                                <div class="row justify-content-md-center">
                                    <label class="col-sm-2 pr-0 col-form-label text-right"
                                        for="input-for-table">{{ __('For Table') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-group{{ $errors->has($dot) ? ' has-danger' : '' }}">
                                            <select class="selectpicker" data-size="7" data-style="btn btn-primary"
                                                id="input-for-table" name="{{ $name }}">
                                                <option value="accounts" {{ $table == 'accounts' ? ' selected' : '' }}>
                                                    Accounts</option>
                                                <option value="posts" {{ $table == 'posts' ? ' selected' : '' }}>Posts
                                                </option>
                                                <option value="teams" {{ $table == 'teams' ? ' selected' : '' }}>Teams
                                                </option>
                                                <option value="users" {{ $table == 'users' ? ' selected' : '' }}>Users
                                                </option>
                                            </select>
                                            @include('alerts.feedback', ['field' => $dot])
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header row">
                                <h4 class="card-title col-md-6">{{ __('Options') }}</h4>
                            </div>
                            <div class="card-body ">

                                {{-- key --}}
                                @php
                                    $name = 'options[key]';
                                    $dot = AppHelper::toDotNotation($name);
                                @endphp
                                <div class="row justify-content-md-center">
                                    <label class="col-sm-2 pr-0 col-form-label text-right"
                                        for="input-key">{{ __('Key') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-group{{ $errors->has($dot) ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has($dot) ? ' is-invalid' : '' }}"
                                                name="{{ $name }}" id="input-key" type="text"
                                                placeholder="{{ __('some_key') }}"
                                                value="{{ old($dot) ?? ($options->key ?? '') }}" />
                                            @include('alerts.feedback', ['field' => $dot])
                                        </div>
                                    </div>
                                </div>

                                {{-- type --}}
                                @php
                                    $name = 'options[type]';
                                    $dot = AppHelper::toDotNotation($name);
                                    $type = old($dot) ?? ($options->type ?? 'number');
                                @endphp
                                <div class="row justify-content-md-center">
                                    <label class="col-sm-2 pr-0 col-form-label text-right"
                                        for="input-type">{{ __('Variable Type') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-group{{ $errors->has($dot) ? ' has-danger' : '' }}">
                                            <select class="selectpicker" data-size="7" data-style="btn btn-primary"
                                                id="input-type" name="{{ $name }}">
                                                <option value="text" {{ $type == 'text' ? ' selected' : '' }}>String
                                                </option>
                                                <option value="number" {{ $type == 'number' ? ' selected' : '' }}>Number
                                                </option>
                                                <option value="checkbox" {{ $type == 'checkbox' ? ' selected' : '' }}>
                                                    Boolean</option>
                                            </select>
                                            @include('alerts.feedback', ['field' => $dot])
                                        </div>
                                    </div>
                                </div>

                                {{-- hidden --}}
                                @php
                                    $name = 'options[hidden]';
                                    $dot = AppHelper::toDotNotation($name);
                                @endphp
                                <div class="row justify-content-md-center">
                                    <label class="col-sm-2 pr-0 col-form-label text-right"
                                        for="switch-default">{{ __('Hide Setting') }}</label>
                                    <div class="col-sm-10 has-switch">
                                        <div class="form-group">
                                            <input class="bootstrap-switch" name="{{ $name }}"
                                                id="switch-default" type="checkbox"
                                                {{ (old($dot) ?? ($options->hidden ?? '')) == 'on' ? 'checked' : '' }}
                                                data-off-label="OFF" data-on-label="ON" />
                                        </div>
                                    </div>
                                </div>

                                {{-- string --}}
                                <div class="type-wrapper{{ $type == 'text' ? '' : ' d-none' }}" type="text">
                                    @php $disabled = $type == 'text' ? '' : 'disabled'; @endphp

                                    {{-- default --}}
                                    <div class="row justify-content-md-center mt-3">
                                        <label class="col-sm-2 pr-0 col-form-label text-right"
                                            for="text-default">{{ __('Choices') }}</label>
                                        <div class="col-sm-10" id="string-options">
                                            <div class="row">
                                                <div class="col-sm-6 pr-0">
                                                    <label>{{ __('Value') }}</label>
                                                </div>
                                                <div class="col-sm-3 pr-0">
                                                    <label>{{ __('Cost') }}</label>
                                                </div>
                                                <div class="col-sm-2 pr-0">
                                                    <label>{{ __('Default') }}</label>
                                                </div>
                                                <div class="col-sm-1 pr-0">
                                                    <label></label>
                                                </div>
                                            </div>

                                            <div class="row" repeat="_0">

                                                {{-- value --}}
                                                @php
                                                    $name = 'options[values][0][value]';
                                                    $dot = AppHelper::toDotNotation($name);
                                                    $value = $options->values[0] ?? [];
                                                @endphp
                                                <div class="col-sm-6 pr-0">
                                                    <div class="form-group">
                                                        <input class="form-control" name="{{ $name }}" type="text"
                                                            value="{{ old($dot) ?? ($value->value ?? '') }}"
                                                            placeholder="{{ __('Some Value') }}" {{ $disabled }} />
                                                    </div>
                                                </div>

                                                {{-- cost --}}
                                                @php
                                                    $name = 'options[values][0][cost]';
                                                    $dot = AppHelper::toDotNotation($name);
                                                @endphp
                                                <div class="col-sm-3 pr-0">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">£</span>
                                                        </div>
                                                        <input class="form-control" name="{{ $name }}"
                                                            type="number" step=".01" min="0" placeholder="25.00"
                                                            value="{{ old($dot) ?? ($value->cost ?? '') }}"
                                                            {{ $disabled }} />
                                                    </div>
                                                </div>

                                                {{-- default --}}
                                                @php
                                                    $name = 'options[values][0][default]';
                                                    $dot = AppHelper::toDotNotation($name);
                                                @endphp
                                                <div class="col-sm-2 pr-0 has-switch">
                                                    <div class="form-group">
                                                        <input class="bootstrap-switch" name="{{ $name }}"
                                                            type="checkbox" {{ $disabled }}
                                                            {{ (old($dot) ?? $value->default ?? '') == 'on' ? 'checked' : '' }}
                                                            data-off-label="NO" data-on-label="YES" />
                                                    </div>
                                                </div>

                                                <div class="col-sm-1 pr-0">
                                                    <button type="button"
                                                        class="btn btn-link btn-danger btn-icon btn-sm remove"
                                                        title="Remove choice">
                                                        <i class="tim-icons icon-simple-remove"></i>
                                                    </button>
                                                </div>
                                            </div>

                                            @foreach (old('options.values') ?? $options->values ?? [] as $value)
                                                @continue($loop->index == 0)

                                                <div class="row" repeat="_{{ $loop->index }}">

                                                    {{-- value --}}
                                                    @php
                                                        $name = "options[values][$loop->index][value]";
                                                        $dot = AppHelper::toDotNotation($name);
                                                    @endphp
                                                    <div class="col-sm-6 pr-0">
                                                        <div class="form-group">
                                                            <input class="form-control" name="{{ $name }}"
                                                                type="text"
                                                                value="{{ old($dot) ?? ($value->value ?? '') }}"
                                                                placeholder="{{ __('Some Value') }}"
                                                                {{ $disabled }} />
                                                        </div>
                                                    </div>

                                                    {{-- cost --}}
                                                    @php
                                                        $name = "options[values][$loop->index][cost]";
                                                        $dot = AppHelper::toDotNotation($name);
                                                    @endphp
                                                    <div class="col-sm-3 pr-0">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">£</span>
                                                            </div>
                                                            <input class="form-control" name="{{ $name }}"
                                                                type="number" step=".01" min="0" placeholder="25.00"
                                                                value="{{ old($dot) ?? ($value->cost ?? '') }}"
                                                                {{ $disabled }} />
                                                        </div>
                                                    </div>

                                                    {{-- default --}}
                                                    @php
                                                        $name = "options[values][$loop->index][default]";
                                                        $dot = AppHelper::toDotNotation($name);
                                                    @endphp
                                                    <div class="col-sm-2 pr-0 has-switch">
                                                        <div class="form-group">
                                                            <input class="bootstrap-switch" name="{{ $name }}"
                                                                type="checkbox" {{ $disabled }}
                                                                {{ (old($dot) ?? ($value->default ?? '')) == 'on' ? 'checked' : '' }}
                                                                data-off-label="NO" data-on-label="YES" />
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-1 pr-0">
                                                        <button type="button"
                                                            class="btn btn-link btn-danger btn-icon btn-sm remove"
                                                            title="Remove choice">
                                                            <i class="tim-icons icon-simple-remove"></i>
                                                        </button>
                                                    </div>
                                                </div>

                                            @endforeach

                                            <div class="row">
                                                <div class="col text-right">
                                                    <button id="add-option"
                                                        class="btn btn-sm btn-primary">{{ __('Add Option') }}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                {{-- number --}}
                                <div class="type-wrapper{{ $type == 'number' ? '' : ' d-none' }}" type="number">
                                    @php $disabled = $type == 'number' ? '' : 'disabled'; @endphp

                                    {{-- default --}}
                                    @php
                                        $name = 'options[default]';
                                        $dot = AppHelper::toDotNotation($name);
                                    @endphp
                                    <div class="row justify-content-md-center">
                                        <label class="col-sm-2 pr-0 col-form-label text-right"
                                            for="number-default">{{ __('Default Value') }}</label>
                                        <div class="col-sm-10">
                                            <div class="form-group">
                                                <input class="form-control" name="{{ $name }}" id="number-default"
                                                    type="number" value="{{ old($dot) ?? ($options->default ?? '') }}"
                                                    {{ $disabled }} />
                                            </div>
                                        </div>
                                    </div>

                                    {{-- min_value --}}
                                    @php
                                        $name = 'options[min_value]';
                                        $dot = AppHelper::toDotNotation($name);
                                    @endphp
                                    <div class="row justify-content-md-center{{ $type == 'number' ? '' : ' d-none' }}">
                                        <label class="col-sm-2 pr-0 col-form-label text-right"
                                            for="input-min-value">{{ __('Minimum Value') }}</label>
                                        <div class="col-sm-10">
                                            <div class="form-group">
                                                <input class="form-control" name="{{ $name }}" id="input-min-value"
                                                    type="number" value="{{ old($dot) ?? ($options->min_value ?? '') }}"
                                                    placeholder="1000" {{ $disabled }} />
                                            </div>
                                        </div>
                                    </div>

                                    {{-- max_value --}}
                                    @php
                                        $name = 'options[max_value]';
                                        $dot = AppHelper::toDotNotation($name);
                                    @endphp
                                    <div class="row justify-content-md-center{{ $type == 'number' ? '' : ' d-none' }}">
                                        <label class="col-sm-2 pr-0 col-form-label text-right"
                                            for="input-max-value">{{ __('Maximum Value') }}</label>
                                        <div class="col-sm-10">
                                            <div class="form-group">
                                                <input class="form-control" name="{{ $name }}" id="input-max-value"
                                                    type="number" value="{{ old($dot) ?? ($options->max_value ?? '') }}"
                                                    placeholder="60000" {{ $disabled }} />
                                            </div>
                                        </div>
                                    </div>

                                    {{-- step --}}
                                    @php
                                        $name = 'options[step]';
                                        $dot = AppHelper::toDotNotation($name);
                                    @endphp
                                    <div class="row justify-content-md-center{{ $type == 'number' ? '' : ' d-none' }}">
                                        <label class="col-sm-2 pr-0 col-form-label text-right"
                                            for="input-step">{{ __('Step') }}</label>
                                        <div class="col-sm-10">
                                            <div class="form-group">
                                                <input class="form-control" name="{{ $name }}" id="input-step"
                                                    type="number" value="{{ old($dot) ?? ($options->step ?? '') }}"
                                                    placeholder="1000" min="1" {{ $disabled }} />
                                            </div>
                                        </div>
                                    </div>

                                    {{-- min_cost --}}
                                    @php
                                        $name = 'options[min_cost]';
                                        $dot = AppHelper::toDotNotation($name);
                                    @endphp
                                    <div class="row justify-content-md-center">
                                        <label class="col-sm-2 pr-0 col-form-label text-right"
                                            for="number-min-cost">{{ __('Minimum Cost') }}</label>
                                        <div class="col-sm-10">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">£</span>
                                                </div>
                                                <input class="form-control" name="{{ $name }}" id="number-min-cost"
                                                    type="number" value="{{ old($dot) ?? ($options->min_cost ?? '') }}"
                                                    placeholder="0.00" step=".01" min="0" {{ $disabled }} />
                                            </div>
                                        </div>
                                    </div>

                                    {{-- max_cost --}}
                                    @php
                                        $name = 'options[max_cost]';
                                        $dot = AppHelper::toDotNotation($name);
                                    @endphp
                                    <div class="row justify-content-md-center">
                                        <label class="col-sm-2 pr-0 col-form-label text-right"
                                            for="number-max-cost">{{ __('Maximum Cost') }}</label>
                                        <div class="col-sm-10">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">£</span>
                                                </div>
                                                <input class="form-control" name="{{ $name }}" id="number-max-cost"
                                                    type="number" value="{{ old($dot) ?? ($options->max_cost ?? '') }}"
                                                    placeholder="100.00" step=".01" min="0" {{ $disabled }} />
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                {{-- boolean --}}
                                <div class="type-wrapper{{ $type == 'checkbox' ? '' : ' d-none' }}" type="checkbox">
                                    @php $disabled = $type == 'checkbox' ? '' : 'disabled'; @endphp

                                    {{-- default --}}
                                    @php
                                        $name = 'options[default]';
                                        $dot = AppHelper::toDotNotation($name);
                                    @endphp
                                    <div class="row justify-content-md-center">
                                        <label class="col-sm-2 pr-0 col-form-label text-right"
                                            for="switch-default">{{ __('Default Value') }}</label>
                                        <div class="col-sm-10 has-switch">
                                            <div class="form-group">
                                                <input class="bootstrap-switch" name="{{ $name }}"
                                                    id="switch-default" type="checkbox" {{ $disabled }}
                                                    {{ (old($dot) ?? ($options->default ?? '')) == 'on' ? 'checked' : '' }}
                                                    data-off-label="OFF" data-on-label="ON" />
                                            </div>
                                        </div>
                                    </div>

                                    {{-- on_cost --}}
                                    @php
                                        $name = 'options[on_cost]';
                                        $dot = AppHelper::toDotNotation($name);
                                    @endphp
                                    <div class="row justify-content-md-center">
                                        <label class="col-sm-2 pr-0 col-form-label text-right"
                                            for="boolean-on-cost">{{ __('On Cost') }}</label>
                                        <div class="col-sm-10">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">£</span>
                                                </div>
                                                <input class="form-control" name="{{ $name }}" id="boolean-on-cost"
                                                    type="number" value="{{ old($dot) ?? ($options->on_cost ?? '') }}"
                                                    placeholder="50.00" step=".01" min="0" {{ $disabled }} />
                                            </div>
                                        </div>
                                    </div>

                                    {{-- off_cost --}}
                                    @php
                                        $name = 'options[off_cost]';
                                        $dot = AppHelper::toDotNotation($name);
                                    @endphp
                                    <div class="row justify-content-md-center">
                                        <label class="col-sm-2 pr-0 col-form-label text-right"
                                            for="boolean-off-cost">{{ __('Off Cost') }}</label>
                                        <div class="col-sm-10">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">£</span>
                                                </div>
                                                <input class="form-control" name="{{ $name }}"
                                                    id="boolean-off-cost" type="number"
                                                    value="{{ old($dot) ?? ($options->off_cost ?? '') }}"
                                                    placeholder="0.00" step=".01" min="0" {{ $disabled }} />
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn">{{ __('Save') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12 mb-3 text-right">
                            <a href="{{ route('default.index') }}"
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
    <script type="module" src="{{ asset('custom') }}/script/defaults.js"></script>
@endpush
