@extends('layouts.app', [
'class' => 'pricing-page',
'activePage' => 'pricing',
'titlePage' => __('White Dashboard'),
])

@section('content')
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto text-center">
          <h1 class="title">{{ __('Pick the best plan for you') }}</h1>
          <h4 class="description">{{ __('You have Free Unlimited Updates and Premium Support on each package.') }}</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="card card-pricing card-primary">
            <div class="card-body">
              <h3 class="card-title">pro</h3>
              <img class="card-img" src="{{ asset('white') }}/img/card-primary.png" alt="Image">
              <ul class="list-group">
                <li class="list-group-item">{{ __('300 messages') }}</li>
                <li class="list-group-item">{{ __('150 emails') }}</li>
                <li class="list-group-item">{{ __('24/7 Support') }}</li>
              </ul>
              <div class="card-prices">
                <h3 class="text-on-front">
                  <span>$</span>95
                </h3>
                <h5 class="text-on-back">95</h5>
                <p class="plan">{{ __('Professional plan') }}</p>
              </div>
            </div>
            <div class="card-footer text-center mb-3 mt-3">
              <button class="btn rounded-pill btn-just-icon btn-primary btn-gradient">{{ __('Get started') }}</button>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card card-pricing card-success">
            <div class="card-body">
              <h3 class="card-title">basic</h3>
              <img class="card-img" src="{{ asset('white') }}/img/card-success.png" alt="Image">
              <ul class="list-group">
                <li class="list-group-item">50 messages</li>
                <li class="list-group-item">100 emails</li>
                <li class="list-group-item">24/7 Support</li>
              </ul>
              <div class="card-prices">
                <h3 class="text-on-front">
                  <span>$</span>57
                </h3>
                <h5 class="text-on-back">57</h5>
                <p class="plan">Basic plan</p>
              </div>
            </div>
            <div class="card-footer text-center mb-3 mt-3">
              <button class="btn rounded-pill btn-just-icon btn-success btn-gradient">Get started</button>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card card-pricing card-warning card-raised">
            <div class="card-body">
              <h3 class="card-title">mid</h3>
              <img class="card-img" src="{{ asset('white') }}/img/card-warning.png" alt="Image">
              <ul class="list-group">
                <li class="list-group-item">200 messages</li>
                <li class="list-group-item">130 emails</li>
                <li class="list-group-item">24/7 Support</li>
              </ul>
              <div class="card-prices">
                <h3 class="text-on-front">
                  <span>$</span>72
                </h3>
                <h5 class="text-on-back">72</h5>
                <p class="plan">Medium plan</p>
              </div>
            </div>
            <div class="card-footer text-center mb-3 mt-3">
              <button class="btn rounded-pill btn-just-icon btn-warning btn-gradient">Get started</button>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card card-pricing card-danger">
            <div class="card-body">
              <h3 class="card-title">trial</h3>
              <img class="card-img" src="{{ asset('white') }}/img/card-danger.png" alt="Image">
              <ul class="list-group">
                <li class="list-group-item">50 messages</li>
                <li class="list-group-item">50 emails</li>
                <li class="list-group-item">No Support</li>
              </ul>
              <div class="card-prices">
                <h3 class="text-on-front">
                  <span>$</span>9
                </h3>
                <h5 class="text-on-back">9</h5>
                <p class="plan">Trial plan</p>
              </div>
            </div>
            <div class="card-footer text-center mb-3 mt-3">
              <button class="btn rounded-pill btn-just-icon btn-danger btn-gradient">Get started</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12 mt-5">
        <h3 class="title">Professional Plan</h3>
      </div>
      <div class="row">
        <div class="col-md-4">
          <p>Premium pricing is the strategy of consistently pricing at, or near, the high end of the possible price range
            to help attract status-conscious consumers. The high pricing of a premium product ...</p>
        </div>
        <div class="col-md-6 ms-auto">
          <div class="progress-container progress-warning">
            <span class="progress-badge">500GB</span>
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
              </div>
            </div>
          </div>
          <div class="progress-container progress-primary">
            <span class="progress-badge">4 years</span>
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      demo.checkFullPageBackgroundImage();
    });
  </script>
@endpush
