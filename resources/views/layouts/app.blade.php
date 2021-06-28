@php
$titlePage = isset($titlePage) ? $titlePage : 'Here';
$menuParent = isset($menuParent) ? $menuParent : '';
$activePage = isset($activePage) ? $activePage : '';
$class = isset($class) ? $class : '';
$classPage = isset($classPage) ? $classPage : '';
@endphp

{{-- =========================================================
* Argon Dashboard PRO - v1.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard-pro-laravel
* Copyright 2018 Creative Tim (https://www.creative-tim.com) & UPDIVISION (https://www.updivision.com)

* Coded by www.creative-tim.com & www.updivision.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. --}}
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('white') }}/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{ asset('white') }}/img/favicon.png">

  <title>{{ $titlePage }} &nbsp;@&nbsp; {{ env('APP_NAME') ?? 'Social Shadow' }}</title>

  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,600,700,800,900" rel="stylesheet" />
  <link href="{{ asset('js') }}/libs/fontawesome/css/all.min.css" rel="stylesheet">
  <!-- Extra details for Live View on GitHub Pages -->

  <!-- Nucleo Icons -->
  <link href="{{ asset('white') }}/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{ asset('css') }}/white-dashboard.css?v=1.0.1" rel="stylesheet" />
  {{-- link to my own stylesheet --}}
  <link href="{{ asset('css') }}/main.css?v=1.0.0" rel="stylesheet" />
</head>

<body class="white-content {{ $class ?? '' }}">

  @if (auth()->check() &&
    !in_array(
        request()->route()->getName(),
        ['welcome', 'page.pricing', 'page.lock', 'page.error'],
    ))
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
    </form>
    @include('layouts.page_templates.auth')
  @else
    @include('layouts.page_templates.guest')
  @endif

  <!--   Core JS Files   -->
  <script src="{{ asset('white') }}/js/core/jquery.min.js"></script>
  <script src="{{ asset('white') }}/js/core/popper.min.js"></script>
  <script src="{{ asset('white') }}/js/core/bootstrap.min.js"></script>
  <script src="{{ asset('white') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="{{ asset('white') }}/js/plugins/moment.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="{{ asset('white') }}/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="{{ asset('white') }}/js/plugins/sweetalert2.min.js"></script>
  <!--  Plugin for Sorting Tables -->
  <script src="{{ asset('white') }}/js/plugins/jquery.tablesorter.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="{{ asset('white') }}/js/plugins/jquery.validate.min.js"></script>
  <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="{{ asset('white') }}/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="{{ asset('white') }}/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="{{ asset('white') }}/js/plugins/bootstrap-datetimepicker.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
  <script src="{{ asset('white') }}/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="{{ asset('white') }}/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="{{ asset('white') }}/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="{{ asset('white') }}/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="{{ asset('white') }}/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ asset('white') }}/js/plugins/nouislider.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbVUXb1ZCXDbVu5V-0AjxpikPl6jmgpbQ"></script>
  <!-- Chart JS -->
  <script src="{{ asset('white') }}/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ asset('white') }}/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for White Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('white') }}/js/white-dashboard-min.js?v=1.0.0"></script>
  <!-- White Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{ asset('white') }}/demo/demo.js"></script>
  <script src="{{ asset('white') }}/js/settings.js"></script>
  <script src="{{ asset('white') }}/demo/jquery.sharrre.js"></script>
  <script>
    $(document).ready(function() {
      @if (session('status'))
        $.notify({
        icon: "tim-icons icon-check-2"
        , message: "{{ session('status') }}"
        }, {
        type: 'success'
        , timer: 3000
        , placement: {
        from: 'top'
        , align: 'right'
        }
        });
      @endif

      @if (session('info'))
        $.notify({
        icon: "tim-icons icon-check-2"
        , message: "{{ session('info') }}"
        }, {
        type: 'info'
        , timer: 3000
        , placement: {
        from: 'top'
        , align: 'right'
        }
        });
      @endif

      $('#facebook').sharrre({
        share: {
          facebook: true
        },
        enableHover: false,
        enableTracking: false,
        enableCounter: false,
        click: function(api, options) {
          api.simulateClick();
          api.openPopup('facebook');
        },
        template: '<i class="fab fa-facebook-f"></i> Facebook',
        url: 'https://white-dashboard-pro-laravel.creative-tim.com/login'
      });

      $('#google').sharrre({
        share: {
          googlePlus: true
        },
        enableCounter: false,
        enableHover: false,
        enableTracking: true,
        click: function(api, options) {
          api.simulateClick();
          api.openPopup('googlePlus');
        },
        template: '<i class="fab fa-google-plus"></i> Google',
        url: 'https://white-dashboard-pro-laravel.creative-tim.com/login'
      });

      $('#twitter').sharrre({
        share: {
          twitter: true
        },
        enableHover: false,
        enableTracking: false,
        enableCounter: false,
        buttons: {
          twitter: {
            via: 'CreativeTim'
          }
        },
        click: function(api, options) {
          api.simulateClick();
          api.openPopup('twitter');
        },
        template: '<i class="fab fa-twitter"></i> Twitter',
        url: 'https://white-dashboard-pro-laravel.creative-tim.com/login'
      });
    });
  </script>
  @stack('js')

</body>

</html>
