@extends('layouts.app', ['activePage' => 'team-management', 'titlePage' => __('Team Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" enctype="multipart/form-data" action="{{ route('team.store') }}" autocomplete="off">
            @csrf
            @method('post')

            <div class="card">
              <div class="card-header row">
                <h3 class="card-title col-md-6">{{ __('Team') }}</h3>
                <div class="col-md-6 mb-3 text-end">
                  <a href="{{ route('team.index') }}" class="btn btn-sm btn-warning btn-gradient">{{ __('Back to list') }}</a>
                </div>
              </div>
              <div class="card-body ">

                {{-- name --}}
                <div class="row">
                  <label class=" col-sm-2 pe-0 col-form-label text-end" for="input-name">
                    {{ __('Name') }}</label>
                  <div class="col-sm-8">
                    @include('forms.text', ['settings' => [
                    'name' => 'name',
                    'placeholder' => __('Team Name'),
                    'id' => 'input-name',
                    'required' => true
                    ]])
                  </div>
                </div>

                {{-- package_id --}}
                <div class="row">
                  <label class="col-sm-2 pe-0 col-form-label text-end" for="select-package-id">{{ __('Package') }}</label>
                  <div class="col-sm-8">
                    @include('forms.select', ['settings' => [
                    'name' => 'package_id',
                    'id' => 'select-package-id',
                    'from' => [
                    'array' => $packages,
                    'value' => 'id',
                    'display' => 'name'
                    ]
                    ]])
                  </div>
                </div>

              </div>
              <div class="card-footer mx-auto">
                <button type="submit" class="btn btn-primary btn-gradient">{{ __('Add Team') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  {{-- <script type="module" src="{{ AH::asset('js', '/teams.js') }}"></script> --}}
@endpush
