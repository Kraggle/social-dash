@extends('layouts.app', [
'activePage' => 'posts',
'menuParent' => 'analytics',
'titlePage' => __('Posts')
])

@section('content')
<div class="content">
    <div class="row">
        <div class="col-12">
            <div class="card card-chart">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h5 class="card-category">Overall Account Posts</h5>
                            <h2 class="card-title">Posts</h2>

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
            <div class="col-md-8 ml-auto mr-auto">
                <h2 class="text-center">Recent Posts</h2>
                <p class="text-center">Search and analyse through your data to compare and analyse the what/why and hows of your Instagram engagement. We allow you to sort and search through everything to give you the best understanding of your data.
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
                                        <td>
                                            <div class="photo">
                                                <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                                            </div>
                                        </td>
                                        <td>/p/CLmHaJSptE6/</td>
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
                                        <td>
                                            <div class="photo">
                                                <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                                            </div>
                                        </td>
                                        <td>/p/CLgxTAOp2xM/</td>
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
                                        <td>
                                            <div class="photo">
                                                <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                                            </div>
                                        </td>
                                        <td>/p/CLe2eLOpb9L/</td>
                                        <td>Photo</td>
                                        <td>What that says 👆👊💯</td>
                                        <td>135</td>
                                        <td>3</td>
                                        <td>19/02/2021</td>
                                        <td>#millionairequote #millionaire...</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm btn-neutral like"><i class="tim-icons icon-heart-2"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm btn-neutral  edit"><i class="tim-icons icon-pencil"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm btn-neutral remove"><i class="tim-icons icon-simple-remove"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="photo">
                                                <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                                            </div>
                                        </td>
                                        <td>/p/CLe2eLOpb9L/</td>
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
                                        <td>
                                            <div class="photo">
                                                <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                                            </div>
                                        </td>
                                        <td>/p/CLZqAn9pars/</td>
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
                                        <td>
                                            <div class="photo">
                                                <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                                            </div>
                                        </td>
                                        <td>/p/CLZBFTvJPb3/</td>
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
                                        <td>
                                            <div class="photo">
                                                <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                                            </div>
                                        </td>
                                        <td>/p/CLUvY44Jbaa/</td>
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
                                        <td>
                                            <div class="photo">
                                                <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                                            </div>
                                        </td>
                                        <td>/p/CLUT4w2JmSC/</td>
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
                                        <td>
                                            <div class="photo">
                                                <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                                            </div>
                                        </td>
                                        <td>/p/CLUA1cjpJAV/</td>
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
                                        <td>
                                            <div class="photo">
                                                <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                                            </div>
                                        </td>
                                        <td>/p/CLTqyVdpjF6/</td>
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
                                        <td>
                                            <div class="photo">
                                                <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                                            </div>
                                        </td>
                                        <td>/p/CLMy_kNpDD4/</td>
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
                                        <td>
                                            <div class="photo">
                                                <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                                            </div>
                                        </td>
                                        <td>/p/CLMSkboJWjh/</td>
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
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();
        demo.initVectorMap();
    });

</script>


<script>
    $(document).ready(function() {
        $('#datatable').DataTable({
            "pagingType": "full_numbers"
            , "lengthMenu": [
                [10, 25, 50, -1]
                , [10, 25, 50, "All"]
            ]
            , responsive: true
            , language: {
                search: "_INPUT_"
                , searchPlaceholder: "Search records"
            , }

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
@endpush
