@extends('layouts.app', ['activePage' => 'team-management', 'titlePage' => __('Team Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          @can('add-member', auth()->user()->team)
            <form method="post" enctype="multipart/form-data" action="{{ route('member.store') }}" autocomplete="off">
              @csrf
              @method('post')

              <div class="card">
                <div class="card-header row">
                  <h4 class="card-title col-md-6">{{ __('Team') }}</h4>
                  <div class="col-md-6 mb-3 text-end">
                    <a href="{{ route('team.index') }}" class="btn btn-sm btn-warning btn-gradient">{{ __('Back to list') }}</a>
                  </div>
                </div>
                <div class="card-body ">

                  {{-- email --}}
                  <div class="row">
                    <label class=" col-sm-2 pe-0 col-form-label text-end" for="input-email">
                      {{ __('Email Address') }}</label>
                    <div class="col-sm-8">
                      @include('forms.text', ['options' => [
                      'name' => 'email',
                      'placeholder' => __('example@domain.com'),
                      'id' => 'input-email',
                      'required' => true
                      ]])
                    </div>
                  </div>

                </div>
                <div class="card-footer mx-auto">
                  <button type="submit" class="btn btn-primary btn-gradient">{{ __('Send invite') }}</button>
                </div>
              </div>
            </form>
          @else
            @include('permission')
          @endcan
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  {{-- <script type="module" src="{{ asset('js') }}/teams.js"></script> --}}
@endpush
