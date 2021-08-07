@php
$titlePage = isset($titlePage) ? $titlePage : 'Here';
$menuParent = isset($menuParent) ? $menuParent : '';
$activePage = isset($activePage) ? $activePage : '';
$class = isset($class) ? $class : '';
$classPage = isset($classPage) ? $classPage : '';
$appName = env('APP_NAME') ?? 'Social Shadow';
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

  <link href="{{ asset('css') }}/font-awesome.css?v" rel="stylesheet" />
  <link href="{{ asset('css') }}/bootstrap.css?" rel="stylesheet" />
  <link href="{{ asset('css') }}/app.css?" rel="stylesheet" />
</head>

<body class="white-content {{ $class ?? '' }}">

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

  <script src="{{ asset('js') }}/app.js" type="module"></script>
  <script src="https://js.stripe.com/v3/"></script>
  <script>
    //   $(document).ready(function() {
    @if (session('status'))
      // $.notify({
      // icon: "fal fa-check"
      // , message: "{{ session('status') }}"
      // }, {
      // type: 'success'
      // , timer: 3000
      // , placement: {
      // from: 'top'
      // , align: 'right'
      // }
      // });
    @endif

    @if (session('info'))
      // $.notify({
      // icon: "fal fa-check"
      // , message: "{{ session('info') }}"
      // }, {
      // type: 'info'
      // , timer: 3000
      // , placement: {
      // from: 'top'
      // , align: 'right'
      // }
      // });
    @endif

    //     $('#facebook').sharrre({
    //       share: {
    //         facebook: true
    //       },
    //       enableHover: false,
    //       enableTracking: false,
    //       enableCounter: false,
    //       click: function(api, options) {
    //         api.simulateClick();
    //         api.openPopup('facebook');
    //       },
    //       template: '<i class="fab fa-facebook-f"></i> Facebook',
    //       url: 'https://white-dashboard-pro-laravel.creative-tim.com/login'
    //     });

    //     $('#google').sharrre({
    //       share: {
    //         googlePlus: true
    //       },
    //       enableCounter: false,
    //       enableHover: false,
    //       enableTracking: true,
    //       click: function(api, options) {
    //         api.simulateClick();
    //         api.openPopup('googlePlus');
    //       },
    //       template: '<i class="fab fa-google-plus"></i> Google',
    //       url: 'https://white-dashboard-pro-laravel.creative-tim.com/login'
    //     });

    //     $('#twitter').sharrre({
    //       share: {
    //         twitter: true
    //       },
    //       enableHover: false,
    //       enableTracking: false,
    //       enableCounter: false,
    //       buttons: {
    //         twitter: {
    //           via: 'CreativeTim'
    //         }
    //       },
    //       click: function(api, options) {
    //         api.simulateClick();
    //         api.openPopup('twitter');
    //       },
    //       template: '<i class="fab fa-twitter"></i> Twitter',
    //       url: 'https://white-dashboard-pro-laravel.creative-tim.com/login'
    //     });
    //   });
    // 
  </script>
  @stack('js')

</body>

</html>
