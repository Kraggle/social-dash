@php
$titlePage = $titlePage ?? 'Here';
$menuParent = $menuParent ?? '';
$activePage = $activePage ?? '';
$class = $class ?? '';
$appName = env('APP_NAME') ?? 'Social Shadow';

$cookie = AppHelper::getPageCookie('all');
$sidebar = isset($cookie->sidebar) && $cookie->sidebar ? ' sidebar-mini' : '';
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images') }}/apple-icon.png">
  <link rel="icon" type="image/png" href="{{ asset('images') }}/favicon.png">

  <title>{{ $titlePage }} &nbsp;@&nbsp; {{ $appName }}</title>

  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,600,700,800,900" rel="stylesheet" />

  <link href="{{ AH::asset('css', '/font-awesome.css') }}" rel="stylesheet" />
  <link href="{{ AH::asset('css', '/bootstrap.css') }}" rel="stylesheet" />
  <link href="{{ AH::asset('css', '/app.css') }}" rel="stylesheet" />
</head>

<body class="{{ $class }}{{ $sidebar }}">

  @if (auth()->check() &&
    !in_array(
        request()->route()->getName(),
        ['welcome', 'page.pricing', 'page.lock', 'page.error', 'auth.subscription'],
    ))
    @include('layouts.page_templates.auth')
  @else
    @include('layouts.page_templates.guest')
  @endif

  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
  </form>

  <script src="{{ AH::asset('js', '/app.js') }}" type="module"></script>
  <script src="https://js.stripe.com/v3/"></script>

  @if (Auth::check())
    <div class="modal fade show" tabindex="-1" data-lifetime="{{ config('session.lifetime') }}">
      <div class="modal-dialog modal-fullscreen-md-down modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header row justify-content-between">
            <h3 class="modal-title col-auto">{{ __('Your session is about to expire!') }}</h3>
            <h2 class="modal-title fw-bolder col-auto" id="time-left">45</h2>
          </div>
          <div class="modal-body">
            <p>{{ __('Would you like to resume?') }}</p>
          </div>
          <div class="modal-footer">
            <a type="button" class="btn btn-lg btn-danger me-2" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">No</a>
            <button id="resume-session" type="button" class="btn btn-lg btn-success">Yes</button>
          </div>
        </div>
      </div>
    </div>
  @endif

  @stack('js')

</body>

</html>
