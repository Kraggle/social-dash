@extends('layouts.app', [
'activePage' => 'compare-posts',
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
              <div class="col-md-3">
                <h5 class="card-category">Post Comparison</h5>
                <h2 class="card-title">Engagement</h2>
              </div>

              {{-- chart line selector --}}
              <div class="row col-md-9 align-items-start justify-content-end pe-0">
                <div class="col-auto pe-0">
                  <input type="text" class="form-control form-control-sm datepicker" value="05/05/2021">
                </div>

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

                  <input type="checkbox" class="btn-check" name="p-chart-line" id="p-chart-line-4">
                  <label class="btn btn-sm btn-outline-teal" for="p-chart-line-4">
                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Engagement</span>
                    <span class="d-block d-sm-none">
                      <i class="fal fa-file-alt"></i>
                    </span>
                  </label>
                </div>
              </div>

            </div>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="comparison-chart"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="card">

          <div class="card-header row">
            <div class="col-3">
              <h5 class="card-category">Post Comparison</h5>
              <h2 class="card-title">Compare</h2>
            </div>
            <div class="row col-9 justify-content-end align-items-start pe-0">
              <div class="col-auto pe-0">
                <button class="btn btn-lg btn-indigo">Add Another Post</button>
              </div>
              <div class="col-auto pe-0">
                <button class="btn btn-lg btn-purple">Save Comparison</button>
              </div>
              <div class="col-auto pe-0">
                <button class="btn btn-lg btn-blue">Remove Post</button>
              </div>
            </div>
          </div>

          <div class="card-body">

            {{-- navigation --}}
            <div class="row">
              <ul class="col-auto nav nav-pills ps-3" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" data-bs-toggle="tab" id="data-tab" data-bs-target="#data-pane" type="button" role="tab">{{ __('Data') }}</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" data-bs-toggle="tab" id="" data-bs-target="#hash-pane" type="button" role="tab">{{ __('Hashtags') }}</button>
                </li>
              </ul>
            </div>

            {{-- posts --}}
            <div class="row">
              <div class="col-12">
                <table class="table table-compare table-images table-fixed">
                  <tbody>
                    <tr>
                      <td class="no-border"></td>
                      <td>
                        <input type="checkbox" id="myCheckbox31" />
                        <label for="myCheckbox31"><img src="{{ asset('images') }}/post1.jpg"></label>
                      </td>
                      <td>
                        <input type="checkbox" id="myCheckbox32" />
                        <label for="myCheckbox32"><img src="{{ asset('images') }}/post2.jpg"></label>
                      </td>
                      <td>
                        <input type="checkbox" id="myCheckbox33" />
                        <label for="myCheckbox33"><img src="{{ asset('images') }}/post3.jpg"></label>
                      </td>
                      <td>
                        <input type="checkbox" id="myCheckbox34" />
                        <label for="myCheckbox34"><img src="{{ asset('images') }}/post4.jpg"></label>
                      </td>
                      <td>
                        <input type="checkbox" id="myCheckbox35" />
                        <label for="myCheckbox35"><img src="{{ asset('images') }}/post5.jpg"></label>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            {{-- tabs --}}
            <div class="row">
              <div class="col-12">
                <div class="tab-content" id="tab-content">

                  <div class="tab-pane active" id="data-pane" role="tabpanel">
                    <table class="table table-striped table-compare table-invert table-fixed">
                      <tbody>
                        <tr>
                          <td class="table-header" title="This is the type of post you have published. It can be photo, carousel or video.">Type</td>
                          <td><a href="{{ route('pages.posts') }}">Photo</a></td>
                          <td><a href="{{ route('pages.posts') }}">Photo</a></td>
                          <td><a href="{{ route('pages.posts') }}">Photo</a></td>
                          <td><a href="{{ route('pages.posts') }}">Photo</a></td>
                          <td><a href="{{ route('pages.posts') }}">Photo</a></td>
                        </tr>
                        <tr>
                          <td class="table-header" title="This is the character count of your Instagram post.">Description</td>
                          <td>72</td>
                          <td>108</td>
                          <td>63</td>
                          <td>209</td>
                          <td>145</td>
                        </tr>
                        <tr>
                          <td class="table-header" title="How many likes you have recieved in 1 hour.">Likes (1 hour)</td>
                          <td>34</td>
                          <td>32</td>
                          <td>30</td>
                          <td>32</td>
                          <td>31</td>
                        </tr>
                        <tr>
                          <td class="table-header" title="How many likes you have recieved in 6 hours.">Likes (6 hour)</td>
                          <td>62</td>
                          <td>67</td>
                          <td>65</td>
                          <td>52</td>
                          <td>50</td>
                        </tr>
                        <tr>
                          <td class="table-header" title="How many likes you have recieved in 12 hours.">Likes (12 hour)</td>
                          <td>123</td>
                          <td>120</td>
                          <td>121</td>
                          <td>77</td>
                          <td>118</td>
                        </tr>
                        <tr>
                          <td class="table-header" title="How many likes you have recieved in 1 day.">Likes (1 day)</td>
                          <td>225</td>
                          <td>158</td>
                          <td>248</td>
                          <td>89</td>
                          <td>178</td>
                        </tr>
                        <tr>
                          <td class="table-header" title="How many likes you have recieved in total.">Likes (total)</td>
                          <td>321</td>
                          <td>246</td>
                          <td>289</td>
                          <td>123</td>
                          <td>209</td>
                        </tr>
                        <tr>
                          <td class="table-header" title="How many Comments you have recieved on each post.">Comments</td>
                          <td>56</td>
                          <td>91</td>
                          <td>75</td>
                          <td>32</td>
                          <td>32</td>
                        </tr>
                        <tr>
                          <td class="table-header" title="The percentage of engagement from your followers towards your post.">Eng Rate</td>
                          <td>4.6%</td>
                          <td>4.1%</td>
                          <td>4.5%</td>
                          <td>2.2%</td>
                          <td>2.2%</td>
                        </tr>
                        <tr>
                          <td class="table-header" title="How many different hashtags you have used on the post.">Hashtags</td>
                          <td>12</td>
                          <td>8</td>
                          <td>15</td>
                          <td>23</td>
                          <td>23</td>
                        </tr>
                        <tr>
                          <td class="table-header" title="What the overall average difficulty of the targeted hashtags is.">Avg Tag Difficulty</td>
                          <td>72</td>
                          <td>64</td>
                          <td>84</td>
                          <td>91</td>
                          <td>91</td>
                        </tr>
                        <tr>
                          <td class="table-header" title="The average amount of likes for each hashtags used.">Likes Per Tag</td>
                          <td>26</td>
                          <td>31</td>
                          <td>19</td>
                          <td>5</td>
                          <td>5</td>
                        </tr>
                        <tr>
                          <td class="table-header" title="How many additional followers were generated during this timeframe.">Potential Followers</td>
                          <td>62</td>
                          <td>32</td>
                          <td>26</td>
                          <td>14</td>
                          <td>7</td>
                        </tr>
                        <tr>
                          <td class="table-header" title="How many followers were lossed during this timeframe.">Potential Un-Followers</td>
                          <td>8</td>
                          <td>12</td>
                          <td>18</td>
                          <td>18</td>
                          <td>9</td>
                        </tr>
                        <tr>
                          <td class="table-header" title="The date of which the post was published.">Date</td>
                          <td><a href="{{ route('pages.posts') }}">05/02/2021</a></td>
                          <td><a href="{{ route('pages.posts') }}">21/04/2021</a></td>
                          <td><a href="{{ route('pages.posts') }}">15/08/2020</a></td>
                          <td><a href="{{ route('pages.posts') }}">09/11/2020</a></td>
                          <td><a href="{{ route('pages.posts') }}">09/01/2021</a></td>
                        </tr>
                        <tr>
                          <td class="table-header" title="The time of which the post was published.">Time</td>
                          <td><a href="{{ route('pages.posts') }}">11:04</a></td>
                          <td><a href="{{ route('pages.posts') }}">09:58</a></td>
                          <td><a href="{{ route('pages.posts') }}">13:01</a></td>
                          <td><a href="{{ route('pages.posts') }}">18:13</a></td>
                          <td><a href="{{ route('pages.posts') }}">12:42</a></td>
                        </tr>
                        <tr>
                          <td></td>
                          <td><a href="{{ route('pages.post') }}" class="btn btn-primary btn-lg">View Post</a></td>
                          <td><a href="{{ route('pages.post') }}" class="btn btn-primary btn-lg">View Post</a></td>
                          <td><a href="{{ route('pages.post') }}" class="btn btn-primary btn-lg">View Post</a></td>
                          <td><a href="{{ route('pages.post') }}" class="btn btn-primary btn-lg">View Post</a></td>
                          <td><a href="{{ route('pages.post') }}" class="btn btn-primary btn-lg">View Post</a></td>
                        </tr>
                      </tbody>
                    </table>

                  </div>

                  <div class="tab-pane" id="hash-pane" role="tabpanel">
                    <div class="row">
                      <div class="col-12">
                        <table class="table table-fixed table-compare">
                          <tbody>
                            <tr class="text-left">
                              <td></td>
                              <td>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#moneymotivation</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 91%;">
                                      <span class="progress-value">112</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#millionairemotivation</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 84%;">
                                      <span class="progress-value">106</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#entrepreneurmotivation</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                      <span class="progress-value">72</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#moneyinspiation</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 72%;">
                                      <span class="progress-value">70</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#billionairemotivation</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                                      <span class="progress-value">70</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#millionairememes</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                      <span class="progress-value">70</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#millionairememe</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 35%;">
                                      <span class="progress-value">65</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#mondaymotivation</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                                      <span class="progress-value">52</span>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#moneymotivation</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 91%;">
                                      <span class="progress-value">112</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#millionairemotivation</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 84%;">
                                      <span class="progress-value">106</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#entrepreneurmotivation</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                      <span class="progress-value">72</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#moneyinspiation</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 72%;">
                                      <span class="progress-value">70</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#billionairemotivation</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                                      <span class="progress-value">70</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#millionairememes</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                      <span class="progress-value">70</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#millionairememe</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 35%;">
                                      <span class="progress-value">65</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#mondaymotivation</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                                      <span class="progress-value">52</span>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#moneymotivation</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 91%;">
                                      <span class="progress-value">112</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#millionairemotivation</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 84%;">
                                      <span class="progress-value">106</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#entrepreneurmotivation</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                      <span class="progress-value">72</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#moneyinspiation</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 72%;">
                                      <span class="progress-value">70</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#billionairemotivation</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                                      <span class="progress-value">70</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#millionairememes</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                      <span class="progress-value">70</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#millionairememe</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 35%;">
                                      <span class="progress-value">65</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#mondaymotivation</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                                      <span class="progress-value">52</span>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#moneymotivation</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 91%;">
                                      <span class="progress-value">112</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#millionairemotivation</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 84%;">
                                      <span class="progress-value">106</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#entrepreneurmotivation</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                      <span class="progress-value">72</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#moneyinspiation</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 72%;">
                                      <span class="progress-value">70</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#billionairemotivation</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                                      <span class="progress-value">70</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#millionairememes</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                      <span class="progress-value">70</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#millionairememe</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 35%;">
                                      <span class="progress-value">65</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#mondaymotivation</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                                      <span class="progress-value">52</span>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#moneymotivation</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 91%;">
                                      <span class="progress-value">112</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#millionairemotivation</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 84%;">
                                      <span class="progress-value">106</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#entrepreneurmotivation</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                      <span class="progress-value">72</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#moneyinspiation</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 72%;">
                                      <span class="progress-value">70</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#billionairemotivation</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                                      <span class="progress-value">70</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#millionairememes</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                      <span class="progress-value">70</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#millionairememe</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 35%;">
                                      <span class="progress-value">65</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="progress-container progress-warning">
                                  <span class="progress-badge"><a href="{{ route('pages.hashtags') }}">#mondaymotivation</a></span>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                                      <span class="progress-value">52</span>
                                    </div>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr></tr>
                            <tr>
                              <td></td>
                              <td><a href="{{ route('pages.hashtags') }}" class="btn btn-lg btn-primary">View all Hashtags</a></td>
                              <td><a href="{{ route('pages.hashtags') }}" class="btn btn-lg btn-primary">View all Hashtags</a></td>
                              <td><a href="{{ route('pages.hashtags') }}" class="btn btn-lg btn-primary">View all Hashtags</a></td>
                              <td><a href="{{ route('pages.hashtags') }}" class="btn btn-lg btn-primary">View all Hashtags</a></td>
                              <td><a href="{{ route('pages.hashtags') }}" class="btn btn-lg btn-primary">View all Hashtags</a></td>
                            </tr>
                          </tbody>
                        </table>
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
  <script src="{{ asset('js/pages') }}/compare-posts.js" type="module"></script>
@endpush