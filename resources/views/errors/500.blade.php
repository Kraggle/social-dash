@extends('errors.layout', [
'class' => 'login-page',
'activePage' => 'login',
'titlePage' => __('White Dashboard')
])

@section('content')
  <div class="content">
    <div class="container">
      <div class="row" style="padding-top: 90px;">
        <div class="col-md-9 mx-auto mb-1 text-center">
          <h2>{{ __('Server Error') }} <i class="fal fa-frown-open ps-2"></i></h2>
          <h4>{{ __('Ooooups! Looks like something went wrong') }}</h4>
        </div>
      </div>
    </div>
  </div>
@endsection
