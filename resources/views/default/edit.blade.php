@extends('layouts.app', ['activePage' => 'default-management', 'titlePage' => __('Default Management')])

@php $options = $default->options @endphp

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <form method="post" enctype="multipart/form-data" action="{{ route('default.update', $default) }}" autocomplete="off">
                    @csrf
                    @method('put')

                    <div class="card">
                        <div class="card-header row">
                            <h4 class="card-title col-md-6">{{ __('Default') }}</h4>
                        </div>
                        <div class="card-body ">

                            <div class="row justify-content-md-center">
                                <label class="col-sm-2 pr-0 col-form-label text-right">{{ __('Name') }}</label>
                                <div class="col-sm-10">
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Some Name') }}" value="{{ $default->name }}" required="true" aria-required="true" />
                                        @include('alerts.feedback', ['field' => 'name'])
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-md-center">
                                <label class="col-sm-2 pr-0 col-form-label text-right">{{ __('Description') }}</label>
                                <div class="col-sm-10">
                                    <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                        <textarea class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" id="input-description" type="description" placeholder="{{ __('A nice description about what the variable is for!') }}" >{{ $default->description }}</textarea>
                                        @include('alerts.feedback', ['field' => 'description'])
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-md-center">
                                <label class="col-sm-2 pr-0 col-form-label text-right" for="input-for-table">{{ __('For Table') }}</label>
                                <div class="col-sm-10">
                                    <div class="form-group{{ $errors->has('for_table') ? ' has-danger' : '' }}">
                                        <select class="selectpicker" data-size="7" data-style="btn btn-primary" id="input-for-table" name="for_table">
                                            <option value="accounts"{{ !$default->for_table || $default->for_table == 'accounts' ? ' selected' : ''}}>Accounts</option>
                                            <option value="posts"{{ $default->for_table == 'posts' ? ' selected' : ''}}>Posts</option>
                                            <option value="teams"{{ $default->for_table == 'teams' ? ' selected' : ''}}>Teams</option>
                                            <option value="users"{{ $default->for_table == 'users' ? ' selected' : ''}}>Users</option>
                                        </select>
                                        @include('alerts.feedback', ['field' => 'for_table'])
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

                            @php $type = $options->type ?? '' ?? 'number'; @endphp

                            {{-- key --}}
                            <div class="row justify-content-md-center">
                                <label class="col-sm-2 pr-0 col-form-label text-right" for="input-key">{{ __('Key') }}</label>
                                <div class="col-sm-10">
                                    <div class="form-group{{ $errors->has('key') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('key') ? ' is-invalid' : '' }}" name="key" id="input-key" type="text" placeholder="{{ __('some_key') }}" value="{{ $options->key }}" required />
                                    </div>
                                    @include('alerts.feedback', ['field' => 'key'])
                                </div>
                            </div>

                            {{-- type --}}
                            <div class="row justify-content-md-center">
                                <label class="col-sm-2 pr-0 col-form-label text-right" for="input-type">{{ __('Variable Type') }}</label>
                                <div class="col-sm-10">
                                    <div class="form-group{{ $errors->has('type') ? ' has-danger' : '' }}">
                                        <select class="selectpicker" data-size="7" data-style="btn btn-primary" id="input-type" name="type">
                                            <option value="text"{{ $type == 'text' ? ' selected' : ''}}>String</option>
                                            <option value="number"{{ $type == 'number' ? ' selected' : ''}}>Number</option>
                                            <option value="checkbox"{{ $type == 'checkbox' ? ' selected' : ''}}>Boolean</option>
                                        </select>
                                        @include('alerts.feedback', ['field' => 'type'])
                                    </div>
                                </div>
                            </div>

                            {{-- string --}}
                            <div class="type-wrapper{{ $type == 'text' ? '' : ' d-none' }}" type="text">
                                @php $disabled = $type == 'text' ? '' : 'disabled'; @endphp

                                {{-- default --}}
                                <div class="row justify-content-md-center mt-3">
                                    <label class="col-sm-2 pr-0 col-form-label text-right" for="text-default">{{ __('Options') }}</label>
                                    <div class="col-sm-10" id="string-options">
                                        <div class="row">
                                            <div class="col-sm-6 pr-0">
                                                <label>{{ __('Value') }}</label>
                                            </div>
                                            <div class="col-sm-4 pr-0">
                                                <label>{{ __('Cost') }}</label>
                                            </div>
                                            <div class="col-sm-2 pr-0">
                                                <label>{{ __('Default') }}</label>
                                            </div>
                                        </div>

                                        @isset($options->values)
                                        @php $i=0; @endphp
                                            @foreach($options->values as $value)

                                                <div class="row"{{ $i == 0 ? ' repeat="_0"' : ''}}>

                                                    <div class="col-sm-6 pr-0">
                                                        <div class="form-group">
                                                            <input class="form-control" name="value_{{ $i }}" type="text" value="{{ $value->value ?? '' }}" placeholder="{{ __('Some Value')}}" {{ $disabled }} />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 pr-0">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">£</span>
                                                            </div>
                                                            <input class="form-control" name="cost_{{ $i }}" type="number" step=".01" min="0" placeholder="25.00" value="{{ $value->cost ?? '' }}" {{ $disabled }} />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2 pr-0">
                                                        <div class="form-group center-me-switch">
                                                            <input class="bootstrap-switch" name="default_{{ $i }}" type="checkbox" {{ $disabled }} {{ isset($value->default) && $value->default == 'on' ? 'checked' : '' }} data-off-label="NO" data-on-label="YES" />
                                                        </div>
                                                    </div>

                                                </div>

                                                @php $i++; @endphp
                                            @endforeach
                                        @endisset

                                        @empty($options->values)

                                            <div class="row" repeat="_0">

                                                <div class="col-sm-6 pr-0">
                                                    <div class="form-group">
                                                        <input class="form-control" name="value_0" type="text" placeholder="{{ __('Some Value')}}" {{ $disabled }} />
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 pr-0">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">£</span>
                                                        </div>
                                                        <input class="form-control" name="cost_0" type="number" step=".01" min="0" placeholder="25.00" {{ $disabled }} />
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 pr-0">
                                                    <div class="form-group center-me-switch">
                                                        <input class="bootstrap-switch" name="default_0" type="checkbox" {{ $disabled }} data-off-label="NO" data-on-label="YES" />
                                                    </div>
                                                </div>

                                            </div>

                                        @endempty

                                        <div class="row">
                                            <div class="col text-right">
                                                <button id="add-option" class="btn btn-sm btn-primary">{{ __('Add Option') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            {{-- number --}}
                            <div class="type-wrapper{{ $type == 'number' ? '' : ' d-none' }}" type="number">
                                @php $disabled = $type == 'number' ? '' : 'disabled'; @endphp

                                {{-- default --}}
                                <div class="row justify-content-md-center">
                                    <label class="col-sm-2 pr-0 col-form-label text-right" for="number-default">{{ __('Default Value') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-group{{ $errors->has('default') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('default') ? ' is-invalid' : '' }}" name="default" id="number-default" type="number" value="{{ $options->default ?? '' }}" {{ $disabled }} />
                                        </div>
                                        @include('alerts.feedback', ['field' => 'default'])
                                    </div>
                                </div>

                                {{-- min_value --}}
                                <div class="row justify-content-md-center{{ $type == 'number' ? '' : ' d-none'}}">
                                    <label class="col-sm-2 pr-0 col-form-label text-right" for="input-min-value">{{ __('Minimum Value') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-group{{ $errors->has('min_value') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('min-value') ? ' is-invalid' : '' }}" name="min_value" id="input-min_value" type="number" value="{{ $options->min_value ?? '' }}" placeholder="1000" {{ $disabled }} />
                                        </div>
                                        @include('alerts.feedback', ['field' => 'min_value'])
                                    </div>
                                </div>

                                {{-- max_value --}}
                                <div class="row justify-content-md-center{{ $type == 'number' ? '' : ' d-none'}}">
                                    <label class="col-sm-2 pr-0 col-form-label text-right" for="input-max-value">{{ __('Maximum Value') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-group{{ $errors->has('max_value') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('max_value') ? ' is-invalid' : '' }}" name="max_value" id="input-max-value" type="number" value="{{ $options->max_value ?? '' }}" placeholder="60000" {{ $disabled }} />
                                        </div>
                                        @include('alerts.feedback', ['field' => 'max_value'])
                                    </div>
                                </div>

                                {{-- step --}}
                                <div class="row justify-content-md-center{{ $type == 'number' ? '' : ' d-none'}}">
                                    <label class="col-sm-2 pr-0 col-form-label text-right" for="input-step">{{ __('Step') }}</label>
                                    <div class="col-sm-10">
                                        <div class="form-group{{ $errors->has('step') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('step') ? ' is-invalid' : '' }}" name="step" id="input-step" type="number" value="{{ $options->step ?? '' }}" placeholder="1000" min="1" {{ $disabled }} />
                                        </div>
                                        @include('alerts.feedback', ['field' => 'step'])
                                    </div>
                                </div>

                                {{-- min_cost --}}
                                <div class="row justify-content-md-center">
                                    <label class="col-sm-2 pr-0 col-form-label text-right" for="number-min-cost">{{ __('Minimum Cost') }}</label>
                                    <div class="col-sm-10">
                                        <div class="input-group{{ $errors->has('min_cost') ? ' has-danger' : '' }}">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">£</span>
                                            </div>
                                            <input class="form-control{{ $errors->has('min_cost') ? ' is-invalid' : '' }}" name="min_cost" id="number-min-cost" type="number" value="{{ $options->min_cost ?? '' }}" placeholder="0.00" step=".01" min="0" {{ $disabled }} />
                                        </div>
                                        @include('alerts.feedback', ['field' => 'min_cost'])
                                    </div>
                                </div>

                                {{-- max_cost --}}
                                <div class="row justify-content-md-center">
                                    <label class="col-sm-2 pr-0 col-form-label text-right" for="number-max-cost">{{ __('Maximum Cost') }}</label>
                                    <div class="col-sm-10">
                                        <div class="input-group{{ $errors->has('max_cost') ? ' has-danger' : '' }}">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">£</span>
                                            </div>
                                            <input class="form-control{{ $errors->has('max_cost') ? ' is-invalid' : '' }}" name="max_cost" id="number-max-cost" type="number" value="{{ $options->max_cost ?? '' }}" placeholder="100.00" step=".01" min="0" {{ $disabled }} />
                                        </div>
                                        @include('alerts.feedback', ['field' => 'max_cost'])
                                    </div>
                                </div>

                            </div>

                            {{-- boolean --}}
                            <div class="type-wrapper{{ $type == 'checkbox' ? '' : ' d-none' }}" type="checkbox">
                                @php $disabled = $type == 'checkbox' ? '' : 'disabled'; @endphp

                                {{-- default --}}
                                <div class="row justify-content-md-center">
                                    <label class="col-sm-2 pr-0 col-form-label text-right" for="switch-default">{{ __('Default Value') }}</label>
                                    <div class="col-sm-10 vertical-center-content">
                                        <div class="form-group no-margin">
                                            <input class="bootstrap-switch" name="default" id="switch-default" type="checkbox" {{ $disabled }} data-off-label="OFF" data-on-label="ON" />
                                        </div>
                                        @include('alerts.feedback', ['field' => 'default'])
                                    </div>
                                </div>

                                {{-- on_cost --}}
                                <div class="row justify-content-md-center">
                                    <label class="col-sm-2 pr-0 col-form-label text-right" for="boolean-on-cost">{{ __('On Cost') }}</label>
                                    <div class="col-sm-10">
                                        <div class="input-group{{ $errors->has('on_cost') ? ' has-danger' : '' }}">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">£</span>
                                            </div>
                                            <input class="form-control{{ $errors->has('on_cost') ? ' is-invalid' : '' }}" name="on_cost" id="boolean-on-cost" type="number" value="{{ $options->on_cost ?? '' }}" placeholder="50.00" step=".01" min="0" {{ $disabled }} />
                                        </div>
                                        @include('alerts.feedback', ['field' => 'on_cost'])
                                    </div>
                                </div>

                                {{-- off_cost --}}
                                <div class="row justify-content-md-center">
                                    <label class="col-sm-2 pr-0 col-form-label text-right" for="boolean-off-cost">{{ __('Off Cost') }}</label>
                                    <div class="col-sm-10">
                                        <div class="input-group{{ $errors->has('off_cost') ? ' has-danger' : '' }}">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">£</span>
                                            </div>
                                            <input class="form-control{{ $errors->has('off_cost') ? ' is-invalid' : '' }}" name="off_cost" id="boolean-off-cost" type="number" value="{{ $options->off_cost ?? '' }}" placeholder="0.00" step=".01" min="0" {{ $disabled }} />
                                        </div>
                                        @include('alerts.feedback', ['field' => 'off_cost'])
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
                        <a href="{{ route('default.index') }}" class="btn btn-sm btn-warning">{{ __('Back to list') }}</a>
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
