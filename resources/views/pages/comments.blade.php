@extends('layouts.app', [
'activePage' => 'comments',
'menuParent' => 'analytics',
'titlePage' => __('Comments')
])

@php
$page = 'comments'; // Used to get and set cookies
$cookie = AppHelper::getPageCookie($page);
@endphp

@section('content')
  <div class="content" data-page="{{ $page }}">
    <div class="row">
      <div class="col-12">
        <div class="card card-chart">

          <div class="card-header row">
            <div class="col-md-4">
              <h5 class="card-category">Overall Comments</h5>
              <h2 class="card-title">Comments</h2>
            </div>

            <div class="row col-md-8 align-items-start justify-content-end">

              <div class="col-auto pe-0">
                @include('forms.datepicker', ['options' => [
                'cookie' => $cookie,
                'id' => 'c-chart-date'
                ]])
              </div>

              {{-- chart day selector --}}
              @include('forms.chart-radio', ['options' => [
              'name' => 'c-chart-day',
              'color' => 'warning',
              'buttons' => [[
              'display' => __('Daily'),
              'id' => 'c-chart-day-1',
              'value' => 'day',
              'icon' => 'fal fa-calendar-day'
              ], [
              'display' => __('Weekly'),
              'id' => 'c-chart-day-2',
              'value' => 'week',
              'icon' => 'fal fa-calendar-week'
              ], [
              'display' => __('Monthly'),
              'id' => 'c-chart-day-3',
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
              @include('forms.chart-toggles', ['options' => [
              'buttons' => [[
              'id' => 'c-chart-line-1',
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
              <canvas id="comments-chart" data-type="line" data-height="280"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 mx-auto">
        <h2 class="text-center">Recent Comments</h2>
        <p class="text-center">Search and analyse through your data to compare and analyse the what/why and hows of your
          Instagram engagement. We allow you to sort and search through everything to give you the best understanding of
          your data.
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
                  <th title="The Instagram commenters profile icon.">Profile</th>
                  <th title="The username of the Instagram account who has commented.">Instagram
                    UN</th>
                  <th title="The amount of followers this individual user has in total.">Followers
                  </th>
                  <th title="The post of which the user has commented on.">Post URL</th>
                  <th title="A summary of the comment that was placed by the individual user.">
                    Description</th>
                  <th title="A total of likes the comment has recieved.">Likes</th>
                  <th title="The amount of other comments this user has posted on your posts.">
                    Total Comments</th>
                  <th class="sorting_desc_disabled sorting_asc_disabled text-end">Actions</th>
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
                  <td>/p/CLmHaJSptE6/</td>
                  <td>Great quality content! Ke...</td>
                  <td>3</td>
                  <td>7</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
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
                  <td>/p/CL9dh6d4lPO/</td>
                  <td>Check out this post @do...</td>
                  <td>7</td>
                  <td>24</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="photo">
                      <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                    </div>
                  </td>
                  <td>@HaydenKibble</td>
                  <td>8,921</td>
                  <td>/p/CLmHaJSptE6/</td>
                  <td>Awsome post dude than...</td>
                  <td>19</td>
                  <td>2</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm  edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
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
                  <td>/p/CLmHaJSptE6/</td>
                  <td>Thank you for the cont...</td>
                  <td>1</td>
                  <td>72</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="photo">
                      <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                    </div>
                  </td>
                  <td>@mattymyers</td>
                  <td>1,287</td>
                  <td>/p/CLmHaJSptE6/</td>
                  <td>Great quality content! Ke...</td>
                  <td>3</td>
                  <td>7</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
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
                  <td>/p/CL9dh6d4lPO/</td>
                  <td>Check out this post @do...</td>
                  <td>7</td>
                  <td>24</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="photo">
                      <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                    </div>
                  </td>
                  <td>@HaydenKibble</td>
                  <td>8,921</td>
                  <td>/p/CLmHaJSptE6/</td>
                  <td>Awsome post dude than...</td>
                  <td>19</td>
                  <td>2</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm  edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
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
                  <td>/p/CLmHaJSptE6/</td>
                  <td>Thank you for the cont...</td>
                  <td>1</td>
                  <td>72</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="photo">
                      <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                    </div>
                  </td>
                  <td>@mattymyers</td>
                  <td>1,287</td>
                  <td>/p/CLmHaJSptE6/</td>
                  <td>Great quality content! Ke...</td>
                  <td>3</td>
                  <td>7</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
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
                  <td>/p/CL9dh6d4lPO/</td>
                  <td>Check out this post @do...</td>
                  <td>7</td>
                  <td>24</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="photo">
                      <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                    </div>
                  </td>
                  <td>@HaydenKibble</td>
                  <td>8,921</td>
                  <td>/p/CLmHaJSptE6/</td>
                  <td>Awsome post dude than...</td>
                  <td>19</td>
                  <td>2</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm  edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
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
                  <td>/p/CLmHaJSptE6/</td>
                  <td>Thank you for the cont...</td>
                  <td>1</td>
                  <td>72</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="photo">
                      <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                    </div>
                  </td>
                  <td>@mattymyers</td>
                  <td>1,287</td>
                  <td>/p/CLmHaJSptE6/</td>
                  <td>Great quality content! Ke...</td>
                  <td>3</td>
                  <td>7</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
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
                  <td>/p/CL9dh6d4lPO/</td>
                  <td>Check out this post @do...</td>
                  <td>7</td>
                  <td>24</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="photo">
                      <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                    </div>
                  </td>
                  <td>@HaydenKibble</td>
                  <td>8,921</td>
                  <td>/p/CLmHaJSptE6/</td>
                  <td>Awsome post dude than...</td>
                  <td>19</td>
                  <td>2</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm  edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
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
                  <td>/p/CLmHaJSptE6/</td>
                  <td>Thank you for the cont...</td>
                  <td>1</td>
                  <td>72</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="photo">
                      <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                    </div>
                  </td>
                  <td>@mattymyers</td>
                  <td>1,287</td>
                  <td>/p/CLmHaJSptE6/</td>
                  <td>Great quality content! Ke...</td>
                  <td>3</td>
                  <td>7</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
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
                  <td>/p/CL9dh6d4lPO/</td>
                  <td>Check out this post @do...</td>
                  <td>7</td>
                  <td>24</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="photo">
                      <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                    </div>
                  </td>
                  <td>@HaydenKibble</td>
                  <td>8,921</td>
                  <td>/p/CLmHaJSptE6/</td>
                  <td>Awsome post dude than...</td>
                  <td>19</td>
                  <td>2</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm  edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
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
                  <td>/p/CLmHaJSptE6/</td>
                  <td>Thank you for the cont...</td>
                  <td>1</td>
                  <td>72</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="photo">
                      <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                    </div>
                  </td>
                  <td>@mattymyers</td>
                  <td>1,287</td>
                  <td>/p/CLmHaJSptE6/</td>
                  <td>Great quality content! Ke...</td>
                  <td>3</td>
                  <td>7</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
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
                  <td>/p/CL9dh6d4lPO/</td>
                  <td>Check out this post @do...</td>
                  <td>7</td>
                  <td>24</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="photo">
                      <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                    </div>
                  </td>
                  <td>@HaydenKibble</td>
                  <td>8,921</td>
                  <td>/p/CLmHaJSptE6/</td>
                  <td>Awsome post dude than...</td>
                  <td>19</td>
                  <td>2</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm  edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
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
                  <td>/p/CLmHaJSptE6/</td>
                  <td>Thank you for the cont...</td>
                  <td>1</td>
                  <td>72</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="photo">
                      <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                    </div>
                  </td>
                  <td>@mattymyers</td>
                  <td>1,287</td>
                  <td>/p/CLmHaJSptE6/</td>
                  <td>Great quality content! Ke...</td>
                  <td>3</td>
                  <td>7</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
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
                  <td>/p/CL9dh6d4lPO/</td>
                  <td>Check out this post @do...</td>
                  <td>7</td>
                  <td>24</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="photo">
                      <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                    </div>
                  </td>
                  <td>@HaydenKibble</td>
                  <td>8,921</td>
                  <td>/p/CLmHaJSptE6/</td>
                  <td>Awsome post dude than...</td>
                  <td>19</td>
                  <td>2</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm  edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
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
                  <td>/p/CLmHaJSptE6/</td>
                  <td>Thank you for the cont...</td>
                  <td>1</td>
                  <td>72</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="photo">
                      <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                    </div>
                  </td>
                  <td>@mattymyers</td>
                  <td>1,287</td>
                  <td>/p/CLmHaJSptE6/</td>
                  <td>Great quality content! Ke...</td>
                  <td>3</td>
                  <td>7</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
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
                  <td>/p/CL9dh6d4lPO/</td>
                  <td>Check out this post @do...</td>
                  <td>7</td>
                  <td>24</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="photo">
                      <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                    </div>
                  </td>
                  <td>@HaydenKibble</td>
                  <td>8,921</td>
                  <td>/p/CLmHaJSptE6/</td>
                  <td>Awsome post dude than...</td>
                  <td>19</td>
                  <td>2</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm  edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
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
                  <td>/p/CLmHaJSptE6/</td>
                  <td>Thank you for the cont...</td>
                  <td>1</td>
                  <td>72</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="photo">
                      <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                    </div>
                  </td>
                  <td>@mattymyers</td>
                  <td>1,287</td>
                  <td>/p/CLmHaJSptE6/</td>
                  <td>Great quality content! Ke...</td>
                  <td>3</td>
                  <td>7</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
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
                  <td>/p/CL9dh6d4lPO/</td>
                  <td>Check out this post @do...</td>
                  <td>7</td>
                  <td>24</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="photo">
                      <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                    </div>
                  </td>
                  <td>@HaydenKibble</td>
                  <td>8,921</td>
                  <td>/p/CLmHaJSptE6/</td>
                  <td>Awsome post dude than...</td>
                  <td>19</td>
                  <td>2</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm  edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
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
                  <td>/p/CLmHaJSptE6/</td>
                  <td>Thank you for the cont...</td>
                  <td>1</td>
                  <td>72</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="photo">
                      <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                    </div>
                  </td>
                  <td>@mattymyers</td>
                  <td>1,287</td>
                  <td>/p/CLmHaJSptE6/</td>
                  <td>Great quality content! Ke...</td>
                  <td>3</td>
                  <td>7</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
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
                  <td>/p/CL9dh6d4lPO/</td>
                  <td>Check out this post @do...</td>
                  <td>7</td>
                  <td>24</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="photo">
                      <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                    </div>
                  </td>
                  <td>@HaydenKibble</td>
                  <td>8,921</td>
                  <td>/p/CLmHaJSptE6/</td>
                  <td>Awsome post dude than...</td>
                  <td>19</td>
                  <td>2</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm  edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
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
                  <td>/p/CLmHaJSptE6/</td>
                  <td>Thank you for the cont...</td>
                  <td>1</td>
                  <td>72</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="photo">
                      <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                    </div>
                  </td>
                  <td>@mattymyers</td>
                  <td>1,287</td>
                  <td>/p/CLmHaJSptE6/</td>
                  <td>Great quality content! Ke...</td>
                  <td>3</td>
                  <td>7</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
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
                  <td>/p/CL9dh6d4lPO/</td>
                  <td>Check out this post @do...</td>
                  <td>7</td>
                  <td>24</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="photo">
                      <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                    </div>
                  </td>
                  <td>@HaydenKibble</td>
                  <td>8,921</td>
                  <td>/p/CLmHaJSptE6/</td>
                  <td>Awsome post dude than...</td>
                  <td>19</td>
                  <td>2</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm  edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
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
                  <td>/p/CLmHaJSptE6/</td>
                  <td>Thank you for the cont...</td>
                  <td>1</td>
                  <td>72</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="photo">
                      <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                    </div>
                  </td>
                  <td>@mattymyers</td>
                  <td>1,287</td>
                  <td>/p/CLmHaJSptE6/</td>
                  <td>Great quality content! Ke...</td>
                  <td>3</td>
                  <td>7</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
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
                  <td>/p/CL9dh6d4lPO/</td>
                  <td>Check out this post @do...</td>
                  <td>7</td>
                  <td>24</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="photo">
                      <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                    </div>
                  </td>
                  <td>@HaydenKibble</td>
                  <td>8,921</td>
                  <td>/p/CLmHaJSptE6/</td>
                  <td>Awsome post dude than...</td>
                  <td>19</td>
                  <td>2</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm  edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
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
                  <td>/p/CLmHaJSptE6/</td>
                  <td>Thank you for the cont...</td>
                  <td>1</td>
                  <td>72</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="photo">
                      <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                    </div>
                  </td>
                  <td>@mattymyers</td>
                  <td>1,287</td>
                  <td>/p/CLmHaJSptE6/</td>
                  <td>Great quality content! Ke...</td>
                  <td>3</td>
                  <td>7</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
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
                  <td>/p/CL9dh6d4lPO/</td>
                  <td>Check out this post @do...</td>
                  <td>7</td>
                  <td>24</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="photo">
                      <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                    </div>
                  </td>
                  <td>@HaydenKibble</td>
                  <td>8,921</td>
                  <td>/p/CLmHaJSptE6/</td>
                  <td>Awsome post dude than...</td>
                  <td>19</td>
                  <td>2</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm  edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
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
                  <td>/p/CLmHaJSptE6/</td>
                  <td>Thank you for the cont...</td>
                  <td>1</td>
                  <td>72</td>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
                  </td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th>Profile</th>
                  <th>Instagram UN</th>
                  <th>Followers</th>
                  <th>Post URL</th>
                  <th>Description</th>
                  <th>Likes</th>
                  <th>Total Comments</th>
                  <th class="disabled-sorting text-end">Actions</th>
                </tr>
              </tfoot>
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
  <script type="module" src="{{ asset('js/pages') }}/datatable-only.js"></script>
  <script type="module" src="{{ asset('js/pages') }}/comments.js"></script>



  <script>
    // $(document).ready(function() {
    //   $('#datatable').DataTable({
    //     "pagingType": "full_numbers",
    //     "lengthMenu": [
    //       [10, 25, 50, -1],
    //       [10, 25, 50, "All"]
    //     ],
    //     responsive: true,
    //     language: {
    //       search: "_INPUT_",
    //       searchPlaceholder: "Search records",
    //     }

    //   });

    //   var table = $('#datatable').DataTable();

    //   // Edit record
    //   table.on('click', '.edit', function() {
    //     $tr = $(this).closest('tr');

    //     var data = table.row($tr).data();
    //     alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
    //   });

    //   // Delete a record
    //   table.on('click', '.remove', function(e) {
    //     $tr = $(this).closest('tr');
    //     table.row($tr).remove().draw();
    //     e.preventDefault();
    //   });

    //   //Like record
    //   table.on('click', '.like', function() {
    //     alert('You clicked on Like button');
    //   });
    // });
  </script>
@endpush
