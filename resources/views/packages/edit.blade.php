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
                <div class="row">
                  <h4 class="card-title col-md-6">{{ __('Edit Package') }}</h4>
                  <div class="col-md-6 text-right">
                    <a href="{{ route('package.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                  </div>
                </div>
              </div>
              <div class="card-body">

                {{-- name --}}
                <div class="row">
                  <label class="col-sm-2 pr-0 col-form-label text-right" for="input-name">
                    {{ __('Name') }}
                  </label>
                  <div class="col-sm-8">
                    @include('forms.text', ['options' => [
                    'name' => 'name',
                    'value' => $package->name ?? '',
                    'placeholder' => __('Starter'),
                    'id' => 'input-name',
                    'required' => true
                    ]])
                  </div>
                </div>

                {{-- key --}}
                <div class="row">
                  <label class="col-sm-2 pr-0 col-form-label text-right" for="input-key">
                    {{ __('Key') }}
                  </label>
                  <div class="col-sm-8">
                    @include('forms.text', ['options' => [
                    'name' => 'key',
                    'value' => $package->key ?? '',
                    'placeholder' => __('starter'),
                    'id' => 'input-key',
                    'required' => true
                    ]])
                  </div>
                </div>

                {{-- description --}}
                <div class="row">
                  <label class="col-sm-2 col-form-label pr-0 text-right"
                    for="input-description">{{ __('Description') }}</label>
                  <div class="col-sm-8">
                    @include('forms.textarea', ['options' => [
                    'name' => 'description',
                    'value' => $package->description ?? '',
                    'placeholder' => __('Description'),
                    'id' => 'input-description',
                    'required' => true
                    ]])
                  </div>
                </div>

                {{-- includes --}}
                <div class="row">
                  <label class="col-sm-2 col-form-label pr-0 text-right"
                    for="input-includes">{{ __('Includes') }}</label>
                  <div class="col-sm-8">
                    @include('forms.textarea', ['options' => [
                    'name' => 'options[includes]',
                    'value' => $package->options->includes ?? '',
                    'placeholder' => __('A comma separated list of benefits of the package. Include (+) at the beginning
                    to set an icon.'),
                    'id' => 'input-includes',
                    'required' => true
                    ]])
                  </div>
                </div>

                {{-- cost --}}
                <div class="row">
                  <label class="col-sm-2 col-form-label pr-0 text-right" for="number-cost">{{ __('Cost') }}</label>
                  <div class="col-sm-8">
                    @include('forms.number', ['options' => [
                    'name' => 'cost',
                    'value' => $package->cost ?? '',
                    'placeholder' => '25.00',
                    'id' => 'number-cost',
                    'prepend' => '£',
                    'min' => '0',
                    'step' => '.01'
                    ]])
                  </div>
                </div>

                {{-- stripe_id --}}
                <div class="row">
                  <label class="col-sm-2 col-form-label pr-0 text-right"
                    for="input-stripe-id">{{ __('Stripe ID') }}</label>
                  <div class="col-sm-8">
                    @include('forms.text', ['options' => [
                    'name' => 'stripe_id',
                    'value' => $package->stripe_id ?? '',
                    'placeholder' => 'prod_oi34...',
                    'id' => 'input-stripe-id'
                    ]])
                  </div>
                </div>

                {{-- price_id --}}
                <div class="row">
                  <label class="col-sm-2 col-form-label pr-0 text-right"
                    for="input-price-id">{{ __('Price ID') }}</label>
                  <div class="col-sm-8">
                    @include('forms.text', ['options' => [
                    'name' => 'price_id',
                    'value' => $package->price_id ?? '',
                    'placeholder' => 'price_w5u2...',
                    'id' => 'input-price-id'
                    ]])
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
