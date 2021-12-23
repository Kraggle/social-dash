@extends('errors.layout', [
'class' => 'error-page',
'activePage' => 'error',
'titlePage' => __('419 Error')
])

@section('content')
  <div class="content">
    <div class="container">
      <div class="row" style="padding-top: 90px;">
        <div class="col-md-9 mx-auto mb-1 text-center">
          <h2>{{ __('Page expired') }} @icon('fal fa-frown-open ps-2')</h2>
          <h4>{{ __('Ooooups! Looks like your token has expired.') }}</h4>
        </div>
      </div>
    </div>
  </div>
@endsection
