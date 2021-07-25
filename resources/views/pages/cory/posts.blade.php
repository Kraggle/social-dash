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
              <div class="col-sm-3 text-left">
                <h5 class="card-category">Account Posts</h5>
                <h2 class="card-title">By Date</h2>
              </div>
              <div class="col-sm-9 row">
                <div class="col-12 btn-group btn-group-toggle float-right" data-toggle="buttons">
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
                <div class="col-12 btn-group btn-group-toggle float-right" data-toggle="buttons">
                  <label class="btn btn-sm btn-warning btn-simple" id="3">
                    <input type="radio" class="d-none" name="options">
                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Followers</span>
                    <span class="d-block d-sm-none">
                      <i class="tim-icons icon-tap-02"></i>
                    </span>
                  </label>
                  <label class="btn btn-sm btn-warning btn-simple" id="3">
                    <input type="radio" class="d-none" name="options">
                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Likes</span>
                    <span class="d-block d-sm-none">
                      <i class="tim-icons icon-tap-02"></i>
                    </span>
                  </label>
                  <label class="btn btn-sm btn-warning btn-simple" id="3">
                    <input type="radio" class="d-none" name="options">
                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Comments</span>
                    <span class="d-block d-sm-none">
                      <i class="tim-icons icon-tap-02"></i>
                    </span>
                  </label>
                </div>
                <div class="col-12">
                  <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                    <label class="btn btn-sm btn-warning btn-simple active" id="0">
                      <input type="radio" name="options" checked>
                      <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Photos</span>
                      <span class="d-block d-sm-none">
                        <i class="tim-icons icon-single-02"></i>
                      </span>
                    </label>
                    <label class="btn btn-sm btn-warning btn-simple" id="1">
                      <input type="radio" class="d-none d-sm-none" name="options">
                      <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Videos</span>
                      <span class="d-block d-sm-none">
                        <i class="tim-icons icon-gift-2"></i>
                      </span>
                    </label>
                    <label class="btn btn-sm btn-warning btn-simple" id="2">
                      <input type="radio" class="d-none" name="options">
                      <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Carousels</span>
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
              <div class="chart-area-posts">
                <canvas id="chartBig1"></canvas>
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
              <div class="col-sm-12 text-left">
                <h5 class="card-category">Account Posts</h5>
                <h2 class="card-title">By Time of Day</h2>

              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-area-posts">
              <canvas id="bubbleChart"></canvas>
            </div>
          </div>



        </div>
      </div>

      {{-- <div class="col-12">
                <div class="card card-chart">
                    <div class="card-header">
                        <div class="row">
            <div class="col-sm-6 text-left">
                <h5 class="card-category">Post Publishing Behaviour</h5>
                            <h2 class="card-title">Post Types</h2>
                </div>
                <div class="col-sm-6">
                    <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                        <label class="btn btn-sm btn-warning btn-simple active" id="0">
                            <input type="radio" name="options" checked>
                            <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Photo</span>
                            <span class="d-block d-sm-none">
                                <i class="tim-icons icon-single-02"></i>
                            </span>
                        </label>
                        <label class="btn btn-sm btn-warning btn-simple" id="1">
                            <input type="radio" class="d-none d-sm-none" name="options">
                            <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Video</span>
                            <span class="d-block d-sm-none">
                                <i class="tim-icons icon-gift-2"></i>
                            </span>
                        </label>
                        <label class="btn btn-sm btn-warning btn-simple" id="2">
                            <input type="radio" class="d-none" name="options">
                            <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Carousel</span>
                            <span class="d-block d-sm-none">
                                <i class="tim-icons icon-tap-02"></i>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="posttypes"></canvas>
                    </div>
                </div>
            </div>
        </div>
                </div>
            </div>
        </div> --}}

    </div>


    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h2 class="card-title">Uploaded Posts</h2>
          </div>
          <div class="card-body">
            <a href="http://localhost:8000/compareposts"><button
                class="btn btn-warning float-right ml-2 mt-0">Compare</button></a>
            <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
              <label class="btn btn-sm btn-warning btn-simple active" id="0">
                <input type="radio" name="options" checked>
                <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Photos</span>
                <span class="d-block d-sm-none">
                  <i class="tim-icons icon-single-02"></i>
                </span>
              </label>
              <label class="btn btn-sm btn-warning btn-simple" id="1">
                <input type="radio" class="d-none d-sm-none" name="options">
                <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Videos</span>
                <span class="d-block d-sm-none">
                  <i class="tim-icons icon-gift-2"></i>
                </span>
              </label>
              <label class="btn btn-sm btn-warning btn-simple" id="2">
                <input type="radio" class="d-none" name="options">
                <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Carousels</span>
                <span class="d-block d-sm-none">
                  <i class="tim-icons icon-tap-02"></i>
                </span>
              </label>
            </div>
            <div class="col-sm-2 float-right">
              <input type="text" class="form-control -block datepicker" value="05/05/2021">

            </div>

            <ul class="nav nav-pills nav-pills-warning col-2">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#link1">
                  Data
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link2">
                  Visual
                </a>
              </li>
            </ul>


          </div>

          <div class="tab-content tab-space">
            <div class="tab-pane active" id="link1">
              <div class="card">
                <div class="card-body">
                  <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                  </div>
                  <table id="datatable" class="table table-striped">
                    <thead>
                      <tr>
                        <th title="Enter Text Here">Post</th>
                        <th title="Enter Text Here">Post URL</th>
                        <th title="Enter Text Here">Type</th>
                        <th title="Enter Text Here">Desciption</th>
                        <th title="Enter Text Here">Likes</th>
                        <th title="Enter Text Here">Comments</th>
                        <th title="Enter Text Here">Date Posted</th>
                        <th title="Enter Text Here">Hashtags</th>
                        <th class="sorting_desc_disabled sorting_asc_disabled text-right" title="Enter Text Here">
                          Actions
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="photo">
                            <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                          </div>
                        </td>
                        <td><a href="http://localhost:8000/individualpost">/p/CLmHaJSptE6/</a>
                        </td>
                        <td><a href="http://localhost:8000/posts">Photo</a></td>
                        <td>Don't settle for less than the best! 👊💯</td>
                        <td><a href="http://localhost:8000/likes">110</a></td>
                        <td><a href="http://localhost:8000/comments">30</a></td>
                        <td><a href="http://localhost:8000/posts">22/02/2021</a></td>
                        <td>#cristianoronaldo #ronaldo #cr...</td>
                        <td class="text-right">
                          <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                              class="tim-icons icon-heart-2"></i></a>
                          <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                              class="tim-icons icon-pencil"></i></a>
                          <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                              class="tim-icons icon-simple-remove"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="photo">
                            <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                          </div>
                        </td>
                        <td><a href="http://localhost:8000/individualpost">/p/CLgxTAOp2xM/</a>
                        </td>
                        <td><a href="http://localhost:8000/posts">Photo</a></td>
                        <td>Get ready for tomorrow by focusing on t...</td>
                        <td><a href="http://localhost:8000/likes">219</a></td>
                        <td><a href="http://localhost:8000/comments">23</a></td>
                        <td><a href="http://localhost:8000/posts">20/02/2021</a></td>
                        <td>#rocky #rockybalboa #rockybal...</td>
                        <td class="text-right">
                          <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                              class="tim-icons icon-heart-2"></i></a>
                          <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                              class="tim-icons icon-pencil"></i></a>
                          <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                              class="tim-icons icon-simple-remove"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="photo">
                            <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                          </div>
                        </td>
                        <td><a href="http://localhost:8000/individualpost">/p/CLe2eLOpb9L/</a>
                        </td>
                        <td><a href="http://localhost:8000/posts">Photo</a></td>
                        <td>What that says 👆👊💯</td>
                        <td><a href="http://localhost:8000/likes">135</a></td>
                        <td><a href="http://localhost:8000/comments">3</a></td>
                        <td><a href="http://localhost:8000/posts">19/02/2021</a></td>
                        <td>#millionairequote #millionaire...</td>
                        <td class="text-right">
                          <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                              class="tim-icons icon-heart-2"></i></a>
                          <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm  edit"><i
                              class="tim-icons icon-pencil"></i></a>
                          <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                              class="tim-icons icon-simple-remove"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="photo">
                            <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                          </div>
                        </td>
                        <td><a href="http://localhost:8000/individualpost">/p/CLe2eLOpb9L/</a>
                        </td>
                        <td><a href="http://localhost:8000/posts">Photo</a></td>
                        <td>Do you keep going when times...</td>
                        <td><a href="http://localhost:8000/likes">186</a></td>
                        <td><a href="http://localhost:8000/comments">62</a></td>
                        <td><a href="http://localhost:8000/posts">18/02/2021</a></td>
                        <td>#millionairequote #moneymotiva...</td>
                        <td class="text-right">
                          <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                              class="tim-icons icon-heart-2"></i></a>
                          <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                              class="tim-icons icon-pencil"></i></a>
                          <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                              class="tim-icons icon-simple-remove"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="photo">
                            <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                          </div>
                        </td>
                        <td><a href="http://localhost:8000/individualpost">/p/CLZqAn9pars/</a>
                        </td>
                        <td><a href="http://localhost:8000/posts">Photo</a></td>
                        <td>What that says 👆💯👊</td>
                        <td><a href="http://localhost:8000/likes">150</a></td>
                        <td><a href="http://localhost:8000/comments">67</a></td>
                        <td><a href="http://localhost:8000/posts">17/02/2021</a></td>
                        <td>#thomasshelby #tomshelby #shelby...</td>
                        <td class="text-right">
                          <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                              class="tim-icons icon-heart-2"></i></a>
                          <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                              class="tim-icons icon-pencil"></i></a>
                          <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                              class="tim-icons icon-simple-remove"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="photo">
                            <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                          </div>
                        </td>
                        <td><a href="http://localhost:8000/individualpost">/p/CLZBFTvJPb3/</a>
                        </td>
                        <td><a href="http://localhost:8000/posts">Carousel</a></td>
                        <td>You can have all the motivat...</td>
                        <td><a href="http://localhost:8000/likes">119</a></td>
                        <td><a href="http://localhost:8000/comments">50</a></td>
                        <td><a href="http://localhost:8000/posts">17/02/2021</a></td>
                        <td>#millionairequote #moneymotiva...</td>
                        <td class="text-right">
                          <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                              class="tim-icons icon-heart-2"></i></a>
                          <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                              class="tim-icons icon-pencil"></i></a>
                          <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                              class="tim-icons icon-simple-remove"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="photo">
                            <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                          </div>
                        </td>
                        <td><a href="http://localhost:8000/individualpost">/p/CLUvY44Jbaa/</a>
                        </td>
                        <td><a href="http://localhost:8000/posts">Photo</a></td>
                        <td>DOUBLE TAP IF YOUR A SURVIVOR...</td>
                        <td><a href="http://localhost:8000/likes">178</a></td>
                        <td><a href="http://localhost:8000/comments">45</a></td>
                        <td><a href="http://localhost:8000/posts">15/02/2021</a></td>
                        <td>#millionairequote #moneymotiva...</td>
                        <td class="text-right">
                          <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                              class="tim-icons icon-heart-2"></i></a>
                          <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                              class="tim-icons icon-pencil"></i></a>
                          <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                              class="tim-icons icon-simple-remove"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="photo">
                            <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                          </div>
                        </td>
                        <td><a href="http://localhost:8000/individualpost">/p/CLUT4w2JmSC/</a>
                        </td>
                        <td><a href="http://localhost:8000/posts">Video</a></td>
                        <td>What that says ☝️💯👊</td>
                        <td><a href="http://localhost:8000/likes">153</a></td>
                        <td><a href="http://localhost:8000/comments">28</a></td>
                        <td><a href="http://localhost:8000/posts">15/02/2021</a></td>
                        <td>#millionairequote #entrepre...</td>
                        <td class="text-right">
                          <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                              class="tim-icons icon-heart-2"></i></a>
                          <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                              class="tim-icons icon-pencil"></i></a>
                          <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                              class="tim-icons icon-simple-remove"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="photo">
                            <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                          </div>
                        </td>
                        <td><a href="http://localhost:8000/individualpost">/p/CLUA1cjpJAV/</a>
                        </td>
                        <td><a href="http://localhost:8000/posts">Video</a></td>
                        <td>Don't be a sheep 🐑 Be a wolf 🐺</td>
                        <td><a href="http://localhost:8000/likes">113</a></td>
                        <td><a href="http://localhost:8000/comments">55</a></td>
                        <td><a href="http://localhost:8000/posts">15/02/2021</a></td>
                        <td>#billionairequote #billiona...</td>
                        <td class="text-right">
                          <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                              class="tim-icons icon-heart-2"></i></a>
                          <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                              class="tim-icons icon-pencil"></i></a>
                          <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                              class="tim-icons icon-simple-remove"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="photo">
                            <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                          </div>
                        </td>
                        <td><a href="http://localhost:8000/individualpost">/p/CLTqyVdpjF6/</a>
                        </td>
                        <td><a href="http://localhost:8000/posts">Video</a></td>
                        <td>People say life is too short to...</td>
                        <td><a href="http://localhost:8000/likes">138</a></td>
                        <td><a href="http://localhost:8000/comments">60</a></td>
                        <td><a href="http://localhost:8000/posts">14/02/2021</a></td>
                        <td>#thomasshelby #thomasshelbyme...</td>
                        <td class="text-right">
                          <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                              class="tim-icons icon-heart-2"></i></a>
                          <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                              class="tim-icons icon-pencil"></i></a>
                          <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                              class="tim-icons icon-simple-remove"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="photo">
                            <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                          </div>
                        </td>
                        <td><a href="http://localhost:8000/individualpost">/p/CLMy_kNpDD4/</a>
                        </td>
                        <td><a href="http://localhost:8000/posts">Video</a></td>
                        <td>Don't let your body tell you...</td>
                        <td><a href="http://localhost:8000/likes">209</a></td>
                        <td><a href="http://localhost:8000/comments">131</a></td>
                        <td><a href="http://localhost:8000/posts">12/02/2021</a></td>
                        <td>#arnoldschwarzenegger #schwarze...</td>
                        <td class="text-right">
                          <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                              class="tim-icons icon-heart-2"></i></a>
                          <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                              class="tim-icons icon-pencil"></i></a>
                          <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                              class="tim-icons icon-simple-remove"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="photo">
                            <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                          </div>
                        </td>
                        <td><a href="http://localhost:8000/individualpost">/p/CLMSkboJWjh/</a>
                        </td>
                        <td><a href="http://localhost:8000/posts">Carousel</a></td>
                        <td>Sometimes success isn't alwa...</td>
                        <td><a href="http://localhost:8000/likes">166</a></td>
                        <td><a href="http://localhost:8000/comments">59</a></td>
                        <td><a href="http://localhost:8000/posts">12/02/2021</a></td>
                        <td>#entrepreneurship #entrepreneu...</td>
                        <td class="text-right">
                          <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i
                              class="tim-icons icon-heart-2"></i></a>
                          <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                              class="tim-icons icon-pencil"></i></a>
                          <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i
                              class="tim-icons icon-simple-remove"></i></a>
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
                        <th class="disabled-sorting text-right">Actions</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- end content-->
              </div>
              <!--  end card  -->
            </div>
            <div class="tab-pane" id="link2">
              <div class="row">
                <div class="col-3">
                  <div class="card card-post">
                    <div class="card-header">
                      <input type="checkbox" id="myCheckbox1" />
                      <label for="myCheckbox1"><img src="http://localhost:8000/white/img/post1.jpg"></label>

                      <ul class="nav nav-pills nav-pills-warning nav-pills-icons justify-content-center pt-2">
                        <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#link7">
                            <i class="fas fa-analytics"></i> Data
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#link8">
                            <i class="tim-icons icon-chat-33"></i> Caption
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#link9">
                            <i class="fas fa-hashtag"></i> Hashtags
                          </a>
                        </li>
                      </ul>
                      <div class="tab-content tab-space tab-subcategories mt-0">
                        <div class="tab-pane active" id="link7">
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Type:</a>
                              </h4>
                            </div>
                            <div class="col-6">
                              <p>Photo</p>
                            </div>
                          </div>
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Likes:</a>
                              </h4>
                            </div>
                            <div class="col-6">
                              <p>132</p>
                            </div>
                          </div>
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Comments:</a>
                              </h4>
                            </div>
                            <div class="col-6">
                              <p>31</p>
                            </div>
                          </div>
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Date:</a>
                              </h4>
                            </div>
                            <div class="col-6">
                              <p>07/05/2020</p>
                            </div>
                          </div>
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Time:</a>
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
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#moneymotivation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                <span class="progress-value">86</span>
                              </div>
                            </div>
                          </div>
                          <div class="progress-container progress-warning">
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#millionairemotivation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 98%;">
                                <span class="progress-value">98</span>
                              </div>
                            </div>
                          </div>
                          <div class="progress-container progress-warning">
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#entrepreneurmotivation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 72%;">
                                <span class="progress-value">72</span>
                              </div>
                            </div>
                          </div>
                          <div class="progress-container progress-warning">
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#moneyinspiation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                <span class="progress-value">70</span>
                              </div>
                            </div>
                          </div>
                          <div class="progress-container progress-warning">
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#billionairemotivation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
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
                                            <span class="progress-badge"><a href="http://localhost:8000/hashtags">#millionairememes</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                                <span class="progress-value">70</span>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="http://localhost:8000/hashtags">#millionairememe</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                                                <span class="progress-value">65</span>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="http://localhost:8000/hashtags">#mondaymotivation</a></span>
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
                      <label for="myCheckbox2"><img src="http://localhost:8000/white/img/post2.jpg"></label>

                      <ul class="nav nav-pills nav-pills-warning nav-pills-icons justify-content-center pt-2">
                        <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#link10">
                            <i class="fas fa-analytics"></i> Data
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#link11">
                            <i class="tim-icons icon-chat-33"></i> Caption
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#link12">
                            <i class="fas fa-hashtag"></i> Hashtags
                          </a>
                        </li>
                      </ul>
                      <div class="tab-content tab-space tab-subcategories mt-0">
                        <div class="tab-pane active" id="link10">
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Type:</a>
                              </h4>
                            </div>
                            <div class="col-6">
                              <p>Photo</p>
                            </div>
                          </div>
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Likes:</a>
                              </h4>
                            </div>
                            <div class="col-6">
                              <p>132</p>
                            </div>
                          </div>
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Comments:</a>
                              </h4>
                            </div>
                            <div class="col-6">
                              <p>31</p>
                            </div>
                          </div>
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Date:</a>
                              </h4>
                            </div>
                            <div class="col-6">
                              <p>07/05/2020</p>
                            </div>
                          </div>
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Time:</a>
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
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#moneymotivation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                <span class="progress-value">86</span>
                              </div>
                            </div>
                          </div>
                          <div class="progress-container progress-warning">
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#millionairemotivation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 98%;">
                                <span class="progress-value">98</span>
                              </div>
                            </div>
                          </div>
                          <div class="progress-container progress-warning">
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#entrepreneurmotivation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 72%;">
                                <span class="progress-value">72</span>
                              </div>
                            </div>
                          </div>
                          <div class="progress-container progress-warning">
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#moneyinspiation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                <span class="progress-value">70</span>
                              </div>
                            </div>
                          </div>
                          <div class="progress-container progress-warning">
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#billionairemotivation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
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
                                            <span class="progress-badge"><a href="http://localhost:8000/hashtags">#millionairememes</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                                <span class="progress-value">70</span>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="http://localhost:8000/hashtags">#millionairememe</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                                                <span class="progress-value">65</span>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="http://localhost:8000/hashtags">#mondaymotivation</a></span>
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
                      <label for="myCheckbox3"><img src="http://localhost:8000/white/img/post3.jpg"></label>

                      <ul class="nav nav-pills nav-pills-warning nav-pills-icons justify-content-center pt-2">
                        <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#link13">
                            <i class="fas fa-analytics"></i> Data
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#link14">
                            <i class="tim-icons icon-chat-33"></i> Caption
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#link15">
                            <i class="fas fa-hashtag"></i> Hashtags
                          </a>
                        </li>
                      </ul>
                      <div class="tab-content tab-space tab-subcategories mt-0">
                        <div class="tab-pane active" id="link13">
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Type:</a>
                              </h4>
                            </div>
                            <div class="col-6">
                              <p>Photo</p>
                            </div>
                          </div>
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Likes:</a>
                              </h4>
                            </div>
                            <div class="col-6">
                              <p>132</p>
                            </div>
                          </div>
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Comments:</a>
                              </h4>
                            </div>
                            <div class="col-6">
                              <p>31</p>
                            </div>
                          </div>
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Date:</a>
                              </h4>
                            </div>
                            <div class="col-6">
                              <p>07/05/2020</p>
                            </div>
                          </div>
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Time:</a>
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
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#moneymotivation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                <span class="progress-value">86</span>
                              </div>
                            </div>
                          </div>
                          <div class="progress-container progress-warning">
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#millionairemotivation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 98%;">
                                <span class="progress-value">98</span>
                              </div>
                            </div>
                          </div>
                          <div class="progress-container progress-warning">
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#entrepreneurmotivation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 72%;">
                                <span class="progress-value">72</span>
                              </div>
                            </div>
                          </div>
                          <div class="progress-container progress-warning">
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#moneyinspiation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                <span class="progress-value">70</span>
                              </div>
                            </div>
                          </div>
                          <div class="progress-container progress-warning">
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#billionairemotivation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
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
                                            <span class="progress-badge"><a href="http://localhost:8000/hashtags">#millionairememes</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                                <span class="progress-value">70</span>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="http://localhost:8000/hashtags">#millionairememe</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                                                <span class="progress-value">65</span>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="http://localhost:8000/hashtags">#mondaymotivation</a></span>
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
                      <label for="myCheckbox4"><img src="http://localhost:8000/white/img/post4.jpg"></label>

                      <ul class="nav nav-pills nav-pills-warning nav-pills-icons justify-content-center pt-2">
                        <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#link16">
                            <i class="fas fa-analytics"></i> Data
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#link17">
                            <i class="tim-icons icon-chat-33"></i> Caption
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#link18">
                            <i class="fas fa-hashtag"></i> Hashtags
                          </a>
                        </li>
                      </ul>
                      <div class="tab-content tab-space tab-subcategories mt-0">
                        <div class="tab-pane active" id="link16">
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Type:</a>
                              </h4>
                            </div>
                            <div class="col-6">
                              <p>Photo</p>
                            </div>
                          </div>
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Likes:</a>
                              </h4>
                            </div>
                            <div class="col-6">
                              <p>132</p>
                            </div>
                          </div>
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Comments:</a>
                              </h4>
                            </div>
                            <div class="col-6">
                              <p>31</p>
                            </div>
                          </div>
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Date:</a>
                              </h4>
                            </div>
                            <div class="col-6">
                              <p>07/05/2020</p>
                            </div>
                          </div>
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Time:</a>
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
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#moneymotivation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                <span class="progress-value">86</span>
                              </div>
                            </div>
                          </div>
                          <div class="progress-container progress-warning">
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#millionairemotivation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 98%;">
                                <span class="progress-value">98</span>
                              </div>
                            </div>
                          </div>
                          <div class="progress-container progress-warning">
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#entrepreneurmotivation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 72%;">
                                <span class="progress-value">72</span>
                              </div>
                            </div>
                          </div>
                          <div class="progress-container progress-warning">
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#moneyinspiation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                <span class="progress-value">70</span>
                              </div>
                            </div>
                          </div>
                          <div class="progress-container progress-warning">
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#billionairemotivation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
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
                                            <span class="progress-badge"><a href="http://localhost:8000/hashtags">#millionairememes</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                                <span class="progress-value">70</span>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="http://localhost:8000/hashtags">#millionairememe</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                                                <span class="progress-value">65</span>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="http://localhost:8000/hashtags">#mondaymotivation</a></span>
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
                                            <i class="tim-icons icon-triangle-right-17"></i>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <p>You can have all the motivation and knowledge in the world, if you have no consistency or dedication you will NOT be getting far!!</p>
                                    </div>
                                </div>
                                <div class="row card-stats">
                                    <div class="col-2">
                                        <div class="info-icon text-center icon-warning">
                                          <i class="tim-icons icon-heart-2"></i>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <p>132</p>
                                    </div>
                                </div>
                                <div class="row card-stats">
                                    <div class="col-2">
                                        <div class="info-icon text-center icon-warning">
                                            <i class="tim-icons icon-chat-33"></i>
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
                      <label for="myCheckbox5"><img src="http://localhost:8000/white/img/post5.jpg"></label>

                      <ul class="nav nav-pills nav-pills-warning nav-pills-icons justify-content-center pt-2">
                        <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#link19">
                            <i class="fas fa-analytics"></i> Data
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#link20">
                            <i class="tim-icons icon-chat-33"></i> Caption
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#link21">
                            <i class="fas fa-hashtag"></i> Hashtags
                          </a>
                        </li>
                      </ul>
                      <div class="tab-content tab-space tab-subcategories mt-0">
                        <div class="tab-pane active" id="link19">
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Type:</a>
                              </h4>
                            </div>
                            <div class="col-6">
                              <p>Photo</p>
                            </div>
                          </div>
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Likes:</a>
                              </h4>
                            </div>
                            <div class="col-6">
                              <p>132</p>
                            </div>
                          </div>
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Comments:</a>
                              </h4>
                            </div>
                            <div class="col-6">
                              <p>31</p>
                            </div>
                          </div>
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Date:</a>
                              </h4>
                            </div>
                            <div class="col-6">
                              <p>07/05/2020</p>
                            </div>
                          </div>
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Time:</a>
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
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#moneymotivation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                <span class="progress-value">86</span>
                              </div>
                            </div>
                          </div>
                          <div class="progress-container progress-warning">
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#millionairemotivation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 98%;">
                                <span class="progress-value">98</span>
                              </div>
                            </div>
                          </div>
                          <div class="progress-container progress-warning">
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#entrepreneurmotivation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 72%;">
                                <span class="progress-value">72</span>
                              </div>
                            </div>
                          </div>
                          <div class="progress-container progress-warning">
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#moneyinspiation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                <span class="progress-value">70</span>
                              </div>
                            </div>
                          </div>
                          <div class="progress-container progress-warning">
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#billionairemotivation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
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
                                            <span class="progress-badge"><a href="http://localhost:8000/hashtags">#millionairememes</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                                <span class="progress-value">70</span>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="http://localhost:8000/hashtags">#millionairememe</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                                                <span class="progress-value">65</span>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="http://localhost:8000/hashtags">#mondaymotivation</a></span>
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
                      <label for="myCheckbox6"><img src="http://localhost:8000/white/img/post6.jpg"></label>

                      <ul class="nav nav-pills nav-pills-warning nav-pills-icons justify-content-center pt-2">
                        <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#link22">
                            <i class="fas fa-analytics"></i> Data
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#link23">
                            <i class="tim-icons icon-chat-33"></i> Caption
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#link24">
                            <i class="fas fa-hashtag"></i> Hashtags
                          </a>
                        </li>
                      </ul>
                      <div class="tab-content tab-space tab-subcategories mt-0">
                        <div class="tab-pane active" id="link22">
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Type:</a>
                              </h4>
                            </div>
                            <div class="col-6">
                              <p>Photo</p>
                            </div>
                          </div>
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Likes:</a>
                              </h4>
                            </div>
                            <div class="col-6">
                              <p>132</p>
                            </div>
                          </div>
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Comments:</a>
                              </h4>
                            </div>
                            <div class="col-6">
                              <p>31</p>
                            </div>
                          </div>
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Date:</a>
                              </h4>
                            </div>
                            <div class="col-6">
                              <p>07/05/2020</p>
                            </div>
                          </div>
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Time:</a>
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
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#moneymotivation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                <span class="progress-value">86</span>
                              </div>
                            </div>
                          </div>
                          <div class="progress-container progress-warning">
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#millionairemotivation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 98%;">
                                <span class="progress-value">98</span>
                              </div>
                            </div>
                          </div>
                          <div class="progress-container progress-warning">
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#entrepreneurmotivation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 72%;">
                                <span class="progress-value">72</span>
                              </div>
                            </div>
                          </div>
                          <div class="progress-container progress-warning">
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#moneyinspiation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                <span class="progress-value">70</span>
                              </div>
                            </div>
                          </div>
                          <div class="progress-container progress-warning">
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#billionairemotivation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
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
                                            <span class="progress-badge"><a href="http://localhost:8000/hashtags">#millionairememes</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                                <span class="progress-value">70</span>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="http://localhost:8000/hashtags">#millionairememe</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                                                <span class="progress-value">65</span>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="http://localhost:8000/hashtags">#mondaymotivation</a></span>
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
                      <label for="myCheckbox7"><img src="http://localhost:8000/white/img/post7.jpg"></label>
                      <ul class="nav nav-pills nav-pills-warning nav-pills-icons justify-content-center pt-2">
                        <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#link25">
                            <i class="fas fa-analytics"></i> Data
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#link26">
                            <i class="tim-icons icon-chat-33"></i> Caption
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#link27">
                            <i class="fas fa-hashtag"></i> Hashtags
                          </a>
                        </li>
                      </ul>
                      <div class="tab-content tab-space tab-subcategories mt-0">
                        <div class="tab-pane active" id="link25">
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Type:</a>
                              </h4>
                            </div>
                            <div class="col-6">
                              <p>Photo</p>
                            </div>
                          </div>
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Likes:</a>
                              </h4>
                            </div>
                            <div class="col-6">
                              <p>132</p>
                            </div>
                          </div>
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Comments:</a>
                              </h4>
                            </div>
                            <div class="col-6">
                              <p>31</p>
                            </div>
                          </div>
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Date:</a>
                              </h4>
                            </div>
                            <div class="col-6">
                              <p>07/05/2020</p>
                            </div>
                          </div>
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Time:</a>
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
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#moneymotivation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                <span class="progress-value">86</span>
                              </div>
                            </div>
                          </div>
                          <div class="progress-container progress-warning">
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#millionairemotivation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 98%;">
                                <span class="progress-value">98</span>
                              </div>
                            </div>
                          </div>
                          <div class="progress-container progress-warning">
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#entrepreneurmotivation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 72%;">
                                <span class="progress-value">72</span>
                              </div>
                            </div>
                          </div>
                          <div class="progress-container progress-warning">
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#moneyinspiation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                <span class="progress-value">70</span>
                              </div>
                            </div>
                          </div>
                          <div class="progress-container progress-warning">
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#billionairemotivation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
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
                                            <span class="progress-badge"><a href="http://localhost:8000/hashtags">#millionairememes</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                                <span class="progress-value">70</span>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="http://localhost:8000/hashtags">#millionairememe</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                                                <span class="progress-value">65</span>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="http://localhost:8000/hashtags">#mondaymotivation</a></span>
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
                      <label for="myCheckbox8"><img src="http://localhost:8000/white/img/post8.jpg"></label>
                      <ul class="nav nav-pills nav-pills-warning nav-pills-icons justify-content-center pt-2">
                        <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#link28">
                            <i class="fas fa-analytics"></i> Data
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#link29">
                            <i class="tim-icons icon-chat-33"></i> Caption
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#link30">
                            <i class="fas fa-hashtag"></i> Hashtags
                          </a>
                        </li>
                      </ul>
                      <div class="tab-content tab-space tab-subcategories mt-0">
                        <div class="tab-pane active" id="link28">
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Type:</a>
                              </h4>
                            </div>
                            <div class="col-6">
                              <p>Photo</p>
                            </div>
                          </div>
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Likes:</a>
                              </h4>
                            </div>
                            <div class="col-6">
                              <p>132</p>
                            </div>
                          </div>
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Comments:</a>
                              </h4>
                            </div>
                            <div class="col-6">
                              <p>31</p>
                            </div>
                          </div>
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Date:</a>
                              </h4>
                            </div>
                            <div class="col-6">
                              <p>07/05/2020</p>
                            </div>
                          </div>
                          <div class="row card-stats">
                            <div class="col-6">
                              <h4><a href="http://localhost:8000/individualpost">Time:</a>
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
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#moneymotivation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                <span class="progress-value">86</span>
                              </div>
                            </div>
                          </div>
                          <div class="progress-container progress-warning">
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#millionairemotivation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 98%;">
                                <span class="progress-value">98</span>
                              </div>
                            </div>
                          </div>
                          <div class="progress-container progress-warning">
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#entrepreneurmotivation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 72%;">
                                <span class="progress-value">72</span>
                              </div>
                            </div>
                          </div>
                          <div class="progress-container progress-warning">
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#moneyinspiation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                <span class="progress-value">70</span>
                              </div>
                            </div>
                          </div>
                          <div class="progress-container progress-warning">
                            <span class="progress-badge"><a
                                href="http://localhost:8000/hashtags">#billionairemotivation</a></span>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
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
                                            <span class="progress-badge"><a href="http://localhost:8000/hashtags">#millionairememes</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                                <span class="progress-value">70</span>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="http://localhost:8000/hashtags">#millionairememe</a></span>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                                                <span class="progress-value">65</span>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="progress-container progress-warning">
                                            <span class="progress-badge"><a href="http://localhost:8000/hashtags">#mondaymotivation</a></span>
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


        {{-- <div class="col-12">
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
                <th class="sorting_desc_disabled sorting_asc_disabled text-right">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><div class="photo">
                      <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                    </div></td>
                <td><a href="http://localhost:8000/individualpost">/p/CLmHaJSptE6/</a></td>
                <td>Photo</td>
                <td>Don't settle for less than the best! 👊💯</td>
                <td>110</td>
                <td>30</td>
                <td>22/02/2021</td>
                <td>#cristianoronaldo #ronaldo #cr...</td>
                <td class="text-right">
                  <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i class="tim-icons icon-heart-2"></i></a>
                  <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i class="tim-icons icon-pencil"></i></a>
                  <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i class="tim-icons icon-simple-remove"></i></a>
                </td>
              </tr>
              <tr>
                <td><div class="photo">
                      <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                    </div></td>
                <td><a href="http://localhost:8000/individualpost">/p/CLgxTAOp2xM/</a></td>
                <td>Photo</td>
                <td>Get ready for tomorrow by focusing on t...</td>
                <td>219</td>
                <td>23</td>
                <td>20/02/2021</td>
                <td>#rocky #rockybalboa #rockybal...</td>
                <td class="text-right">
                  <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i class="tim-icons icon-heart-2"></i></a>
                  <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i class="tim-icons icon-pencil"></i></a>
                  <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i class="tim-icons icon-simple-remove"></i></a>
                </td>
              </tr>
              <tr>
                <td><div class="photo">
                      <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                    </div></td>
                <td><a href="http://localhost:8000/individualpost">/p/CLe2eLOpb9L/</a></td>
                <td>Photo</td>
                <td>What that says 👆👊💯</td>
                <td>135</td>
                <td>3</td>
                <td>19/02/2021</td>
                <td>#millionairequote #millionaire...</td>
                <td class="text-right">
                  <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i class="tim-icons icon-heart-2"></i></a>
                  <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm  edit"><i class="tim-icons icon-pencil"></i></a>
                  <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i class="tim-icons icon-simple-remove"></i></a>
                </td>
              </tr>
              <tr>
                <td><div class="photo">
                      <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                    </div></td>
                <td><a href="http://localhost:8000/individualpost">/p/CLe2eLOpb9L/</a></td>
                <td>Photo</td>
                <td>Do you keep going when times...</td>
                <td>186</td>
                <td>62</td>
                <td>18/02/2021</td>
                <td>#millionairequote #moneymotiva...</td>
                <td class="text-right">
                  <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i class="tim-icons icon-heart-2"></i></a>
                  <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i class="tim-icons icon-pencil"></i></a>
                  <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i class="tim-icons icon-simple-remove"></i></a>
                </td>
              </tr>
             <tr>
                <td><div class="photo">
                      <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                    </div></td>
                <td><a href="http://localhost:8000/individualpost">/p/CLZqAn9pars/</a></td>
                <td>Photo</td>
                <td>What that says 👆💯👊</td>
                <td>150</td>
                <td>67</td>
                <td>17/02/2021</td>
                <td>#thomasshelby #tomshelby #shelby...</td>
                <td class="text-right">
                  <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i class="tim-icons icon-heart-2"></i></a>
                  <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i class="tim-icons icon-pencil"></i></a>
                  <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i class="tim-icons icon-simple-remove"></i></a>
                </td>
              </tr>
              <tr>
                <td><div class="photo">
                      <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                    </div></td>
                <td><a href="http://localhost:8000/individualpost">/p/CLZBFTvJPb3/</a></td>
                <td>Carousel</td>
                <td>You can have all the motivat...</td>
                <td>119</td>
                <td>50</td>
                <td>17/02/2021</td>
                <td>#millionairequote #moneymotiva...</td>
                <td class="text-right">
                  <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i class="tim-icons icon-heart-2"></i></a>
                  <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i class="tim-icons icon-pencil"></i></a>
                  <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i class="tim-icons icon-simple-remove"></i></a>
                </td>
              </tr>
              <tr>
                <td><div class="photo">
                      <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                    </div></td>
                <td><a href="http://localhost:8000/individualpost">/p/CLUvY44Jbaa/</a></td>
                <td>Photo</td>
                <td>DOUBLE TAP IF YOUR A SURVIVOR...</td>
                <td>178</td>
                <td>45</td>
                <td>15/02/2021</td>
                <td>#millionairequote #moneymotiva...</td>
                <td class="text-right">
                  <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i class="tim-icons icon-heart-2"></i></a>
                  <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i class="tim-icons icon-pencil"></i></a>
                  <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i class="tim-icons icon-simple-remove"></i></a>
                </td>
              </tr>
              <tr>
                <td><div class="photo">
                      <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                    </div></td>
                <td><a href="http://localhost:8000/individualpost">/p/CLUT4w2JmSC/</a></td>
                <td>Video</td>
                <td>What that says ☝️💯👊</td>
                <td>153</td>
                <td>28</td>
                <td>15/02/2021</td>
                <td>#millionairequote #entrepre...</td>
                <td class="text-right">
                  <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i class="tim-icons icon-heart-2"></i></a>
                  <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i class="tim-icons icon-pencil"></i></a>
                  <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i class="tim-icons icon-simple-remove"></i></a>
                </td>
              </tr>
              <tr>
                <td><div class="photo">
                      <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                    </div></td>
                <td><a href="http://localhost:8000/individualpost">/p/CLUA1cjpJAV/</a></td>
                <td>Video</td>
                <td>Don't be a sheep 🐑 Be a wolf 🐺</td>
                <td>113</td>
                <td>55</td>
                <td>15/02/2021</td>
                <td>#billionairequote #billiona...</td>
                <td class="text-right">
                  <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i class="tim-icons icon-heart-2"></i></a>
                  <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i class="tim-icons icon-pencil"></i></a>
                  <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i class="tim-icons icon-simple-remove"></i></a>
                </td>
              </tr>
              <tr>
                <td><div class="photo">
                      <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                    </div></td>
                <td><a href="http://localhost:8000/individualpost">/p/CLTqyVdpjF6/</a></td>
                <td>Photo</td>
                <td>People say life is too short to...</td>
                <td>138</td>
                <td>60</td>
                <td>14/02/2021</td>
                <td>#thomasshelby #thomasshelbyme...</td>
                <td class="text-right">
                  <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i class="tim-icons icon-heart-2"></i></a>
                  <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i class="tim-icons icon-pencil"></i></a>
                  <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i class="tim-icons icon-simple-remove"></i></a>
                </td>
              </tr>
              <tr>
                <td><div class="photo">
                      <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                    </div></td>
                <td><a href="http://localhost:8000/individualpost">/p/CLMy_kNpDD4/</a></td>
                <td>Photo</td>
                <td>Don't let your body tell you...</td>
                <td>209</td>
                <td>131</td>
                <td>12/02/2021</td>
                <td>#arnoldschwarzenegger #schwarze...</td>
                <td class="text-right">
                  <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i class="tim-icons icon-heart-2"></i></a>
                  <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i class="tim-icons icon-pencil"></i></a>
                  <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i class="tim-icons icon-simple-remove"></i></a>
                </td>
              </tr>
              <tr>
                <td><div class="photo">
                      <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                    </div></td>
                <td><a href="http://localhost:8000/individualpost">/p/CLMSkboJWjh/</a></td>
                <td>Carousel</td>
                <td>Sometimes success isn't alwa...</td>
                <td>166</td>
                <td>59</td>
                <td>12/02/2021</td>
                <td>#entrepreneurship #entrepreneu...</td>
                <td class="text-right">
                  <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i class="tim-icons icon-heart-2"></i></a>
                  <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i class="tim-icons icon-pencil"></i></a>
                  <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i class="tim-icons icon-simple-remove"></i></a>
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
                <th class="disabled-sorting text-right">Actions</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- end content-->
      </div>
      <!--  end card  -->
    </div>
    <!-- end col-md-12 --> --}}
      </div>
      <!-- end row -->
    </div>


  </div>
  </div>

