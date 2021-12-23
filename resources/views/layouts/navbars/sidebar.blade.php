<div class="navbar-minimize-fixed">
  <button class="minimize-sidebar btn btn-link btn-just-icon" data-bs-toggle="tooltip" data-bs-placement="right" title="Sidebar toggle">
    @icon('fal fa-align-center visible-on-sidebar-regular')
    @icon('fal fa-list-ul visible-on-sidebar-mini')
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
          @icon('fal fa-chart-pie-alt')
          <p>{{ __('Dashboard') }}</p>
        </a>
      </li>

      @if (auth()->user()->isAdmin())

        <li class="{{ $activePage == 'user-management' ? ' active' : '' }}">
          <a href="{{ route('user.index') }}">
            @icon('fal fa-users')
            <p>{{ __('Users') }}</p>
          </a>
        </li>

        <li class="{{ $activePage == 'role-management' ? ' active' : '' }}">
          <a href="{{ route('role.index') }}">
            @icon('fal fa-tags')
            <p>{{ __('Roles') }}</p>
          </a>
        </li>

        <li class="{{ $activePage == 'package-management' ? ' active' : '' }}">
          <a href="{{ route('package.index') }}">
            @icon('fal fa-cubes')
            <p>{{ __('Packages') }}</p>
          </a>
        </li>

        <li class="{{ $activePage == 'account-management' ? ' active' : '' }}">
          <a href="{{ route('account.index') }}">
            @icon('fal fa-id-card')
            <p>{{ __('Accounts') }}</p>
          </a>
        </li>

        <li class="{{ $activePage == 'team-management' ? ' active' : '' }}">
          <a href="{{ route('team.index') }}">
            @icon('fal fa-rocket-launch')
            <p>{{ __('Teams') }}</p>
          </a>
        </li>

        {{-- <li class="{{ $activePage == 'post-management' ? ' active' : '' }}">
          <a href="{{ route('post.index') }}">
            @icon('fal fa-alarm-clock')
            <p>{{ __('Posts') }}</p>
          </a>
        </li> --}}

        <li class="{{ $activePage == 'default-management' ? ' active' : '' }}">
          <a href="{{ route('default.index') }}">
            @icon('fal fa-cogs')
            <p>{{ __('Defaults') }}</p>
          </a>
        </li>

      @else

        <li class="{{ $menuParent == 'analytics' ? ' active' : '' }}">
          <a data-bs-toggle="collapse" href="#analytics">
            @icon('fab fa-laravel')
            <p>
              {{ __('Analytics') }}
              <b class="caret"></b>
            </p>
          </a>
          <div class="collapse {{ $menuParent == 'analytics' ? ' show' : '' }}" id="analytics">
            <ul class="nav">
              <li class="{{ $activePage == 'followers' ? ' active' : '' }}">
                <a href="{{ route('pages.followers') }}">
                  <span class="sidebar-mini-icon">F</span>
                  <span class="sidebar-normal"> {{ __('Followers') }} </span>
                </a>
              </li>

              <li class="{{ $activePage == 'likes' ? ' active' : '' }}">
                <a href="{{ route('pages.likes') }}">
                  <span class="sidebar-mini-icon">L</span>
                  <span class="sidebar-normal"> {{ __('Likes') }} </span>
                </a>
              </li>
              <li class="{{ $activePage == 'comments' ? ' active' : '' }}">
                <a href="{{ route('pages.comments') }}">
                  <span class="sidebar-mini-icon">C</span>
                  <span class="sidebar-normal"> {{ __('Comments') }} </span>
                </a>
              </li>
              <li class="{{ $activePage == 'posts' ? ' active' : '' }}">
                <a href="{{ route('pages.posts') }}">
                  <span class="sidebar-mini-icon">P</span>
                  <span class="sidebar-normal"> {{ __('Posts') }} </span>
                </a>
              </li>
              <li class="{{ $activePage == 'demographics' ? ' active' : '' }}">
                <a href="{{ route('pages.demographics') }}">
                  <span class="sidebar-mini-icon">D</span>
                  <span class="sidebar-normal"> {{ __('Demographics') }} </span>
                </a>
              </li>

              <li class="{{ $activePage == 'hashtags' ? ' active' : '' }}">
                <a href="{{ route('pages.hashtags') }}">
                  <span class="sidebar-mini-icon">H</span>
                  <span class="sidebar-normal"> {{ __('Hashtags') }} </span>
                </a>
              </li>

            </ul>
          </div>
        </li>

        <li class="{{ $activePage == 'scheduling' ? ' active' : '' }}">
          <a href="{{ route('pages.scheduling') }}">
            @icon('fal fa-alarm-clock')
            <p>{{ __('Scheduling') }}</p>
          </a>
        </li>

        <li class="{{ $activePage == 'hashtag-generator' ? ' active' : '' }}">
          <a href="{{ route('pages.hashtag-generator') }}">
            @icon('fal fa-hashtag')
            <p>{{ __('Hashtags') }}</p>
          </a>
        </li>

        <li class="{{ $activePage == 'account-management' ? ' active' : '' }}">
          <a href="{{ route('account.index') }}">
            @icon('fal fa-id-card')
            <p>{{ __('Accounts') }}</p>
          </a>
        </li>

        <li class="{{ $activePage == 'reporting' ? ' active' : '' }}">
          <a href="{{ route('pages.reporting') }}">
            @icon('fal fa-file-chart-pie')
            <p>{{ __('Reporting') }}</p>
          </a>
        </li>

        <li class="{{ $activePage == 'team-management' ? ' active' : '' }}">
          <a href="{{ route('team.index') }}">
            @icon('fal fa-rocket-launch')
            <p>{{ __('Team') }}</p>
          </a>
        </li>

        <li class="{{ $activePage == 'timeline' ? ' active' : '' }}">
          <a href="{{ route('page.support') }}">
            @icon('fal fa-envelope')
            <p>{{ __('Support') }}</p>
          </a>
        </li>

        <li class=" {{ $activePage == 'profile' ? ' active' : '' }}">
          <a href="{{ route('profile.edit') }}">
            @icon('fal fa-cogs')
            <p>{{ __('Settings') }}</p>
          </a>
        </li>

      @endif

      <li class="{{ $menuParent == 'examples' ? ' active' : '' }}">
        <a data-bs-toggle="collapse" href="#examples">
          @icon('fal fa-chart-network')
          <p>
            {{ __('Examples') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ $menuParent == 'examples' ? ' show' : '' }}" id="examples">
          <ul class="nav">

            <li class="{{ $activePage == 'test' ? ' active' : '' }}">
              <a href="{{ route('page.test') }}">
                <span class="sidebar-mini-icon">T</span>
                <span class="sidebar-normal"> {{ __('Elements') }} </span>
              </a>
            </li>

            <li class="{{ $activePage == 'widgets' ? ' active' : '' }}">
              <a href="{{ route('page.widgets') }}">
                <span class="sidebar-mini-icon">W</span>
                <span class="sidebar-normal"> {{ __('Widgets') }} </span>
              </a>
            </li>

            <li class="{{ $activePage == 'buttons' ? ' active' : '' }}">
              <a href="{{ route('page.buttons') }}">
                <span class="sidebar-mini-icon">B</span>
                <span class="sidebar-normal"> {{ __('Buttons') }} </span>
              </a>
            </li>

            <li class="{{ $activePage == 'grid' ? ' active' : '' }}">
              <a href="{{ route('page.grid') }}">
                <span class="sidebar-mini-icon">G</span>
                <span class="sidebar-normal"> {{ __('Grid') }} </span>
              </a>
            </li>

            <li class="{{ $activePage == 'panels' ? ' active' : '' }}">
              <a href="{{ route('page.panels') }}">
                <span class="sidebar-mini-icon">P</span>
                <span class="sidebar-normal"> {{ __('Panels') }} </span>
              </a>
            </li>

            <li class="{{ $activePage == 'typography' ? ' active' : '' }}">
              <a href="{{ route('page.typography') }}">
                <span class="sidebar-mini-icon">T</span>
                <span class="sidebar-normal"> {{ __('Typography') }} </span>
              </a>
            </li>

            <li class="{{ $activePage == 'regular-tables' ? ' active' : '' }}">
              <a href="{{ route('page.regular-tables') }}">
                <span class="sidebar-mini-icon">RT</span>
                <span class="sidebar-normal"> {{ __('Regular Tables') }} </span>
              </a>
            </li>

            <li class="{{ $activePage == 'extended-tables' ? ' active' : '' }}">
              <a href="{{ route('page.extended-tables') }}">
                <span class="sidebar-mini-icon">ET</span>
                <span class="sidebar-normal"> {{ __('Extended Tables') }} </span>
              </a>
            </li>

            <li class="{{ $activePage == 'validation-forms' ? ' active' : '' }}">
              <a href="{{ route('page.validation-forms') }}">
                <span class="sidebar-mini-icon">VF</span>
                <span class="sidebar-normal"> {{ __('Validation Forms') }} </span>
              </a>
            </li>

          </ul>
        </div>
      </li>

    </ul>
  </div>
</div>
