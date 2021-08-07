@extends('layouts.app', [
'activePage' => 'compareposts',
'menuParent' => 'analytics',
'titlePage' => __('Compare Posts')
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-12">
                <div class="card card-chart">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-6 text-left">
                                <h5 class="card-category">Post Comparison</h5>
                                <h2 class="card-title">Engagement</h2>

                            </div>
                            <div class="col-sm-6">
                                <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                                    <label class="btn btn-sm btn-warning btn-simple active" id="0">
                                        <input type="radio" name="options" checked>
                                        <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Followers</span>
                                        <span class="d-block d-sm-none">
                                            <i class="tim-icons icon-single-02"></i>
                                        </span>
                                    </label>
                                    <label class="btn btn-sm btn-warning btn-simple" id="1">
                                        <input type="radio" class="d-none d-sm-none" name="options">
                                        <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Likes</span>
                                        <span class="d-block d-sm-none">
                                            <i class="tim-icons icon-gift-2"></i>
                                        </span>
                                    </label>
                                    <label class="btn btn-sm btn-warning btn-simple" id="2">
                                        <input type="radio" class="d-none" name="options">
                                        <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Comments</span>
                                        <span class="d-block d-sm-none">
                                            <i class="tim-icons icon-tap-02"></i>
                                        </span>
                                    </label>
                                </div>
                                <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                                    <label class="btn btn-sm btn-warning btn-simple" id="3">
                                        <input type="radio" class="d-none" name="options">
                                        <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Engagement</span>
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
                            <canvas id="chartBig3"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row card">
            <div class="row">
                <div class="col-3 card" style="margin-bottom: 15px">
                    <div class="card" style="margin-bottom: 0px">
                        <button class="btn btn-warning float-right ml-4 mr-4 mt-4">+ Another Post</button>
                    </div>
                </div>
                <div class="col-2 card" style="margin-bottom: -15px">
                    <div class="card" style="margin-bottom: 0px">
                        <button class="btn btn-warning float-right mt-4">Save Comparison</button>
                    </div>
                </div>
                <div class="col-5 card">
                </div>
                <div class="col-2 card" style="margin-bottom: -15px">
                    <div class="card" style="margin-bottom: 0px">
                        <button class="btn btn-warning float-right mt-4">Remove Post</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <ul class="nav nav-pills nav-pills-warning align-self-center ml-2 mt-5">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#link3">
                                Data
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#link4">
                                Hashtags
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-2 card card-comparepost">
                    <div class="card-header">
                        <input type="checkbox" id="myCheckbox31" />
                        <label for="myCheckbox31"><img src="http://localhost:8000/white/img/post1.jpg"></label>
                    </div>
                </div>
                <div class="col-2 card card-comparepost">
                    <div class="card-header">
                        <input type="checkbox" id="myCheckbox32" />
                        <label for="myCheckbox32"><img src="http://localhost:8000/white/img/post2.jpg"></label>
                    </div>
                </div>
                <div class="col-2 card card-comparepost">
                    <div class="card-header">
                        <input type="checkbox" id="myCheckbox33" />
                        <label for="myCheckbox33"><img src="http://localhost:8000/white/img/post3.jpg"></label>
                    </div>
                </div>
                <div class="col-2 card card-comparepost">
                    <div class="card-header">
                        <input type="checkbox" id="myCheckbox34" />
                        <label for="myCheckbox34"><img src="http://localhost:8000/white/img/post4.jpg"></label>
                    </div>
                </div>
                <div class="col-2 card card-comparepost">
                    <div class="card-header">
                        <input type="checkbox" id="myCheckbox35" />
                        <label for="myCheckbox35"><img src="http://localhost:8000/white/img/post5.jpg"></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tab-content tab-space">
                        <div class="tab-pane active" id="link3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-2 card text-right">
                                            <div class="card">
                                                <h4
                                                    title="This is the type of post you have published. It can be between a photo/carousel/video.">
                                                    Type</h4>
                                                <h4 title="This is the character count of your Instagram post.">Description
                                                </h4>
                                                <h4 title="How many likes you have recieved in 1 hour.">Likes (1 hour)</h4>
                                                <h4 title="How many likes you have recieved in 6 hours.">Likes (6 hour)</h4>
                                                <h4 title="How many likes you have recieved in 12 hours.">Likes (12 hour)
                                                </h4>
                                                <h4 title="How many likes you have recieved in 1 day.">Likes (1 day)</h4>
                                                <h4 title="How many likes you have recieved in total.">Likes (total)</h4>
                                                <h4 title="How many Comments you have recieved on each post.">Comments</h4>
                                                <h4
                                                    title="The percentage of engagement from your followers towards your post.">
                                                    Eng Rate</h4>
                                                <h4 title="How many different hashtags you have used on the post.">Hashtags
                                                </h4>
                                                <h4
                                                    title="What the overall average difficulty of the targeted hashtags is.">
                                                    Avg Tag Difficulty</h4>
                                                <h4 title="The average amount of likes for each hashtags used.">Likes Per
                                                    Tag</h4>
                                                <h4
                                                    title="How many additional followers were generated during this timeframe.">
                                                    Potential Followers</h4>
                                                <h4 title="How many followers were lossed during this timeframe.">Potential
                                                    Un-Followers</h4>
                                                <h4 title="The date of which the post was published.">Date</h4>
                                                <h4 title="The time of which the post was published.">Time</h4>
                                            </div>
                                        </div>
                                        <div class="col-2 card text-right">
                                            <div class="card">
                                                <h4 class="col-12" style="text-align: center;"><a
                                                        href="http://localhost:8000/posts">Photo</a></h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">72</h4>
                                                <h4 class="col-12" style="color: green; text-align: center;">34</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">62</h4>
                                                <h4 class="col-12" style="color: green; text-align: center;">123</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">225</h4>
                                                <h4 class="col-12" style="color: green; text-align: center;">321</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">56</h4>
                                                <h4 class="col-12" style="color: green; text-align: center;">4.6%</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">12</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">72</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">26</h4>
                                                <h4 class="col-12" style="color: green; text-align: center;">62</h4>
                                                <h4 class="col-12" style="color: green; text-align: center;">8</h4>
                                                <h4 class="col-12" style="text-align: center;"><a
                                                        href="http://localhost:8000/posts">05/02/2021</a>
                                                </h4>
                                                <h4 class="col-12" style="text-align: center;"><a
                                                        href="http://localhost:8000/posts">11:04</a></h4>
                                                <div class="card">
                                                    <a href="http://localhost:8000/individualpost"><button
                                                            class="btn btn-warning float-right ml-4 mr-4 mt-3">View
                                                            Post</button></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2 card">
                                            <div class="card">
                                                <h4 class="col-12" style="text-align: center;"><a
                                                        href="http://localhost:8000/posts">Photo</a></h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">108</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">32</h4>
                                                <h4 class="col-12" style="color: green; text-align: center;">67</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">120</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">158</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">246</h4>
                                                <h4 class="col-12" style="color: green; text-align: center;">91</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">4.1%</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">8</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">64</h4>
                                                <h4 class="col-12" style="color: green; text-align: center;">31</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">32</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">12</h4>
                                                <h4 class="col-12" style="text-align: center;"><a
                                                        href="http://localhost:8000/posts">21/04/2020</a>
                                                </h4>
                                                <h4 class="col-12" style="text-align: center;"><a
                                                        href="http://localhost:8000/posts">09:58</a></h4>
                                                <a href="http://localhost:8000/individualpost"><button
                                                        class="btn btn-warning float-right ml-4 mr-4 mt-3">View
                                                        Post</button></a>
                                            </div>
                                        </div>
                                        <div class="col-2 card">
                                            <div class="card">
                                                <h4 class="col-12" style="text-align: center;"><a
                                                        href="http://localhost:8000/posts">Photo</a></h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">63</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">30</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">65</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">121</h4>
                                                <h4 class="col-12" style="color: green; text-align: center;">248</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">289</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">75</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">4.5%</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">15</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">84</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">19</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">26</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">18</h4>
                                                <h4 class="col-12" style="text-align: center;"><a
                                                        href="http://localhost:8000/posts">15/08/2020</a>
                                                </h4>
                                                <h4 class="col-12" style="text-align: center;"><a
                                                        href="http://localhost:8000/posts">13:01</a></h4>
                                                <a href="http://localhost:8000/individualpost"><button
                                                        class="btn btn-warning float-right ml-4 mr-4 mt-3">View
                                                        Post</button></a>
                                            </div>
                                        </div>
                                        <div class="col-2 card">
                                            <div class="card">
                                                <h4 class="col-12" style="text-align: center;"><a
                                                        href="http://localhost:8000/posts">Photo</a></h4>
                                                <h4 class="col-12" style="color: green; text-align: center;">209</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">32</h4>
                                                <h4 class="col-12" style="color: green; text-align: center;">52</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">77</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">89</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">123</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">32</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">2.2%</h4>
                                                <h4 class="col-12" style="color: green; text-align: center;">23</h4>
                                                <h4 class="col-12" style="color: green; text-align: center;">91</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">5</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">14</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">18</h4>
                                                <h4 class="col-12" style="text-align: center;"><a
                                                        href="http://localhost:8000/posts">09/11/2020</a>
                                                </h4>
                                                <h4 class="col-12" style="text-align: center;"><a
                                                        href="http://localhost:8000/posts">18:13</a></h4>
                                                <a href="http://localhost:8000/individualpost"><button
                                                        class="btn btn-warning float-right ml-4 mr-4 mt-3">View
                                                        Post</button></a>
                                            </div>
                                        </div>
                                        <div class="col-2 card">
                                            <div class="card">
                                                <h4 class="col-12" style="text-align: center;"><a
                                                        href="http://localhost:8000/posts">Photo</a></h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">145</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">31</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">50</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">118</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">178</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">209</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">32</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">2.2%</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">23</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">91</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">5</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">7</h4>
                                                <h4 class="col-12" style="color: red; text-align: center;">9</h4>
                                                <h4 class="col-12" style="text-align: center;"><a
                                                        href="http://localhost:8000/posts">09/11/2020</a>
                                                </h4>
                                                <h4 class="col-12" style="text-align: center;"><a
                                                        href="http://localhost:8000/posts">18:13</a></h4>
                                                <a href="http://localhost:8000/individualpost"><button
                                                        class="btn btn-warning float-right ml-4 mr-4 mt-3">View
                                                        Post</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane active" id="link4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-2">
                                        </div>
                                        <div class="col-2">
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#moneymotivation</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 91%;">
                                                        <span class="progress-value">112</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#millionairemotivation</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 84%;">
                                                        <span class="progress-value">106</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#entrepreneurmotivation</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 75%;">
                                                        <span class="progress-value">72</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#moneyinspiation</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 72%;">
                                                        <span class="progress-value">70</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#billionairemotivation</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 65%;">
                                                        <span class="progress-value">70</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#millionairememes</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 40%;">
                                                        <span class="progress-value">70</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#millionairememe</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 35%;">
                                                        <span class="progress-value">65</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#mondaymotivation</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 30%;">
                                                        <span class="progress-value">52</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-warning btn-round float-right">VIEW ALL HASHTAGS</button>
                                        </div>
                                        <div class="col-2">
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#moneymotivation</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 91%;">
                                                        <span class="progress-value">112</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#millionairemotivation</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 84%;">
                                                        <span class="progress-value">106</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#entrepreneurmotivation</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 75%;">
                                                        <span class="progress-value">72</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#moneyinspiation</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 72%;">
                                                        <span class="progress-value">70</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#billionairemotivation</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 65%;">
                                                        <span class="progress-value">70</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#millionairememes</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 40%;">
                                                        <span class="progress-value">70</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#millionairememe</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 35%;">
                                                        <span class="progress-value">65</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#mondaymotivation</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 30%;">
                                                        <span class="progress-value">52</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-warning btn-round float-right">VIEW ALL HASHTAGS</button>
                                        </div>
                                        <div class="col-2">
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#moneymotivation</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 91%;">
                                                        <span class="progress-value">112</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#millionairemotivation</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 84%;">
                                                        <span class="progress-value">106</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#entrepreneurmotivation</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 75%;">
                                                        <span class="progress-value">72</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#moneyinspiation</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 72%;">
                                                        <span class="progress-value">70</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#billionairemotivation</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 65%;">
                                                        <span class="progress-value">70</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#millionairememes</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 40%;">
                                                        <span class="progress-value">70</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#millionairememe</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 35%;">
                                                        <span class="progress-value">65</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#mondaymotivation</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 30%;">
                                                        <span class="progress-value">52</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-warning btn-round float-right">VIEW ALL HASHTAGS</button>
                                        </div>
                                        <div class="col-2">
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#moneymotivation</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 91%;">
                                                        <span class="progress-value">112</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#millionairemotivation</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 84%;">
                                                        <span class="progress-value">106</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#entrepreneurmotivation</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 75%;">
                                                        <span class="progress-value">72</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#moneyinspiation</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 72%;">
                                                        <span class="progress-value">70</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#billionairemotivation</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 65%;">
                                                        <span class="progress-value">70</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#millionairememes</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 40%;">
                                                        <span class="progress-value">70</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#millionairememe</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 35%;">
                                                        <span class="progress-value">65</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#mondaymotivation</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 30%;">
                                                        <span class="progress-value">52</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-warning btn-round float-right">VIEW ALL HASHTAGS</button>
                                        </div>
                                        <div class="col-2">
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#moneymotivation</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 91%;">
                                                        <span class="progress-value">112</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#millionairemotivation</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 84%;">
                                                        <span class="progress-value">106</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#entrepreneurmotivation</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 75%;">
                                                        <span class="progress-value">72</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#moneyinspiation</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 72%;">
                                                        <span class="progress-value">70</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#billionairemotivation</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 65%;">
                                                        <span class="progress-value">70</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#millionairememes</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 40%;">
                                                        <span class="progress-value">70</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#millionairememe</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 35%;">
                                                        <span class="progress-value">65</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-container progress-warning">
                                                <span class="progress-badge"><a
                                                        href="http://localhost:8000/hashtags">#mondaymotivation</a></span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 30%;">
                                                        <span class="progress-value">52</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-warning btn-round float-right">VIEW ALL HASHTAGS</button>
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
