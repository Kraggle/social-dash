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
              <div class="col-sm-6 text-left">
                <h5 class="card-category">Account Followers</h5>
                <h2 class="card-title">Followers</h2>

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
                  <label class="btn btn-sm btn-warning btn-simple" id="3">
                    <input type="radio" class="d-none" name="options">
                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Posts</span>
                    <span class="d-block d-sm-none">
                      <i class="tim-icons icon-tap-02"></i>
                    </span>
                  </label>
                </div>
                <div class="col-sm-4 float-right">
                  <input type="text" class="form-control -block datepicker" value="05/05/2021">
                </div>
              </div>

            </div>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="chartBig1"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="content">
        <div class="row mt-6">
          <div class="col-md-6 mr-auto">
            <div class="card card-chart">
              <div class="card-header">
                <div class="col-sm-4 float-right">
                  <input type="text" class="form-control -block datepicker" value="05/05/2021">
                </div>
                <h5 class="card-category">Compare Your Followers</h5>
                <h3 class="card-title">Followers VS Un-Followers</h3>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="F_MultipleBarsChart"></canvas>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 mr-auto">
            <div class="card card-chart">
              <div class="card-header">
                <div class="col-sm-4 float-right">
                  <input type="text" class="form-control -block datepicker" value="05/05/2021">
                </div>
                <h5 class="card-category">Overall Account Followers</h5>
                <h3 class="card-title"> Followers All-Time</h3>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="F_chartWithNumbersAndGrid"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="content">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="text-center">Follower Activity</h2>
            <p class="text-center">Search and analyse through your data to compare and analyse the what/why and hows of
              your Instagram engagement. We allow you to sort and search through everything to give you the best
              understanding of your data.
              <br><a href="https://social-shadow.com/" target="_blank">How To Benefit From This?</a>
            </p>
          </div>
          <div class="row mt-5">
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
                        <th class="sorting_desc_disabled sorting_asc_disabled text-right">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="photo">
                            <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
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
                        <td class="text-right">
                          <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                              class="tim-icons icon-heart-2"></i></a>
                          <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                              class="fal fa-pencil-alt"></i></a>
                          <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                              class="fal fa-trash-alt"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="photo">
                            <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
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
                        <td class="text-right">
                          <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                              class="tim-icons icon-heart-2"></i></a>
                          <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                              class="fal fa-pencil-alt"></i></a>
                          <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                              class="fal fa-trash-alt"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="photo">
                            <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
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
                        <td class="text-right">
                          <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm btn-neutral like"><i
                              class="tim-icons icon-heart-2"></i></a>
                          <a href="javascript:void(0)"
                            class="btn btn-link btn-warning btn-icon btn-sm btn-neutral  edit"><i
                              class="fal fa-pencil-alt"></i></a>
                          <a href="javascript:void(0)"
                            class="btn btn-link btn-danger btn-icon btn-sm btn-neutral remove"><i
                              class="fal fa-trash-alt"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="photo">
                            <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
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
                        <td class="text-right">
                          <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                              class="tim-icons icon-heart-2"></i></a>
                          <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                              class="fal fa-pencil-alt"></i></a>
                          <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                              class="fal fa-trash-alt"></i></a>
                        </td>

                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Profile</th>
                        <th>Instagram UN</th>
                        <th>Followers</th>
                        <th>Posts</th>
                        <th>Likes</th>
                        <th>Avg Likes</th>
                        <th>Action</th>
                        <th class="disabled-sorting text-right">Actions</th>
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


      </div>
    </div>
  </div>

@endsection


@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartPageCharts();
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();
      demo.initVectorMap();
    });
  </script>


  <script>
    $(document).ready(function() {
      $('#datatable').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
          [10, 25, 50, -1],
          [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
          search: "_INPUT_",
          searchPlaceholder: "Search records",
        }

      });

      var table = $('#datatable').DataTable();

      // Edit record
      table.on('click', '.edit', function() {
        $tr = $(this).closest('tr');

        var data = table.row($tr).data();
        alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
      });

      // Delete a record
      table.on('click', '.remove', function(e) {
        $tr = $(this).closest('tr');
        table.row($tr).remove().draw();
        e.preventDefault();
      });

      //Like record
      table.on('click', '.like', function() {
        alert('You clicked on Like button');
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // initialise Datetimepicker and Sliders
      whiteDashboard.initDateTimePicker();
      if ($('.slider').length != 0) {
        demo.initSliders();
      }
    });
  </script>

  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartPageCharts();
    });
  </script>

@endpush
