@extends('layouts.app', ['activePage' => 'calendar', 'menuParent' => 'calendar', 'titlePage' => __('Calendar')])

@php
$types = [
    (object) [
        'name' => 'Small',
        'size' => 'sm',
    ],
    (object) [
        'name' => 'Regular',
        'size' => '',
    ],
    (object) [
        'name' => 'Large',
        'size' => 'lg',
    ],
];
@endphp

@section('content')
  <div class="content">

    <div class="row">

      @foreach ($types as $type)

        <div class="col-4">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">{{ $type->name }} Labeled Elements</h4>
            </div>
            <div class="card-body row px-4">

              <div class="col-12">
                @include('forms.text', ['settings' => [
                'label' => 'A text input...',
                'group' => ['size' => $type->size],
                ]])
              </div>

              <div class="col-12">
                @include('forms.text', ['settings' => [
                'label' => 'With prepend...',
                'group' => ['size' => $type->size],
                'prepend' => ['icon' => 'fal fa-user']
                ]])
              </div>

              <div class="col-12">
                @include('forms.text', ['settings' => [
                'label' => 'With append...',
                'group' => ['size' => $type->size],
                'append' => 'Text'
                ]])
              </div>

              <div class="col-12">
                @include('forms.text', ['settings' => [
                'label' => 'With button...',
                'group' => ['size' => $type->size],
                'append' => ['btn' => [
                'display' => 'Button',
                'class' => 'btn btn-primary'
                ]]
                ]])
              </div>

              <div class="col-12">
                @include('forms.text', ['settings' => [
                'label' => 'A success input...',
                'value' => 'With success text',
                'group' => ['size' => $type->size, 'class' => ['has-success']]
                ]])
              </div>

              <div class="col-12">
                @include('forms.text', ['settings' => [
                'label' => 'An error input...',
                'value' => 'With error text',
                'group' => ['size' => $type->size, 'class' => ['has-danger']]
                ]])
              </div>

              <div class="col-12">
                @include('forms.text', ['settings' => [
                'label' => 'A success input...',
                'value' => 'With success text',
                'group' => ['size' => $type->size, 'class' => ['has-success']],
                'append' => 'Text'
                ]])
              </div>

              <div class="col-12">
                @include('forms.text', ['settings' => [
                'label' => 'An error input...',
                'value' => 'With error text',
                'group' => ['size' => $type->size, 'class' => ['has-danger']],
                'append' => 'Text'
                ]])
              </div>

              <div class="col-12">
                @include('forms.select', ['settings' => [
                'label' => 'A select input...',
                'options' => [
                'one' => 'Option One',
                'two' => 'Option Two',
                'three' => 'Option Three',
                'four' => 'Options Four',
                ],
                'value' => 'one',
                'group' => ['size' => $type->size]
                ]])
              </div>

              <div class="col-12">
                @include('forms.switch', ['settings' => [
                'label' => 'A switch...',
                'size' => $type->size
                ]])
              </div>

              <div class="col-12">
                @include('forms.check', ['settings' => [
                'label' => 'A checkbox...',
                'size' => $type->size
                ]])
              </div>

              <div class="col-12">
                @include('forms.text', ['settings' => [
                'label' => 'A disabled input...',
                'value' => 'With a value',
                'group' => ['size' => $type->size],
                'disabled' => true
                ]])
              </div>

              <div class="col-12">
                @include('forms.datepicker', ['settings' => [
                'label' => 'A datepicker...',
                'group' => ['size' => $type->size],
                ]])
              </div>

              <div class="col-12">
                @include('forms.text', ['settings' => [
                'label' => 'A text input...',
                'group' => ['size' => $type->size, 'class' => ['rounded-pill']]
                ]])
              </div>

              <div class="col-12">
                @include('forms.text', ['settings' => [
                'label' => 'Rounded with button...',
                'group' => ['size' => $type->size, 'class' => ['rounded-pill']],
                'append' => ['btn' => [
                'display' => 'Button',
                'class' => 'btn btn-primary'
                ]]
                ]])
              </div>

              <div class="col-12">
                @include('forms.select', ['settings' => [
                'label' => 'A rounded select...',
                'options' => [
                'one' => 'Rounded One',
                'two' => 'Rounded Two',
                'three' => 'Rounded Three',
                'four' => 'Rounded Four',
                ],
                'value' => 'one',
                'group' => ['size' => $type->size, 'class' => ['rounded-pill']]
                ]])
              </div>

              <div class="col-12">
                @include('forms.switch', ['settings' => [
                'label' => 'A rounded switch...',
                'size' => $type->size,
                'style' => 'rounded-pill'
                ]])
              </div>

            </div>
          </div>
        </div>

      @endforeach

    </div>

    <div class="row">
      @foreach ($types as $type)

        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">{{ $type->name }} Elements</h4>
            </div>
            <div class="card-body row row-{{ $type->size }}">

              <div class="col-auto">
                @include('forms.text', ['settings' => [
                'placeholder' => 'A text input...',
                'group' => ['size' => $type->size]
                ]])
              </div>

              <div class="col-auto">
                @include('forms.text', ['settings' => [
                'placeholder' => 'A text input...',
                'group' => ['size' => $type->size, 'class' => ['rounded-pill']]
                ]])
              </div>

              <div class="col-auto">
                @include('forms.text', ['settings' => [
                'placeholder' => 'With prepend...',
                'group' => ['size' => $type->size],
                'prepend' => ['icon' => 'fal fa-user']
                ]])
              </div>

              <div class="col-auto">
                @include('forms.text', ['settings' => [
                'placeholder' => 'With append...',
                'group' => ['size' => $type->size],
                'append' => 'Text'
                ]])
              </div>

              <div class="col-auto">
                @include('forms.text', ['settings' => [
                'placeholder' => 'With button...',
                'group' => ['size' => $type->size],
                'append' => ['btn' => [
                'display' => 'Button',
                'class' => 'btn btn-primary'
                ]]
                ]])
              </div>

              <div class="col-auto">
                @include('forms.text', ['settings' => [
                'placeholder' => 'Rounded with button...',
                'group' => ['size' => $type->size, 'class' => ['rounded-pill']],
                'append' => ['btn' => [
                'display' => 'Button',
                'class' => 'btn btn-primary'
                ]]
                ]])
              </div>

              <div class="col-auto">
                @include('forms.text', ['settings' => [
                'value' => 'A success input...',
                'group' => ['size' => $type->size, 'class' => ['has-success']]
                ]])
              </div>

              <div class="col-auto">
                @include('forms.text', ['settings' => [
                'value' => 'An error input...',
                'group' => ['size' => $type->size, 'class' => ['has-danger']]
                ]])
              </div>

              <div class="col-auto">
                @include('forms.text', ['settings' => [
                'value' => 'A success input...',
                'group' => ['size' => $type->size, 'class' => ['has-success']],
                'append' => 'Text'
                ]])
              </div>

              <div class="col-auto">
                @include('forms.text', ['settings' => [
                'value' => 'An error input...',
                'group' => ['size' => $type->size, 'class' => ['has-danger']],
                'append' => 'Text'
                ]])
              </div>

              <div class="col-auto">
                @include('forms.select', ['settings' => [
                'options' => [
                'one' => 'Option One',
                'two' => 'Option Two',
                'three' => 'Option Three',
                'four' => 'Options Four',
                ],
                'value' => 'one',
                'group' => ['size' => $type->size]
                ]])
              </div>

              <div class="col-auto">
                @include('forms.select', ['settings' => [
                'options' => [
                'one' => 'Rounded One',
                'two' => 'Rounded Two',
                'three' => 'Rounded Three',
                'four' => 'Rounded Four',
                ],
                'value' => 'one',
                'group' => ['size' => $type->size, 'class' => ['rounded-pill']]
                ]])
              </div>

              <div class="col-auto">
                @include('forms.switch', ['settings' => [
                'size' => $type->size
                ]])
              </div>

              <div class="col-auto">
                @include('forms.switch', ['settings' => [
                'size' => $type->size,
                'style' => 'rounded-pill'
                ]])
              </div>

              <div class="col-auto">
                <button class="btn btn-primary btn-{{ $type->size }}">
                  Regular
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-primary btn-gradient btn-{{ $type->size }}">
                  Gradient
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-outline-primary btn-{{ $type->size }}">
                  Outline
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-primary btn-icon btn-{{ $type->size }}">
                  <i class="fas fa-heart"></i>
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-primary btn-gradient btn-icon btn-{{ $type->size }}">
                  <i class="fas fa-heart"></i>
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-outline-primary btn-icon btn-{{ $type->size }}">
                  <i class="fas fa-heart"></i>
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-primary rounded-pill btn-{{ $type->size }}">
                  Regular
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-primary rounded-pill btn-gradient btn-{{ $type->size }}">
                  Gradient
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-outline-primary rounded-pill btn-{{ $type->size }}">
                  Outline
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-primary rounded-pill btn-icon btn-{{ $type->size }}">
                  <i class="fas fa-heart"></i>
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-primary rounded-pill btn-gradient btn-icon btn-{{ $type->size }}">
                  <i class="fas fa-heart"></i>
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-outline-primary rounded-pill btn-icon btn-{{ $type->size }}">
                  <i class="fas fa-heart"></i>
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-primary btn-link btn-{{ $type->size }}">
                  Link
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-primary btn-link btn-icon btn-{{ $type->size }}">
                  <i class="fas fa-heart"></i>
                </button>
              </div>

              <div class="col-auto">
                @include('forms.text', ['settings' => [
                'value' => 'A disabled input...',
                'group' => ['size' => $type->size],
                'disabled' => true
                ]])
              </div>

              <div class="col-auto">
                @include('forms.datepicker', ['settings' => [
                'group' => ['size' => $type->size],
                ]])
              </div>

            </div>
          </div>
        </div>

      @endforeach
    </div>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">
              Button Colors
            </h4>
          </div>
          <div class="card-body">

            {{-- Gradients --}}
            <div class="row">
              <div class="col-12 mb-1">
                <label class="card-description fw-bold text-uppercase">
                  Gradients
                </label>
              </div>

              <div class="col-auto">
                <button class="btn btn-primary btn-gradient">
                  Primary
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-secondary btn-gradient">
                  Secondary
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-success btn-gradient">
                  Success
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-info btn-gradient">
                  Info
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-warning btn-gradient">
                  Warning
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-danger btn-gradient">
                  Danger
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-light btn-gradient">
                  Light
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-dark btn-gradient">
                  Dark
                </button>
              </div>
            </div>

            {{-- Disabled Gradients --}}
            <div class="row">
              <div class="col-12 mb-1">
                <label class="card-description fw-bold text-uppercase">
                  Disabled Gradients
                </label>
              </div>

              <div class="col-auto">
                <button class="btn btn-primary btn-gradient" disabled>
                  Primary
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-secondary btn-gradient" disabled>
                  Secondary
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-success btn-gradient" disabled>
                  Success
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-info btn-gradient" disabled>
                  Info
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-warning btn-gradient" disabled>
                  Warning
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-danger btn-gradient" disabled>
                  Danger
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-light btn-gradient" disabled>
                  Light
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-dark btn-gradient" disabled>
                  Dark
                </button>
              </div>
            </div>

            {{-- Normal --}}
            <div class="row">
              <div class="col-12 mb-1">
                <label class="card-description fw-bold text-uppercase">
                  Normal
                </label>
              </div>

              <div class="col-auto">
                <button class="btn btn-primary">
                  Primary
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-secondary">
                  Secondary
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-success">
                  Success
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-info">
                  Info
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-warning">
                  Warning
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-danger">
                  Danger
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-light">
                  Light
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-dark">
                  Dark
                </button>
              </div>
            </div>

            {{-- Diabled Normal --}}
            <div class="row">
              <div class="col-12 mb-1">
                <label class="card-description fw-bold text-uppercase">
                  Disabled Normal
                </label>
              </div>

              <div class="col-auto">
                <button class="btn btn-primary" disabled>
                  Primary
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-secondary" disabled>
                  Secondary
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-success" disabled>
                  Success
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-info" disabled>
                  Info
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-warning" disabled>
                  Warning
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-danger" disabled>
                  Danger
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-light" disabled>
                  Light
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-dark" disabled>
                  Dark
                </button>
              </div>
            </div>

            {{-- Other Colors --}}
            <div class="row">
              <div class="col-12 mb-1">
                <label class="card-description fw-bold text-uppercase">
                  Other Colours
                </label>
              </div>

              <div class="col-auto">
                <button class="btn btn-blue">
                  Blue
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-indigo">
                  Indigo
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-purple">
                  Purple
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-pink">
                  Pink
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-red">
                  Red
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-orange">
                  Orange
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-yellow">
                  Yellow
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-green">
                  Green
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-teal">
                  Teal
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-cyan">
                  Cyan
                </button>
              </div>
            </div>

            {{-- Diabled Other Colors --}}
            <div class="row">
              <div class="col-12 mb-1">
                <label class="card-description fw-bold text-uppercase">
                  Disabled Other Colours
                </label>
              </div>

              <div class="col-auto">
                <button class="btn btn-blue" disabled>
                  Blue
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-indigo" disabled>
                  Indigo
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-purple" disabled>
                  Purple
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-pink" disabled>
                  Pink
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-red" disabled>
                  Red
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-orange" disabled>
                  Orange
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-yellow" disabled>
                  Yellow
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-green" disabled>
                  Green
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-teal" disabled>
                  Teal
                </button>
              </div>

              <div class="col-auto">
                <button class="btn btn-cyan" disabled>
                  Cyan
                </button>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="row">

      <div class="col-4">
        <div class="card" style="box-shadow:0 0.5rem 1rem rgba(0,0,0, 0.15);">
          <div class="card-header">
            <h4 class="card-title">
              Box Shadow (Bootstrap)
            </h4>
          </div>
        </div>
      </div>

      <div class="col-4">
        <div class="card" style="box-shadow:0 15px 35px rgba(50, 50, 93, 0.1), 0 5px 15px rgba(0, 0, 0, 0.07);">
          <div class="card-header">
            <h4 class="card-title">
              Box Shadow (Theme)
            </h4>
          </div>
        </div>
      </div>

      <div class="col-4">
        <div class="card" style="box-shadow:0 10px 50px 0 rgba(0, 0, 0, 0.2);">
          <div class="card-header">
            <h4 class="card-title">
              Box Shadow (Dropdown)
            </h4>
          </div>
        </div>
      </div>

    </div>

  </div>
@endsection
