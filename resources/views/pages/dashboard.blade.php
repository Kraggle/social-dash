@extends('layouts.app', [
'activePage' => 'dashboard',
'menuParent' => 'dashboard',
'titlePage' => __('Dashboard')]
)

@php
$page = 'dashboard'; // Used to get and set cookies
$cookie = AppHelper::getPageCookie($page);

$stats = [
    // (object) [
    //     'name' => 'Impressions',
    //     'link' => route('pages.followers'),
    //     'id' => 'impressions',
    //     'stat' => 'Impression',
    //     'type' => 'total',
    //     'icon' => 'fal fa-star',
    // ],
    // (object) [
    //     'name' => 'Profile Actions',
    //     'link' => route('pages.posts'),
    //     'id' => 'actions',
    //     'stat' => 'Post',
    //     'type' => 'number',
    //     'icon' => 'fal fa-play',
    // ],
    (object) [
        'name' => 'Average Users Activity',
        'link' => route('pages.comments'),
        'id' => 'aua',
        'stat' => 'AUA',
        'type' => 'percent',
        'icon' => 'fal fa-bullseye-pointer',
    ],
    (object) [
        'name' => 'Engagements',
        'link' => route('pages.likes'),
        'id' => 'engagement',
        'stat' => 'Engagement',
        'type' => 'number',
        'icon' => 'fal fa-comment-alt-smile',
    ],
    (object) [
        'name' => 'Followers',
        'link' => route('pages.followers'),
        'id' => 'followers',
        'stat' => 'Follower',
        'type' => 'number',
        'icon' => 'fal fa-users',
    ],
    (object) [
        'name' => 'Likes',
        'link' => route('pages.likes'),
        'id' => 'likes',
        'stat' => 'Like',
        'type' => 'number',
        'icon' => 'fal fa-heart',
    ],
    (object) [
        'name' => 'Comments',
        'link' => route('pages.comments'),
        'id' => 'comments',
        'stat' => 'Comment',
        'type' => 'number',
        'icon' => 'fal fa-comments',
    ],
    (object) [
        'name' => 'Posts',
        'link' => route('pages.posts'),
        'id' => 'posts',
        'stat' => 'Post',
        'type' => 'number',
        'icon' => 'fal fa-file-alt',
    ],
];
@endphp

