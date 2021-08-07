@extends('errors.layout', [
'class' => 'login-page',
'classPage' => 'login-page',
'activePage' => 'login',
'titlePage' => __('White Dashboard')
])

@section('content')
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-9 mx-auto mb-1 text-center">
          <h2>{{ __('Forbidden') }} <i class="fal fa-frown-open ps-2"></i></h2>
          <h4>{{ __('Ooooups! Looks like you got lost.') }}</h4>
        </div>
      </div>
    </div>
  </div>
@endsection
