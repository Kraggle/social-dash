@extends('layouts.app', ['activePage' => 'role-management', 'menuParent' => 'laravel', 'titlePage' => __('Role
Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('role.update', $role) }}" autocomplete="off">
            @csrf
            @method('put')

            <div class="card ">
              <div class="card-header">
                <h4 class="card-title">{{ __('Edit Role') }}</h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12 text-right">
                    <a href="{{ route('role.index') }}" class="btn-primary btn-sm">{{ __('Back to list') }}</a>
                  </div>
                </div>

                {{-- name --}}
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-name">{{ __('Name') }}</label>
                  <div class="col-sm-7">
                    @include('forms.text', ['options' => [
                    'name' => 'name',
                    'value' => $role->name ?? '',
                    'id' => 'input-name',
                    'placeholder' => __('Name'),
                    'required' => true
                    ]])
                  </div>
                </div>

                {{-- description --}}
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-description">{{ __('Description') }}</label>
                  <div class="col-sm-7">
                    @include('forms.textarea', ['options' => [
                    'name' => 'description',
                    'value' => $role->description ?? '',
                    'placeholder' => __('Description'),
                    'required' => true,
                    'id' => 'input-description'
                    ]])
                  </div>
                </div>

              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-rose">{{ __('Save') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
