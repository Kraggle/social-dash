@extends('layouts.app', [
'activePage' => 'hashtags',
'menuParent' => 'analytics',
'titlePage' => __('hashtags')
])

@section('content')
  <div class="content">
    <div class="row">
      <div class="col-md-6 mb-4">
        <h2 class="card-title">Hashtags Most Commenly Used</h2>
        {{-- <input type="text"
                    value="#millionairemotivation,#moneymotivation,#hashtags,#cory,#beevers,#fillitup,#hashyhashtag,#millionairemotivation,#motivationalquote,#motivationalmeme,#moneymotivation,#moneyinspiration,#moneymentor,#anotherhashtag,#andanother,#have10intotal"
                    class="tagsinput" data-role="tagsinput" data-color="warning" /> --}}
      </div>

      <div class="col-md-6 mb-4 float-end">
        <h2 class="card-title">Hashtags By Engagement Rate</h2>
        {{-- <input type="text"
                    value="#millionairemotivation,#moneymotivation,#hashtags,#cory,#beevers,#fillitup,#hashyhashtag,#millionairemotivation,#motivationalquote,#motivationalmeme,#moneymotivation,#moneyinspiration,#moneymentor,#anotherhashtag,#andanother,#have10intotal"
                    class="tagsinput" data-role="tagsinput" data-color="warning" /> --}}
      </div>
      <div class="col-md-6 mb-4">
        <div class="progress-container progress-warning">
          <span class="progress-badge">#moneymotivation</span>
          <div class="progress">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 38%;">
              <span class="progress-value">112</span>
            </div>
          </div>
        </div>
        <div class="progress-container progress-warning">
          <span class="progress-badge">#millionairemotivation</span>
          <div class="progress">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 28%;">
              <span class="progress-value">106</span>
            </div>
          </div>
        </div>
        <div class="progress-container progress-warning">
          <span class="progress-badge">#entrepreneurmotivation</span>
          <div class="progress">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
              <span class="progress-value">72</span>
            </div>
          </div>
        </div>
        <div class="progress-container progress-warning">
          <span class="progress-badge">#moneyinspiation</span>
          <div class="progress">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 18%;">
              <span class="progress-value">70</span>
            </div>
          </div>
        </div>
        <div class="progress-container progress-warning">
          <span class="progress-badge">#billionairemotivation</span>
          <div class="progress">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 18%;">
              <span class="progress-value">70</span>
            </div>
          </div>
        </div>
        <div class="progress-container progress-warning">
          <span class="progress-badge">#millionairememes</span>
          <div class="progress">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 18%;">
              <span class="progress-value">70</span>
            </div>
          </div>
        </div>
        <div class="progress-container progress-warning">
          <span class="progress-badge">#millionairememe</span>
          <div class="progress">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 12%;">
              <span class="progress-value">65</span>
            </div>
          </div>
        </div>
        <div class="progress-container progress-warning">
          <span class="progress-badge">#mondaymotivation</span>
          <div class="progress">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 9%;">
              <span class="progress-value">52</span>
            </div>
          </div>
        </div>
        <button class="btn btn-warning btn-round float-end">VIEW ALL HASHTAGS</button>
      </div>
      <div class="col-md-6 mb-4">
        <div class="progress-container progress-warning">
          <span class="progress-badge">#moneymotivation</span>
          <div class="progress">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 38%;">
              <span class="progress-value">112</span>
            </div>
          </div>
        </div>
        <div class="progress-container progress-warning">
          <span class="progress-badge">#millionairemotivation</span>
          <div class="progress">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 28%;">
              <span class="progress-value">106</span>
            </div>
          </div>
        </div>
        <div class="progress-container progress-warning">
          <span class="progress-badge">#entrepreneurmotivation</span>
          <div class="progress">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
              <span class="progress-value">72</span>
            </div>
          </div>
        </div>
        <div class="progress-container progress-warning">
          <span class="progress-badge">#moneyinspiation</span>
          <div class="progress">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 18%;">
              <span class="progress-value">70</span>
            </div>
          </div>
        </div>
        <div class="progress-container progress-warning">
          <span class="progress-badge">#billionairemotivation</span>
          <div class="progress">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 18%;">
              <span class="progress-value">70</span>
            </div>
          </div>
        </div>
        <div class="progress-container progress-warning">
          <span class="progress-badge">#millionairememes</span>
          <div class="progress">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 18%;">
              <span class="progress-value">70</span>
            </div>
          </div>
        </div>
        <div class="progress-container progress-warning">
          <span class="progress-badge">#millionairememe</span>
          <div class="progress">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 12%;">
              <span class="progress-value">65</span>
            </div>
          </div>
        </div>
        <div class="progress-container progress-warning">
          <span class="progress-badge">#mondaymotivation</span>
          <div class="progress">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 9%;">
              <span class="progress-value">52</span>
            </div>
          </div>
        </div>
        <button class="btn btn-warning btn-round float-end">VIEW ALL HASHTAGS</button>
      </div>
    </div>

    <div class="content">
      <div class="row md-8">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <div class="toolbar">
                <h3>Hashtag Table</h3>
                <!--        Here you can write extra buttons/actions for the toolbar              -->
              </div>
              <table id="datatable" class="table table-striped">
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
                    <th>Other Post Per Day</th>
                    <th class="dt-nosort text-end">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>#millionairesuccess</td>
                    <td>230,000</td>
                    <td>36</td>
                    <td>298</td>
                    <td>6%</td>
                    <td>9%</td>
                    <td>4%</td>
                    <td>67</td>
                    <td>321</th>
                    <td class="text-end">
                      <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                      <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                      <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>#entrepreneur</td>
                    <td>530,000</td>
                    <td>48</td>
                    <td>1,293</td>
                    <td>13%</td>
                    <td>18%</td>
                    <td>9%</td>
                    <td>58</td>
                    <td>96</th>
                    <td class="text-end">
                      <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                      <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                      <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>#millionairequote</td>
                    <td>380,000</td>
                    <td>28</td>
                    <td>196</td>
                    <td>7%</td>
                    <td>10%</td>
                    <td>3%</td>
                    <td>78</td>
                    <td>145</th>
                    <td class="text-end">
                      <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                      <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm  edit"><i class="fal fa-pencil-alt"></i></a>
                      <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>#millionaireposts</td>
                    <td>127,000</td>
                    <td>13</td>
                    <td>123</td>
                    <td>7%</td>
                    <td>8%</td>
                    <td>7%</td>
                    <td>82</td>
                    <td>892</td>

                    </th>
                    <td class="text-end">
                      <a href="javascript:void(0)" class="btn btn-link btn-info btn-icon btn-sm like"><i class="fal fa-heart"></i></a>
                      <a href="javascript:void(0)" class="btn btn-link btn-warning btn-icon btn-sm edit"><i class="fal fa-pencil-alt"></i></a>
                      <a href="javascript:void(0)" class="btn btn-link btn-danger btn-icon btn-sm remove"><i class="fal fa-trash-alt"></i></a>
                    </td>

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
                    <th></th>
                    <th>Action</th>
                    <th class="disabled-sorting text-end">Actions</th>
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

@endsection


@push('js')
  <script src="{{ asset('js/pages') }}/datatable-only.js" type="module"></script>
@endpush
