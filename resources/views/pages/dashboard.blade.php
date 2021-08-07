@extends('layouts.app', [
'activePage' => 'dashboard',
'menuParent' => 'dashboard',
'titlePage' => __('Dashboard')]
)

@php
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
        'id' => 'likes',
        'stat' => 'Engagement',
        'type' => 'total',
        'icon' => 'fal fa-comment-alt-smile',
    ],
    (object) [
        'name' => 'Followers',
        'link' => route('pages.followers'),
        'id' => 'followers',
        'stat' => 'Follower',
        'type' => 'total',
        'icon' => 'fal fa-users',
    ],
    (object) [
        'name' => 'Likes',
        'link' => route('pages.likes'),
        'id' => 'likes',
        'stat' => 'Like',
        'type' => 'total',
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
  <div class="content">
    <div class="row">

      @foreach ($stats as $stat)
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-body">
              <div class="row">
                <div class="col-5">
                  <div class="info-icon text-center icon-warning">
                    <i class="{{ $stat->icon }}"></i>
                  </div>
                </div>
                <div class="col-7">
                  <div class="numbers">
                    <a href="{{ $stat->link }}">
                      <p class="card-category text-dark-pink">{{ $stat->name }}</p>
                      <h3 id="num-{{ $stat->id }}" data-type="{{ $stat->type }}" class="card-title text-dark-pink">
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
                <h5 class="card-category">Account Engagement</h5>
                <h2 class="card-title">Performance</h2>
              </div>
              <div class="row col-md-8 align-items-start justify-content-end pe-0">

                {{-- chart day selector --}}
                <div class="col-auto btn-group btn-group-sm pe-0" role="group">
                  <input type="radio" class="btn-check" name="p-chart-day" id="p-chart-day-1" checked>
                  <label class="btn btn-outline-warning" for="p-chart-day-1">
                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Daily</span>
                    <span class="d-block d-sm-none">
                      <i class="fal fa-calendar-day"></i>
                    </span>
                  </label>

                  <input type="radio" class="btn-check" name="p-chart-day" id="p-chart-day-2">
                  <label class="btn btn-outline-warning" for="p-chart-day-2">
                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Weekly</span>
                    <span class="d-block d-sm-none">
                      <i class="fal fa-calendar-week"></i>
                    </span>
                  </label>

                  <input type="radio" class="btn-check" name="p-chart-day" id="p-chart-day-3">
                  <label class="btn btn-outline-warning" for="p-chart-day-3">
                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Monthly</span>
                    <span class="d-block d-sm-none">
                      <i class="fal fa-calendar"></i>
                    </span>
                  </label>
                </div>

                {{-- chart line selector --}}
                <div class="col-auto btn-group btn-group-sm pe-0" role="group">

                  <input type="checkbox" class="btn-check" name="p-chart-line" id="p-chart-line-1" checked>
                  <label class="btn btn-outline-blue" for="p-chart-line-1">
                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Followers</span>
                    <span class="d-block d-sm-none">
                      <i class="fal fa-users"></i>
                    </span>
                  </label>

                  <input type="checkbox" class="btn-check" name="p-chart-line" id="p-chart-line-2">
                  <label class="btn btn-outline-pink" for="p-chart-line-2">
                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Likes</span>
                    <span class="d-block d-sm-none">
                      <i class="fal fa-heart"></i>
                    </span>
                  </label>

                  <input type="checkbox" class="btn-check" name="p-chart-line" id="p-chart-line-3">
                  <label class="btn btn-outline-red" for="p-chart-line-3">
                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Comments</span>
                    <span class="d-block d-sm-none">
                      <i class="fal fa-comments"></i>
                    </span>
                  </label>

                  <input type="checkbox" class="btn-check" name="p-chart-line" id="p-chart-line-4">
                  <label class="btn btn-sm btn-outline-teal" for="p-chart-line-4">
                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Posts</span>
                    <span class="d-block d-sm-none">
                      <i class="fal fa-file-alt"></i>
                    </span>
                  </label>
                </div>

              </div>
            </div>
          </div>

          {{-- the chart --}}
          <div class="card-body">
            <div class="chart-area">
              <canvas id="performance-chart" style="height: 220px"></canvas>
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
