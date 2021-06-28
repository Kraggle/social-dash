@extends('layouts.app', ['activePage' => 'package-management', 'menuParent' => 'laravel', 'titlePage' => __('Package
Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" enctype="multipart/form-data" action="{{ route('package.store') }}" autocomplete="off">
            @csrf
            @method('post')

            <div class="card ">
              <div class="card-header">
                <h4 class="card-title">{{ __('Add Package') }}</h4>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                    <a href="{{ route('package.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                  </div>
                </div>

                {{-- name --}}
                <div class="row">
                  <label class="col-sm-2 pr-0 col-form-label text-right" for="input-name">
                    {{ __('Name') }}
                  </label>
                  <div class="col-sm-8">
                    @include('forms.text', ['options' => [
                    'name' => 'name',
                    'placeholder' => __('Name'),
                    'id' => 'input-name',
                    'required' => true
                    ]])
                  </div>
                </div>

                {{-- description --}}
                <div class="row">
                  <label class="col-sm-2 col-form-label pr-0 text-right"
                    for="input-description">{{ __('Description') }}</label>
                  <div class="col-sm-8">
                    @include('forms.textarea', ['options' => [
                    'name' => 'description',
                    'placeholder' => __('Description'),
                    'id' => 'input-description',
                    'required' => true
                    ]])
                  </div>
                </div>

                {{-- cost --}}
                <div class="row">
                  <label class="col-sm-2 col-form-label pr-0 text-right" for="input-cost">{{ __('Cost') }}</label>
                  <div class="col-sm-8">
                    @include('forms.number', ['options' => [
                    'name' => 'cost',
                    'placeholder' => '25.00',
                    'id' => 'number-cost',
                    'prepend' => '£',
                    'min' => '0',
                    'step' => '.01'
                    ]])
                  </div>
                </div>

              </div>
            </div>

            <div class="card ">
              <div class="card-header">
                <h4 class="card-title">{{ __('Access Permissions') }}</h4>
              </div>
              <div class="card-body">

                <div class="row justify-content-center">
                  <div class="row col-10">
                    <div class="col pr-0">
                      <label for="checkbox-comments">{{ __('Comments') }}</label>
                    </div>
                    <div class="col pr-0">
                      <label for="checkbox-followers">{{ __('Followers') }}</label>
                    </div>
                    <div class="col pr-0">
                      <label for="checkbox-following">{{ __('Following') }}</label>
                    </div>
                    <div class="col pr-0">
                      <label for="checkbox-hashtags">{{ __('Hashtags') }}</label>
                    </div>
                    <div class="col pr-0">
                      <label for="checkbox-scheduling">{{ __('Scheduling') }}</label>
                    </div>
                    <div class="col pr-0">
                      <label for="checkbox-teams">{{ __('Teams') }}</label>
                    </div>
                    <div class="col">
                      <label for="checkbox-reporting">{{ __('Reporting') }}</label>
                    </div>
                  </div>

                  <div class="row col-10">

                    {{-- default --}}
                    <div class="col pr-0 has-switch">
                      @include('forms.switch', ['options' => [
                      'name' => 'access[comments]',
                      'id' => 'checkbox-comments'
                      ]])
                    </div>

                    {{-- followers --}}
                    <div class="col pr-0 has-switch">
                      @include('forms.switch', ['options' => [
                      'name' => 'access[followers]',
                      'id' => 'checkbox-followers'
                      ]])
                    </div>

                    {{-- following --}}
                    <div class="col pr-0 has-switch">
                      @include('forms.switch', ['options' => [
                      'name' => 'access[following]',
                      'id' => 'checkbox-following'
                      ]])
                    </div>

                    {{-- hashtags --}}
                    <div class="col pr-0 has-switch">
                      @include('forms.switch', ['options' => [
                      'name' => 'access[hashtags]',
                      'id' => 'checkbox-hashtags'
                      ]])
                    </div>

                    {{-- scheduling --}}
                    <div class="col pr-0 has-switch">
                      @include('forms.switch', ['options' => [
                      'name' => 'access[scheduling]',
                      'id' => 'checkbox-scheduling'
                      ]])
                    </div>

                    {{-- teams --}}
                    <div class="col pr-0 has-switch">
                      @include('forms.switch', ['options' => [
                      'name' => 'access[teams]',
                      'id' => 'checkbox-teams'
                      ]])
                    </div>

                    {{-- reporting --}}
                    <div class="col has-switch">
                      @include('forms.switch', ['options' => [
                      'name' => 'access[reporting]',
                      'id' => 'checkbox-reporting'
                      ]])
                    </div>

                  </div>
                </div>

              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-rose">{{ __('Add package') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
