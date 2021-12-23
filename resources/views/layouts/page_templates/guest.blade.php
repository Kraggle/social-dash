@define($class = $class ?? '')

@include('layouts.navbars.navs.guest')
<div class="wrapper wrapper-full-page">
  <div class="full-page {{ $class }}">
    @yield('content')
    @include('layouts.footers.guest')
  </div>
</div>