@section('content')
  <div class="content" data-page="{{ $page }}">
    <div class="row">

      @foreach ($stats as $stat)
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-body">
              <div class="row justify-content-between">
                <div class="col-auto">
                  <div class="info-icon text-center icon-warning">
                    <i class="{{ $stat->icon }}"></i>
                  </div>
                </div>
                <div class="col-auto">
                  <div class="numbers">
                    <a href="{{ $stat->link }}">
                      <p class="card-category">{{ $stat->name }}</p>
                      <h3 id="num-{{ $stat->id }}" data-type="{{ $stat->type }}" class="card-title">
                      </h3>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <hr>
              <div class="stats">
                <i id="dir-{{ $stat->id }}" class="fal fa-arrow-up"></i>
                <span id="inc-{{ $stat->id }}" data-value="{{ $stat->stat }}"></span>
              </div>
            </div>
          </div>
        </div>
      @endforeach

    </div>

    <div class="row">
      <div class="col-12">

        {{-- Performance Chart --}}
        <div class="card card-chart">
          <div class="card-header">
            <div class="row">
              <div class="col-md-4">
                <h5 class="card-category">{{ __('Account Engagement') }}</h5>
                <h2 class="card-title">{{ __('Performance') }}</h2>
              </div>
              <div class="row col-md-8 align-items-start justify-content-end pe-0">

                {{-- chart day selector --}}
                @include('forms.chart-radio', ['options' => [
                'name' => 'p-chart-day',
                'color' => 'warning',
                'buttons' => [[
                'display' => __('Daily'),
                'id' => 'p-chart-day-1',
                'value' => 'day',
                'icon' => 'fal fa-calendar-day'
                ], [
                'display' => __('Weekly'),
                'id' => 'p-chart-day-2',
                'value' => 'week',
                'icon' => 'fal fa-calendar-week'
                ], [
                'display' => __('Monthly'),
                'id' => 'p-chart-day-3',
                'value' => 'month',
                'icon' => 'fal fa-calendar'
                ]],
                'group_class' => 'btn-group-sm pe-0',
                'group_attrs' => 'data-chart-scale',
                'cookie' => $cookie
                ]])

                {{-- chart line selector --}}
                @include('forms.chart-toggles', ['options' => [
                'buttons' => [[
                'id' => 'p-chart-line-1',
                'color' => 'blue',
                'display' => __('Follower'),
                'icon' => 'fal fa-users',
                ],[
                'id' => 'p-chart-line-2',
                'color' => 'orange',
                'display' => __('Likes'),
                'icon' => 'fal fa-heart',
                ],[
                'id' => 'p-chart-line-3',
                'color' => 'red',
                'display' => __('Comments'),
                'icon' => 'fal fa-comments',
                ],[
                'id' => 'p-chart-line-4',
                'color' => 'green',
                'display' => __('Posts'),
                'icon' => 'fal fa-file-alt',
                ]],
                'group_class' => 'btn-group-sm pe-0',
                'group_attrs' => 'data-chart-toggles',
                'cookie' => $cookie
                ]])

              </div>
            </div>
          </div>

          {{-- the chart --}}
          <div class="card-body">
            <div class="chart-area">
              <canvas id="performance-chart" data-type="line" data-height="280"></canvas>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">

        {{-- scheduled posts --}}
        <div class="card card-tasks">
          <div class="card-header">
            <h6 class="title d-inline">Scheduled Posts</h6>
            <p class="card-category d-inline">Upcoming</p>
            <div class="dropdown">
              <button type="button" class="btn btn-link dropdown-toggle btn-icon no-caret" data-bs-toggle="dropdown">
                <i class="fal fa-cog"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="#pablo">Action</a>
                <a class="dropdown-item" href="#pablo">Another action</a>
                <a class="dropdown-item" href="#pablo">Something else</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-full-width table-responsive">
              <table class="table">
                <tbody>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" value="">
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                        </label>
                      </div>
                    </td>
                    <td>
                      <p class="title">Tesla Inspirational Quote 1</p>
                      <p class="text-muted">21/05/2021 @ 8:47 AM</p>
                    </td>
                    <td class="td-actions text-end">
                      <button type="button" data-bs-toggle="tooltip" title="Edit Task" class="btn btn-link">
                        <i class="fal fa-pencil-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" value="" checked="">
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                        </label>
                      </div>
                    </td>
                    <td>
                      <p class="title">Tesla Inspirational Quote 2</p>
                      <p class="text-muted">21/05/2021 @ 10:47 AM</p>
                    </td>
                    <td class="td-actions text-end">
                      <button type="button" data-bs-toggle="tooltip" title="Edit Task" class="btn btn-link">
                        <i class="fal fa-pencil-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" value="">
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                        </label>
                      </div>
                    </td>
                    <td>
                      <p class="title">Tesla Inspirational Quote 3</p>
                      <p class="text-muted">21/05/2021 @ 12:47 PM</p>
                    </td>
                    <td class="td-actions text-end">
                      <button type="button" data-bs-toggle="tooltip" title="Edit Task" class="btn btn-link">
                        <i class="fal fa-pencil-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" value="">
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                        </label>
                      </div>
                    </td>
                    <td>
                      <p class="title">Tesla Inspirational Quote 4</p>
                      <p class="text-muted">21/05/2021 @ 14:47 PM</p>
                    </td>
                    <td class="td-actions text-end">
                      <button type="button" data-bs-toggle="tooltip" title="Edit Task" class="btn btn-link">
                        <i class="fal fa-pencil-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" value="">
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                        </label>
                      </div>
                    </td>
                    <td>
                      <p class="title">Tesla Inspirational Quote 5</p>
                      <p class="text-muted">21/05/2021 @ 15:47 PM</p>
                    </td>
                    <td class="td-actions text-end">
                      <button type="button" data-bs-toggle="tooltip" title="Edit Task" class="btn btn-link">
                        <i class="fal fa-pencil-alt"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" value="">
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                        </label>
                      </div>
                    </td>
                    <td>
                      <p class="title">Tesla Inspirational Quote 6</p>
                      <p class="text-muted">21/05/2021 @ 17:47 PM</p>
                    </td>
                    <td class="td-actions text-end">
                      <button type="button" data-bs-toggle="tooltip" title="Edit Task" class="btn btn-link">
                        <i class="fal fa-pencil-alt"></i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-8">

        {{-- recent comments --}}
        <div class="card">
          <div class="card-header">
            <div class="tools float-end">
              <div class="dropdown">
                <button type="button" class="btn dropdown-toggle btn-link btn-icon no-caret" data-bs-toggle="dropdown">
                  <i class="fal fa-cog"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                  <a class="dropdown-item text-danger" href="#">Remove Data</a>
                </div>
              </div>
            </div>
            <h4 class="card-title">Recent Comments</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>{{ __('Profile') }}</th>
                    <th>{{ __('Instagram UN') }}</th>
                    <th>{{ __('Followers') }}</th>
                    <th>{{ __('Description') }}</th>
                    <th>{{ __('Likes') }}</th>
                    <th>{{ __('Comments') }}</th>
                    <th class="text-end">{{ __('Actions') }}</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">
                      <div class="photo">
                        <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                      </div>
                    </td>
                    <td>@AndrewMike</td>
                    <td>3,198</td>
                    <td>Great quality content! Ke...</td>
                    <td class="text-center">3</td>
                    <td class="text-center">7</td>
                    <td class="text-end">
                      <button type="button" data-bs-toggle="tooltip" class="btn btn-link btn-icon" title="More actions...">
                        <i class="fal fa-chevron-down"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">
                      <div class="photo">
                        <img src="{{ asset('images') }}/robi.jpg" alt="Table image">
                      </div>
                    </td>
                    <td>@JohnDoe</td>
                    <td>81,923</td>
                    <td>Check out this post @fd....</td>
                    <td class="text-center">7</td>
                    <td class="text-center">26</td>
                    <td class="text-end">
                      <button type="button" data-bs-toggle="tooltip" class="btn btn-link btn-icon" title="More actions...">
                        <i class="fal fa-chevron-down"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">
                      <div class="photo">
                        <img src="{{ asset('images') }}/lora.jpg" alt="Table image">
                      </div>
                    </td>
                    <td>@AlexMike</td>
                    <td>821</td>
                    <td>Always love your posts man...</td>
                    <td class="text-center">1</td>
                    <td class="text-center">1</td>
                    <td class="text-end">
                      <button type="button" data-bs-toggle="tooltip" class="btn btn-link btn-icon" title="More actions...">
                        <i class="fal fa-chevron-down"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">
                      <div class="photo">
                        <img src="{{ asset('images') }}/jana.jpg" alt="Table image">
                      </div>
                    </td>
                    <td>@MikeMonday</td>
                    <td>9,384</td>
                    <td>How did you manage to ta...</td>
                    <td class="text-center">3</td>
                    <td class="text-center">1</td>
                    <td class="text-end">
                      <button type="button" data-bs-toggle="tooltip" class="btn btn-link btn-icon" title="More actions...">
                        <i class="fal fa-chevron-down"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">
                      <div class="photo">
                        <img src="{{ asset('images') }}/robi.jpg" alt="Table image">
                      </div>
                    </td>
                    <td>@PaulDickens</td>
                    <td>390</td>
                    <td>Thanks for sharing man!</td>
                    <td class="text-center">7</td>
                    <td class="text-center">1</td>
                    <td class="text-end">
                      <button type="button" data-bs-toggle="tooltip" class="btn btn-link btn-icon" title="More actions...">
                        <i class="fal fa-chevron-down"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">
                      <div class="photo">
                        <img src="{{ asset('images') }}/emilyz.jpg" alt="Table image">
                      </div>
                    </td>
                    <td>@mattymyers</td>
                    <td>102,349</td>
                    <td>Great content! Check th...</td>
                    <td class="text-center">13</td>
                    <td class="text-center">41</td>
                    <td class="text-end">
                      <button type="button" data-bs-toggle="tooltip" class="btn btn-link btn-icon" title="More actions...">
                        <i class="fal fa-chevron-down"></i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Follower Demographs By Country</h4>
            <p class="card-category">Where Your Followers Are Based</p>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>
                          <div class="flag">
                            <img src="{{ asset('images') }}/US.png" alt="flag">
                          </div>
                        </td>
                        <td>USA</td>
                        <td class="text-end">2.920</td>
                        <td class="text-end">53.23%</td>
                      </tr>
                      <tr>
                        <td>
                          <div class="flag">
                            <img src="{{ asset('images') }}/DE.png" alt="flag">
                          </div>
                        </td>
                        <td>Germany</td>
                        <td class="text-end">1.300</td>
                        <td class="text-end">20.43%</td>
                      </tr>
                      <tr>
                        <td>
                          <div class="flag">
                            <img src="{{ asset('images') }}/AU.png" alt="flag">
                          </div>
                        </td>
                        <td>Australia</td>
                        <td class="text-end">760</td>
                        <td class="text-end">10.35%</td>
                      </tr>
                      <tr>
                        <td>
                          <div class="flag">
                            <img src="{{ asset('images') }}/GB.png" alt="flag">
                          </div>
                        </td>
                        <td>United Kingdom</td>
                        <td class="text-end">690</td>
                        <td class="text-end">7.87%</td>
                      </tr>
                      <tr>
                        <td>
                          <div class="flag">
                            <img src="{{ asset('images') }}/RO.png" alt="flag">
                          </div>
                        </td>
                        <td>Romania</td>
                        <td class="text-end">600</td>
                        <td class="text-end">5.94%</td>
                      </tr>
                      <tr>
                        <td>
                          <div class="flag">
                            <img src="{{ asset('images') }}/BR.png" alt="flag">
                          </div>
                        </td>
                        <td>Brasil</td>
                        <td class="text-end">550</td>
                        <td class="text-end">4.34%</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="col-md-6 mx-auto">
                <div id="worldMap" style="height: 300px;"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

@endsection

@push('js')
  <script type="module" src="{{ asset('js') }}/pages/dashboard.js"></script>
@endpush
