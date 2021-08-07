@extends('layouts.app', [
'activePage' => 'posts',
'menuParent' => 'analytics',
'titlePage' => __('Posts')
])

@section('content')
  <div class="content">
    <div class="row">
      <div class="col-6">
        <div class="card card-chart">
          <div class="card-header">
            <div class="row">
              <div class="col-sm-3">
                <h5 class="card-category">Account Posts</h5>
                <h2 class="card-title">By Date</h2>
              </div>
              <div class="col-sm-9 row align-items-start justify-content-end pe-0">

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
                </div>

                <div class="col-auto btn-group btn-group-sm pe-0" role="group">
                  <input type="radio" class="btn-check" name="p-chart-type" checked id="p-chart-type-1">
                  <label class="btn btn-outline-info" for="p-chart-type-1">
                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Photos</span>
                    <span class="d-block d-sm-none">
                      <i class="fal fa-user"></i>
                    </span>
                  </label>

                  <input type="radio" class="btn-check" name="p-chart-type" id="p-chart-type-2">
                  <label class="btn btn-outline-info" for="p-chart-type-2">
                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Videos</span>
                    <span class="d-block d-sm-none">
                      <i class="fal fa-gift-2"></i>
                    </span>
                  </label>

                  <input type="radio" class="btn-check" name="p-chart-type" id="p-chart-type-3">
                  <label class="btn btn-outline-info" for="p-chart-type-3">
                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Carousels</span>
                    <span class="d-block d-sm-none">
                      <i class="fal fa-hand-point-up"></i>
                    </span>
                  </label>
                </div>

                <div class="col-auto pe-0">
                  <input type="text" class="form-control form-control-sm datepicker" value="05/05/2021">
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="chart-area-posts">
                <canvas id="posts-chart"></canvas>
              </div>
              <!-- end content-->
            </div>
            <!--  end card  -->
          </div>
          <!-- end col-md-12 -->
        </div>
      </div>

      <div class="col-6">
        <div class="card card-chart">

          <div class="card-header">
            <div class="row">
              <div class="col-sm-12 text-start">
                <h5 class="card-category">Account Posts</h5>
                <h2 class="card-title">By Time of Day</h2>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-area-posts">
              <canvas id="bubble-chart"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h2 class="card-title">Uploaded Posts</h2>
          </div>
          <div class="card-body">
            <div class="row mb-3">
              <ul id="nav-tabs" class="nav nav-pills nav-pills-warning col-2" role="tablist" style="margin-left:12px">
                <li class="nav-item" role="presentation">
                  <button id="nav-data-tab" class="nav-link active" data-bs-toggle="pill" type="button" aria-controls="pill-data-tab" aria-selected="true" data-bs-target="#pill-data-tab">Data</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button id="nav-visual-tab" class="nav-link" data-bs-toggle="pill" type="button" aria-controls="pill-visual-tab" aria-selected="false" data-bs-target="#pill-visual-tab">Visual</button>
                </li>
              </ul>

              <div class="row col-10 align-items-start justify-content-end">

                <div class="col-auto pe-0">
                  <input type="text" class="form-control form-control-sm datepicker" value="05/05/2021">
                </div>

                <div class="col-auto btn-group btn-group-sm pe-0" role="group">
                  <input type="radio" class="btn-check" name="p-table-type" checked id="p-table-type-1">
                  <label class="btn btn-outline-info" for="p-table-type-1">
                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Photos</span>
                    <span class="d-block d-sm-none">
                      <i class="fal fa-user"></i>
                    </span>
                  </label>

                  <input type="radio" class="btn-check" name="p-table-type" id="p-table-type-2">
                  <label class="btn btn-outline-info" for="p-table-type-2">
                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Videos</span>
                    <span class="d-block d-sm-none">
                      <i class="fal fa-gift-2"></i>
                    </span>
                  </label>

                  <input type="radio" class="btn-check" name="p-table-type" id="p-table-type-3">
                  <label class="btn btn-outline-info" for="p-table-type-3">
                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Carousels</span>
                    <span class="d-block d-sm-none">
                      <i class="fal fa-hand-point-up"></i>
                    </span>
                  </label>
                </div>

                <div class="col-auto pe-0">
                  <a href="{{ route('pages.compare-posts') }}" class="btn btn-sm btn-warning">Compare</a>
                </div>

              </div>
            </div>

            <div class="tab-content tab-space">
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
                            <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                            <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                            <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
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
                            <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                            <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                            <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
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
                            <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                            <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm  edit"><i class="fal fa-pencil-alt"></i></a>
                            <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
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
                            <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                            <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                            <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
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
                            <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                            <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                            <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
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
                            <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                            <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                            <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
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
                            <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                            <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                            <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
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
                            <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                            <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                            <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
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
                            <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                            <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                            <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
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
                            <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                            <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                            <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
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
                            <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                            <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                            <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
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
                            <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                            <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                            <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
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
                              <i class="fas fa-analytics"></i> Data
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#link8">
                              <i class="fal fa-comments"></i> Caption
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#link9">
                              <i class="fas fa-hashtag"></i> Hashtags
                            </a>
                          </li>
                        </ul>
                        <div class="tab-content tab-space tab-subcategories mt-0">
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
                              <i class="fas fa-analytics"></i> Data
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#link11">
                              <i class="fal fa-comments"></i> Caption
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#link12">
                              <i class="fas fa-hashtag"></i> Hashtags
                            </a>
                          </li>
                        </ul>
                        <div class="tab-content tab-space tab-subcategories mt-0">
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
                              <i class="fas fa-analytics"></i> Data
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#link14">
                              <i class="fal fa-comments"></i> Caption
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#link15">
                              <i class="fas fa-hashtag"></i> Hashtags
                            </a>
                          </li>
                        </ul>
                        <div class="tab-content tab-space tab-subcategories mt-0">
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
                              <i class="fas fa-analytics"></i> Data
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#link17">
                              <i class="fal fa-comments"></i> Caption
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#link18">
                              <i class="fas fa-hashtag"></i> Hashtags
                            </a>
                          </li>
                        </ul>
                        <div class="tab-content tab-space tab-subcategories mt-0">
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
                                            <i class="fal fa-play"></i>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <p>You can have all the motivation and knowledge in the world, if you have no consistency or dedication you will NOT be getting far!!</p>
                                    </div>
                                </div>
                                <div class="row card-stats">
                                    <div class="col-2">
                                        <div class="info-icon text-center icon-warning">
                                          <i class="fal fa-heart"></i>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <p>132</p>
                                    </div>
                                </div>
                                <div class="row card-stats">
                                    <div class="col-2">
                                        <div class="info-icon text-center icon-warning">
                                            <i class="fal fa-comments"></i>
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
                              <i class="fas fa-analytics"></i> Data
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#link20">
                              <i class="fal fa-comments"></i> Caption
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#link21">
                              <i class="fas fa-hashtag"></i> Hashtags
                            </a>
                          </li>
                        </ul>
                        <div class="tab-content tab-space tab-subcategories mt-0">
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
                              <i class="fas fa-analytics"></i> Data
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#link23">
                              <i class="fal fa-comments"></i> Caption
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#link24">
                              <i class="fas fa-hashtag"></i> Hashtags
                            </a>
                          </li>
                        </ul>
                        <div class="tab-content tab-space tab-subcategories mt-0">
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
                              <i class="fas fa-analytics"></i> Data
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#link26">
                              <i class="fal fa-comments"></i> Caption
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#link27">
                              <i class="fas fa-hashtag"></i> Hashtags
                            </a>
                          </li>
                        </ul>
                        <div class="tab-content tab-space tab-subcategories mt-0">
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
                              <i class="fas fa-analytics"></i> Data
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#link29">
                              <i class="fal fa-comments"></i> Caption
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#link30">
                              <i class="fas fa-hashtag"></i> Hashtags
                            </a>
                          </li>
                        </ul>
                        <div class="tab-content tab-space tab-subcategories mt-0">
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
  <script type="module" src="{{ asset('js/pages') }}/datatable-only.js"></script>
  <script type="module" src="{{ asset('js/pages') }}/posts.js"></script>
@endpush
