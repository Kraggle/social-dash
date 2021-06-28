@extends('layouts.app', ['activePage' => 'team-management', 'titlePage' => __('Team Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" enctype="multipart/form-data" action="{{ route('team.update', $team) }}"
            autocomplete="off">
            @csrf
            @method('put')

            <div class="card">
              <div class="card-header row">
                <h4 class="card-title col-md-6">{{ __('Team') }}</h4>

                <div class="col-md-6 mb-3 text-right">
                  <a href="{{ route('team.index') }}" class="btn btn-sm btn-warning">{{ __('Back to list') }}</a>
                </div>
              </div>
              <div class="card-body ">

                {{-- name --}}
                <div class="row">
                  <label class=" col-sm-2 pr-0 col-form-label text-right" for="input-name">
                    {{ __('Name') }}</label>
                  <div class="col-sm-8">
                    @include('forms.text', ['options' => [
                    'name' => 'name',
                    'value' => $team->name ?? '',
                    'placeholder' => __('Team Name'),
                    'id' => 'input-name',
                    'required' => true
                    ]])
                  </div>
                </div>

                {{-- package_id --}}
                <div class="row">
                  <label class="col-sm-2 pr-0 col-form-label text-right"
                    for="select-package-id">{{ __('Package') }}</label>
                  <div class="col-sm-8">
                    @include('forms.select', ['options' => [
                    'name' => 'package_id',
                    'value' => $team->package_id ?? '',
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
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn">{{ __('Save') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script type="module" src="{{ asset('js') }}/teams.js"></script>
@endpush