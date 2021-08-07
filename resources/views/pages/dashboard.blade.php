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
<<<<<<< HEAD
    <div class="content">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card card-stats">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <div class="info-icon text-center icon-warning">
                                    <i class="tim-icons icon-tap-02"></i>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="numbers">
                                    <p class="card-category"><a style="color: #ff6b8a"
                                            href="http://localhost:8000/comments">Average Users Activity</a></p>
                                    <h3 class="card-title"><a style="color: #ff6b8a"
                                            href="http://localhost:8000/comments">7.45%</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <hr>
                        <div class="stats">
                            <i class="tim-icons icon-minimal-down"></i> 12% AUA Decrease
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6"> {{-- Engagements --}}
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="info-icon text-center icon-warning">
                                <i class="tim-icons icon-satisfied"></i>
                            </div>
                            <div class="col-7">
                                <div class="numbers">
                                    <p class="card-category"><a style="color: #ff6b8a"
                                            href="http://localhost:8000/likes">Engagements</a></p>
                                    <h3 class="card-title"><a style="color: #ff6b8a"
                                            href="http://localhost:8000/likes">+17,941</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <hr>
                    <div class="stats">
                        <i class="tim-icons icon-minimal-up"></i> 28% Engagement Increase
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card card-stats">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <div class="info-icon text-center icon-warning">
                                    <i class="tim-icons icon-single-02"></i>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="numbers">
                                    <p class="card-category"><a style="color: #ff6b8a"
                                            href="http://localhost:8000/followers">Followers</a></p>
                                    <h3 class="card-title"><a style="color: #ff6b8a"
                                            href="http://localhost:8000/followers">+3,721</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <hr>
                        <div class="stats">
                            <i class="tim-icons icon-minimal-up"></i> 23% Follower Increase
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card card-stats">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <div class="info-icon text-center icon-warning">
                                    <i class="tim-icons icon-heart-2"></i>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="numbers">
                                    <p class="card-category"><a style="color: #ff6b8a"
                                            href="http://localhost:8000/likes">Likes</a></p>
                                    <h3 class="card-title"><a style="color: #ff6b8a"
                                            href="http://localhost:8000/likes">+14,726</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <hr>
                        <div class="stats">
                            <i class="tim-icons icon-minimal-up"></i> 32% Like Increase
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card card-stats">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <div class="info-icon text-center icon-warning">
                                    <i class="tim-icons icon-chat-33"></i>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="numbers">
                                    <p class="card-category"><a style="color: #ff6b8a"
                                            href="http://localhost:8000/comments">Comments</a></p>
                                    <h3 class="card-title"><a style="color: #ff6b8a"
                                            href="http://localhost:8000/comments">+1,892</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <hr>
                        <div class="stats">
                            <i class="tim-icons icon-minimal-down"></i> 4% Comment Decrease
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card card-stats">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <div class="info-icon text-center icon-warning">
                                    <i class="tim-icons icon-molecule-40"></i>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="numbers">
                                    <p class="card-category"><a style="color: #ff6b8a"
                                            href="http://localhost:8000/posts">Posts</a></p>
                                    <h3 class="card-title"><a style="color: #ff6b8a"
                                            href="http://localhost:8000/posts">+12</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <hr>
                        <div class="stats">
                            <i class="tim-icons icon-minimal-up"></i> 18% Post Increase
                        </div>
                    </div>
=======
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
>>>>>>> restructure
                </div>
              </div>
            </div>
