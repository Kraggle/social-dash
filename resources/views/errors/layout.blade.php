@php
$titlePage = $titlePage ?? '404 Error';
$menuParent = $menuParent ?? '';
$activePage = $activePage ?? '';
$class = $class ?? '';
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images') }}/apple-icon.png">
  <link rel="icon" type="image/png" href="{{ asset('images') }}/favicon.png">
  <title>{{ $titlePage }} &nbsp;@&nbsp; {{ env('APP_NAME') ?? 'Social Shadow' }}</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,600,700,800,900" rel="stylesheet" />

  <link rel="stylesheet" href="{{ AH::asset('css', '/font-awesome.css') }}">AH::asset('css', '/font-awesome.css') }}AH::asset('css', '/font-awesome.css') }}
  <link rel="stylesheet" href="{{ asset('css') }}/bootstrap.css">
  <link rel="stylesheet" href="{{ asset('css') }}/app.css">
</head>

<body class="{{ $class ?? '' }}">
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
  </form>
  @include('layouts.page_templates.guest')

  @stack('js')

</body>

</html>
