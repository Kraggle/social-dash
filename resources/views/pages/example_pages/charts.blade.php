@extends('layouts.app', ['activePage' => 'charts', 'menuParent' => 'charts', 'titlePage' => __('Charts')])

@section('content')
  <div class="content">
    <h2 class="text-center">Charts.js</h2>
    <p class="category text-center">Simple yet flexible JavaScript charting for designers &amp; developers. Made by our
      friends from
      <a target="_blank" href="http://www.chartjs.org">Charts.js</a>. Please check
      <a target="_blank" href="http://www.chartjs.org/docs/latest/">the full documentation</a>.
    </p>
    <div class="row mt-5">
      <div class="col-md-5 ms-auto">
        <div class="card card-chart">
          <div class="card-header">
            <h5 class="card-category">Simple With Gradient</h5>
            <h3 class="card-title">@icon('fal fa-chart-bar text-primary ') 10,000</h3>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="chartSimpleWithGradient"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5 me-auto">
        <div class="card card-chart">
          <div class="card-header">
            <h5 class="card-category">With Numbers and Grid</h5>
            <h3 class="card-title">@icon('fal fa-paper-plane text-info ') 750,000€</h3>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="chartWithNumbersAndGrid"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-5 ms-auto">
        <div class="card card-chart">
          <div class="card-header">
            <h5 class="card-category">Gradient Bar Chart</h5>
            <h3 class="card-title">@icon('fal fa-star text-danger ') 1,000,000£
            </h3>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="BarChart"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5 me-auto">
        <div class="card card-chart">
          <div class="card-header">
            <h5 class="card-category">Multiple Bars Chart With Grid</h5>
            <h3 class="card-title">@icon('fal fa-alarm-clock text-warning ') 130,000$</h3>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="MultipleBarsChart"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-5 ms-auto">
        <div class="card card-chart card-chart-pie">
          <div class="card-header">
            <h5 class="card-category">Simple Pie Chart</h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-6">
                <div class="chart-area">
                  <canvas id="PieChart"></canvas>
                </div>
              </div>
              <div class="col-6">
                <h3 class="card-title">@icon('tim-icons icon-trophy text-success ') 10.000$</h3>
                <p class="category">A total of $54000</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5 me-auto">
        <div class="card card-chart card-chart-pie">
          <div class="card-header">
            <h5 class="card-category">Multiple Pie Chart</h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-6">
                <div class="chart-area">
                  <canvas id="PieChartGradient"></canvas>
                </div>
              </div>
              <div class="col-6">
                <h3 class="card-title">@icon('tim-icons icon-tag text-warning ') 130,000</h3>
                <p class="category">Feedback from 20.000 users</p>
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
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartPageCharts();
    });
  </script>
@endpush
