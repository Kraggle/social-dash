@extends('layouts.app', [
'class' => 'subscribe-page',
'activePage' => 'subscribe',
'titlePage' => __('Subscribe')
])

@php
$packages = \App\Models\Package::all();
// $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
$stripe_key = env('STRIPE_KEY');
// $products = $stripe->products->all();
// AppHelper::print($intent);
$cost = 0;
$name = 'package_id';
$prev = '';
@endphp

@section('content')
  <div class="content">
    <div class="col-md-8 mx-auto">

      <h1 class="fw-bold text-center">{{ __('Start with a 7 day free trial!') }}</h1>
      <p class="text-center sub-text">
        {{ __('The trial period grants you access to our own account to analyse. You will not be charged until the trial expires.') }}
      </p>

      <div class="card card-subscribe">

        <div class="row justify-content-center" id="radio-package">

          @foreach ($packages as $package)
            @continue($package->id == 1)
            @php
              $id = AppHelper::makeId();
              $includes = explode(',', $package->options->includes ?? '');
            @endphp

            <div class="col-sm-4">

              <input id="{{ $id }}" type="radio" class="d-none check-wrap-input" name="{{ $name }}" value={{ $package->id }} {{ $package->id == 3 ? 'checked' : '' }}>

              <label for="{{ $id }}" class="check-wrap">
                <div class="head-row">
                  <div class="check-mark">
                    @icon('off fal fa-stop')
                    @icon('on fas fa-stop')
                  </div>

                  <div class="check-title">{{ $package->name }}</div>
                </div>

                <div class="check-cost">
                  <span class="symbol">£</span>
                  <span class="price">{{ $package->cost }}</span> /
                  <span class="term">month</span>
                </div>

                <p class="check-desc">{{ $package->description }}</p>

                @foreach ($includes as $value)
                  <p class="check-item">
                    {!! str_replace('(+)', '<i class="far fa-plus" aria-hidden="true"></i>', trim($value)) !!}
                  </p>
                @endforeach
              </label>
            </div>

          @endforeach

          <div class="col-sm-auto my-3">
            @include('forms.check', ['settings' => [
            'name' => 'policy',
            'id' => 'check-policy',
            'placeholder' => __('I agree with the ') . " <a href=\"#\">" . __('terms and conditions') . "</a>"
            ]])
            <label id="policy-error" class="error text-danger" for="check-policy"></label>
          </div>

          {{-- TODO:: Write the terms and conditions --}}

        </div>

        <div class="row justify-content-center">
          <button id="pay-now" class="btn btn-lg btn-warning btn-gradient rounded-pill">Continue</button>
          <p class="fade-info text-center">
            {{ __('You can upgrade, downgrade, or cancel your subscription anytime. Upgrading during your trail period will charge at the end of the trial period.') }}
          </p>
        </div>

      </div>
    </div>
  </div>

  <div id="pay-popup" class="full-fade center-all">
    <div class="row justify-content-center">
      <div class="col-lg-4">
        <div class="card card-payment no-animate">
          <a href="javascript:void(0)" id="close-btn" class="btn btn-icon btn-link">
            @icon('fas fa-times')
          </a>

          <form class="form" data-secret={{ $intent->client_secret }} data-stripe="{{ $stripe_key }}" id="payment-form" method="POST" action="{{ route('subscription.store') }}">
            @csrf

            <input type="hidden" name="package_id" value="3">

            <h5 class="info-text">{{ __('How would you like to pay?') }}</h5>
            <div class="row justify-content-center">

              {{-- pay with paypal --}}
              {{-- <div class="col-sm-12 text-center">
                <a class="btn btn-image" href="#">
                  <img class="" src="{{ asset('images') }}/paypal-pay-with.svg" alt="paypal">
                </a>
              </div> --}}

              <div class="col-sm-12 form-wrap mb-4">
                {{-- <span class="form-wrap-title">{{ __('or') }}</span> --}}

                {{-- billing name --}}
                <label for="input-billing-name">{{ __('Name on Card') }}</label>
                @include('forms.text', ['settings' => [
                'name' => 'billing-name',
                'placeholder' => __('Mr S Shadow'),
                'id' => 'input-billing-name',
                'prepend' => ['icon' => 'fal fa-user'],
                'group' => ['class' => 'mb-2']
                ]])
                <label id="error-billing-name" class="error text-danger" for="input-billing-name"></label>

                <div class="row mb-0">

                  {{-- card number --}}
                  <div class="col-sm-12">
                    <label for="">{{ __('Card Number') }}</label>
                    <div class="input-group mb-2 d-flex">
                      <div class="input-group-text">
                        @icon('fal fa-credit-card')
                      </div>
                      <div class="form-control" id="number-element"></div>
                      <div class="input-group-cards">
                        <img class="card-icon" src="https://js.stripe.com/v3/fingerprinted/img/visa-365725566f9578a9589553aa9296d178.svg" alt="visa">
                        <img class="card-icon" src="https://js.stripe.com/v3/fingerprinted/img/mastercard-4d8844094130711885b5e41b28c9848f.svg" alt="mastercard">
                        <img class="card-icon" src="https://js.stripe.com/v3/fingerprinted/img/amex-a49b82f46c5cd6a96a6e418a6ca1717c.svg" alt="amex">
                        <div class="img-rotator">
                          <img class="card-icon hidden" src="https://js.stripe.com/v3/fingerprinted/img/discover-ac52cd46f89fa40a29a0bfb954e33173.svg" alt="discover">
                          <img class="card-icon hidden" src="https://js.stripe.com/v3/fingerprinted/img/jcb-271fd06e6e7a2c52692ffa91a95fb64f.svg" alt="jcb">
                          <img class="card-icon" src="https://js.stripe.com/v3/fingerprinted/img/diners-fbcbd3360f8e3f629cdaa80e93abdb8b.svg" alt="diners">
                          <img class="card-icon hidden" src="https://js.stripe.com/v3/fingerprinted/img/unionpay-8a10aefc7295216c338ba4e1224627a1.svg" alt="unionpay">
                        </div>
                      </div>
                    </div>
                    <label id="error-cardnumber" class="error text-danger" for="input-cardnumber"></label>
                  </div>

                  {{-- card expiry --}}
                  <div class="col-sm-7 pe-0">
                    <label for="">{{ __('Expiry') }}</label>
                    <div class="input-group mb-2 d-flex">
                      <div class="input-group-text">
                        @icon('fal fa-calendar-week')
                      </div>
                      <div class="form-control" id="expiry-element"></div>
                    </div>
                    <label id="error-cardExpiry" class="error text-danger" for="input-cardExpiry"></label>
                  </div>

                  {{-- card cvc --}}
                  <div class="col-sm-5">
                    <label for="">{{ __('CVC') }}</label>
                    <div class="input-group mb-2 d-flex">
                      <div class="input-group-text">
                        @icon('fal fa-shield-alt')
                      </div>
                      <div class="form-control" id="cvc-element"></div>
                    </div>
                    <label id="error-cardCvc" class="error text-danger" for="input-cardCvc"></label>
                  </div>

                </div>
                <img class="powered-image" src="{{ asset('images') }}/stripe-powered.svg" alt="stripe">
              </div>

              <button class="btn btn-lg btn-warning btn-gradient w-100" type="submit">Subscribe</button>

            </div>

          </form>
        </div>
      </div>
    </div>
  </div>

@endsection

@push('js')
  <script type="module" src="{{ AH::asset('js/pages', '/subscribe.js') }}"></script>
@endpush
