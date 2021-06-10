@extends('layouts.app', [
'activePage' => 'singleprofile',
'menuParent' => '',
'titlePage' => __('Single Profile')
])

@section('content')
    <div class="content single-post">
        <div class="row">
            <div class="col-6">
                <h3><a href="#">
                        < Previous Post</a>
                </h3>
            </div>
            <div class="col-6 float-right">
                <h3 class="text-right"><a href="#">Next Post ></a></h3>
            </div>
            <div class="row post-data">
                <div class="col-3">
                    <img src="http://localhost:8000/white/img/tania.jpg">
                </div>
                <div class="col-3 pt-4">
                    <h3>Quick Post Facts</h3>
                    <div class="row">
                        <div class="col col-4 label">
                            <h4>Description:</h4>
                        </div>
                        <div class="col col-8">
                            <p>Don't settle for less than the best! 👊💯</p>
                        </div>
                    </div>
                    {{-- <div class="row">
                <div class="col col-4 label"><h4>Hashtags:</h4></div>
                <div class="col col-8"><p><a href="#">#entrepreneurship</a> <a href="#">#entrepreneur</a> <a href="#">#money</a> <a href="#">#moneymotivation</a> <a href="#">#entrepreneurmotivation</a> <a href="#">#millionairequote</a> <a href="#">#millionairemotivation</a> <a href="#">#mondaymotivation</a> <a href="#">#moneyinspiration</a> <a href="#">#millionaire</a> <a href="#">#dropshipping</a></p></div>
            </div> --}}
                    <div class="row">
                        <div class="col col-4 label">
                            <h4>Likes:</h4>
                        </div>
                        <div class="col col-8">
                            <h4>132</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-4 label">
                            <h4>Comments:</h4>
                        </div>
                        <div class="col col-8">
                            <h4>28</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-4 label">
                            <h4>Saves:</h4>
                        </div>
                        <div class="col col-8">
                            <h4>2</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-4 label">
                            <h4>Post Date:</h4>
                        </div>
                        <div class="col col-8">
                            <h4>23/04/2020</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-4 label">
                            <h4>Post Time:</h4>
                        </div>
                        <div class="col col-8">
                            <h4>15:02</h4>
                        </div>
                    </div>

                </div>
                <div class="col-6">
                    <div class="card card-chart">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-sm-4 text-left">
                                    <h5 class="card-category">Overall Post Engagement</h5>
                                    <h2 class="card-title">Engagements</h2>
                                </div>
                                <div class="col-sm-8">
                                    <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">

                                        <input type="text"
                                            class="form-control -block datepicker text-warning border-warning mr-2"
                                            value="05/05/2021">
                                        <div class="btn-group">
                                            <div class="btn btn-sm btn-warning btn-simple" id="3">
                                                <input type="radio" class="d-none" name="options">
                                                <span
                                                    class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Engagement</span>
                                                <span class="d-block d-sm-none">
                                                    <i class="tim-icons icon-tap-02"></i>
                                                </span>
                                            </div>
                                            <div class="btn btn-sm btn-warning btn-simple" id="3">
                                                <input type="radio" class="d-none" name="options">
                                                <span
                                                    class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Likes</span>
                                                <span class="d-block d-sm-none">
                                                    <i class="tim-icons icon-tap-02"></i>
                                                </span>
                                            </div>
                                            <div class="btn btn-sm btn-warning btn-simple" id="3">
                                                <input type="radio" class="d-none" name="options">
                                                <span
                                                    class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Comments</span>
                                                <span class="d-block d-sm-none">
                                                    <i class="tim-icons icon-tap-02"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="individualpostchart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="content">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="toolbar">
                                <h3>Hashtags Used In Post</h3>
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>
                            <table id="hashtaginpost" class="table table-striped">
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
                                        <td><a href="http://localhost:8000/hashtags">#millionairesuccess</a></td>
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
                                        <td><a href="http://localhost:8000/hashtags">#entrepreneur</a></td>
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
                                        <td><a href="http://localhost:8000/hashtags">#entrepreneurquotes</a></td>
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
                                        <td><a href="http://localhost:8000/hashtags">#millionairequote</a></td>
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
                                        <td><a href="http://localhost:8000/hashtags">#millionaireposts</a></td>
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

                        </div><!-- card-body -->
                    </div><!-- card -->
                </div>
                <div class="col-md-6 float-right">
                    <div class="card">
                        <div class="card-body">
                            <div class="toolbar">
                                <h3>Post Comments</h3>
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>
                            <table id="datatable" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Profile</th>
                                        <th>Instagram UN</th>
                                        <th>Followers</th>
                                        <th>Description</th>
                                        <th>Likes</th>
                                        <th>Replies</th>
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
                                        <td>Great quality content! Ke...</td>
                                        <td>3</td>
                                        <td>7</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="photo">
                                                <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                            </div>
                                        </td>
                                        <td>@corybeevers</td>
                                        <td>129,362</td>
                                        <td>Check out this post @do...</td>
                                        <td>7</td>
                                        <td>24</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="photo">
                                                <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                            </div>
                                        </td>
                                        <td>@HaydenKibble</td>
                                        <td>8,921</td>
                                        <td>Awsome post dude than...</td>
                                        <td>19</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="photo">
                                                <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                            </div>
                                        </td>
                                        <td>@kraggle</td>
                                        <td>491</td>
                                        <td>Thank you for the cont...</td>
                                        <td>1</td>
                                        <td>72</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="photo">
                                                <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                            </div>
                                        </td>
                                        <td>@mattymyers</td>
                                        <td>1,287</td>
                                        <td>Great quality content! Ke...</td>
                                        <td>3</td>
                                        <td>7</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="photo">
                                                <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                            </div>
                                        </td>
                                        <td>@corybeevers</td>
                                        <td>129,362</td>
                                        <td>Check out this post @do...</td>
                                        <td>7</td>
                                        <td>24</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="photo">
                                                <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                            </div>
                                        </td>
                                        <td>@HaydenKibble</td>
                                        <td>8,921</td>
                                        <td>Awsome post dude than...</td>
                                        <td>19</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="photo">
                                                <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                            </div>
                                        </td>
                                        <td>@kraggle</td>
                                        <td>491</td>
                                        <td>Thank you for the cont...</td>
                                        <td>1</td>
                                        <td>72</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="photo">
                                                <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                            </div>
                                        </td>
                                        <td>@mattymyers</td>
                                        <td>1,287</td>
                                        <td>Great quality content! Ke...</td>
                                        <td>3</td>
                                        <td>7</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="photo">
                                                <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                            </div>
                                        </td>
                                        <td>@corybeevers</td>
                                        <td>129,362</td>
                                        <td>Check out this post @do...</td>
                                        <td>7</td>
                                        <td>24</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="photo">
                                                <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                            </div>
                                        </td>
                                        <td>@HaydenKibble</td>
                                        <td>8,921</td>
                                        <td>Awsome post dude than...</td>
                                        <td>19</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="photo">
                                                <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                            </div>
                                        </td>
                                        <td>@kraggle</td>
                                        <td>491</td>
                                        <td>Thank you for the cont...</td>
                                        <td>1</td>
                                        <td>72</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="photo">
                                                <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                            </div>
                                        </td>
                                        <td>@mattymyers</td>
                                        <td>1,287</td>
                                        <td>Great quality content! Ke...</td>
                                        <td>3</td>
                                        <td>7</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="photo">
                                                <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                            </div>
                                        </td>
                                        <td>@corybeevers</td>
                                        <td>129,362</td>
                                        <td>Check out this post @do...</td>
                                        <td>7</td>
                                        <td>24</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="photo">
                                                <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                            </div>
                                        </td>
                                        <td>@HaydenKibble</td>
                                        <td>8,921</td>
                                        <td>Awsome post dude than...</td>
                                        <td>19</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="photo">
                                                <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                            </div>
                                        </td>
                                        <td>@kraggle</td>
                                        <td>491</td>
                                        <td>Thank you for the cont...</td>
                                        <td>1</td>
                                        <td>72</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="photo">
                                                <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                            </div>
                                        </td>
                                        <td>@kraggle</td>
                                        <td>491</td>
                                        <td>Thank you for the cont...</td>
                                        <td>1</td>
                                        <td>72</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Profile</th>
                                        <th>Instagram UN</th>
                                        <th>Followers</th>
                                        <th>Description</th>
                                        <th>Likes</th>
                                        <th>Replies</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- end content-->
                    </div>
                    <!--  end card  -->
                </div>
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

            // Followers table
            var table = $('#datatable').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [5, 25, 50, -1],
                    [5, 25, 50, "All"]
                ],
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search records",
                }
            });


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
            $('#hashtaginpost').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [5, 25, 50, -1],
                    [5, 25, 50, "All"]
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
@endpush
