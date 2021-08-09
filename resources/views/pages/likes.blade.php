@extends('layouts.app', [
'activePage' => 'likes',
'menuParent' => 'analytics',
'titlePage' => __('Likes')
])

@section('content')
  <div class="content">
    <div class="row">
      <div class="col-12">
        <div class="card card-chart">
          <div class="card-header">
            <div class="row">
              <div class="col-md-4">
                <h5 class="card-category">Total Likes</h5>
                <h2 class="card-title">Likes</h2>
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
              <canvas id="likes-chart"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 mx-auto">
        <h2 class="text-center">Most Liked Posts</h2>
        <p class="text-center">Search and analyse through your data to compare and analyse the what/why and hows of
          your
          Instagram engagement. We allow you to sort and search through everything to give you the best
          understanding
          of your data.
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
                  <th>Post</th>
                  <th>Post URL</th>
                  <th>Desciption</th>
                  <th>Likes</th>
                  <th>Comments</th>
                  <th>Date Posted</th>
                  <th>Hashtags</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="photo">
                      <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                    </div>
                  </td>
                  <td><a href="{{ route('pages.posts') }}">/p/CLmHaJSptE6/</a></td>
                  <td>Don't settle for less than the best! 👊💯</td>
                  <td><a href="{{ route('pages.posts') }}">110</a></td>
                  <td><a href="{{ route('pages.comments') }}">30</a></td>
                  <td><a href="{{ route('pages.posts') }}">22/02/2021</a></td>
                  <td>#cristianoronaldo #ronaldo #cr...</td>
                </tr>
                <tr>
                  <td>
                    <div class="photo">
                      <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                    </div>
                  </td>
                  <td><a href="{{ route('pages.posts') }}">/p/CLgxTAOp2xM/</a></td>
                  <td>Get ready for tomorrow by focusing on t...</td>
                  <td><a href="{{ route('pages.posts') }}">219</a></td>
                  <td><a href="{{ route('pages.comments') }}">23</a></td>
                  <td><a href="{{ route('pages.posts') }}">20/02/2021</a></td>
                  <td>#rocky #rockybalboa #rockybal...</td>
                </tr>
                <tr>
                  <td>
                    <div class="photo">
                      <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                    </div>
                  </td>
                  <td><a href="{{ route('pages.posts') }}">/p/CLe2eLOpb9L/</a></td>
                  <td>What that says 👆👊💯</td>
                  <td><a href="{{ route('pages.posts') }}">135</a></td>
                  <td><a href="{{ route('pages.comments') }}">3</a></td>
                  <td><a href="{{ route('pages.posts') }}">19/02/2021</a></td>
                  <td>#millionairequote #millionaire...</td>
                </tr>
                <tr>
                  <td>
                    <div class="photo">
                      <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                    </div>
                  </td>
                  <td><a href="{{ route('pages.posts') }}">/p/CLe2eLOpb9L/</a></td>
                  <td>Do you keep going when times...</td>
                  <td><a href="{{ route('pages.posts') }}">186</a></td>
                  <td><a href="{{ route('pages.comments') }}">62</a></td>
                  <td><a href="{{ route('pages.posts') }}">18/02/2021</a></td>
                  <td>#millionairequote #moneymotiva...</td>
                </tr>
                <tr>
                  <td>
                    <div class="photo">
                      <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                    </div>
                  </td>
                  <td><a href="{{ route('pages.posts') }}">/p/CLZqAn9pars/</a></td>
                  <td>What that says 👆💯👊</td>
                  <td><a href="{{ route('pages.posts') }}">150</a></td>
                  <td><a href="{{ route('pages.comments') }}">67</a></td>
                  <td><a href="{{ route('pages.posts') }}">17/02/2021</a></td>
                  <td>#thomasshelby #tomshelby #shelby...</td>
                </tr>
                <tr>
                  <td>
                    <div class="photo">
                      <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                    </div>
                  </td>
                  <td><a href="{{ route('pages.posts') }}">/p/CLZBFTvJPb3/</a></td>
                  <td>You can have all the motivat...</td>
                  <td><a href="{{ route('pages.posts') }}">119</a></td>
                  <td><a href="{{ route('pages.comments') }}">50</a></td>
                  <td><a href="{{ route('pages.posts') }}">17/02/2021</a></td>
                  <td>#millionairequote #moneymotiva...</td>
                </tr>
                <tr>
                  <td>
                    <div class="photo">
                      <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                    </div>
                  </td>
                  <td><a href="{{ route('pages.posts') }}">/p/CLUvY44Jbaa/</a></td>
                  <td>DOUBLE TAP IF YOUR A SURVIVOR...</td>
                  <td><a href="{{ route('pages.posts') }}">178</a></td>
                  <td><a href="{{ route('pages.comments') }}">45</a></td>
                  <td><a href="{{ route('pages.posts') }}">15/02/2021</a></td>
                  <td>#millionairequote #moneymotiva...</td>
                </tr>
                <tr>
                  <td>
                    <div class="photo">
                      <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                    </div>
                  </td>
                  <td><a href="{{ route('pages.posts') }}">/p/CLUT4w2JmSC/</a></td>
                  <td>What that says ☝️💯👊</td>
                  <td><a href="{{ route('pages.posts') }}">153</a></td>
                  <td><a href="{{ route('pages.comments') }}">28</a></td>
                  <td><a href="{{ route('pages.posts') }}">15/02/2021</a></td>
                  <td>#millionairequote #entrepre...</td>
                </tr>
                <tr>
                  <td>
                    <div class="photo">
                      <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                    </div>
                  </td>
                  <td><a href="{{ route('pages.posts') }}">/p/CLUA1cjpJAV/</a></td>
                  <td>Don't be a sheep 🐑 Be a wolf 🐺</td>
                  <td><a href="{{ route('pages.posts') }}">113</a></td>
                  <td><a href="{{ route('pages.comments') }}">55</a></td>
                  <td><a href="{{ route('pages.posts') }}">15/02/2021</a></td>
                  <td>#billionairequote #billiona...</td>
                </tr>
                <tr>
                  <td>
                    <div class="photo">
                      <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                    </div>
                  </td>
                  <td><a href="{{ route('pages.posts') }}">/p/CLTqyVdpjF6/</a></td>
                  <td>People say life is too short to...</td>
                  <td><a href="{{ route('pages.posts') }}">138</a></td>
                  <td><a href="{{ route('pages.comments') }}">60</a></td>
                  <td><a href="{{ route('pages.posts') }}">14/02/2021</a></td>
                  <td>#thomasshelby #thomasshelbyme...</td>
                </tr>
                <tr>
                  <td>
                    <div class="photo">
                      <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                    </div>
                  </td>
                  <td><a href="{{ route('pages.posts') }}">/p/CLMy_kNpDD4/</a></td>
                  <td>Don't let your body tell you...</td>
                  <td><a href="{{ route('pages.posts') }}">209</a></td>
                  <td><a href="{{ route('pages.comments') }}">131</a></td>
                  <td><a href="{{ route('pages.posts') }}">12/02/2021</a></td>
                  <td>#arnoldschwarzenegger #schwarze...</td>
                </tr>
                <tr>
                  <td>
                    <div class="photo">
                      <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                    </div>
                  </td>
                  <td><a href="{{ route('pages.posts') }}">/p/CLMSkboJWjh/</a></td>
                  <td>Sometimes success isn't alwa...</td>
                  <td><a href="{{ route('pages.posts') }}">166</a></td>
                  <td><a href="{{ route('pages.comments') }}">59</a></td>
                  <td><a href="{{ route('pages.posts') }}">12/02/2021</a></td>
                  <td>#entrepreneurship #entrepreneu...</td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th>Post</th>
                  <th>Post URL</th>
                  <th>Desciption</th>
                  <th>Likes</th>
                  <th>Comments</th>
                  <th>Date Posted</th>
                  <th>Hashtags</th>
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
  <script type="module" src="{{ asset('js/pages') }}/likes.js"></script>
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
