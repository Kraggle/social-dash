@extends('layouts.app', [
'activePage' => 'posts',
'menuParent' => 'analytics',
'titlePage' => __('Posts')
])

@php
$page = 'followers'; // Used to get and set cookies
$cookie = AppHelper::getPageCookie($page);
@endphp

@section('content')
  <div class="content" data-page="{{ $page }}">
    <div class="row">
      <div class="col-6">
        <div class="card card-chart">
          <div class="card-header row">
            <div class="col-sm-3">
              <h5 class="card-category">Account Posts</h5>
              <h3 class="card-title">By Date</h3>
            </div>

            <div class="col-sm-9 row align-items-start justify-content-end pe-0">

              {{-- chart line selector --}}
              @include('forms.chart-toggles', ['settings' => [
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
              ]],
              'group_class' => 'btn-group-sm pe-0 mb-2',
              'group_attrs' => 'data-chart-toggles',
              'cookie' => $cookie
              ]])

              <div class="col-auto pe-0">
                <div class="dropdown keep-open">
                  <button type="button" class="btn btn-gray btn-link dropdown-toggle btn-icon no-caret" data-bs-toggle="dropdown">
                    @icon('fal fa-cog')
                  </button>
                  <div class="dropdown-menu dropdown-grid">

                    {{-- chart day selector --}}
                    @include('forms.chart-radio', ['settings' => [
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
                    'group_class' => 'btn-group-sm',
                    'group_attrs' => 'data-chart-scale',
                    'cookie' => $cookie
                    ]])

                    {{-- chart type selector --}}
                    @include('forms.chart-radio', ['settings' => [
                    'name' => 'p-chart-type',
                    'color' => 'green',
                    'buttons' => [[
                    'display' => __('Photos'),
                    'id' => 'p-chart-type-1',
                    'value' => 'day',
                    'icon' => 'fal fa-image-polaroid'
                    ], [
                    'display' => __('Videos'),
                    'id' => 'p-chart-type-2',
                    'value' => 'week',
                    'icon' => 'fal fa-video'
                    ], [
                    'display' => __('Carousels'),
                    'id' => 'p-chart-type-3',
                    'value' => 'month',
                    'icon' => 'fal film-canister'
                    ]],
                    'group_class' => 'btn-group-sm',
                    'group_attrs' => 'data-chart-type',
                    'cookie' => $cookie
                    ]])

                    <div class="col-auto">
                      @include('forms.datepicker', ['settings' => [
                      'cookie' => $cookie,
                      'id' => 'p-chart-date'
                      ]])
                    </div>

                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="card-body">
            <div class="chart-area-posts">
              <canvas id="posts-chart" data-type="line" data-height="250"></canvas>
            </div>
          </div>
        </div>
      </div>

      <div class="col-6">
        <div class="card card-chart">

          <div class="card-header row">
            <div class="col-11">
              <h5 class="card-category">Account Posts</h5>
              <h3 class="card-title">By Time of Day</h3>
            </div>

            <div class="col-1 row align-items-start justify-content-end pe-0">

              {{-- chart day selector --}}
              @include('forms.chart-radio', ['settings' => [
              'name' => 'b-chart-day',
              'color' => 'warning',
              'buttons' => [[
              'display' => __('Daily'),
              'id' => 'b-chart-day-1',
              'value' => 'day',
              'icon' => 'fal fa-calendar-day'
              ]],
              'group_class' => 'd-none',
              'group_attrs' => 'data-chart-scale',
              'cookie' => $cookie
              ]])

              {{-- chart line selector --}}
              @include('forms.chart-toggles', ['settings' => [
              'buttons' => [[
              'id' => 'b-chart-bubble-1',
              'color' => 'orange',
              'display' => __('Posts'),
              'icon' => 'fal fa-users',
              ]],
              'group_class' => 'd-none',
              'group_attrs' => 'data-chart-toggles',
              'cookie' => $cookie
              ]])

            </div>
          </div>

          <div class="card-body">
            <div class="chart-area-posts">
              <canvas id="bubble-chart" data-type="bubble" data-height="264"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header row">
            <h3 class="card-title col-4">Uploaded Posts</h3>

            <div class="row col-8 align-items-start justify-content-end pe-0">

              <div class="col-auto pe-0">
                @include('forms.datepicker', ['settings' => [
                'cookie' => $cookie,
                'id' => 'p-table-date',
                'group' => ['size' => 'sm']
                ]])
              </div>

              {{-- chart type selector --}}
              @include('forms.chart-radio', ['settings' => [
              'name' => 'p-table-type',
              'color' => 'info',
              'buttons' => [[
              'display' => __('Photos'),
              'id' => 'p-table-type-1',
              'value' => 'day',
              'icon' => 'fal fa-image-polaroid'
              ], [
              'display' => __('Videos'),
              'id' => 'p-table-type-2',
              'value' => 'week',
              'icon' => 'fal fa-video'
              ], [
              'display' => __('Carousels'),
              'id' => 'p-table-type-3',
              'value' => 'month',
              'icon' => 'fal film-canister'
              ]],
              'group_class' => 'btn-group-sm pe-0 mb-2',
              'group_attrs' => 'data-table-type',
              'cookie' => $cookie
              ]])

              <div class="col-auto pe-0">
                <a href="{{ route('pages.compare-posts') }}" class="btn btn-sm btn-warning btn-gradient">Compare</a>
              </div>

            </div>
          </div>
          <div class="card-body">
            <div class="row mb-3">
              <ul id="nav-tabs" class="nav nav-pills nav-pills-warning col-12" role="tablist" style="margin-left:12px">
                <li class="nav-item" role="presentation">
                  <button id="nav-data-tab" class="nav-link active" data-bs-toggle="pill" type="button" aria-controls="pill-data-tab" aria-selected="true" data-bs-target="#pill-data-tab">Data</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button id="nav-visual-tab" class="nav-link" data-bs-toggle="pill" type="button" aria-controls="pill-visual-tab" aria-selected="false" data-bs-target="#pill-visual-tab">Visual</button>
                </li>
              </ul>
            </div>

            <div class="tab-content">
              <div class="tab-pane fade show active" id="pill-data-tab" role="tabpanel" aria-labelledby="nav-data-tab">
                <div class="card">
                  <div class="card-body">
                    <div class="toolbar">
                      <!--        Here you can write extra buttons/actions for the toolbar              -->
                    </div>
                    <table id="datatable" class="table table-striped">
                      <caption class="p-0"></caption>
                      <thead>
                        <tr>
                          <th scope="col">Post</th>
                          <th scope="col">Post URL</th>
                          <th scope="col">Type</th>
                          <th scope="col">Desciption</th>
                          <th scope="col">Likes</th>
                          <th scope="col">Comments</th>
                          <th scope="col">Date Posted</th>
                          <th scope="col">Hashtags</th>
                          <th scope="col" class="dt-nosort text-end">
                            Actions
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="photo">
                              <img alt src="{{ asset('images') }}/tania.jpg" alt="Table image">
                            </div>
                          </td>
                          <td><a href="{{ route('pages.post') }}">/p/CLmHaJSptE6/</a>
                          </td>
                          <td><a href="{{ route('pages.posts') }}">Photo</a></td>
                          <td>Don't settle for less than the best! 👊💯</td>
                          <td><a href="{{ route('pages.likes') }}">110</a></td>
                          <td><a href="{{ route('pages.comments') }}">30</a></td>
                          <td><a href="{{ route('pages.posts') }}">22/02/2021</a></td>
                          <td>#cristianoronaldo #ronaldo #cr...</td>
                          <td class="text-nowrap text-end">
                            <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                            <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                            <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="photo">
                              <img alt src="{{ asset('images') }}/tania.jpg" alt="Table image">
                            </div>
                          </td>
                          <td><a href="{{ route('pages.post') }}">/p/CLgxTAOp2xM/</a>
                          </td>
                          <td><a href="{{ route('pages.posts') }}">Photo</a></td>
                          <td>Get ready for tomorrow by focusing on t...</td>
                          <td><a href="{{ route('pages.likes') }}">219</a></td>
                          <td><a href="{{ route('pages.comments') }}">23</a></td>
                          <td><a href="{{ route('pages.posts') }}">20/02/2021</a></td>
                          <td>#rocky #rockybalboa #rockybal...</td>
                          <td class="text-end">
                            <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                            <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                            <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="photo">
                              <img alt src="{{ asset('images') }}/tania.jpg" alt="Table image">
                            </div>
                          </td>
                          <td><a href="{{ route('pages.post') }}">/p/CLe2eLOpb9L/</a>
                          </td>
                          <td><a href="{{ route('pages.posts') }}">Photo</a></td>
                          <td>What that says 👆👊💯</td>
                          <td><a href="{{ route('pages.likes') }}">135</a></td>
                          <td><a href="{{ route('pages.comments') }}">3</a></td>
                          <td><a href="{{ route('pages.posts') }}">19/02/2021</a></td>
                          <td>#millionairequote #millionaire...</td>
                          <td class="text-end">
                            <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                            <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm  edit">@icon('fal fa-pencil-alt')</a>
                            <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="photo">
                              <img alt src="{{ asset('images') }}/tania.jpg" alt="Table image">
                            </div>
                          </td>
                          <td><a href="{{ route('pages.post') }}">/p/CLe2eLOpb9L/</a>
                          </td>
                          <td><a href="{{ route('pages.posts') }}">Photo</a></td>
                          <td>Do you keep going when times...</td>
                          <td><a href="{{ route('pages.likes') }}">186</a></td>
                          <td><a href="{{ route('pages.comments') }}">62</a></td>
                          <td><a href="{{ route('pages.posts') }}">18/02/2021</a></td>
                          <td>#millionairequote #moneymotiva...</td>
                          <td class="text-end">
                            <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                            <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                            <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="photo">
                              <img alt src="{{ asset('images') }}/tania.jpg" alt="Table image">
                            </div>
                          </td>
                          <td><a href="{{ route('pages.post') }}">/p/CLZqAn9pars/</a>
                          </td>
                          <td><a href="{{ route('pages.posts') }}">Photo</a></td>
                          <td>What that says 👆💯👊</td>
                          <td><a href="{{ route('pages.likes') }}">150</a></td>
                          <td><a href="{{ route('pages.comments') }}">67</a></td>
                          <td><a href="{{ route('pages.posts') }}">17/02/2021</a></td>
                          <td>#thomasshelby #tomshelby #shelby...</td>
                          <td class="text-end">
                            <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                            <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                            <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="photo">
                              <img alt src="{{ asset('images') }}/tania.jpg" alt="Table image">
                            </div>
                          </td>
                          <td><a href="{{ route('pages.post') }}">/p/CLZBFTvJPb3/</a>
                          </td>
                          <td><a href="{{ route('pages.posts') }}">Carousel</a></td>
                          <td>You can have all the motivat...</td>
                          <td><a href="{{ route('pages.likes') }}">119</a></td>
                          <td><a href="{{ route('pages.comments') }}">50</a></td>
                          <td><a href="{{ route('pages.posts') }}">17/02/2021</a></td>
                          <td>#millionairequote #moneymotiva...</td>
                          <td class="text-end">
                            <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                            <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                            <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="photo">
                              <img alt src="{{ asset('images') }}/tania.jpg" alt="Table image">
                            </div>
                          </td>
                          <td><a href="{{ route('pages.post') }}">/p/CLUvY44Jbaa/</a>
                          </td>
                          <td><a href="{{ route('pages.posts') }}">Photo</a></td>
                          <td>DOUBLE TAP IF YOUR A SURVIVOR...</td>
                          <td><a href="{{ route('pages.likes') }}">178</a></td>
                          <td><a href="{{ route('pages.comments') }}">45</a></td>
                          <td><a href="{{ route('pages.posts') }}">15/02/2021</a></td>
                          <td>#millionairequote #moneymotiva...</td>
                          <td class="text-end">
                            <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                            <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                            <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="photo">
                              <img alt src="{{ asset('images') }}/tania.jpg" alt="Table image">
                            </div>
                          </td>
                          <td><a href="{{ route('pages.post') }}">/p/CLUT4w2JmSC/</a>
                          </td>
                          <td><a href="{{ route('pages.posts') }}">Video</a></td>
                          <td>What that says ☝️💯👊</td>
                          <td><a href="{{ route('pages.likes') }}">153</a></td>
                          <td><a href="{{ route('pages.comments') }}">28</a></td>
                          <td><a href="{{ route('pages.posts') }}">15/02/2021</a></td>
                          <td>#millionairequote #entrepre...</td>
                          <td class="text-end">
                            <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                            <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                            <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="photo">
                              <img alt src="{{ asset('images') }}/tania.jpg" alt="Table image">
                            </div>
                          </td>
                          <td><a href="{{ route('pages.post') }}">/p/CLUA1cjpJAV/</a>
                          </td>
                          <td><a href="{{ route('pages.posts') }}">Video</a></td>
                          <td>Don't be a sheep 🐑 Be a wolf 🐺</td>
                          <td><a href="{{ route('pages.likes') }}">113</a></td>
                          <td><a href="{{ route('pages.comments') }}">55</a></td>
                          <td><a href="{{ route('pages.posts') }}">15/02/2021</a></td>
                          <td>#billionairequote #billiona...</td>
                          <td class="text-end">
                            <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                            <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                            <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="photo">
                              <img alt src="{{ asset('images') }}/tania.jpg" alt="Table image">
                            </div>
                          </td>
                          <td><a href="{{ route('pages.post') }}">/p/CLTqyVdpjF6/</a>
                          </td>
                          <td><a href="{{ route('pages.posts') }}">Video</a></td>
                          <td>People say life is too short to...</td>
                          <td><a href="{{ route('pages.likes') }}">138</a></td>
                          <td><a href="{{ route('pages.comments') }}">60</a></td>
                          <td><a href="{{ route('pages.posts') }}">14/02/2021</a></td>
                          <td>#thomasshelby #thomasshelbyme...</td>
                          <td class="text-end">
                            <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                            <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                            <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="photo">
                              <img alt src="{{ asset('images') }}/tania.jpg" alt="Table image">
                            </div>
                          </td>
                          <td><a href="{{ route('pages.post') }}">/p/CLMy_kNpDD4/</a>
                          </td>
                          <td><a href="{{ route('pages.posts') }}">Video</a></td>
                          <td>Don't let your body tell you...</td>
                          <td><a href="{{ route('pages.likes') }}">209</a></td>
                          <td><a href="{{ route('pages.comments') }}">131</a></td>
                          <td><a href="{{ route('pages.posts') }}">12/02/2021</a></td>
                          <td>#arnoldschwarzenegger #schwarze...</td>
                          <td class="text-end">
                            <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                            <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                            <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="photo">
                              <img alt src="{{ asset('images') }}/tania.jpg" alt="Table image">
                            </div>
                          </td>
                          <td><a href="{{ route('pages.post') }}">/p/CLMSkboJWjh/</a>
                          </td>
                          <td><a href="{{ route('pages.posts') }}">Carousel</a></td>
                          <td>Sometimes success isn't alwa...</td>
                          <td><a href="{{ route('pages.likes') }}">166</a></td>
                          <td><a href="{{ route('pages.comments') }}">59</a></td>
                          <td><a href="{{ route('pages.posts') }}">12/02/2021</a></td>
                          <td>#entrepreneurship #entrepreneu...</td>
                          <td class="text-end">
                            <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like">@icon('fal fa-heart')</a>
                            <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit">@icon('fal fa-pencil-alt')</a>
                            <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove">@icon('fal fa-trash-alt')</a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- end content-->
                </div>
                <!--  end card  -->
              </div>

              <div class="tab-pane fade" id="pill-visual-tab" role="tabpanel" aria-labelledby="nav-visual-tab">
                <div class="row mb-3">

                  <div class="col-3">
                    <input type="checkbox" class="post-selector" id="post-1">
                    <label for="post-1" class="card card-post border">

                      <img alt class="card-img-top" src="{{ asset('images') }}/post1.jpg">

                      <div class="card-body">

                        <p class="card-detail">
                          <img alt class="card-user" src="{{ asset('images') }}/tania.jpg">
                          <span class="card-name">howtomakemoneyfromhome</span>
                        </p>

                        <p class="card-detail">
                          <span class="card-val">132</span>
                          <span class="card-for">likes,</span>
                          <span class="card-val">28</span>
                          <span class="card-for">comments,</span>
                          <span class="card-val">2</span>
                          <span class="card-for">saves</span>
                        </p>

                        <p class="card-detail">👆 "You can have all the motivation and knowledge in the world, if you have no consistency or dedication you will NOT be getting far!!"</p>

                        <p class="card-detail">
                          <a href="{{ route('pages.hashtags') }}">#millionairemotivation</a>
                          <a href="{{ route('pages.hashtags') }}">#moneymotivation</a>
                          <a href="{{ route('pages.hashtags') }}">#entrepreneurmotivation</a>
                          <a href="{{ route('pages.hashtags') }}">#moneyinspiation</a>
                          <a href="{{ route('pages.hashtags') }}">#billionairemotivation</a>
                        </p>

                        <p class="card-detail">
                          <span class="card-for">23/04/2020</span>
                          <span class="card-for">3:02pm</span>
                        </p>
                      </div>
                    </label>
                  </div>

                  <div class="col-3">
                    <input type="checkbox" class="post-selector" id="post-2">
                    <label for="post-2" class="card card-post border">

                      <img alt class="card-img-top" src="{{ asset('images') }}/post2.jpg">

                      <div class="card-body">

                        <p class="card-detail">
                          <img alt class="card-user" src="{{ asset('images') }}/tania.jpg">
                          <span class="card-name">howtomakemoneyfromhome</span>
                        </p>

                        <p class="card-detail">
                          <span class="card-val">132</span>
                          <span class="card-for">likes,</span>
                          <span class="card-val">28</span>
                          <span class="card-for">comments,</span>
                          <span class="card-val">2</span>
                          <span class="card-for">saves</span>
                        </p>

                        <p class="card-detail">👆 "You can have all the motivation and knowledge in the world, if you have no consistency or dedication you will NOT be getting far!!"</p>

                        <p class="card-detail">
                          <a href="{{ route('pages.hashtags') }}">#millionairemotivation</a>
                          <a href="{{ route('pages.hashtags') }}">#moneymotivation</a>
                          <a href="{{ route('pages.hashtags') }}">#entrepreneurmotivation</a>
                          <a href="{{ route('pages.hashtags') }}">#moneyinspiation</a>
                          <a href="{{ route('pages.hashtags') }}">#billionairemotivation</a>
                        </p>

                        <p class="card-detail">
                          <span class="card-for">23/04/2020</span>
                          <span class="card-for">3:02pm</span>
                        </p>
                      </div>
                    </label>
                  </div>

                  <div class="col-3">
                    <input type="checkbox" class="post-selector" id="post-3">
                    <label for="post-3" class="card card-post border">

                      <img alt class="card-img-top" src="{{ asset('images') }}/post3.jpg">

                      <div class="card-body">

                        <p class="card-detail">
                          <img alt class="card-user" src="{{ asset('images') }}/tania.jpg">
                          <span class="card-name">howtomakemoneyfromhome</span>
                        </p>

                        <p class="card-detail">
                          <span class="card-val">132</span>
                          <span class="card-for">likes,</span>
                          <span class="card-val">28</span>
                          <span class="card-for">comments,</span>
                          <span class="card-val">2</span>
                          <span class="card-for">saves</span>
                        </p>

                        <p class="card-detail">👆 "You can have all the motivation and knowledge in the world, if you have no consistency or dedication you will NOT be getting far!!"</p>

                        <p class="card-detail">
                          <a href="{{ route('pages.hashtags') }}">#millionairemotivation</a>
                          <a href="{{ route('pages.hashtags') }}">#moneymotivation</a>
                          <a href="{{ route('pages.hashtags') }}">#entrepreneurmotivation</a>
                          <a href="{{ route('pages.hashtags') }}">#moneyinspiation</a>
                          <a href="{{ route('pages.hashtags') }}">#billionairemotivation</a>
                        </p>

                        <p class="card-detail">
                          <span class="card-for">23/04/2020</span>
                          <span class="card-for">3:02pm</span>
                        </p>
                      </div>
                    </label>
                  </div>

                  <div class="col-3">
                    <input type="checkbox" class="post-selector" id="post-4">
                    <label for="post-4" class="card card-post border">

                      <img alt class="card-img-top" src="{{ asset('images') }}/post4.jpg">

                      <div class="card-body">

                        <p class="card-detail">
                          <img alt class="card-user" src="{{ asset('images') }}/tania.jpg">
                          <span class="card-name">howtomakemoneyfromhome</span>
                        </p>

                        <p class="card-detail">
                          <span class="card-val">132</span>
                          <span class="card-for">likes,</span>
                          <span class="card-val">28</span>
                          <span class="card-for">comments,</span>
                          <span class="card-val">2</span>
                          <span class="card-for">saves</span>
                        </p>

                        <p class="card-detail">👆 "You can have all the motivation and knowledge in the world, if you have no consistency or dedication you will NOT be getting far!!"</p>

                        <p class="card-detail">
                          <a href="{{ route('pages.hashtags') }}">#millionairemotivation</a>
                          <a href="{{ route('pages.hashtags') }}">#moneymotivation</a>
                          <a href="{{ route('pages.hashtags') }}">#entrepreneurmotivation</a>
                          <a href="{{ route('pages.hashtags') }}">#moneyinspiation</a>
                          <a href="{{ route('pages.hashtags') }}">#billionairemotivation</a>
                        </p>

                        <p class="card-detail">
                          <span class="card-for">23/04/2020</span>
                          <span class="card-for">3:02pm</span>
                        </p>
                      </div>
                    </label>
                  </div>

                </div>
                <div class="row">

                  <div class="col-3">
                    <input type="checkbox" class="post-selector" id="post-5">
                    <label for="post-5" class="card card-post border">

                      <img alt class="card-img-top" src="{{ asset('images') }}/post5.jpg">

                      <div class="card-body">

                        <p class="card-detail">
                          <img alt class="card-user" src="{{ asset('images') }}/tania.jpg">
                          <span class="card-name">howtomakemoneyfromhome</span>
                        </p>

                        <p class="card-detail">
                          <span class="card-val">132</span>
                          <span class="card-for">likes,</span>
                          <span class="card-val">28</span>
                          <span class="card-for">comments,</span>
                          <span class="card-val">2</span>
                          <span class="card-for">saves</span>
                        </p>

                        <p class="card-detail">👆 "You can have all the motivation and knowledge in the world, if you have no consistency or dedication you will NOT be getting far!!"</p>

                        <p class="card-detail">
                          <a href="{{ route('pages.hashtags') }}">#millionairemotivation</a>
                          <a href="{{ route('pages.hashtags') }}">#moneymotivation</a>
                          <a href="{{ route('pages.hashtags') }}">#entrepreneurmotivation</a>
                          <a href="{{ route('pages.hashtags') }}">#moneyinspiation</a>
                          <a href="{{ route('pages.hashtags') }}">#billionairemotivation</a>
                        </p>

                        <p class="card-detail">
                          <span class="card-for">23/04/2020</span>
                          <span class="card-for">3:02pm</span>
                        </p>
                      </div>
                    </label>
                  </div>

                  <div class="col-3">
                    <input type="checkbox" class="post-selector" id="post-6">
                    <label for="post-6" class="card card-post border">

                      <img alt class="card-img-top" src="{{ asset('images') }}/post6.jpg">

                      <div class="card-body">

                        <p class="card-detail">
                          <img alt class="card-user" src="{{ asset('images') }}/tania.jpg">
                          <span class="card-name">howtomakemoneyfromhome</span>
                        </p>

                        <p class="card-detail">
                          <span class="card-val">132</span>
                          <span class="card-for">likes,</span>
                          <span class="card-val">28</span>
                          <span class="card-for">comments,</span>
                          <span class="card-val">2</span>
                          <span class="card-for">saves</span>
                        </p>

                        <p class="card-detail">👆 "You can have all the motivation and knowledge in the world, if you have no consistency or dedication you will NOT be getting far!!"</p>

                        <p class="card-detail">
                          <a href="{{ route('pages.hashtags') }}">#millionairemotivation</a>
                          <a href="{{ route('pages.hashtags') }}">#moneymotivation</a>
                          <a href="{{ route('pages.hashtags') }}">#entrepreneurmotivation</a>
                          <a href="{{ route('pages.hashtags') }}">#moneyinspiation</a>
                          <a href="{{ route('pages.hashtags') }}">#billionairemotivation</a>
                        </p>

                        <p class="card-detail">
                          <span class="card-for">23/04/2020</span>
                          <span class="card-for">3:02pm</span>
                        </p>
                      </div>
                    </label>
                  </div>

                  <div class="col-3">
                    <input type="checkbox" class="post-selector" id="post-7">
                    <label for="post-7" class="card card-post border">

                      <img alt class="card-img-top" src="{{ asset('images') }}/post7.jpg">

                      <div class="card-body">

                        <p class="card-detail">
                          <img alt class="card-user" src="{{ asset('images') }}/tania.jpg">
                          <span class="card-name">howtomakemoneyfromhome</span>
                        </p>

                        <p class="card-detail">
                          <span class="card-val">132</span>
                          <span class="card-for">likes,</span>
                          <span class="card-val">28</span>
                          <span class="card-for">comments,</span>
                          <span class="card-val">2</span>
                          <span class="card-for">saves</span>
                        </p>

                        <p class="card-detail">👆 "You can have all the motivation and knowledge in the world, if you have no consistency or dedication you will NOT be getting far!!"</p>

                        <p class="card-detail">
                          <a href="{{ route('pages.hashtags') }}">#millionairemotivation</a>
                          <a href="{{ route('pages.hashtags') }}">#moneymotivation</a>
                          <a href="{{ route('pages.hashtags') }}">#entrepreneurmotivation</a>
                          <a href="{{ route('pages.hashtags') }}">#moneyinspiation</a>
                          <a href="{{ route('pages.hashtags') }}">#billionairemotivation</a>
                        </p>

                        <p class="card-detail">
                          <span class="card-for">23/04/2020</span>
                          <span class="card-for">3:02pm</span>
                        </p>
                      </div>
                    </label>
                  </div>

                  <div class="col-3">
                    <input type="checkbox" class="post-selector" id="post-8">
                    <label for="post-8" class="card card-post border">

                      <img alt class="card-img-top" src="{{ asset('images') }}/post8.jpg">

                      <div class="card-body">

                        <p class="card-detail">
                          <img alt class="card-user" src="{{ asset('images') }}/tania.jpg">
                          <span class="card-name">howtomakemoneyfromhome</span>
                        </p>

                        <p class="card-detail">
                          <span class="card-val">132</span>
                          <span class="card-for">likes,</span>
                          <span class="card-val">28</span>
                          <span class="card-for">comments,</span>
                          <span class="card-val">2</span>
                          <span class="card-for">saves</span>
                        </p>

                        <p class="card-detail">👆 "You can have all the motivation and knowledge in the world, if you have no consistency or dedication you will NOT be getting far!!"</p>

                        <p class="card-detail">
                          <a href="{{ route('pages.hashtags') }}">#millionairemotivation</a>
                          <a href="{{ route('pages.hashtags') }}">#moneymotivation</a>
                          <a href="{{ route('pages.hashtags') }}">#entrepreneurmotivation</a>
                          <a href="{{ route('pages.hashtags') }}">#moneyinspiation</a>
                          <a href="{{ route('pages.hashtags') }}">#billionairemotivation</a>
                        </p>

                        <p class="card-detail">
                          <span class="card-for">23/04/2020</span>
                          <span class="card-for">3:02pm</span>
                        </p>
                      </div>
                    </label>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')

  <script type="module" src="{{ AH::asset('js/pages', '/datatable-only.js') }}"></script>AH::asset('js/pages', '/datatable-only.js') }}
  <script type="module" src="{{ asset('js/pages') }}/posts.js"></script>
@endpush
