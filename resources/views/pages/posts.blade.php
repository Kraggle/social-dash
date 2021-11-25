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
                      <thead>
                        <tr>
                          <th>Post</th>
                          <th>Post URL</th>
                          <th>Type</th>
                          <th>Desciption</th>
                          <th>Likes</th>
                          <th>Comments</th>
                          <th>Date Posted</th>
                          <th>Hashtags</th>
                          <th class="dt-nosort text-end">
                            Actions
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="photo">
                              <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
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
                              <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
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
                              <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
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
                              <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
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
                              <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
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
                              <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
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
                              <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
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
                              <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
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
                              <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
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
                              <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
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
                              <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
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
                              <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
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
                      <tfoot>
                        <tr>
                          <th>Post</th>
                          <th>Post URL</th>
                          <td>Type</td>
                          <th>Desciption</th>
                          <th>Likes</th>
                          <th>Comments</th>
                          <th>Date Posted</th>
                          <th>Hashtags</th>
                          <th class="disabled-sorting text-end">Actions</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- end content-->
                </div>
                <!--  end card  -->
              </div>
              <div class="tab-pane fade" id="pill-visual-tab" role="tabpanel" aria-labelledby="nav-visual-tab">
                <div class="row">
                  <div class="col-3">
                    <div class="card card-post">
                      <div class="card-header">
                        <input type="checkbox" id="myCheckbox1" />
                        <label for="myCheckbox1"><img src="{{ asset('images') }}/post1.jpg"></label>

                        <ul class="nav nav-pills nav-pills-warning nav-pills-icons justify-content-center pt-2">
                          <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#link7">
                              @icon('fas fa-analytics')
                              Data
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#link8">
                              @icon('fal fa-comments')
                              Caption
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#link9">
                              @icon('fas fa-hashtag')
                              Hashtags
                            </a>
                          </li>
                        </ul>
                        <div class="tab-content tab-subcategories mt-0">
                          <div class="tab-pane active" id="link7">
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Type:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>Photo</p>
                              </div>
                            </div>
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Likes:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>132</p>
                              </div>
                            </div>
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Comments:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>31</p>
                              </div>
                            </div>
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Date:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>07/05/2020</p>
                              </div>
                            </div>
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Time:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>15:08</p>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane" id="link8">
                            <p>👆 "You can have all the motivation and knowledge in the world,
                              if
                              you have no consistency or dedication you will NOT be getting
                              far!!"
                            </p>
                          </div>
                          <div class="tab-pane" id="link9">
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#moneymotivation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                  <span class="progress-value">86</span>
                                </div>
                              </div>
                            </div>
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#millionairemotivation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 98%;">
                                  <span class="progress-value">98</span>
                                </div>
                              </div>
                            </div>
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#entrepreneurmotivation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 72%;">
                                  <span class="progress-value">72</span>
                                </div>
                              </div>
                            </div>
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#moneyinspiation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                  <span class="progress-value">70</span>
                                </div>
                              </div>
                            </div>
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#billionairemotivation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                  <span class="progress-value">70</span>
                                </div>
                              </div>
                            </div>
                            <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-2">
                              <ul class="pagination pagination-warning">
                                <li class="page-item active">
                                  <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">4</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">5</a>
                                </li>
                              </ul>
                            </nav>
                            {{-- <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#millionairememes</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                                <span class="progress-value">70</span>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#millionairememe</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                                                <span class="progress-value">65</span>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#mondaymotivation</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 52%;">
                                                <span class="progress-value">52</span>
                                              </div>
                                            </div>
                                        </div> --}}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="card card-post">
                      <div class="card-header">
                        <input type="checkbox" id="myCheckbox2" />
                        <label for="myCheckbox2"><img src="{{ asset('images') }}/post2.jpg"></label>

                        <ul class="nav nav-pills nav-pills-warning nav-pills-icons justify-content-center pt-2">
                          <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#link10">
                              @icon('fas fa-analytics')
                              Data
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#link11">
                              @icon('fal fa-comments')
                              Caption
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#link12">
                              @icon('fas fa-hashtag')
                              Hashtags
                            </a>
                          </li>
                        </ul>
                        <div class="tab-content tab-subcategories mt-0">
                          <div class="tab-pane active" id="link10">
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Type:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>Photo</p>
                              </div>
                            </div>
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Likes:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>132</p>
                              </div>
                            </div>
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Comments:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>31</p>
                              </div>
                            </div>
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Date:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>07/05/2020</p>
                              </div>
                            </div>
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Time:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>15:08</p>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane" id="link11">
                            <p>👆 "You can have all the motivation and knowledge in the world,
                              if
                              you have no consistency or dedication you will NOT be getting
                              far!!"
                            </p>
                          </div>
                          <div class="tab-pane" id="link12">
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#moneymotivation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                  <span class="progress-value">86</span>
                                </div>
                              </div>
                            </div>
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#millionairemotivation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 98%;">
                                  <span class="progress-value">98</span>
                                </div>
                              </div>
                            </div>
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#entrepreneurmotivation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 72%;">
                                  <span class="progress-value">72</span>
                                </div>
                              </div>
                            </div>
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#moneyinspiation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                  <span class="progress-value">70</span>
                                </div>
                              </div>
                            </div>
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#billionairemotivation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                  <span class="progress-value">70</span>
                                </div>
                              </div>
                            </div>
                            <nav aria-label="Page navigation example">
                              <ul class="pagination pagination-warning">
                                <li class="page-item active">
                                  <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">4</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">5</a>
                                </li>
                              </ul>
                            </nav>
                            {{-- <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#millionairememes</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                                <span class="progress-value">70</span>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#millionairememe</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                                                <span class="progress-value">65</span>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#mondaymotivation</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 52%;">
                                                <span class="progress-value">52</span>
                                              </div>
                                            </div>
                                        </div> --}}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="card card-post">
                      <div class="card-header">
                        <input type="checkbox" id="myCheckbox3" />
                        <label for="myCheckbox3"><img src="{{ asset('images') }}/post3.jpg"></label>

                        <ul class="nav nav-pills nav-pills-warning nav-pills-icons justify-content-center pt-2">
                          <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#link13">
                              @icon('fas fa-analytics')
                              Data
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#link14">
                              @icon('fal fa-comments')
                              Caption
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#link15">
                              @icon('fas fa-hashtag')
                              Hashtags
                            </a>
                          </li>
                        </ul>
                        <div class="tab-content tab-subcategories mt-0">
                          <div class="tab-pane active" id="link13">
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Type:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>Photo</p>
                              </div>
                            </div>
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Likes:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>132</p>
                              </div>
                            </div>
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Comments:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>31</p>
                              </div>
                            </div>
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Date:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>07/05/2020</p>
                              </div>
                            </div>
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Time:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>15:08</p>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane" id="link14">
                            <p>👆 "You can have all the motivation and knowledge in the world,
                              if
                              you have no consistency or dedication you will NOT be getting
                              far!!"
                            </p>
                          </div>
                          <div class="tab-pane" id="link15">
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#moneymotivation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                  <span class="progress-value">86</span>
                                </div>
                              </div>
                            </div>
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#millionairemotivation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 98%;">
                                  <span class="progress-value">98</span>
                                </div>
                              </div>
                            </div>
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#entrepreneurmotivation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 72%;">
                                  <span class="progress-value">72</span>
                                </div>
                              </div>
                            </div>
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#moneyinspiation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                  <span class="progress-value">70</span>
                                </div>
                              </div>
                            </div>
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#billionairemotivation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                  <span class="progress-value">70</span>
                                </div>
                              </div>
                            </div>
                            <nav aria-label="Page navigation example">
                              <ul class="pagination pagination-warning">
                                <li class="page-item active">
                                  <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">4</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">5</a>
                                </li>
                              </ul>
                            </nav>
                            {{-- <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#millionairememes</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                                <span class="progress-value">70</span>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#millionairememe</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                                                <span class="progress-value">65</span>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#mondaymotivation</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 52%;">
                                                <span class="progress-value">52</span>
                                              </div>
                                            </div>
                                        </div> --}}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="card card-post">
                      <div class="card-header">
                        <input type="checkbox" id="myCheckbox4" />
                        <label for="myCheckbox4"><img src="{{ asset('images') }}/post4.jpg"></label>

                        <ul class="nav nav-pills nav-pills-warning nav-pills-icons justify-content-center pt-2">
                          <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#link16">
                              @icon('fas fa-analytics')
                              Data
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#link17">
                              @icon('fal fa-comments')
                              Caption
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#link18">
                              @icon('fas fa-hashtag')
                              Hashtags
                            </a>
                          </li>
                        </ul>
                        <div class="tab-content tab-subcategories mt-0">
                          <div class="tab-pane active" id="link16">
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Type:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>Photo</p>
                              </div>
                            </div>
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Likes:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>132</p>
                              </div>
                            </div>
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Comments:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>31</p>
                              </div>
                            </div>
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Date:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>07/05/2020</p>
                              </div>
                            </div>
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Time:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>15:08</p>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane" id="link17">
                            <p>👆 "You can have all the motivation and knowledge in the world,
                              if
                              you have no consistency or dedication you will NOT be getting
                              far!!"
                            </p>
                          </div>
                          <div class="tab-pane" id="link18">
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#moneymotivation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                  <span class="progress-value">86</span>
                                </div>
                              </div>
                            </div>
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#millionairemotivation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 98%;">
                                  <span class="progress-value">98</span>
                                </div>
                              </div>
                            </div>
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#entrepreneurmotivation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 72%;">
                                  <span class="progress-value">72</span>
                                </div>
                              </div>
                            </div>
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#moneyinspiation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                  <span class="progress-value">70</span>
                                </div>
                              </div>
                            </div>
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#billionairemotivation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                  <span class="progress-value">70</span>
                                </div>
                              </div>
                            </div>
                            <nav aria-label="Page navigation example">
                              <ul class="pagination pagination-warning">
                                <li class="page-item active">
                                  <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">4</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">5</a>
                                </li>
                              </ul>
                            </nav>
                            {{-- <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#millionairememes</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                                <span class="progress-value">70</span>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#millionairememe</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                                                <span class="progress-value">65</span>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#mondaymotivation</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 52%;">
                                                <span class="progress-value">52</span>
                                              </div>
                                            </div>
                                        </div> --}}
                          </div>
                        </div>
                        {{-- <div class="row card-stats">
                                    <div class="col-2">
                                        <div class="info-icon text-center icon-warning">
                                            @icon('fal fa-play')

                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <p>You can have all the motivation and knowledge in the world, if you have no consistency or dedication you will NOT be getting far!!</p>
                                    </div>
                                </div>
                                <div class="row card-stats">
                                    <div class="col-2">
                                        <div class="info-icon text-center icon-warning">
                                          @icon('fal fa-heart')

                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <p>132</p>
                                    </div>
                                </div>
                                <div class="row card-stats">
                                    <div class="col-2">
                                        <div class="info-icon text-center icon-warning">
                                            @icon('fal fa-comments')

                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <p>31</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <input type="text" value="#millionairemotivation,#moneymotivation,#hashtags,#cory,#beevers,#fillitup,#hashyhashtag,#millionairemotivation,#motivationalquote,#motivationalmeme,#moneymotivation,#moneyinspiration,#moneymentor,#anotherhashtag,#andanother,#have10intotal" class="tagsinput" data-role="tagsinput" data-color="warning" />
                                </div> --}}
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-3">
                    <div class="card card-post">
                      <div class="card-header">
                        <input type="checkbox" id="myCheckbox5" />
                        <label for="myCheckbox5"><img src="{{ asset('images') }}/post5.jpg"></label>

                        <ul class="nav nav-pills nav-pills-warning nav-pills-icons justify-content-center pt-2">
                          <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#link19">
                              @icon('fas fa-analytics')
                              Data
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#link20">
                              @icon('fal fa-comments')
                              Caption
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#link21">
                              @icon('fas fa-hashtag')
                              Hashtags
                            </a>
                          </li>
                        </ul>
                        <div class="tab-content tab-subcategories mt-0">
                          <div class="tab-pane active" id="link19">
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Type:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>Photo</p>
                              </div>
                            </div>
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Likes:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>132</p>
                              </div>
                            </div>
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Comments:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>31</p>
                              </div>
                            </div>
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Date:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>07/05/2020</p>
                              </div>
                            </div>
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Time:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>15:08</p>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane" id="link20">
                            <p>👆 "You can have all the motivation and knowledge in the world,
                              if
                              you have no consistency or dedication you will NOT be getting
                              far!!"
                            </p>
                          </div>
                          <div class="tab-pane" id="link21">
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#moneymotivation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                  <span class="progress-value">86</span>
                                </div>
                              </div>
                            </div>
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#millionairemotivation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 98%;">
                                  <span class="progress-value">98</span>
                                </div>
                              </div>
                            </div>
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#entrepreneurmotivation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 72%;">
                                  <span class="progress-value">72</span>
                                </div>
                              </div>
                            </div>
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#moneyinspiation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                  <span class="progress-value">70</span>
                                </div>
                              </div>
                            </div>
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#billionairemotivation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                  <span class="progress-value">70</span>
                                </div>
                              </div>
                            </div>
                            <nav aria-label="Page navigation example">
                              <ul class="pagination pagination-warning">
                                <li class="page-item active">
                                  <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">4</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">5</a>
                                </li>
                              </ul>
                            </nav>
                            {{-- <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#millionairememes</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                                <span class="progress-value">70</span>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#millionairememe</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                                                <span class="progress-value">65</span>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#mondaymotivation</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 52%;">
                                                <span class="progress-value">52</span>
                                              </div>
                                            </div>
                                        </div> --}}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="card card-post">
                      <div class="card-header">
                        <input type="checkbox" id="myCheckbox6" />
                        <label for="myCheckbox6"><img src="{{ asset('images') }}/post6.jpg"></label>

                        <ul class="nav nav-pills nav-pills-warning nav-pills-icons justify-content-center pt-2">
                          <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#link22">
                              @icon('fas fa-analytics')
                              Data
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#link23">
                              @icon('fal fa-comments')
                              Caption
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#link24">
                              @icon('fas fa-hashtag')
                              Hashtags
                            </a>
                          </li>
                        </ul>
                        <div class="tab-content tab-subcategories mt-0">
                          <div class="tab-pane active" id="link22">
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Type:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>Photo</p>
                              </div>
                            </div>
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Likes:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>132</p>
                              </div>
                            </div>
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Comments:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>31</p>
                              </div>
                            </div>
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Date:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>07/05/2020</p>
                              </div>
                            </div>
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Time:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>15:08</p>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane" id="link23">
                            <p>👆 "You can have all the motivation and knowledge in the world,
                              if
                              you have no consistency or dedication you will NOT be getting
                              far!!"
                            </p>
                          </div>
                          <div class="tab-pane" id="link24">
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#moneymotivation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                  <span class="progress-value">86</span>
                                </div>
                              </div>
                            </div>
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#millionairemotivation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 98%;">
                                  <span class="progress-value">98</span>
                                </div>
                              </div>
                            </div>
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#entrepreneurmotivation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 72%;">
                                  <span class="progress-value">72</span>
                                </div>
                              </div>
                            </div>
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#moneyinspiation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                  <span class="progress-value">70</span>
                                </div>
                              </div>
                            </div>
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#billionairemotivation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                  <span class="progress-value">70</span>
                                </div>
                              </div>
                            </div>
                            <nav aria-label="Page navigation example">
                              <ul class="pagination pagination-warning">
                                <li class="page-item active">
                                  <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">4</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">5</a>
                                </li>
                              </ul>
                            </nav>
                            {{-- <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#millionairememes</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                                <span class="progress-value">70</span>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#millionairememe</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                                                <span class="progress-value">65</span>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#mondaymotivation</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 52%;">
                                                <span class="progress-value">52</span>
                                              </div>
                                            </div>
                                        </div> --}}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="card card-post">
                      <div class="card-header">
                        <input type="checkbox" id="myCheckbox7" />
                        <label for="myCheckbox7"><img src="{{ asset('images') }}/post7.jpg"></label>
                        <ul class="nav nav-pills nav-pills-warning nav-pills-icons justify-content-center pt-2">
                          <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#link25">
                              @icon('fas fa-analytics')
                              Data
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#link26">
                              @icon('fal fa-comments')
                              Caption
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#link27">
                              @icon('fas fa-hashtag')
                              Hashtags
                            </a>
                          </li>
                        </ul>
                        <div class="tab-content tab-subcategories mt-0">
                          <div class="tab-pane active" id="link25">
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Type:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>Photo</p>
                              </div>
                            </div>
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Likes:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>132</p>
                              </div>
                            </div>
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Comments:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>31</p>
                              </div>
                            </div>
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Date:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>07/05/2020</p>
                              </div>
                            </div>
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Time:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>15:08</p>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane" id="link26">
                            <p>👆 "You can have all the motivation and knowledge in the world,
                              if
                              you have no consistency or dedication you will NOT be getting
                              far!!"
                            </p>
                          </div>
                          <div class="tab-pane" id="link27">
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#moneymotivation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                  <span class="progress-value">86</span>
                                </div>
                              </div>
                            </div>
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#millionairemotivation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 98%;">
                                  <span class="progress-value">98</span>
                                </div>
                              </div>
                            </div>
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#entrepreneurmotivation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 72%;">
                                  <span class="progress-value">72</span>
                                </div>
                              </div>
                            </div>
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#moneyinspiation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                  <span class="progress-value">70</span>
                                </div>
                              </div>
                            </div>
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#billionairemotivation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                  <span class="progress-value">70</span>
                                </div>
                              </div>
                            </div>
                            <nav aria-label="Page navigation example">
                              <ul class="pagination pagination-warning">
                                <li class="page-item active">
                                  <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">4</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">5</a>
                                </li>
                              </ul>
                            </nav>
                            {{-- <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#millionairememes</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                                <span class="progress-value">70</span>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#millionairememe</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                                                <span class="progress-value">65</span>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#mondaymotivation</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 52%;">
                                                <span class="progress-value">52</span>
                                              </div>
                                            </div>
                                        </div> --}}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="card card-post">
                      <div class="card-header">
                        <input type="checkbox" id="myCheckbox8" />
                        <label for="myCheckbox8"><img src="{{ asset('images') }}/post8.jpg"></label>
                        <ul class="nav nav-pills nav-pills-warning nav-pills-icons justify-content-center pt-2">
                          <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#link28">
                              @icon('fas fa-analytics')
                              Data
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#link29">
                              @icon('fal fa-comments')
                              Caption
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#link30">
                              @icon('fas fa-hashtag')
                              Hashtags
                            </a>
                          </li>
                        </ul>
                        <div class="tab-content tab-subcategories mt-0">
                          <div class="tab-pane active" id="link28">
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Type:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>Photo</p>
                              </div>
                            </div>
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Likes:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>132</p>
                              </div>
                            </div>
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Comments:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>31</p>
                              </div>
                            </div>
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Date:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>07/05/2020</p>
                              </div>
                            </div>
                            <div class="row card-stats">
                              <div class="col-6">
                                <h4><a href="{{ route('pages.post') }}">Time:</a>
                                </h4>
                              </div>
                              <div class="col-6">
                                <p>15:08</p>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane" id="link29">
                            <p>👆 "You can have all the motivation and knowledge in the world,
                              if
                              you have no consistency or dedication you will NOT be getting
                              far!!"
                            </p>
                          </div>
                          <div class="tab-pane" id="link30">
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#moneymotivation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                  <span class="progress-value">86</span>
                                </div>
                              </div>
                            </div>
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#millionairemotivation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 98%;">
                                  <span class="progress-value">98</span>
                                </div>
                              </div>
                            </div>
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#entrepreneurmotivation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 72%;">
                                  <span class="progress-value">72</span>
                                </div>
                              </div>
                            </div>
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#moneyinspiation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                  <span class="progress-value">70</span>
                                </div>
                              </div>
                            </div>
                            <div class="progress-container progress-warning">
                              <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#billionairemotivation</a></span>
                              <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                  <span class="progress-value">70</span>
                                </div>
                              </div>
                            </div>
                            <nav aria-label="Page navigation example">
                              <ul class="pagination pagination-warning">
                                <li class="page-item active">
                                  <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">4</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">5</a>
                                </li>
                              </ul>
                            </nav>
                            {{-- <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#millionairememes</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                                <span class="progress-value">70</span>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#millionairememe</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                                                <span class="progress-value">65</span>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#mondaymotivation</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 52%;">
                                                <span class="progress-value">52</span>
                                              </div>
                                            </div>
                                        </div> --}}
                          </div>
                        </div>
                      </div>
                    </div>
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
