@extends('layouts.app', [
'activePage' => 'post',
'menuParent' => '',
'titlePage' => __('post')
])

@php
$page = 'engagement'; // Used to get and set cookies
$cookie = AppHelper::getPageCookie($page);
@endphp

@section('content')
  <div class="content" data-page="{{ $page }}">

    <div class="row">
      <div class="col-12 mb-4">
        <a href="{{ route('pages.post') }}" class="btn btn-round btn-lg btn-info btn-gradient">
          <i class="fal fa-chevron-left"></i>
          {{ __('Previous Post') }}
        </a>
        <a href="{{ route('pages.post') }}" class="btn btn-round btn-lg btn-info btn-gradient">
          {{ __('Next Post') }}
          <i class="fal fa-chevron-right"></i>
        </a>
      </div>
    </div>

    <div class="row">
      {{-- Post Overview --}}
      <div class="col-md-3">
        <div class="card card-post">
          <img class="card-img-top" src="{{ asset('images') }}/tania.jpg">
          <div class="card-header d-none">
            <h4 class="card-title">{{ __('Post Details') }}</h4>
          </div>
          <div class="card-body">
            <div class="row card-details">
              <div class="col-12 mb-1">
                <label>Description</label>
                <p>Don't settle for less than the best! 👊💯</p>
              </div>
              <div class="col-auto pe-0 mb-1">
                <label>Likes</label>
                <p>132</p>
              </div>
              <div class="col-auto pe-0 mb-1">
                <label>Comments</label>
                <p>28</p>
              </div>
              <div class="col-auto pe-0 mb-1">
                <label>Saves</label>
                <p>2</p>
              </div>
              <div class="row col-12">
                <div class="col-auto pe-0 mb-1">
                  <label>Date</label>
                  <p>23/04/2020</p>
                </div>
                <div class="col-auto pe-0 mb-1">
                  <label>Time</label>
                  <p>3:02pm</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-9">
        <div class="card card-chart">
          <div class="card-header row">
            <div class="col-4">
              <h5 class="card-category">Overall Post Engagement</h5>
              <h2 class="card-title">Engagements</h2>
            </div>

            <div class="row col-8 align-items-start justify-content-end pe-0" data-toggle="buttons">

              <div class="col-auto pe-0">
                @include('forms.datepicker', ['options' => [
                'cookie' => $cookie,
                'id' => 'f-chart-date'
                ]])
              </div>

              {{-- chart day selector --}}
              @include('forms.chart-radio', ['options' => [
              'name' => 'e-chart-day',
              'color' => 'warning',
              'buttons' => [[
              'display' => __('Hourly'),
              'id' => 'e-chart-day-1',
              'value' => 'hour',
              'icon' => 'fal fa-calendar-day'
              ]],
              'group_class' => 'btn-group-sm pe-0 d-none',
              'group_attrs' => 'data-chart-scale',
              'cookie' => $cookie
              ]])

              {{-- chart line selector --}}
              @include('forms.chart-toggles', ['options' => [
              'buttons' => [[
              'id' => 'e-chart-line-1',
              'color' => 'pink',
              'display' => __('Engagement'),
              'icon' => 'fal fa-users',
              ],[
              'id' => 'e-chart-line-2',
              'color' => 'red',
              'display' => __('Likes'),
              'icon' => 'fal fa-heart',
              ],[
              'id' => 'e-chart-line-3',
              'color' => 'green',
              'display' => __('Comments'),
              'icon' => 'fal fa-comments',
              ]],
              'group_class' => 'btn-group-sm pe-0',
              'group_attrs' => 'data-chart-toggles',
              'cookie' => $cookie
              ]])

            </div>

          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="engagement-chart" data-tyoe="line" data-height="368"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      {{-- Comments --}}
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Comments</h3>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="datatable" class="table table-striped" is-datatable data-search-placeholder="{{ __('Search comments...') }}">
                <thead>
                  <tr>
                    <th>User</th>
                    <th>Followers</th>
                    <th>Description</th>
                    <th>Likes</th>
                    <th>Replies</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>@mattymyers</td>
                    <td>1,287</td>
                    <td>Great quality content! Ke...</td>
                    <td>3</td>
                    <td>7</td>
                  </tr>
                  <tr>
                    <td>@corybeevers</td>
                    <td>129,362</td>
                    <td>Check out this post @do...</td>
                    <td>7</td>
                    <td>24</td>
                  </tr>
                  <tr>
                    <td>@HaydenKibble</td>
                    <td>8,921</td>
                    <td>Awsome post dude than...</td>
                    <td>19</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>@kraggle</td>
                    <td>491</td>
                    <td>Thank you for the cont...</td>
                    <td>1</td>
                    <td>72</td>
                  </tr>
                  <tr>
                    <td>@mattymyers</td>
                    <td>1,287</td>
                    <td>Great quality content! Ke...</td>
                    <td>3</td>
                    <td>7</td>
                  </tr>
                  <tr>
                    <td>@corybeevers</td>
                    <td>129,362</td>
                    <td>Check out this post @do...</td>
                    <td>7</td>
                    <td>24</td>
                  </tr>
                  <tr>
                    <td>@HaydenKibble</td>
                    <td>8,921</td>
                    <td>Awsome post dude than...</td>
                    <td>19</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>@kraggle</td>
                    <td>491</td>
                    <td>Thank you for the cont...</td>
                    <td>1</td>
                    <td>72</td>
                  </tr>
                  <tr>
                    <td>@mattymyers</td>
                    <td>1,287</td>
                    <td>Great quality content! Ke...</td>
                    <td>3</td>
                    <td>7</td>
                  </tr>
                  <tr>
                    <td>@corybeevers</td>
                    <td>129,362</td>
                    <td>Check out this post @do...</td>
                    <td>7</td>
                    <td>24</td>
                  </tr>
                  <tr>
                    <td>@HaydenKibble</td>
                    <td>8,921</td>
                    <td>Awsome post dude than...</td>
                    <td>19</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>@kraggle</td>
                    <td>491</td>
                    <td>Thank you for the cont...</td>
                    <td>1</td>
                    <td>72</td>
                  </tr>
                  <tr>
                    <td>@mattymyers</td>
                    <td>1,287</td>
                    <td>Great quality content! Ke...</td>
                    <td>3</td>
                    <td>7</td>
                  </tr>
                  <tr>
                    <td>@corybeevers</td>
                    <td>129,362</td>
                    <td>Check out this post @do...</td>
                    <td>7</td>
                    <td>24</td>
                  </tr>
                  <tr>
                    <td>@HaydenKibble</td>
                    <td>8,921</td>
                    <td>Awsome post dude than...</td>
                    <td>19</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>@kraggle</td>
                    <td>491</td>
                    <td>Thank you for the cont...</td>
                    <td>1</td>
                    <td>72</td>
                  </tr>
                  <tr>
                    <td>@kraggle</td>
                    <td>491</td>
                    <td>Thank you for the cont...</td>
                    <td>1</td>
                    <td>72</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- end content-->
        </div>
        <!--  end card  -->
      </div>

      {{-- Hashtags --}}
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Hashtags</h3>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="hashtaginpost" class="table table-striped" is-datatable data-search-placeholder="{{ __('Search hashtags...') }}">
                <thead>
                  <tr>
                    <th>Hashtag</th>
                    <th>Competition</th>
                    <th>Posts</th>
                    <th>Likes</th>
                    <th>Eng Rate</th>
                    <th>Like Rate</th>
                    <th>Comment Rate</th>
                    <th>Difficulty ?/100</th>
                    <th>Daily Competition</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><a href="{{ route('pages.hashtags') }}">#millionairesuccess</a></td>
                    <td>230,000</td>
                    <td>36</td>
                    <td>298</td>
                    <td>6%</td>
                    <td>9%</td>
                    <td>4%</td>
                    <td>67</td>
                    <td>321</td>
                  </tr>
                  <tr>
                    <td><a href="{{ route('pages.hashtags') }}">#entrepreneur</a></td>
                    <td>530,000</td>
                    <td>48</td>
                    <td>1,293</td>
                    <td>13%</td>
                    <td>18%</td>
                    <td>9%</td>
                    <td>58</td>
                    <td>96</td>
                  </tr>
                  <tr>
                    <td><a href="{{ route('pages.hashtags') }}">#entrepreneurquotes</a></td>
                    <td>320,000</td>
                    <td>78</td>
                    <td>6,233</td>
                    <td>13%</td>
                    <td>18%</td>
                    <td>9%</td>
                    <td>53</td>
                    <td>91</td>
                  </tr>
                  <tr>
                    <td><a href="{{ route('pages.hashtags') }}">#millionairequote</a></td>
                    <td>380,000</td>
                    <td>28</td>
                    <td>196</td>
                    <td>7%</td>
                    <td>10%</td>
                    <td>3%</td>
                    <td>78</td>
                    <td>145</td>
                  </tr>
                  <tr>
                    <td><a href="{{ route('pages.hashtags') }}">#millionaireposts</a></td>
                    <td>127,000</td>
                    <td>13</td>
                    <td>123</td>
                    <td>7%</td>
                    <td>8%</td>
                    <td>7%</td>
                    <td>82</td>
                    <td>892</td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <th>Hashtag</th>
                    <th>Competition</th>
                    <th>Posts</th>
                    <th>Likes</th>
                    <th>Eng Rate</th>
                    <th>Like Rate</th>
                    <th>Comment Rate</th>
                    <th>Difficulty ?/100</th>
                    <th>Other Post Per Day</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection


@push('js')
  <script src="{{ asset('js/pages') }}/datatable-only.js" type="module"></script>
  <script src="{{ asset('js/pages') }}/post.js" type="module"></script>
@endpush