<<<<<<< HEAD
            <div class="col-lg-3 col-md-6">
                {{-- <div class="card card-stats">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <div class="info-icon text-center icon-warning">
                                    <i class="tim-icons icon-shape-star"></i>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="numbers">
                                    <p class="card-category"><a style="color: #ff6b8a"
                                            href="http://localhost:8000/followers">Impressions</a></p>
                                    <h3 class="card-title"><a style="color: #ff6b8a"
                                            href="http://localhost:8000/followers">123,721</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <hr>
                        <div class="stats">
                            <i class="tim-icons icon-minimal-up"></i> 18% Impressions Increase
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="col-lg-3 col-md-6">
                {{-- <div class="card card-stats">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <div class="info-icon text-center icon-warning">
                                    <i class="tim-icons icon-triangle-right-17"></i>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="numbers">
                                    <p class="card-category"><a style="color: #ff6b8a"
                                            href="http://localhost:8000/posts">Profile Actions</a></p>
                                    <h3 class="card-title"><a style="color: #ff6b8a"
                                            href="http://localhost:8000/posts">+8</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <hr>
                        <div class="stats">
                            <i class="tim-icons icon-minimal-up"></i> 13% Post Increase
                        </div>
                    </div>
                </div> --}}
=======
            <div class="card-footer">
              <hr>
              <div class="stats">
                <i id="dir-{{ $stat->id }}" class="fal fa-arrow-up"></i>
                <span id="inc-{{ $stat->id }}" data-value="{{ $stat->stat }}"></span>
              </div>
>>>>>>> restructure
            </div>
          </div>
        </div>
      @endforeach

    </div>

    <div class="row">
<<<<<<< HEAD
        <div class="col-12"> {{-- Performance Chart --}}
            <div class="card card-chart">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h5 class="card-category">Account Engagement</h5>
                            <h2 class="card-title">Performance</h2>
                        </div>
                        <div class="col-sm-6">
                            <div class="btn-group btn-group-toggle float-right ml-3" data-toggle="buttons">
                                <label class="btn btn-sm btn-warning btn-simple active" id="0">
                                    <input type="radio" name="options" checked>
                                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Daily</span>
                                    <span class="d-block d-sm-none">
                                        <i class="tim-icons icon-single-02"></i>
                                    </span>
                                </label>
                                <label class="btn btn-sm btn-warning btn-simple" id="1">
                                    <input type="radio" class="d-none d-sm-none" name="options">
                                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Weekly</span>
                                    <span class="d-block d-sm-none">
                                        <i class="tim-icons icon-gift-2"></i>
                                    </span>
                                </label>
                                <label class="btn btn-sm btn-warning btn-simple" id="2">
                                    <input type="radio" class="d-none" name="options">
                                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Monthly</span>
                                    <span class="d-block d-sm-none">
                                        <i class="tim-icons icon-tap-02"></i>
                                    </span>
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                                    <label class="btn btn-sm btn-warning btn-simple active" id="0">
                                        <input type="radio" name="options" checked>
                                        <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Daily</span>
                                        <span class="d-block d-sm-none">
                                            <i class="tim-icons icon-single-02"></i>
                                        </span>
                                    </label>
                                    <label class="btn btn-sm btn-warning btn-simple" id="1">
                                        <input type="radio" class="d-none d-sm-none" name="options">
                                        <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Weekly</span>
                                        <span class="d-block d-sm-none">
                                            <i class="tim-icons icon-gift-2"></i>
                                        </span>
                                    </label>
                                    <label class="btn btn-sm btn-warning btn-simple" id="2">
                                        <input type="radio" class="d-none" name="options">
                                        <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Monthly</span>
                                        <span class="d-block d-sm-none">
                                            <i class="tim-icons icon-tap-02"></i>
                                        </span>
                                    </label>
                                </div>
                                <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                                    <label class="btn btn-sm btn-warning btn-simple active" id="0">
                                        <input type="radio" name="options" checked>
                                        <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Followers</span>
                                        <span class="d-block d-sm-none">
                                            <i class="tim-icons icon-single-02"></i>
                                        </span>
                                    </label>
                                    <label class="btn btn-sm btn-warning btn-simple" id="1">
                                        <input type="radio" class="d-none d-sm-none" name="options">
                                        <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Likes</span>
                                        <span class="d-block d-sm-none">
                                            <i class="tim-icons icon-gift-2"></i>
                                        </span>
                                    </label>
                                    <label class="btn btn-sm btn-warning btn-simple" id="2">
                                        <input type="radio" class="d-none" name="options">
                                        <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Comments</span>
                                        <span class="d-block d-sm-none">
                                            <i class="tim-icons icon-tap-02"></i>
                                        </span>
                                    </label>
                                    <label class="btn btn-sm btn-warning btn-simple" id="3">
                                        <input type="radio" class="d-none" name="options">
                                        <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Posts</span>
                                        <span class="d-block d-sm-none">
                                            <i class="tim-icons icon-tap-02"></i>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
=======
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
>>>>>>> restructure

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

<<<<<<< HEAD
    <div class="row">
        <div class="col-lg-5">
            <div class="card card-tasks">
                <div class="card-header">
                    <h6 class="title d-inline">Scheduled Posts</h6>
                    <p class="card-category d-inline">Upcoming</p>
                    <div class="dropdown">
                        <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown">
                            <i class="tim-icons icon-settings-gear-63"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
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
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="" class="btn btn-link"
                                            data-original-title="Edit Task">
                                            <i class="tim-icons icon-pencil"></i>
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
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="" class="btn btn-link"
                                            data-original-title="Edit Task">
                                            <i class="tim-icons icon-pencil"></i>
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
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="" class="btn btn-link"
                                            data-original-title="Edit Task">
                                            <i class="tim-icons icon-pencil"></i>
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
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="" class="btn btn-link"
                                            data-original-title="Edit Task">
                                            <i class="tim-icons icon-pencil"></i>
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
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="" class="btn btn-link"
                                            data-original-title="Edit Task">
                                            <i class="tim-icons icon-pencil"></i>
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
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="" class="btn btn-link"
                                            data-original-title="Edit Task">
                                            <i class="tim-icons icon-pencil"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
=======
          {{-- the chart --}}
          <div class="card-body">
            <div class="chart-area">
              <canvas id="performance-chart" style="height: 220px"></canvas>
>>>>>>> restructure
            </div>
          </div>
        </div>
<<<<<<< HEAD
        <div class="col-lg-7">
            <div class="card">
                <div class="card-header">
                    <div class="tools float-right">
                        <div class="dropdown">
                            <button type="button" class="btn btn-default dropdown-toggle btn-link btn-icon"
                                data-toggle="dropdown">
                                <i class="tim-icons icon-settings-gear-63"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
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
                            <thead class="text-primary">
                                <tr>
                                    <th class="text-center">
                                        Profile
                                    </th>
                                    <th>
                                        Instagram UN
                                    </th>
                                    <th>
                                        Followers
                                    </th>
                                    <th class="text-center">
                                        Description
                                    </th>
                                    <th class="text-center">
                                        Likes
                                    </th>
                                    <th class="text-right">
                                        Comments
                                    </th>
                                    <th class="text-right">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">
                                        <div class="photo">
                                            <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                        </div>
                                    </td>
                                    <td>
                                        @AndrewMike
                                    </td>
                                    <td>
                                        3,198
                                    </td>
                                    <td class="text-center">
                                        Great quality content! Ke...
                                    </td>
                                    <td class="text-center">
                                        3
                                    </td>
                                    <td class="text-right">
                                        7
                                    </td>
                                    <td class="text-right">

                                        <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-sm "
                                            data-original-title="Tooltip on top" title="Delete">
                                            <i class="tim-icons icon-minimal-down"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="photo">
                                            <img src="{{ asset('white') }}/img/robi.jpg" alt="Table image">
                                        </div>
                                    </td>
                                    <td>
                                        @JohnDoe
                                    </td>
                                    <td>
                                        81,923
                                    </td>
                                    <td class="text-center">
                                        Check out this post @fd...
                                    </td>
                                    <td class="text-center">
                                        7
                                    </td>
                                    <td class="text-right">
                                        26
                                    </td>
                                    <td class="text-right">

                                        <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-sm "
                                            data-original-title="Tooltip on top" title="Delete">
                                            <i class="tim-icons icon-minimal-down"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="photo">
                                            <img src="{{ asset('white') }}/img/lora.jpg" alt="Table image">
                                        </div>
                                    </td>
                                    <td>
                                        @AlexMike
                                    </td>
                                    <td>
                                        821
                                    </td>
                                    <td class="text-center">
                                        Always love your posts man...
                                    </td>
                                    <td class="text-center">
                                        1
                                    </td>
                                    <td class="text-right">
                                        1
                                    </td>
                                    <td class="text-right">

                                        <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-sm "
                                            data-original-title="Tooltip on top" title="Delete">
                                            <i class="tim-icons icon-minimal-down"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="photo">
                                            <img src="{{ asset('white') }}/img/jana.jpg" alt="Table image">
                                        </div>
                                    </td>
                                    <td>
                                        @MikeMonday
                                    </td>
                                    <td>
                                        9,384
                                    </td>
                                    <td class="text-center">
                                        How did you manage to ta...
                                    </td>
                                    <td class="text-center">
                                        3
                                    </td>
                                    <td class="text-right">
                                        1
                                    </td>
                                    <td class="text-right">

                                        <button type="button" rel="tooltip"
                                            class="btn btn-danger btn-link btn-sm   btn-neutral  "
                                            data-original-title="Tooltip on top" title="Delete">
                                            <i class="tim-icons icon-minimal-down"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="photo">
                                            <img src="{{ asset('white') }}/img/robi.jpg" alt="Table image">
                                        </div>
                                    </td>
                                    <td>
                                        @PaulDickens
                                    </td>
                                    <td>
                                        390
                                    </td>
                                    <td class="text-center">
                                        Thanks for sharing man!
                                    </td>
                                    <td class="text-center">
                                        7
                                    </td>
                                    <td class="text-right">
                                        1
                                    </td>
                                    <td class="text-right">

                                        <button type="button" rel="tooltip"
                                            class="btn btn-danger btn-link btn-sm   btn-neutral  "
                                            data-original-title="Tooltip on top" title="Delete">
                                            <i class="tim-icons icon-minimal-down"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="photo">
                                            <img src="{{ asset('white') }}/img/emilyz.jpg" alt="Table image">
                                        </div>
                                    </td>
                                    <td>
                                        @mattymyers
                                    </td>
                                    <td>
                                        102,349
                                    </td>
                                    <td class="text-center">
                                        Great content! Check th...
                                    </td>
                                    <td class="text-center">
                                        13
                                    </td>
                                    <td class="text-right">
                                        41
                                    </td>
                                    <td class="text-right">

                                        <button type="button" rel="tooltip"
                                            class="btn btn-danger btn-link btn-sm   btn-neutral  "
                                            data-original-title="Tooltip on top" title="Delete">
                                            <i class="tim-icons icon-minimal-down"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
=======

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
>>>>>>> restructure
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
<<<<<<< HEAD
        <div class="col-lg-12">
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
                                                    <img src="{{ asset('white') }}/img/US.png" alt="flag">
                                                </div>
                                            </td>
                                            <td>USA</td>
                                            <td class="text-right">
                                                2.920
                                            </td>
                                            <td class="text-right">
                                                53.23%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="flag">
                                                    <img src="{{ asset('white') }}/img/DE.png" alt="flag">
                                                </div>
                                            </td>
                                            <td>Germany</td>
                                            <td class="text-right">
                                                1.300
                                            </td>
                                            <td class="text-right">
                                                20.43%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="flag">
                                                    <img src="{{ asset('white') }}/img/AU.png" alt="flag">
                                                </div>
                                            </td>
                                            <td>Australia</td>
                                            <td class="text-right">
                                                760
                                            </td>
                                            <td class="text-right">
                                                10.35%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="flag">
                                                    <img src="{{ asset('white') }}/img/GB.png" alt="flag">
                                                </div>
                                            </td>
                                            <td>United Kingdom</td>
                                            <td class="text-right">
                                                690
                                            </td>
                                            <td class="text-right">
                                                7.87%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="flag">
                                                    <img src="{{ asset('white') }}/img/RO.png" alt="flag">
                                                </div>
                                            </td>
                                            <td>Romania</td>
                                            <td class="text-right">
                                                600
                                            </td>
                                            <td class="text-right">
                                                5.94%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="flag">
                                                    <img src="{{ asset('white') }}/img/BR.png" alt="flag">
                                                </div>
                                            </td>
                                            <td>Brasil</td>
                                            <td class="text-right">
                                                550
                                            </td>
                                            <td class="text-right">
                                                4.34%
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6 ml-auto mr-auto">
                            <div id="worldMap" style="height: 300px;"></div>
                        </div>
                    </div>
=======
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
>>>>>>> restructure
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
<<<<<<< HEAD
    {{-- <div class="col-lg-4">
                <div class="card card-chart">
                    <div class="card-header">
                        <h5 class="card-category">Total Shipments</h5>
                        <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i> 763,215</h3>
                    </div>
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="chartLineOrange"></canvas>
                        </div>
                    </div>
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
                                                    <img src="{{ asset('white') }}/img/US.png" alt="flag">
                                                </div>
                                            </td>
                                            <td>USA</td>
                                            <td class="text-right">
                                                2.920
                                            </td>
                                            <td class="text-right">
                                                53.23%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="flag">
                                                    <img src="{{ asset('white') }}/img/DE.png" alt="flag">
                                                </div>
                                            </td>
                                            <td>Germany</td>
                                            <td class="text-right">
                                                1.300
                                            </td>
                                            <td class="text-right">
                                                20.43%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="flag">
                                                    <img src="{{ asset('white') }}/img/AU.png" alt="flag">
                                                </div>
                                            </td>
                                            <td>Australia</td>
                                            <td class="text-right">
                                                760
                                            </td>
                                            <td class="text-right">
                                                10.35%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="flag">
                                                    <img src="{{ asset('white') }}/img/GB.png" alt="flag">
                                                </div>
                                            </td>
                                            <td>United Kingdom</td>
                                            <td class="text-right">
                                                690
                                            </td>
                                            <td class="text-right">
                                                7.87%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="flag">
                                                    <img src="{{ asset('white') }}/img/RO.png" alt="flag">
                                                </div>
                                            </td>
                                            <td>Romania</td>
                                            <td class="text-right">
                                                600
                                            </td>
                                            <td class="text-right">
                                                5.94%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="flag">
                                                    <img src="{{ asset('white') }}/img/BR.png" alt="flag">
                                                </div>
                                            </td>
                                            <td>Brasil</td>
                                            <td class="text-right">
                                                550
                                            </td>
                                            <td class="text-right">
                                                4.34%
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6 ml-auto mr-auto">
                            <div id="worldMap" style="height: 300px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

    </div>
=======

  </div>
>>>>>>> restructure

@endsection

@push('js')
<<<<<<< HEAD
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            demo.initDashboardPageCharts();
            demo.initVectorMap();
        });

    </script>
=======
  <script type="module" src="{{ asset('js') }}/pages/dashboard.js"></script>
>>>>>>> restructure
@endpush
