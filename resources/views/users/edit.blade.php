@extends('layouts.app', ['activePage' => 'user-management', 'menuParent' => 'laravel', 'titlePage' => __('User
Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" enctype="multipart/form-data" action="{{ route('user.update', $user) }}" autocomplete="off">
            @csrf
            @method('put')

            <div class="card ">
              <div class="card-header">
                <h3 class="card-title d-inline-block">{{ __('Edit User') }}</h3>
                <a href="{{ route('user.index') }}" class="btn btn-sm btn-warning btn-gradient float-end">
                  {{ __('Back to list') }}
                </a>
              </div>
              <div class="card-body">
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Profile photo') }}</label>
                  <div class="col-sm-7">
                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                      <div class="fileinput-new thumbnail img-circle">
                        @if (auth()->user()->picture)
                          <img src="{{ auth()->user()->profilePicture() }}" alt="...">
                        @else
                          <img src="{{ asset('images') }}/placeholder.jpg" alt="...">
                        @endif
                      </div>
                      <div class="fileinput-preview fileinput-exists thumbnail img-circle" data-trigger="fileinput"></div>
                      <div class="d-grid">
                        <span class="btn rounded-pill btn-indigo btn-file">
                          <span class="fileinput-new">{{ __('Add Photo') }}</span>
                          <span class="fileinput-exists">{{ __('Change') }}</span>
                          <input type="file" name="photo" id="input-picture" />
                        </span>
                        <a href="#pablo" class="btn btn-danger btn-gradient rounded-pill fileinput-exists mt-2" data-dismiss="fileinput">@icon('fa fa-times') {{ __('Remove') }}</a>
                      </div>
                      @include('alerts.feedback', ['field' => 'photo'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name', $user->name) }}" required="true" aria-required="true" />
                      @include('alerts.feedback', ['field' => 'name'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="input-email" type="email" placeholder="{{ __('Email') }}" value="{{ old('email', $user->email) }}" required />
                      @include('alerts.feedback', ['field' => 'email'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Role') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('role_id') ? ' has-danger' : '' }}">
                      <select class="selectpicker col-sm-12 ps-0 pe-0" name="role_id" data-style="select-with-transition" title="" data-size="100">
                        @foreach ($roles as $role)
                          <option value="{{ $role->id }}" @if (old('role_id', $user->role_id) == $role->id) selected="selected" @endif>{{ $role->name }}</option>
                        @endforeach
                      </select>
                      @include('alerts.feedback', ['field' => 'role_id'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password">{{ __(' Password') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" input type="password" name="password" id="input-password" placeholder="{{ __('Password') }}" />
                      @include('alerts.feedback', ['field' => 'password'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{ __('Confirm Password') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="password_confirmation" id="input-password-confirmation" type="password" placeholder="{{ __('Confirm Password') }}" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer mx-auto">
                <button type="submit" class="btn btn-primary btn-gradient">{{ __('Save') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
