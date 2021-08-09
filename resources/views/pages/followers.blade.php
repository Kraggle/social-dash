@extends('layouts.app', [
'activePage' => 'followers',
'menuParent' => 'analytics',
'titlePage' => __('followers')
])

@section('content')
  <div class="content">
    <div class="row">
      <div class="col-12">
        <div class="card card-chart">
          <div class="card-header">
            <div class="row">
              <div class="col-md-4">
                <h5 class="card-category">Account Followers</h5>
                <h2 class="card-title">Followers</h2>
              </div>

              <div class="row col-md-8 align-items-start justify-content-end">

                <div class="col-auto pe-0">
                  <input type="text" class="form-control form-control-sm datepicker" value="05/05/2021">
                </div>

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

                {{-- <div class="col-auto btn-group btn-group-toggle float-end" data-toggle="buttons">
                  <label class="btn btn-sm btn-warning btn-gradient btn-simple" id="3">
                    <input type="radio" class="d-none" name="options">
                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Posts</span>
                    <span class="d-block d-sm-none">
                      <i class="fal fa-hand-point-up"></i>
                    </span>
                  </label>
                </div> --}}

              </div>
            </div>

          </div>

          <div class="card-body">
            <div class="chart-area">
              <canvas id="follower-chart"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="card card-chart">
          <div class="card-header">
            <div class="col-sm-4 float-end">
              <input type="text" class="form-control form-control-sm datepicker" value="05/05/2021">
            </div>
            <h5 class="card-category">Compare Your Followers</h5>
            <h3 class="card-title">Followers VS Un-Followers</h3>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="follow-vs-unfollow-chart"></canvas>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card card-chart">
          <div class="card-header">
            <div class="col-sm-4 float-end">
              <input type="text" class="form-control form-control-sm datepicker" value="05/05/2021">
            </div>
            <h5 class="card-category">Overall Account Followers</h5>
            <h3 class="card-title"> Followers All-Time</h3>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="follow-all-time-chart"></canvas>
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
                  <td>2,500</td>
                  <td>25,000,000</td>
                  <td>250,000</td>
                  <td>10,000</td>
                  <td>100</td< /td>
                  <td>Followed</th>
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
                  <td>127</td>
                  <td>9</td>
                  <td>90</td>
                  <td>18</td>
                  <td>10</td>
                  <td>2</td>
                  <td>Followed</th>
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
                  <td>60</td>
                  <td>7,200</td>
                  <td>600</td>
                  <td>120</td>
                  <td>10</td>
                  <td>Un-Followed</th>
                  <td class="text-end">
                    <a href="javascript:void(0)" class="btn btn-link btn-info btn-gradient btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-warning btn-gradient btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                    <a href="javascript:void(0)" class="btn btn-link btn-danger btn-gradient btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
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
  <script src="{{ asset('js/pages') }}/datatable-only.js" type="module"></script>
  <script src="{{ asset('js/pages') }}/followers.js" type="module"></script>
@endpush
