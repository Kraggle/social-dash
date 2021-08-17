@extends('layouts.app', ['activePage' => 'package-management', 'menuParent' => 'laravel', 'titlePage' => __('Package
Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" enctype="multipart/form-data" action="{{ route('package.store') }}" autocomplete="off">
            @csrf
            @method('post')

            <div class="card ">
              <div class="card-header">
                <h3 class="card-title">{{ __('Add Package') }}</h3>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-end">
                    <a href="{{ route('package.index') }}" class="btn btn-sm btn-primary btn-gradient">{{ __('Back to list') }}</a>
                  </div>
                </div>

                {{-- name --}}
                <div class="row">
                  <label class="col-sm-2 pe-0 col-form-label text-end" for="input-name">
                    {{ __('Name') }}
                  </label>
                  <div class="col-sm-8">
                    @include('forms.text', ['settings' => [
                    'name' => 'name',
                    'placeholder' => __('Name'),
                    'id' => 'input-name',
                    'required' => true
                    ]])
                  </div>
                </div>

                {{-- key --}}
                <div class="row">
                  <label class="col-sm-2 pe-0 col-form-label text-end" for="input-key">
                    {{ __('Key') }}
                  </label>
                  <div class="col-sm-8">
                    @include('forms.text', ['settings' => [
                    'name' => 'key',
                    'placeholder' => __('starter'),
                    'id' => 'input-key',
                    'required' => true
                    ]])
                  </div>
                </div>

                {{-- description --}}
                <div class="row">
                  <label class="col-sm-2 col-form-label pe-0 text-end" for="input-description">{{ __('Description') }}</label>
                  <div class="col-sm-8">
                    @include('forms.textarea', ['settings' => [
                    'name' => 'description',
                    'placeholder' => __('Description'),
                    'id' => 'input-description',
                    'required' => true
                    ]])
                  </div>
                </div>

                {{-- includes --}}
                <div class="row">
                  <label class="col-sm-2 col-form-label pe-0 text-end" for="input-includes">{{ __('Includes') }}</label>
                  <div class="col-sm-8">
                    @include('forms.textarea', ['settings' => [
                    'name' => 'options[includes]',
                    'placeholder' => __('A comma separated list of benefits of the package. Include (+) at the
                    beginning format to set an icon.'),
                    'id' => 'input-includes',
                    'required' => true
                    ]])
                  </div>
                </div>

                {{-- cost --}}
                <div class="row">
                  <label class="col-sm-2 col-form-label pe-0 text-end" for="number-cost">{{ __('Cost') }}</label>
                  <div class="col-sm-8">
                    @include('forms.number', ['settings' => [
                    'name' => 'cost',
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
                  <label class="col-sm-2 col-form-label pe-0 text-end" for="input-stripe-id">{{ __('Stripe ID') }}</label>
                  <div class="col-sm-8">
                    @include('forms.text', ['settings' => [
                    'name' => 'stripe_id',
                    'placeholder' => 'prod_oi34...',
                    'id' => 'input-stripe-id'
                    ]])
                  </div>
                </div>

                {{-- price_id --}}
                <div class="row">
                  <label class="col-sm-2 col-form-label pe-0 text-end" for="input-price-id">{{ __('Price ID') }}</label>
                  <div class="col-sm-8">
                    @include('forms.text', ['settings' => [
                    'name' => 'price_id',
                    'placeholder' => 'price_w5u2...',
                    'id' => 'input-price-id'
                    ]])
                  </div>
                </div>

              </div>
              <div class="card-footer mx-auto">
                <button type="submit" class="btn btn-primary btn-gradient">{{ __('Add package') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
