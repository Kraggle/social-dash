@extends('layouts.app', [
'activePage' => 'likes',
'menuParent' => 'analytics',
'titlePage' => __('Likes')
])

@section('content')
<<<<<<< HEAD
    <div class="content">
        <div class="row">
            <div class="col-6">
                <div class="card card-chart">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-6 text-left">
                                <h5 class="card-category">Total Likes</h5>
                                <h2 class="card-title">Likes</h2>
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
=======
<div class="content">
    <div class="row">
        <div class="col-12">
            <div class="card card-chart">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h5 class="card-category">Total Likes</h5>
                            <h2 class="card-title">Likes</h2>
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
>>>>>>> 7567ce2837be88f4c114c17a77aa5c8c189a821c
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
<<<<<<< HEAD
            <div class="col-6">
                <div class="card card-chart">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-6 text-left">
                                <h5 class="card-category">Total Likes</h5>
                                <h2 class="card-title">Likes</h2>
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
=======
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-chart">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h5 class="card-category">Total Likes</h5>
                            <h2 class="card-title">Likes</h2>
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
>>>>>>> 7567ce2837be88f4c114c17a77aa5c8c189a821c
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="chartBig2"></canvas>
                    </div>
                </div>
            </div>
        </div>
<<<<<<< HEAD
        <div class="row">

        </div>
        <div class="col-md-8 ml-auto mr-auto">
            <h2 class="text-center">Most Liked Posts</h2>
            <p class="text-center">Search and analyse through your data to compare and analyse the what/why and hows of your
                Instagram engagement. We allow you to sort and search through everything to give you the best understanding
                of your data.
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
                                    <th title="Enter Text Here">Post</th>
                                    <th title="Enter Text Here">Post URL</th>
                                    <th title="Enter Text Here">Desciption</th>
                                    <th title="Enter Text Here">Likes</th>
                                    <th title="Enter Text Here">Comments</th>
                                    <th title="Enter Text Here">Date Posted</th>
                                    <th title="Enter Text Here">Hashtags</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="photo">
                                            <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                        </div>
                                    </td>
                                    <td><a href="http://localhost:8000/posts">/p/CLmHaJSptE6/</a></td>
                                    <td>Don't settle for less than the best! 👊💯</td>
                                    <td><a href="http://localhost:8000/posts">110</a></td>
                                    <td><a href="http://localhost:8000/comments">30</a></td>
                                    <td><a href="http://localhost:8000/posts">22/02/2021</a></td>
                                    <td>#cristianoronaldo #ronaldo #cr...</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="photo">
                                            <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                        </div>
                                    </td>
                                    <td><a href="http://localhost:8000/posts">/p/CLgxTAOp2xM/</a></td>
                                    <td>Get ready for tomorrow by focusing on t...</td>
                                    <td><a href="http://localhost:8000/posts">219</a></td>
                                    <td><a href="http://localhost:8000/comments">23</a></td>
                                    <td><a href="http://localhost:8000/posts">20/02/2021</a></td>
                                    <td>#rocky #rockybalboa #rockybal...</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="photo">
                                            <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                        </div>
                                    </td>
                                    <td><a href="http://localhost:8000/posts">/p/CLe2eLOpb9L/</a></td>
                                    <td>What that says 👆👊💯</td>
                                    <td><a href="http://localhost:8000/posts">135</a></td>
                                    <td><a href="http://localhost:8000/comments">3</a></td>
                                    <td><a href="http://localhost:8000/posts">19/02/2021</a></td>
                                    <td>#millionairequote #millionaire...</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="photo">
                                            <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                        </div>
                                    </td>
                                    <td><a href="http://localhost:8000/posts">/p/CLe2eLOpb9L/</a></td>
                                    <td>Do you keep going when times...</td>
                                    <td><a href="http://localhost:8000/posts">186</a></td>
                                    <td><a href="http://localhost:8000/comments">62</a></td>
                                    <td><a href="http://localhost:8000/posts">18/02/2021</a></td>
                                    <td>#millionairequote #moneymotiva...</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="photo">
                                            <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                        </div>
                                    </td>
                                    <td><a href="http://localhost:8000/posts">/p/CLZqAn9pars/</a></td>
                                    <td>What that says 👆💯👊</td>
                                    <td><a href="http://localhost:8000/posts">150</a></td>
                                    <td><a href="http://localhost:8000/comments">67</a></td>
                                    <td><a href="http://localhost:8000/posts">17/02/2021</a></td>
                                    <td>#thomasshelby #tomshelby #shelby...</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="photo">
                                            <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                        </div>
                                    </td>
                                    <td><a href="http://localhost:8000/posts">/p/CLZBFTvJPb3/</a></td>
                                    <td>You can have all the motivat...</td>
                                    <td><a href="http://localhost:8000/posts">119</a></td>
                                    <td><a href="http://localhost:8000/comments">50</a></td>
                                    <td><a href="http://localhost:8000/posts">17/02/2021</a></td>
                                    <td>#millionairequote #moneymotiva...</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="photo">
                                            <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                        </div>
                                    </td>
                                    <td><a href="http://localhost:8000/posts">/p/CLUvY44Jbaa/</a></td>
                                    <td>DOUBLE TAP IF YOUR A SURVIVOR...</td>
                                    <td><a href="http://localhost:8000/posts">178</a></td>
                                    <td><a href="http://localhost:8000/comments">45</a></td>
                                    <td><a href="http://localhost:8000/posts">15/02/2021</a></td>
                                    <td>#millionairequote #moneymotiva...</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="photo">
                                            <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                        </div>
                                    </td>
                                    <td><a href="http://localhost:8000/posts">/p/CLUT4w2JmSC/</a></td>
                                    <td>What that says ☝️💯👊</td>
                                    <td><a href="http://localhost:8000/posts">153</a></td>
                                    <td><a href="http://localhost:8000/comments">28</a></td>
                                    <td><a href="http://localhost:8000/posts">15/02/2021</a></td>
                                    <td>#millionairequote #entrepre...</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="photo">
                                            <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                        </div>
                                    </td>
                                    <td><a href="http://localhost:8000/posts">/p/CLUA1cjpJAV/</a></td>
                                    <td>Don't be a sheep 🐑 Be a wolf 🐺</td>
                                    <td><a href="http://localhost:8000/posts">113</a></td>
                                    <td><a href="http://localhost:8000/comments">55</a></td>
                                    <td><a href="http://localhost:8000/posts">15/02/2021</a></td>
                                    <td>#billionairequote #billiona...</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="photo">
                                            <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                        </div>
                                    </td>
                                    <td><a href="http://localhost:8000/posts">/p/CLTqyVdpjF6/</a></td>
                                    <td>People say life is too short to...</td>
                                    <td><a href="http://localhost:8000/posts">138</a></td>
                                    <td><a href="http://localhost:8000/comments">60</a></td>
                                    <td><a href="http://localhost:8000/posts">14/02/2021</a></td>
                                    <td>#thomasshelby #thomasshelbyme...</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="photo">
                                            <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                        </div>
                                    </td>
                                    <td><a href="http://localhost:8000/posts">/p/CLMy_kNpDD4/</a></td>
                                    <td>Don't let your body tell you...</td>
                                    <td><a href="http://localhost:8000/posts">209</a></td>
                                    <td><a href="http://localhost:8000/comments">131</a></td>
                                    <td><a href="http://localhost:8000/posts">12/02/2021</a></td>
                                    <td>#arnoldschwarzenegger #schwarze...</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="photo">
                                            <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                        </div>
                                    </td>
                                    <td><a href="http://localhost:8000/posts">/p/CLMSkboJWjh/</a></td>
                                    <td>Sometimes success isn't alwa...</td>
                                    <td><a href="http://localhost:8000/posts">166</a></td>
                                    <td><a href="http://localhost:8000/comments">59</a></td>
                                    <td><a href="http://localhost:8000/posts">12/02/2021</a></td>
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
=======
    </div>
    <div class="col-md-8 ml-auto mr-auto">
        <h2 class="text-center">Most Liked Posts</h2>
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
                                        <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                    </div>
                                </td>
                                <td>/p/CLmHaJSptE6/</td>
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
                                        <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                    </div>
                                </td>
                                <td>/p/CLgxTAOp2xM/</td>
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
                                        <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                    </div>
                                </td>
                                <td>/p/CLe2eLOpb9L/</td>
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
                                        <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                    </div>
                                </td>
                                <td>/p/CLe2eLOpb9L/</td>
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
                                        <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                    </div>
                                </td>
                                <td>/p/CLZqAn9pars/</td>
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
                                        <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                    </div>
                                </td>
                                <td>/p/CLZBFTvJPb3/</td>
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
                                        <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                    </div>
                                </td>
                                <td>/p/CLUvY44Jbaa/</td>
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
                                        <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                    </div>
                                </td>
                                <td>/p/CLUT4w2JmSC/</td>
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
                                        <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                    </div>
                                </td>
                                <td>/p/CLUA1cjpJAV/</td>
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
                                        <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                    </div>
                                </td>
                                <td>/p/CLTqyVdpjF6/</td>
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
                                        <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                    </div>
                                </td>
                                <td>/p/CLMy_kNpDD4/</td>
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
                                        <img src="{{ asset('white') }}/img/tania.jpg" alt="Table image">
                                    </div>
                                </td>
                                <td>/p/CLMSkboJWjh/</td>
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
>>>>>>> 7567ce2837be88f4c114c17a77aa5c8c189a821c
    </div>
    <!-- end row -->
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

<<<<<<< HEAD
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
=======
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
>>>>>>> 7567ce2837be88f4c114c17a77aa5c8c189a821c

@endpush
