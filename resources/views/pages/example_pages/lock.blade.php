@extends('layouts.app', [
'class' => 'lock-page',
'activePage' => 'lock',
'titlePage' => __('White Dashboard'),
])


@section('content')
  <div class="content">
    <div class="container">
      <div class="col-lg-4 col-md-6 mx-auto">
        <div class="card card-lock text-center">
          <div class="card-header">
            <img src="{{ asset('white') }}/img/emilyz.jpg" alt="...">
          </div>
          <div class="card-body">
            <h3 class="card-title">{{ __('Joe Gardner') }}</h3>
            <div class="input-group">
              <div class="input-group-text">
                <i class="fal fa-key-skeleton"></i>
              </div>
              <input type="text" class="form-control" placeholder="Password">
            </div>
          </div>
          <div class="card-footer">
            <a href="javascript:void(0)" class="btn btn-primary btn-gradient rounded-pill btn-lg">{{ __('Unlock') }}</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      md.checkFullPageBackgroundImage();
      setTimeout(function() {
        // after 1000 ms we add the class animated to the login/register card
        $('.card').removeClass('card-hidden');
      }, 700);
    });
  </script>
@endpush
