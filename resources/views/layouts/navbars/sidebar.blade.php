<div class="navbar-minimize-fixed">
  <button class="minimize-sidebar btn btn-link btn-just-icon" data-bs-toggle="tooltip" data-bs-placement="right" title="Sidebar toggle">
    <i class="fal fa-align-center visible-on-sidebar-regular"></i>
    <i class="fal fa-list-ul visible-on-sidebar-mini"></i>
  </button>
</div>
<div class="sidebar" data="orange">

  <div class="sidebar-wrapper">
    <div class="logo">
      <a href="#" class="simple-text logo-mini">
        <img src="{{ asset('images') }}/logo-out-white.svg" class="logo-white">
      </a>
      <a href="#" class="simple-text logo-normal">
        {{ __('Social Shadow') }}
      </a>
    </div>
    <ul class="nav">

      <li class="{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a href="{{ route('home') }}">
          <i class="fal fa-chart-pie-alt"></i>
          <p>{{ __('Dashboard') }}</p>
        </a>
      </li>

      @if (auth()->user()->isAdmin())

        <li class="{{ $activePage == 'user-management' ? ' active' : '' }}">
          <a href="{{ route('user.index') }}">
            <i class="fal fa-users"></i>
            <p>{{ __('Users') }}</p>
          </a>
        </li>

        <li class="{{ $activePage == 'role-management' ? ' active' : '' }}">
          <a href="{{ route('role.index') }}">
            <i class="fal fa-tags"></i>
            <p>{{ __('Roles') }}</p>
          </a>
        </li>

        <li class="{{ $activePage == 'package-management' ? ' active' : '' }}">
          <a href="{{ route('package.index') }}">
            <i class="fal fa-cubes"></i>
            <p>{{ __('Packages') }}</p>
          </a>
        </li>

        <li class="{{ $activePage == 'account-management' ? ' active' : '' }}">
          <a href="{{ route('account.index') }}">
            <i class="fal fa-id-card"></i>
            <p>{{ __('Accounts') }}</p>
          </a>
        </li>

        <li class="{{ $activePage == 'team-management' ? ' active' : '' }}">
          <a href="{{ route('team.index') }}">
            <i class="fal fa-rocket-launch"></i>
            <p>{{ __('Teams') }}</p>
          </a>
        </li>

        {{-- <li class="{{ $activePage == 'post-management' ? ' active' : '' }}">
          <a href="{{ route('post.index') }}">
            <i class="fal fa-alarm-clock"></i>
            <p>{{ __('Posts') }}</p>
          </a>
        </li> --}}

        <li class="{{ $activePage == 'default-management' ? ' active' : '' }}">
          <a href="{{ route('default.index') }}">
            <i class="fal fa-cogs"></i>
            <p>{{ __('Defaults') }}</p>
          </a>
        </li>

      @else

        <li class="{{ $menuParent == 'analytics' ? ' active' : '' }}">
          <a data-bs-toggle="collapse" href="#analytics">
            <i class="fab fa-laravel"></i>
            <p>
              {{ __('Analytics') }}
              <b class="caret"></b>
            </p>
          </a>
          <div class="collapse {{ $menuParent == 'analytics' ? ' show' : '' }}" id="analytics">
            <ul class="nav">
              <li class="{{ $activePage == 'followers' ? ' active' : '' }}">
                <a href="{{ route('pages.followers') }}">
                  <span class="sidebar-mini-icon">Fo</span>
                  <span class="sidebar-normal"> {{ __('Followers') }} </span>
                </a>
              </li>

              <li class="{{ $activePage == 'likes' ? ' active' : '' }}">
                <a href="{{ route('pages.likes') }}">
                  <span class="sidebar-mini-icon">Li</span>
                  <span class="sidebar-normal"> {{ __('Likes') }} </span>
                </a>
              </li>
              <li class="{{ $activePage == 'comments' ? ' active' : '' }}">
                <a href="{{ route('pages.comments') }}">
                  <span class="sidebar-mini-icon">Co</span>
                  <span class="sidebar-normal"> {{ __('Comments') }} </span>
                </a>
              </li>
              <li class="{{ $activePage == 'posts' ? ' active' : '' }}">
                <a href="{{ route('pages.posts') }}">
                  <span class="sidebar-mini-icon">Po</span>
                  <span class="sidebar-normal"> {{ __('Posts') }} </span>
                </a>
              </li>
              <li class="{{ $activePage == 'demographics' ? ' active' : '' }}">
                <a href="{{ route('pages.demographics') }}">
                  <span class="sidebar-mini-icon">De</span>
                  <span class="sidebar-normal"> {{ __('Demographics') }} </span>
                </a>
              </li>

              <li class="{{ $activePage == 'hashtags' ? ' active' : '' }}">
                <a href="{{ route('pages.hashtags') }}">
                  <span class="sidebar-mini-icon">Ha</span>
                  <span class="sidebar-normal"> {{ __('Hashtags') }} </span>
                </a>
              </li>

            </ul>
          </div>
        </li>

        <li class="{{ $activePage == 'scheduling' ? ' active' : '' }}">
          <a href="{{ route('pages.scheduling') }}">
            <i class="fal fa-alarm-clock"></i>
            <p>{{ __('Scheduling') }}</p>
          </a>
        </li>

        <li class="{{ $activePage == 'hashtag-generator' ? ' active' : '' }}">
          <a href="{{ route('pages.hashtag-generator') }}">
            <i class="fal fa-hashtag"></i>
            <p>{{ __('Hashtags') }}</p>
          </a>
        </li>

        <li class="{{ $activePage == 'account-management' ? ' active' : '' }}">
          <a href="{{ route('account.index') }}">
            <i class="fal fa-id-card"></i>
            <p>{{ __('Accounts') }}</p>
          </a>
        </li>

        <li class="{{ $activePage == 'reporting' ? ' active' : '' }}">
          <a href="{{ route('pages.reporting') }}">
            <i class="fal fa-file-chart-pie"></i>
            <p>{{ __('Reporting') }}</p>
          </a>
        </li>

        <li class="{{ $activePage == 'team-management' ? ' active' : '' }}">
          <a href="{{ route('team.index') }}">
            <i class="fal fa-rocket-launch"></i>
            <p>{{ __('Team') }}</p>
          </a>
        </li>

        <li class="{{ $activePage == 'timeline' ? ' active' : '' }}">
          <a href="{{ route('page.support') }}">
            <i class="fal fa-envelope"></i>
            <p>{{ __('Support') }}</p>
          </a>
        </li>

        <li class=" {{ $activePage == 'profile' ? ' active' : '' }}">
          <a href="{{ route('profile.edit') }}">
            <i class="fal fa-cogs"></i>
            <p>{{ __('Settings') }}</p>
          </a>
        </li>

      @endif



    </ul>
  </div>
</div>
