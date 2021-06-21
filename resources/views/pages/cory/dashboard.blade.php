@extends('layouts.app', [
'activePage' => 'dashboard',
'menuParent' => 'dashboard',
'titlePage' => __('Dashboard')]
)

@section('content')
<div class="content">
    <div class="row">
        <div class="col-12">
            <div class="card card-chart">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h5 class="card-category">Total Shipments</h5>
                            <h2 class="card-title">Performance</h2>
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
                                <label class="btn btn-sm btn-warning btn-simple" id="3">
                                    <input type="radio" class="d-none" name="options">
                                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Posts</span>
                                    <span class="d-block d-sm-none">
                                        <i class="tim-icons icon-tap-02"></i>
                                    </span>
                                </label>
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
        <div class="col-lg-3 col-md-6">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="info-icon text-center icon-warning">
                                <i class="tim-icons icon-chat-33"></i>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="numbers">
                                <p class="card-category">Number</p>
                                <h3 class="card-title">150GB</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <hr>
                    <div class="stats">
                        <i class="tim-icons icon-refresh-01"></i> Update Now
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="info-icon text-center icon-primary">
                                <i class="tim-icons icon-shape-star"></i>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="numbers">
                                <p class="card-category">Followers</p>
                                <h3 class="card-title">+45k</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <hr>
                    <div class="stats">
                        <i class="tim-icons icon-sound-wave"></i> Last Research
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="info-icon text-center icon-success">
                                <i class="tim-icons icon-single-02"></i>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="numbers">
                                <p class="card-category">Users</p>
                                <h3 class="card-title">150,000</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <hr>
                    <div class="stats">
                        <i class="tim-icons icon-trophy"></i> Customers feedback
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="info-icon text-center icon-danger">
                                <i class="tim-icons icon-molecule-40"></i>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="numbers">
                                <p class="card-category">Errors</p>
                                <h3 class="card-title">12</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <hr>
                    <div class="stats">
                        <i class="tim-icons icon-watch-time"></i> In the last hours
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Total Shipments</h5>
                    <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i> 763,215</h3>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="chartLineOrange"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Daily Sales</h5>
                    <h3 class="card-title"><i class="tim-icons icon-delivery-fast text-info"></i> 3,500€</h3>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="CountryChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Completed Tasks</h5>
                    <h3 class="card-title"><i class="tim-icons icon-send text-success"></i> 12,100K</h3>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="chartLineGreen"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5">
            <div class="card card-tasks">
                <div class="card-header">
                    <h6 class="title d-inline">Tasks(5)</h6>
                    <p class="card-category d-inline">today</p>
                    <div class="dropdown">
                        <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown">
                            <i class="tim-icons icon-settings-gear-63"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#pablo">Action</a>
                            <a class="dropdown-item" href="#pablo">Another action</a>
                            <a class="dropdown-item" href="#pablo">Something else</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-full-width table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="title">Update the Documentation</p>
                                        <p class="text-muted">Dwuamish Head, Seattle, WA 8:47 AM</p>
                                    </td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                                            <i class="tim-icons icon-pencil"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" checked="">
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="title">GDPR Compliance</p>
                                        <p class="text-muted">The GDPR is a regulation that requires businesses to
                                            protect the personal data and privacy of Europe citizens for transactions
                                            that occur within EU member states.</p>
                                    </td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                                            <i class="tim-icons icon-pencil"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="title">Solve the issues</p>
                                        <p class="text-muted">Fifty percent of all respondents said they would be more
                                            likely to shop at a company </p>
                                    </td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                                            <i class="tim-icons icon-pencil"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="title">Release v2.0.0</p>
                                        <p class="text-muted">Ra Ave SW, Seattle, WA 98116, SUA 11:19 AM</p>
                                    </td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                                            <i class="tim-icons icon-pencil"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="title">Export the processed files</p>
                                        <p class="text-muted">The report also shows that consumers will not easily
                                            forgive a company once a breach exposing their personal data occurs. </p>
                                    </td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                                            <i class="tim-icons icon-pencil"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="title">Arival at export process</p>
                                        <p class="text-muted">Capitol Hill, Seattle, WA 12:34 AM</p>
                                    </td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                                            <i class="tim-icons icon-pencil"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="tools float-right">
                        <div class="dropdown">
                            <button type="button" class="btn btn-default dropdown-toggle btn-link btn-icon" data-toggle="dropdown">
                                <i class="tim-icons icon-settings-gear-63"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <a class="dropdown-item text-danger" href="#">Remove Data</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="card-title">Recent Comments</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                                <tr>
                                    <th class="text-center">
                                        Profile
                                    </th>
                                    <th>
                                        Instagram UN
                                    </th>
                                    <th>
                                        Followers
                                    </th>
                                    <th class="text-center">
                                        Description
                                    </th>
                                    <th class="text-right">
                                        Total Comments
                                    </th>
                                    <th class="text-right">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">
                                        <div class="photo">
                                            <img src="{{ asset('images') }}/tania.jpg" alt="Table image">
                                        </div>
                                    </td>
                                    <td>
                                        @AndrewMike
                                    </td>
                                    <td>
                                        3,198
                                    </td>
                                    <td class="text-center">
                                        Great quality content! Ke...
                                    </td>
                                    <td class="text-right">
                                        7
                                    </td>
                                    <td class="text-right">
                                        <button type="button" rel="tooltip" class="btn btn-success btn-link btn-sm btn-icon " data-original-title="Tooltip on top" title="Refresh">
                                            <i class="tim-icons icon-refresh-01"></i>
                                        </button>
                                        <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-sm " data-original-title="Tooltip on top" title="Delete">
                                            <i class="tim-icons icon-simple-remove"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="photo">
                                            <img src="{{ asset('images') }}/robi.jpg" alt="Table image">
                                        </div>
                                    </td>
                                    <td>
                                        @JohnDoe
                                    </td>
                                    <td>
                                        81,923
                                    </td>
                                    <td class="text-center">
                                        Check out this post @fd...
                                    </td>
                                    <td class="text-right">
                                        26
                                    </td>
                                    <td class="text-right">
                                        <button type="button" rel="tooltip" class="btn btn-success btn-link btn-sm btn-icon " data-original-title="Tooltip on top" title="Refresh">
                                            <i class="tim-icons icon-refresh-01"></i>
                                        </button>
                                        <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-sm " data-original-title="Tooltip on top" title="Delete">
                                            <i class="tim-icons icon-simple-remove"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="photo">
                                            <img src="{{ asset('images') }}/lora.jpg" alt="Table image">
                                        </div>
                                    </td>
                                    <td>
                                        @AlexMike
                                    </td>
                                    <td>
                                        821
                                    </td>
                                    <td class="text-center">
                                        Always love your posts man...
                                    </td>
                                    <td class="text-right">
                                        1
                                    </td>
                                    <td class="text-right">
                                        <button type="button" rel="tooltip" class="btn btn-success btn-link btn-sm btn-icon " data-original-title="Tooltip on top" title="Refresh">
                                            <i class="tim-icons icon-refresh-01"></i>
                                        </button>
                                        <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-sm " data-original-title="Tooltip on top" title="Delete">
                                            <i class="tim-icons icon-simple-remove"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="photo">
                                            <img src="{{ asset('images') }}/jana.jpg" alt="Table image">
                                        </div>
                                    </td>
                                    <td>
                                        @MikeMonday
                                    </td>
                                    <td>
                                        9,384
                                    </td>
                                    <td class="text-center">
                                        How did you manage to ta...
                                    </td>
                                    <td class="text-right">
                                        1
                                    </td>
                                    <td class="text-right">
                                        <button type="button" rel="tooltip" class="btn btn-success btn-link btn-sm btn-icon   btn-neutral  " data-original-title="Tooltip on top" title="Refresh">
                                            <i class="tim-icons icon-refresh-01"></i>
                                        </button>
                                        <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-sm   btn-neutral  " data-original-title="Tooltip on top" title="Delete">
                                            <i class="tim-icons icon-simple-remove"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="photo">
                                            <img src="{{ asset('images') }}/robi.jpg" alt="Table image">
                                        </div>
                                    </td>
                                    <td>
                                        @PaulDickens
                                    </td>
                                    <td>
                                        390
                                    </td>
                                    <td class="text-center">
                                        Thanks for sharing man!
                                    </td>
                                    <td class="text-right">
                                        1
                                    </td>
                                    <td class="text-right">
                                        <button type="button" rel="tooltip" class="btn btn-success btn-link btn-sm btn-icon   btn-neutral  " data-original-title="Tooltip on top" title="Refresh">
                                            <i class="tim-icons icon-refresh-01"></i>
                                        </button>
                                        <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-sm   btn-neutral  " data-original-title="Tooltip on top" title="Delete">
                                            <i class="tim-icons icon-simple-remove"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="photo">
                                            <img src="{{ asset('images') }}/emilyz.jpg" alt="Table image">
                                        </div>
                                    </td>
                                    <td>
                                        @mattymyers
                                    </td>
                                    <td>
                                        102,349
                                    </td>
                                    <td class="text-center">
                                        Great content! Check th...
                                    </td>
                                    <td class="text-right">
                                        41
                                    </td>
                                    <td class="text-right">
                                        <button type="button" rel="tooltip" class="btn btn-success btn-link btn-sm btn-icon   btn-neutral  " data-original-title="Tooltip on top" title="Refresh">
                                            <i class="tim-icons icon-refresh-01"></i>
                                        </button>
                                        <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-sm   btn-neutral  " data-original-title="Tooltip on top" title="Delete">
                                            <i class="tim-icons icon-simple-remove"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Global Sales by Top Locations</h4>
                    <p class="card-category">All products that were shipped</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="flag">
                                                    <img src="{{ asset('images') }}/US.png" alt="flag">
                                                </div>
                                            </td>
                                            <td>USA</td>
                                            <td class="text-right">
                                                2.920
                                            </td>
                                            <td class="text-right">
                                                53.23%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="flag">
                                                    <img src="{{ asset('images') }}/DE.png" alt="flag">
                                                </div>
                                            </td>
                                            <td>Germany</td>
                                            <td class="text-right">
                                                1.300
                                            </td>
                                            <td class="text-right">
                                                20.43%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="flag">
                                                    <img src="{{ asset('images') }}/AU.png" alt="flag">
                                                </div>
                                            </td>
                                            <td>Australia</td>
                                            <td class="text-right">
                                                760
                                            </td>
                                            <td class="text-right">
                                                10.35%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="flag">
                                                    <img src="{{ asset('images') }}/GB.png" alt="flag">
                                                </div>
                                            </td>
                                            <td>United Kingdom</td>
                                            <td class="text-right">
                                                690
                                            </td>
                                            <td class="text-right">
                                                7.87%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="flag">
                                                    <img src="{{ asset('images') }}/RO.png" alt="flag">
                                                </div>
                                            </td>
                                            <td>Romania</td>
                                            <td class="text-right">
                                                600
                                            </td>
                                            <td class="text-right">
                                                5.94%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="flag">
                                                    <img src="{{ asset('images') }}/BR.png" alt="flag">
                                                </div>
                                            </td>
                                            <td>Brasil</td>
                                            <td class="text-right">
                                                550
                                            </td>
                                            <td class="text-right">
                                                4.34%
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6 ml-auto mr-auto">
                            <div id="worldMap" style="height: 300px;"></div>
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
@endpush
