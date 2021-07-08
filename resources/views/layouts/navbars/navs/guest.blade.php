<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent fixed-top">
  <div class="container-fluid">
    <div class="navbar-wrapper">
      <div class="navbar-toggle d-inline">
        <button type="button" class="navbar-toggler">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <a class="navbar-brand" href="{{ route('home') }}">{{ $titlePage }}</a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
    </button>
    <div class="collapse navbar-collapse" id="navigation">
      <ul class="navbar-nav ml-auto">

        @if (auth()->user() && $activePage != 'subscribe')
          <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link text-primary">
              <i class="tim-icons icon-minimal-left"></i> {{ __('Back to Dashboard') }}
            </a>
          </li>
        @endif

        @if (!auth()->user())
          @if ($activePage != 'register')
            <li class="nav-item">
              <a href="{{ route('register') }}" class="nav-link">
                <i class="fal fa-desktop"></i> {{ __('Register') }}
              </a>
            </li>
          @endif

          @if ($activePage != 'login')
            <li class="nav-item">
              <a href="{{ route('login') }}" class="nav-link">
                <i class="fal fa-user"></i> {{ __('Login') }}
              </a>
            </li>
          @endif
        @endif

        @auth()
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
              <i class="fal fa-sign-out"></i>
              <span>{{ __('Logout') }}</span>
            </a>
          </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>
<div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="tim-icons icon-simple-remove"></i>
        </button>
      </div>
    </div>
  </div>
</div>
<!-- End Navbar -->
