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
                <h3 class="card-title col-md-6">{{ __('Default') }}</h3>
              </div>
              <div class="card-body ">

                {{-- name --}}
                <div class="row justify-content-md-center">
                  <label class="col-sm-2 pe-0 col-form-label text-end" for="input-name">{{ __('Title') }}</label>
                  <div class="col-sm-10">
                    @include('forms.text', [ 'options' => [
                    'name' => 'name',
                    'placeholder' => __('Some Name'),
                    'value' => $default->name ?? '',
                    'required' => true,
                    'id' => 'input-name',
                    ]])
                  </div>
                </div>

                {{-- subtitle --}}
                <div class="row justify-content-md-center">
                  <label class="col-sm-2 pe-0 col-form-label text-end" for="input-subtitle">
                    {{ __('Subtitle') }}
                  </label>
                  <div class="col-sm-10">
                    @include('forms.text', [ 'options' => [
                    'name' => 'options[subtitle]',
                    'placeholder' => __('A subtitle for the setting.'),
                    'value' => $options->subtitle ?? '',
                    'id' => 'input-subtitle',
                    ]])
                  </div>
                </div>

                {{-- description --}}
                <div class="row justify-content-md-center">
                  <label class="col-sm-2 pe-0 col-form-label text-end" for="input-description">{{ __('Description') }}</label>
                  <div class="col-sm-10">
                    @include('forms.textarea', [ 'options' => [
                    'name' => 'description',
                    'value' => $default->description ?? '',
                    'id' => 'input-description',
                    'placeholder' => __('A nice description about what the variable is for!'),
                    ]])
                  </div>
                </div>

                {{-- for_table --}}
                <div class="row justify-content-md-center">
                  <label class="col-sm-2 pe-0 col-form-label text-end" for="select-for-table">{{ __('For Table') }}</label>
                  <div class="col-sm-10">
                    @include('forms.select', [ 'options' => [
                    'options' => [
                    'accounts' => 'Accounts',
                    'posts' => 'Posts',
                    'teams' => 'Teams',
                    'users' => 'Users',
                    ],
                    'name' => 'for_table',
                    'value' => $default->for_table ?? 'accounts',
                    'id' => 'select-for-table',
                    ]])
                  </div>
                </div>

              </div>
            </div>

            <div class="card">
              <div class="card-header row">
                <h3 class="card-title col-md-6">{{ __('Options') }}</h3>
              </div>
              <div class="card-body ">

                <div class="row">
                  <div class="col-sm-2"></div>
                  <div class="row col-sm-10">

                    {{-- hidden --}}
                    <div class="col-md-auto">
                      <label class="d-block" for="switch-hidden" title="{{ __('Hide this setting from the user?') }}">{{ __('Hide Setting') }}</label>
                      @include('forms.switch', ['settings' => [
                      'name' => 'options[hidden]',
                      'value' => $options->hidden ?? '',
                      'id' => 'switch-hidden',
                      'class' => ['mb-0']
                      ]])
                    </div>

                    {{-- has_cost --}}
                    <div class="col-md-auto">
                      <label class="d-block" for="switch-has-cost" title="{{ __('Does this setting have a cost?') }}">{{ __('Has Cost') }}</label>
                      @include('forms.switch', ['settings' => [
                      'name' => 'options[has_cost]',
                      'value' => $options->has_cost ?? '',
                      'id' => 'switch-has-cost',
                      'class' => ['mb-0'],
                      'attrs' => ['data-disabler' => ['name' => 'cost', 1 => 'show', 0 => 'hide']]
                      ]])
                    </div>

                    {{-- is_restricted --}}
                    <div class="col-md-auto">
                      <label class="d-block" for="switch-is-restricted" title="{{ __('Is this setting restricted to certain subscription packages?') }}">{{ __('Is Restricted') }}</label>
                      @include('forms.switch', ['settings' => [
                      'name' => 'options[is_restricted]',
                      'value' => $options->is_restricted ?? '',
                      'id' => 'switch-is-restricted',
                      'class' => ['mb-0'],
                      'attrs' => ['data-disabler' => ['name' => 'restrict', 1 => 'show', 0 => 'hide']]
                      ]])
                    </div>

                  </div>
                </div>

                {{-- key --}}
                <div class="row justify-content-md-center">
                  <label class="col-sm-2 pe-0 col-form-label text-end" for="input-key">{{ __('Key') }}</label>
                  <div class="col-sm-10">
                    @include('forms.text', [ 'options' => [
                    'name' => 'options[key]',
                    'placeholder' => __('some_key'),
                    'value' => $options->key ?? '',
                    'id' => 'input-key',
                    ]])
                  </div>
                </div>

                {{-- message --}}
                <div class="row justify-content-md-center">
                  <label class="col-sm-2 pe-0 col-form-label text-end" for="input-message">
                    {{ __('Payment Message') }}
                  </label>
                  <div class="col-sm-10">
                    @include('forms.text', [ 'options' => [
                    'name' => 'options[message]',
                    'placeholder' => '{n} of something',
                    'value' => $options->message ?? '',
                    'id' => 'input-message',
                    ]])
                  </div>
                </div>

                @php $type = old('options.type') ?? ($options->type ?? 'number') @endphp

                {{-- type --}}
                <div class="row justify-content-md-center">
                  <label class="col-sm-2 pe-0 col-form-label text-end" for="select-type">{{ __('Variable Type') }}</label>
                  <div class="col-sm-10">
                    @include('forms.select', [ 'options' => [
                    'options' => [
                    'text' => 'String',
                    'number' => 'Number',
                    'checkbox' => 'Boolean',
                    ],
                    'name' => 'options[type]',
                    'value' => $type,
                    'id' => 'select-type',
                    ]])
                  </div>
                </div>

                {{-- string --}}
                <div class="type-wrapper{{ $type == 'text' ? '' : ' d-none' }}" type="text">
                  @php $disabled = $type != 'text'; @endphp

                  {{-- default --}}
                  <div class="row justify-content-md-center mt-3">
                    <label class="col-sm-2 pe-0 col-form-label text-end" for="text-default">{{ __('Choices') }}</label>
                    <div class="col-sm-10 choice-grid" id="string-options">
                      <label>{{ __('Value') }}</label>
                      <label>{{ __('Key') }}</label>
                      <label>{{ __('Cost') }}</label>
                      <label>{{ __('Default') }}</label>
                      <label class="no-vis">#</label>

                      @php $value = $options->values[0] ?? []; @endphp

                      {{-- value --}}
                      @include('forms.text', ['settings' => [
                      'name' => 'options[values][0][value]',
                      'placeholder' => __('Some Value'),
                      'value' => $value->value ?? '',
                      'disabled' => $disabled,
                      'group' => ['attrs' => 'repeat=_0']
                      ]])

                      {{-- key --}}
                      @include('forms.text', ['settings' => [
                      'name' => 'options[values][0][key]',
                      'placeholder' => __('some_value'),
                      'value' => $value->key ?? '',
                      'disabled' => $disabled,
                      'group' => ['attrs' => 'repeat=_0']
                      ]])

                      {{-- cost --}}
                      @include('forms.number', ['settings' => [
                      'name' => 'options[values][0][cost]',
                      'placeholder' => '25.00',
                      'value' => $value->cost ?? '',
                      'disabled' => $disabled,
                      'step' => '.01',
                      'min' => '0',
                      'prepend' => '£',
                      'attrs' => ['disabler' => 'cost'],
                      'group' => ['attrs' => 'repeat=_0']
                      ]])

                      {{-- default --}}
                      @include('forms.switch', ['settings' => [
                      'name' => 'options[values][0][default]',
                      'value' => $options->default ?? '',
                      'disabled' => $disabled,
                      'group' => ['attrs' => 'repeat=_0']
                      ]])

                      <button type="button" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove" data-bs-toggle="tooltip" title="Remove" repeat="_0">
                        @icon('fal fa-trash-alt')
                      </button>

                      @foreach (old('options.values') ?? ($options->values ?? []) as $value)
                        @continue($loop->index == 0)

                        {{-- value --}}
                        @include('forms.text', ['settings' => [
                        'name' => "options[values][$loop->index][value]",
                        'placeholder' => __('Some Value'),
                        'value' => $value->value ?? '',
                        'disabled' => $disabled,
                        'group' => ['attrs' => "repeat=_$loop->index"]
                        ]])

                        {{-- key --}}
                        @include('forms.text', ['settings' => [
                        'name' => "options[values][$loop->index][key]",
                        'placeholder' => __('some_value'),
                        'value' => $value->key ?? '',
                        'disabled' => $disabled,
                        'group' => ['attrs' => "repeat=_$loop->index"]
                        ]])

                        {{-- cost --}}
                        @include('forms.number', ['settings' => [
                        'name' => "options[values][$loop->index][cost]",
                        'placeholder' => '25.00',
                        'value' => $value->cost ?? '',
                        'disabled' => $disabled,
                        'step' => '.01',
                        'min' => '0',
                        'prepend' => '£',
                        'attrs' => ['disabler' => 'cost'],
                        'group' => ['attrs' => "repeat=_$loop->index"]
                        ]])

                        {{-- default --}}
                        @include('forms.switch', ['settings' => [
                        'name' => "options[values][$loop->index][default]",
                        'value' => $value->default ?? '',
                        'disabled' => $disabled,
                        'group' => ['attrs' => "repeat=_$loop->index"]
                        ]])

                        <button type="button" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove" data-bs-toggle="tooltip" title="Remove" repeat="_{{ $loop->index }}">
                          @icon('fal fa-trash-alt')
                        </button>

                      @endforeach
                    </div>

                    <div class="row col-md-12">
                      <div class="col text-end">
                        <button id="add-option" class="btn btn-sm btn-info btn-gradient">{{ __('Add Option') }}</button>
                      </div>
                    </div>
                  </div>
                </div>

                {{-- number --}}
                <div class="type-wrapper{{ $type == 'number' ? '' : ' d-none' }}" type="number">
                  @php $disabled = $type != 'number'; @endphp

                  {{-- default --}}
                  <div class="row justify-content-md-center">
                    <label class="col-sm-2 pe-0 col-form-label text-end" for="number-default">{{ __('Default Value') }}</label>
                    <div class="col-sm-10">
                      @include('forms.number', ['settings' => [
                      'name' => 'options[default]',
                      'placeholder' => '1000',
                      'value' => $options->default ?? '',
                      'disabled' => $disabled,
                      'id' => 'number-default',
                      ]])
                    </div>
                  </div>

                  {{-- min_value --}}
                  <div class="row justify-content-md-center">
                    <label class="col-sm-2 pe-0 col-form-label text-end" for="number-min-value">{{ __('Minimum Value') }}</label>
                    <div class="col-sm-10">
                      @include('forms.number', ['settings' => [
                      'name' => 'options[min_value]',
                      'placeholder' => '250',
                      'value' => $options->min_value ?? '',
                      'disabled' => $disabled,
                      'id' => 'number-min-value',
                      ]])
                    </div>
                  </div>

                  {{-- max_value --}}
                  <div class="row justify-content-md-center">
                    <label class="col-sm-2 pe-0 col-form-label text-end" for="number-max-value">{{ __('Maximum Value') }}</label>
                    <div class="col-sm-10">
                      @include('forms.number', ['settings' => [
                      'name' => 'options[max_value]',
                      'placeholder' => '9000',
                      'value' => $options->max_value ?? '',
                      'disabled' => $disabled,
                      'id' => 'number-max-value',
                      ]])
                    </div>
                  </div>

                  {{-- step --}}
                  <div class="row justify-content-md-center">
                    <label class="col-sm-2 pe-0 col-form-label text-end" for="number-step">{{ __('Step') }}</label>
                    <div class="col-sm-10">
                      @include('forms.number', ['settings' => [
                      'name' => 'options[step]',
                      'placeholder' => '50',
                      'value' => $options->step ?? '',
                      'disabled' => $disabled,
                      'id' => 'number-step',
                      ]])
                    </div>
                  </div>

                  {{-- min_cost --}}
                  <div class="row justify-content-md-center">
                    <label class="col-sm-2 pe-0 col-form-label text-end" for="number-min-cost">{{ __('Minimum Cost') }}</label>
                    <div class="col-sm-10">
                      @include('forms.number', ['settings' => [
                      'name' => 'options[min_cost]',
                      'placeholder' => '0.00',
                      'value' => $options->min_cost ?? '',
                      'disabled' => $disabled,
                      'id' => 'number-min-cost',
                      'step' => '.01',
                      'min' => '0',
                      'prepend' => '£',
                      'attrs' => ['disabler' => 'cost']
                      ]])
                    </div>
                  </div>

                  {{-- max_cost --}}
                  <div class="row justify-content-md-center">
                    <label class="col-sm-2 pe-0 col-form-label text-end" for="number-max-cost">{{ __('Maximum Cost') }}</label>
                    <div class="col-sm-10">
                      @include('forms.number', ['settings' => [
                      'name' => 'options[max_cost]',
                      'placeholder' => '100.00',
                      'value' => $options->max_cost ?? '',
                      'disabled' => $disabled,
                      'id' => 'number-max-cost',
                      'step' => '.01',
                      'min' => '0',
                      'prepend' => '£',
                      'attrs' => ['disabler' => 'cost']
                      ]])
                    </div>
                  </div>

                </div>

                {{-- boolean --}}
                <div class="type-wrapper{{ $type == 'checkbox' ? '' : ' d-none' }}" type="checkbox">
                  @php $disabled = $type != 'checkbox'; @endphp

                  {{-- default --}}
                  <div class="row justify-content-md-center">
                    <label class="col-sm-2 pe-0 col-form-label text-end" for="switch-default">{{ __('Default Value') }}</label>
                    <div class="col-sm-10 has-switch">
                      @include('forms.switch', ['settings' => [
                      'name' => 'options[default]',
                      'value' => $options->default ?? '',
                      'id' => 'switch-default',
                      'disabled' => $disabled,
                      ]])
                    </div>
                  </div>

                  {{-- on_cost --}}
                  <div class="row justify-content-md-center">
                    <label class="col-sm-2 pe-0 col-form-label text-end" for="number-on-cost">{{ __('On Cost') }}</label>
                    <div class="col-sm-10">
                      @include('forms.number', ['settings' => [
                      'name' => 'options[on_cost]',
                      'placeholder' => '50.00',
                      'value' => $options->on_cost ?? '',
                      'disabled' => $disabled,
                      'id' => 'number-on-cost',
                      'step' => '.01',
                      'min' => '0',
                      'prepend' => '£',
                      'attrs' => ['disabler' => 'cost']
                      ]])
                    </div>
                  </div>

                  {{-- off_cost --}}
                  <div class="row justify-content-md-center">
                    <label class="col-sm-2 pe-0 col-form-label text-end" for="number-off-cost">{{ __('Off Cost') }}</label>
                    <div class="col-sm-10">
                      @include('forms.number', ['settings' => [
                      'name' => 'options[off_cost]',
                      'placeholder' => '0.00',
                      'value' => $options->off_cost ?? '',
                      'disabled' => $disabled,
                      'id' => 'number-off-cost',
                      'step' => '.01',
                      'min' => '0',
                      'prepend' => '£',
                      'attrs' => ['disabler' => 'cost']
                      ]])
                    </div>
                  </div>

                </div>

              </div>
              <div class="card-footer mx-auto">
                <button type="submit" class="btn btn-primary btn-gradient">{{ __('Save') }}</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-12 mb-3 text-end">
              <a href="{{ route('default.index') }}" class="btn btn-sm btn-warning btn-gradient">{{ __('Back to list') }}</a>
            </div>
          </div>
          {{-- <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Example') }}</h3>
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
  <script type="module" src="{{ AH::asset('js', '/pages/defaults.js') }}"></script>
@endpush
