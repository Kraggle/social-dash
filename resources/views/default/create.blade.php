@extends('layouts.app', ['activePage' => 'default-management', 'titlePage' => __('Default Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <form method="post" enctype="multipart/form-data" action="{{ route('default.store') }}" autocomplete="off">
            @csrf
            @method('post')

            <div class="card">
              <div class="card-header row">
                <h4 class="card-title col-md-6">{{ __('Default') }}</h4>
              </div>
              <div class="card-body ">

                {{-- name --}}
                <div class="row justify-content-md-center">
                  <label class="col-sm-2 pr-0 col-form-label text-right" for="input-name">{{ __('Title') }}</label>
                  <div class="col-sm-10">
                    @include('forms.text', [ 'options' => [
                    'name' => 'name',
                    'placeholder' => __('Some Name'),
                    'required' => true,
                    'id' => 'input-name',
                    ]])
                  </div>
                </div>

                {{-- subtitle --}}
                <div class="row justify-content-md-center">
                  <label class="col-sm-2 pr-0 col-form-label text-right" for="input-subtitle">
                    {{ __('Subtitle') }}
                  </label>
                  <div class="col-sm-10">
                    @include('forms.text', [ 'options' => [
                    'name' => 'options[subtitle]',
                    'placeholder' => __('A subtitle for the setting.'),
                    'id' => 'input-subtitle',
                    ]])
                  </div>
                </div>

                {{-- description --}}
                <div class="row justify-content-md-center">
                  <label class="col-sm-2 pr-0 col-form-label text-right"
                    for="input-description">{{ __('Description') }}</label>
                  <div class="col-sm-10">
                    @include('forms.textarea', [ 'options' => [
                    'name' => 'description',
                    'id' => 'input-description',
                    'placeholder' => __('A nice description about what the variable is for!'),
                    ]])
                  </div>
                </div>

                {{-- for_table --}}
                <div class="row justify-content-md-center">
                  <label class="col-sm-2 pr-0 col-form-label text-right"
                    for="select-for-table">{{ __('For Table') }}</label>
                  <div class="col-sm-10">
                    @include('forms.select', [ 'options' => [
                    'options' => [
                    'accounts' => 'Accounts',
                    'posts' => 'Posts',
                    'teams' => 'Teams',
                    'users' => 'Users',
                    ],
                    'name' => 'for_table',
                    'value' => 'accounts',
                    'id' => 'select-for-table',
                    ]])
                  </div>
                </div>

              </div>
            </div>

            <div class="card">
              <div class="card-header row">
                <h4 class="card-title col-md-6">{{ __('Options') }}</h4>
              </div>
              <div class="card-body ">

                <div class="row">
                  <div class="col-sm-2"></div>
                  <div class="row col-sm-10">

                    {{-- hidden --}}
                    <div class="col-md-auto">
                      <label class="d-block" for="switch-hidden">{{ __('Hide Setting') }}</label>
                      <div class="py-1">
                        @include('forms.switch', ['options' => [
                        'name' => 'options[hidden]',
                        'id' => 'switch-hidden'
                        ]])
                      </div>
                    </div>

                    {{-- has_cost --}}
                    <div class="col-md-auto">
                      <label class="d-block" for="switch-has-cost">{{ __('Has Cost') }}</label>
                      <div class="py-1">
                        @include('forms.switch', ['options' => [
                        'name' => 'options[has_cost]',
                        'id' => 'switch-has-cost',
                        'attrs' => ['data-disabler' => ['name' => 'cost', 1 => 'show', 0 => 'hide']]
                        ]])
                      </div>
                    </div>

                  </div>
                </div>

                {{-- key --}}
                <div class="row justify-content-md-center">
                  <label class="col-sm-2 pr-0 col-form-label text-right" for="input-key">{{ __('Key') }}</label>
                  <div class="col-sm-10">
                    @include('forms.text', [ 'options' => [
                    'name' => 'options[key]',
                    'placeholder' => __('some_key'),
                    'id' => 'input-key',
                    ]])
                  </div>
                </div>

                {{-- message --}}
                <div class="row justify-content-md-center">
                  <label class="col-sm-2 pr-0 col-form-label text-right" for="input-message">
                    {{ __('Payment Message') }}
                  </label>
                  <div class="col-sm-10">
                    @include('forms.text', [ 'options' => [
                    'name' => 'options[message]',
                    'placeholder' => '{n} of something',
                    'id' => 'input-message',
                    ]])
                  </div>
                </div>

                @php $type = old('options.type') ?? 'number' @endphp

                {{-- type --}}
                <div class="row justify-content-md-center">
                  <label class="col-sm-2 pr-0 col-form-label text-right"
                    for="select-type">{{ __('Variable Type') }}</label>
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
                  @php $disabled = $type == 'text'; @endphp

                  <div class="row justify-content-md-center mt-3">
                    <label class="col-sm-2 pr-0 col-form-label text-right"
                      for="text-default">{{ __('Options') }}</label>
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
                        <div class="col-sm-1">
                          <label></label>
                        </div>
                      </div>

                      <div class="row" repeat="_0">

                        {{-- value --}}
                        <div class="col-sm-6 pr-0">
                          @include('forms.text', ['options' => [
                          'name' => 'options[values][0][value]',
                          'placeholder' => __('Some Value'),
                          'disabled' => $disabled
                          ]])
                        </div>

                        {{-- cost --}}
                        <div class="col-sm-3 pr-0">
                          @include('forms.number', ['options' => [
                          'name' => 'options[values][0][cost]',
                          'placeholder' => '25.00',
                          'disabled' => $disabled,
                          'step' => '.01',
                          'min' => '0',
                          'prepend' => '£',
                          'attrs' => ['disabler' => 'cost']
                          ]])
                        </div>

                        {{-- default --}}
                        <div class="col-sm-2 pr-0 has-switch">
                          @include('forms.switch', ['options' => [
                          'name' => 'options[values][0][default]',
                          'disabled' => $disabled,
                          ]])
                        </div>

                        <div class="col-sm-1">
                          <button type="button" class="btn btn-link btn-danger btn-icon btn-sm remove"
                            title="Remove choice">
                            <i class="tim-icons icon-simple-remove"></i>
                          </button>
                        </div>
                      </div>

                      @foreach (old('options.values') ?? [] as $value)
                        @continue($loop->index == 0)

                        <div class="row" repeat="_{{ $loop->index }}">

                          {{-- value --}}
                          <div class="col-sm-6 pr-0">
                            @include('forms.text', ['options' => [
                            'name' => 'options[values][0][value]',
                            'placeholder' => __('Some Value'),
                            'disabled' => $disabled
                            ]])
                          </div>

                          {{-- cost --}}
                          <div class="col-sm-3 pr-0">
                            @include('forms.number', ['options' => [
                            'name' => 'options[values][0][cost]',
                            'placeholder' => '25.00',
                            'disabled' => $disabled,
                            'step' => '.01',
                            'min' => '0',
                            'prepend' => '£',
                            'attrs' => ['disabler' => 'cost']
                            ]])
                          </div>

                          {{-- default --}}
                          <div class="col-sm-2 pr-0 has-switch">
                            @include('forms.switch', ['options' => [
                            'name' => 'options[values][0][default]',
                            'disabled' => $disabled,
                            ]])
                          </div>

                          <div class="col-sm-1">
                            <button type="button" class="btn btn-link btn-danger btn-icon btn-sm remove"
                              title="Remove choice">
                              <i class="tim-icons icon-simple-remove"></i>
                            </button>
                          </div>
                        </div>

                      @endforeach

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
                  @php $disabled = $type == 'number'; @endphp

                  {{-- default --}}
                  <div class="row justify-content-md-center">
                    <label class="col-sm-2 pr-0 col-form-label text-right"
                      for="number-default">{{ __('Default Value') }}</label>
                    <div class="col-sm-10">
                      @include('forms.number', ['options' => [
                      'name' => 'options[default]',
                      'placeholder' => '1000',
                      'disabled' => $disabled,
                      'id' => 'number-default',
                      ]])
                    </div>
                  </div>

                  {{-- min_value --}}
                  <div class="row justify-content-md-center">
                    <label class="col-sm-2 pr-0 col-form-label text-right"
                      for="number-min-value">{{ __('Minimum Value') }}</label>
                    <div class="col-sm-10">
                      @include('forms.number', ['options' => [
                      'name' => 'options[min_value]',
                      'placeholder' => '250',
                      'disabled' => $disabled,
                      'id' => 'number-min-value',
                      ]])
                    </div>
                  </div>

                  {{-- max_value --}}
                  <div class="row justify-content-md-center">
                    <label class="col-sm-2 pr-0 col-form-label text-right"
                      for="number-max-value">{{ __('Maximum Value') }}</label>
                    <div class="col-sm-10">
                      @include('forms.number', ['options' => [
                      'name' => 'options[max_value]',
                      'placeholder' => '9000',
                      'disabled' => $disabled,
                      'id' => 'number-max-value',
                      ]])
                    </div>
                  </div>

                  {{-- step --}}
                  <div class="row justify-content-md-center">
                    <label class="col-sm-2 pr-0 col-form-label text-right" for="number-step">{{ __('Step') }}</label>
                    <div class="col-sm-10">
                      @include('forms.number', ['options' => [
                      'name' => 'options[step]',
                      'placeholder' => '50',
                      'disabled' => $disabled,
                      'id' => 'number-step',
                      ]])
                    </div>
                  </div>

                  {{-- min_cost --}}
                  <div class="row justify-content-md-center">
                    <label class="col-sm-2 pr-0 col-form-label text-right"
                      for="number-min-cost">{{ __('Minimum Cost') }}</label>
                    <div class="col-sm-10">
                      @include('forms.number', ['options' => [
                      'name' => 'options[min_cost]',
                      'placeholder' => '0.00',
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
                    <label class="col-sm-2 pr-0 col-form-label text-right"
                      for="number-max-cost">{{ __('Maximum Cost') }}</label>
                    <div class="col-sm-10">
                      @include('forms.number', ['options' => [
                      'name' => 'options[max_cost]',
                      'placeholder' => '100.00',
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
                  @php $disabled = $type == 'checkbox'; @endphp

                  {{-- default --}}
                  <div class="row justify-content-md-center">
                    <label class="col-sm-2 pr-0 col-form-label text-right"
                      for="switch-default">{{ __('Default Value') }}</label>
                    <div class="col-sm-10 has-switch">
                      @include('forms.switch', ['options' => [
                      'name' => 'options[default]',
                      'id' => 'switch-default',
                      'disabled' => $disabled,
                      ]])
                    </div>
                  </div>

                  {{-- on_cost --}}
                  <div class="row justify-content-md-center">
                    <label class="col-sm-2 pr-0 col-form-label text-right"
                      for="number-on-cost">{{ __('On Cost') }}</label>
                    <div class="col-sm-10">
                      @include('forms.number', ['options' => [
                      'name' => 'options[on_cost]',
                      'placeholder' => '50.00',
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
                    <label class="col-sm-2 pr-0 col-form-label text-right"
                      for="number-off-cost">{{ __('Off Cost') }}</label>
                    <div class="col-sm-10">
                      @include('forms.number', ['options' => [
                      'name' => 'options[off_cost]',
                      'placeholder' => '0.00',
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
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn">{{ __('Add Default') }}</button>
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
  <script type="module" src="{{ asset('js') }}/defaults.js"></script>
@endpush
