@extends('layouts.app', [
'class' => 'welcome-page',
'activePage' => 'welcome',
'titlePage' => __('White Dashboard'),
])

@section('content')
  <div class="container">
    <div class="row" style="padding-top: 90px;">
      <div class="col-md-9 mx-auto mb-1 text-center">
        <h3>{{ __('Welcome to Material Dashboard Pro Laravel Live Preview.') }} </h3>
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
