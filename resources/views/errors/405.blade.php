@extends('errors.layout', [
'class' => 'error-page',
'activePage' => 'error',
'titlePage' => __('405 Error')
])

@section('content')
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-9 mx-auto mb-1 text-center">
          <h2>{{ __('Page not found') }} @icon('fal fa-frown-open ps-2')</h2>
          <h4>{{ __('Ooooups! Looks like you got lost.') }}</h4>
        </div>
      </div>
    </div>
  </div>
@endsection
