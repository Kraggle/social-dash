<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
  <div class="container-fluid">
    <div class="navbar-wrapper">

      <div class="navbar-minimize d-inline">
        <button class="minimize-sidebar btn btn-link btn-just-icon position-relative" rel="tooltip"
          data-original-title="Sidebar toggle" data-placement="right" style="top:-1px">
          <i class="tim-icons icon-align-center visible-on-sidebar-regular"></i>
          <i class="tim-icons icon-bullet-list-67 visible-on-sidebar-mini"></i>
        </button>
      </div>
      <div class="navbar-toggle d-inline">
        <button type="button" class="navbar-toggler">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <a class="navbar-brand" href="javascript:void(0)">{{ $titlePage }}</a>
    </div>

    {{-- TODO:: Change this to not show on certain pages --}}
    {{-- TODO:: This also needs to automatically populate with allowed accounts --}}
    <div class="col-3 position-relative" style="top:1px">
      <select class="selectpicker" data-size="7" data-style="btn btn-primary" title="Single Select">
        <option value="1" selected>makemoneyfromhomeuk</option>
        <option value="2">mattymyers</option>
      </select>
    </div>
    @can('manage-accounts')
      <span><a class="fw-bold" href="{{ route('account.index') }}">{{ __('Manage Accounts') }}</a></span>
    @endcan

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
    </button>

    <div class="collapse navbar-collapse" id="navigation">
      <ul class="navbar-nav ml-auto">
        {{-- <li>
          <a class="btn btn-danger mt-2 text-white" target="_blank" href="https://www.creative-tim.com/product/white-dashboard-pro-laravel"><i class="tim-icons icon-cart text-white"></i> Buy Now</a>
        </li> --}}
        {{-- <li>
          <a class="btn btn-success mt-2 text-white" target="_blank" href="https://white-dashboard-pro-laravel.creative-tim.com/docs/getting-started/laravel-setup.html?_ga=2.124096394.1444048996.1606126698-1702452109.1586172448"><i class="tim-icons icon-book-bookmark text-white"></i> Documentation</a>
        </li> --}}
        {{-- <li>
          <a class="btn btn-info mt-2 text-white" target="_blank" href="https://www.creative-tim.com/product/white-dashboard-laravel"><i class="tim-icons icon-cloud-download-93 text-white"></i> Get free demo</a>
        </li> --}}
        <li class="search-bar nav-item">
          <a href="javascript:void(0)" class="nav-link" data-toggle="modal" data-target="#searchModal">
            <i class="tim-icons icon-zoom-split"></i>
            <p class="d-lg-none">
              {{ __('Search') }}
            </p>
          </a>
        </li>
        <li class="dropdown nav-item">
          <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
            <div class="notification d-none d-lg-block d-xl-block"></div>
            <i class="tim-icons icon-sound-wave"></i>
            <p class="d-lg-none">
              {{ __('Notifications') }}
            </p>
          </a>
          <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
            <li class="nav-link">
              <a href="#" class="nav-item dropdown-item">{{ __('Mike John responded to your email') }}</a>
            </li>
            <li class="nav-link">
              <a href="javascript:void(0)" class="nav-item dropdown-item">{{ __('You have 5 more tasks') }}</a>
            </li>
            <li class="nav-link">
              <a href="javascript:void(0)"
                class="nav-item dropdown-item">{{ __('Your friend Michael is in town') }}</a>
            </li>
            <li class="nav-link">
              <a href="javascript:void(0)" class="nav-item dropdown-item">{{ __('Another notification') }}</a>
            </li>
            <li class="nav-link">
              <a href="javascript:void(0)" class="nav-item dropdown-item">{{ __('Another one') }}</a>
            </li>
          </ul>
        </li>
        <li class="dropdown nav-item">
          <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
            <div class="photo">
              <img src="{{ auth()->user()->profilePicture() }}" alt="Profile Photo">
            </div>
            <b class="caret d-none d-lg-block d-xl-block"></b>
            <p class="d-lg-none">
              <a href="{{ route('logout') }}"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Log out') }}</a>
            </p>
          </a>
          <ul class="dropdown-menu dropdown-navbar">
            <li class="nav-link">
              <a href="{{ route('profile.edit') }}" class="nav-item dropdown-item">{{ __('Profile') }}</a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="nav-link">
              <a href="{{ route('logout') }}" class="nav-item dropdown-item"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Log out') }}</a>
            </li>
          </ul>
        </li>
        <li class="separator d-lg-none"></li>
      </ul>
    </div>
  </div>
</nav>
<div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="{{ __('SEARCH') }}">
        <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('Close') }}">
          <i class="tim-icons icon-simple-remove"></i>
        </button>
      </div>
    </div>
  </div>
</div>
<!-- End Navbar -->