@endsection


@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();
      demo.initVectorMap();
    });
  </script>


  <script>
    $(document).ready(function() {

      /* ******************************
       *
       *        Data Table
       *
       *******************************/

      // Create a table object
      var table = $('#datatable').DataTable({
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

      // Handle clicks on edit button
      table.on('click', '.edit', function() {
        $tr = $(this).closest('tr');

        var data = table.row($tr).data();
        alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
      });

      // Handle clicks on delete button
      table.on('click', '.remove', function(e) {
        $tr = $(this).closest('tr');
        table.row($tr).remove().draw();
        e.preventDefault();
      });

      // Handle clicks on like botton
      table.on('click', '.like', function() {
        alert('You clicked on Like button');
      });




      /* ******************************
       *
       *        Bubble chart
       *
       *******************************/

      var chart_data = [];

      //generate data set
      var x, y;
      for (y = 0; y < 7; y++) {
        for (x = 0; x < 24; x++) {
          var size = Math.floor(Math.random() * 10);
          chart_data.push({
            x: x + 1,
            y: y + 1,
            r: size
          });
        }
      }

      var ctx = document.getElementById("bubbleChart");

      if (ctx) {
        ctx = ctx.getContext('2d');


        var gradientStroke = ctx.createLinearGradient(0, 230, 0, 50);
        gradientStroke.addColorStop(1, 'rgba(254,140,113,0.1)');
        gradientStroke.addColorStop(0.4, 'rgba(254,140,113,0.1)');
        gradientStroke.addColorStop(0, 'rgba(254,140,113,0.1)'); //purple colors


        var bubbleData = {
          datasets: [{
            label: "Post Count/Day/Time",
            fill: true,
            backgroundColor: 'rgba(254,140,113)',
            borderColor: 'rgba(254,140,113)',
            borderWidth: 2,
            borderDash: [],
            borderDashOffset: 0.0,
            pointBackgroundColor: '#fe8c71',
            pointBorderColor: 'rgba(255,255,255,0)',
            pointHoverBackgroundColor: '#fe8c71',
            pointBorderWidth: 20,
            pointHoverRadius: 4,
            pointHoverBorderWidth: 15,
            pointRadius: 4,
            data: chart_data,
          }]
        };

        var bubbleOptions = {
          layout: {
            padding: {
              left: 20,
              right: 20,
              top: 20,
              bottom: 20
            }
          },

          responsive: true,
          legend: {
            display: false
          },

          scales: {
            xAxes: [{
              ticks: {
                suggestedMin: 0,
                suggestedMax: 25
              },
              callback: function(value, index, values) {
                return value + 1;
              }
            }],
            yAxes: [{
              ticks: {
                suggestedMin: 0,
                suggestedMax: 8
              },
              callback: function(value, index, values) {
                return value + 'poo';
              }
            }]
          }
        };
        //var ctx = $("#bubbleChart");
        var myBubbleChart = new Chart(ctx, {
          type: 'bubble',
          data: bubbleData,
          options: bubbleOptions
        });
      }



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
@endpush
