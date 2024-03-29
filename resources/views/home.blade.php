@extends('layouts.app', [
'class' => 'home-page',
'activePage' => 'home',
'titlePage' => __('Welcome')
])

@section('content')
  <div class="content">
    <div class="row" style="padding-top: 90px;">
      <div class="col-md-9 mx-auto mb-1 text-center">
        <h3>{{ __('You are logged in!') }} </h3>
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
