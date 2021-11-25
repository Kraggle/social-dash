@extends('layouts.app', [
'activePage' => 'followers',
'menuParent' => 'analytics',
'titlePage' => __('followers')
])

@php
$page = 'followers'; // Used to get and set cookies
$cookie = AppHelper::getPageCookie($page);
@endphp

@section('content')
  <div class="content" data-page="{{ $page }}">
    <div class="row">
      <div class="col-12">
        <div class="card card-chart">
          <div class="card-header row">
            <div class="col-md-4">
              <h5 class="card-category">Account Followers</h5>
              <h3 class="card-title">Followers</h3>
            </div>

            <div class="row col-md-8 align-items-start justify-content-end pe-0">

              <div class="col-auto pe-0">
                @include('forms.datepicker', ['settings' => [
                'cookie' => $cookie,
                'id' => 'f-chart-date'
                ]])
              </div>

              {{-- chart day selector --}}
              @include('forms.chart-radio', ['settings' => [
              'name' => 'f-chart-day',
              'color' => 'warning',
              'buttons' => [[
              'display' => __('Daily'),
              'id' => 'f-chart-day-1',
              'value' => 'day',
              'icon' => 'fal fa-calendar-day'
              ], [
              'display' => __('Weekly'),
              'id' => 'f-chart-day-2',
              'value' => 'week',
              'icon' => 'fal fa-calendar-week'
              ], [
              'display' => __('Monthly'),
              'id' => 'f-chart-day-3',
              'value' => 'month',
              'icon' => 'fal fa-calendar'
              ]],
              'group_class' => 'btn-group-sm pe-0',
              'group_attrs' => 'data-chart-scale',
              'cookie' => $cookie
              ]])

              {{-- chart line selector --}}
              {{-- There is only one line, so we'll hide this with d-none --}}
              {{-- We still need it for the color and tooltip label --}}
              @include('forms.chart-toggles', ['settings' => [
              'buttons' => [[
              'id' => 'f-chart-line-1',
              'color' => 'yellow',
              'display' => __('Followers'),
              'icon' => 'fal fa-users',
              ]],
              'group_class' => 'd-none',
              'group_attrs' => 'data-chart-toggles',
              'cookie' => $cookie
              ]])

            </div>
          </div>

          <div class="card-body">
            <div class="chart-area">
              <canvas id="follower-chart" data-type="line" data-height="280"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="card card-chart">
          <div class="card-header row">

            <div class="col-md-6">
              <h5 class="card-category">Compare Followers</h5>
              <h3 class="card-title">Follow VS Un-Follow</h3>
            </div>

            <div class="row col-md-6 align-items-start justify-content-end pe-0">

              <div class="col-auto pe-0">
                @include('forms.datepicker', ['settings' => [
                'cookie' => $cookie,
                'id' => 'u-chart-date',
                'data' => ['alt-format' => 'F, Y']
                ]])
              </div>

              {{-- chart line selector --}}
              {{-- There is only one line, so we'll hide this with d-none --}}
              {{-- We still need it for the color and tooltip label --}}
              @include('forms.chart-toggles', ['settings' => [
              'buttons' => [[
              'id' => 'u-chart-bar-1',
              'color' => 'orange',
              'display' => __('Followers'),
              'icon' => 'fal fa-users',
              'checked' => true
              ],[
              'id' => 'u-chart-bar-2',
              'color' => 'blue',
              'display' => __('Un-followers'),
              'icon' => 'fal fa-heart',
              'checked' => true
              ]],
              'group_class' => 'btn-group-sm pe-0 d-none',
              'group_attrs' => 'data-chart-toggles',
              'cookie' => $cookie
              ]])

              {{-- chart day selector --}}
              {{-- There is only one line, so we'll hide this with d-none --}}
              {{-- We still need it for the color and tooltip label --}}
              @include('forms.chart-radio', ['settings' => [
              'name' => 'u-chart-day',
              'color' => 'warning',
              'buttons' => [[
              'display' => __('Monthly'),
              'id' => 'u-chart-day-1',
              'value' => 'month',
              'icon' => 'fal fa-calendar-day'
              ]],
              'group_class' => 'btn-group-sm pe-0 d-none',
              'group_attrs' => 'data-chart-scale',
              'cookie' => $cookie
              ]])

            </div>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="follow-vs-unfollow-chart" data-type="bar" data-height="250"></canvas>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card card-chart">
          <div class="card-header row">

            <div class="col-md-6">
              <h5 class="card-category">Overall Account Followers</h5>
              <h3 class="card-title">Followers All-Time</h3>
            </div>

            <div class="row col-md-6 align-items-start justify-content-end pe-0">

              <div class="col-auto pe-0">
                @include('forms.datepicker', ['settings' => [
                'cookie' => $cookie,
                'id' => 'o-chart-date',
                'data' => ['alt-format' => 'F, Y']
                ]])
              </div>

              {{-- chart line selector --}}
              {{-- There is only one line, so we'll hide this with d-none --}}
              {{-- We still need it for the color and tooltip label --}}
              @include('forms.chart-toggles', ['settings' => [
              'buttons' => [[
              'id' => 'o-chart-bar-1',
              'color' => 'green',
              'display' => __('Followers'),
              'icon' => 'fal fa-users'
              ]],
              'group_class' => 'btn-group-sm pe-0 d-none',
              'group_attrs' => 'data-chart-toggles',
              'cookie' => $cookie
              ]])

              {{-- chart day selector --}}
              {{-- There is only one line, so we'll hide this with d-none --}}
              {{-- We still need it for the color and tooltip label --}}
              @include('forms.chart-radio', ['settings' => [
              'name' => 'o-chart-day',
              'color' => 'warning',
              'buttons' => [[
              'display' => __('Monthly'),
              'id' => 'o-chart-day-1',
              'value' => 'month',
              'icon' => 'fal fa-calendar-day'
              ]],
              'group_class' => 'btn-group-sm pe-0 d-none',
              'group_attrs' => 'data-chart-scale',
              'cookie' => $cookie
              ]])

            </div>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="follow-all-time-chart" data-type="line" data-height="250"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8 mx-auto">
        <h2 class="text-center">Follower Activity</h2>
        <p class="text-center">Search and analyse through your data to compare and analyse the what/why and
          hows
          of your Instagram engagement. We allow you to sort and search through everything to give you the
          best understanding of your data.
          <br><a href="https://social-shadow.com/" target="_blank">How To Benefit From This?</a>
        </p>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <div class="toolbar">
              <!--        Here you can write extra buttons/actions for the toolbar              -->
            </div>
            <table id="datatable" class="table table-striped">
              <thead>
                <tr>
                  <th>Profile</th>
                  <th>Instagram UN</th>
                  <th>Followers</th>
                  <th>Posts</th>
                  <th>Likes</th>
                  <th>Comments</th>
                  <th>Avg Likes</th>
                  <th>Avg Comments</th>
                  <th>Action</th>
                  <th class="dt-nosort text-end">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="photo">
                      <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                    </div>
                  </td>
                  <td>@mattymyers</td>
                  <td>1,287</td>
                  <td>196</td>
                  <td>19,600</td>
                  <td>392</td>
                  <td>1,500</td>
                  <td>2</td>
                  <td>Followed</th>
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
                  <td>@corybeevers</td>
                  <td>129,362</td>
                  <td>2,500</td>
                  <td>25,000,000</td>
                  <td>250,000</td>
                  <td>10,000</td>
                  <td>100</td< /td>
                  <td>Followed</th>
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
                  <td>@HaydenKibble</td>
                  <td>127</td>
                  <td>9</td>
                  <td>90</td>
                  <td>18</td>
                  <td>10</td>
                  <td>2</td>
                  <td>Followed</th>
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
                  <td>@kraggle</td>
                  <td>491</td>
                  <td>60</td>
                  <td>7,200</td>
                  <td>600</td>
                  <td>120</td>
                  <td>10</td>
                  <td>Un-Followed</th>
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
      <!-- end col-md-12 -->
    </div>
    <!-- end row -->
  </div>
@endsection


@push('js')
  <script src="{{ AH::asset('js/pages', '/datatable-only.js') }}" type="module"></script>AH::asset('js/pages', '/datatable-only.js') }}
  <script src="{{ asset('js/pages') }}/followers.js" type="module"></script>
@endpush
