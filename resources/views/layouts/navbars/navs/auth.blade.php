<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent">
  <div class="container-fluid">
    <div class="navbar-wrapper">
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
    @define($team = auth()->user()->team)
    @if ($team->subscribed('default'))
      @php
        $main = \App\Models\Team::where('package_id', 1)->first()->accounts[0];
        $accounts = [$main->username => $main];
        foreach ($team->accounts as $account) {
            if (isset($accounts[$account->username])) {
                continue;
            }
            $accounts[$account->username] = $account;
        }
        $selected = $_COOKIE['selected-account'] ?? $main->pk;
      @endphp
      <select class="selectpicker" id="account-selector" data-style="btn" data-container-class="col-3" title="Single Select">
        @foreach ($accounts as $account)
          <option value={{ $account->pk }} {{ AppHelper::selected($selected, $account->pk) }}>
            {{ '@' . $account->username }}</option>
        @endforeach
      </select>
    @endif
    @can('manage-accounts')
      {{-- <span><a class="fw-bold" href="{{ route('account.index') }}">{{ __('Manage Accounts') }}</a></span> --}}
    @endcan

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
    </button>

    <div class="collapse navbar-collapse" id="navigation">
      <ul class="navbar-nav ms-auto">
        <li class="search-bar nav-item">
          <a href="javascript:void(0)" class="nav-link" data-bs-toggle="modal" data-bs-target="#searchModal">
            @icon('fal fa-search')
            <p class="d-lg-none">{{ __('Search') }}</p>
          </a>
        </li>
        <li class="dropdown nav-item">
          <a href="javascript:void(0)" class="dropdown-toggle nav-link" id="notify-panel" data-bs-toggle="dropdown">
            <div class="notification d-none d-lg-block d-xl-block"></div>
            @icon('fal fa-waveform')
            <p class="d-lg-none">{{ __('Notifications') }}</p>
          </a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-navbar" aria-labelledby="notify-panel">
            <li class="nav-link">
              <a href="#" class="nav-item dropdown-item">{{ __('Mike John responded to your email') }}</a>
            </li>
            <li class="nav-link">
              <a href="javascript:void(0)" class="nav-item dropdown-item">{{ __('You have 5 more tasks') }}</a>
            </li>
            <li class="nav-link">
              <a href="javascript:void(0)" class="nav-item dropdown-item">{{ __('Your friend Michael is in town') }}</a>
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
          <a href="#" class="dropdown-toggle nav-link" id="user-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="photo">
              <img src="{{ auth()->user()->profilePicture() }}" alt="Profile Photo">
            </div>
            <b class="caret d-none d-lg-block d-xl-block"></b>
            <p class="d-lg-none">{{ __('Profile') }}</p>
          </a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-navbar" aria-labelledby="user-dropdown">
            <li class="nav-link">
              <a href="{{ route('profile.edit') }}" class="nav-item dropdown-item">{{ __('Profile') }}</a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="nav-link">
              <a href="{{ route('logout') }}" class="nav-item dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Log out') }}</a>
            </li>
          </ul>
        </li>
        <li class="nav-item d-lg-none">
          <a onclick="event.preventDefault();document.getElementById('logout-form').submit();" href="{{ route('logout') }}" class="nav-link">
            @icon('fal fa-sign-out-alt')
            <p>{{ __('Log out') }}</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="{{ __('SEARCH') }}">
        <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('Close') }}">
          @icon('fal fa-trash-alt')
        </button>
      </div>
    </div>
  </div>
</div>
<!-- End Navbar -->
