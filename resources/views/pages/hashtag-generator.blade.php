@extends('layouts.app', [
'activePage' => 'hashtag-generator',
'menuParent' => 'hashtag-generator',
'titlePage' => __('hashtag-generator')
])

@section('content')
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="photo">
          <img src="{{ asset('images') }}/hashtag-generator.jpg" alt="Table image">
        </div>
      </div>
    </div>
  </div>

@endsection
