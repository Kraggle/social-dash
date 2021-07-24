@extends('layouts.app', [
'activePage' => 'hashtag_generator',
'menuParent' => 'hashtag_generator',
'titlePage' => __('hashtag_generator')
])

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="photo">
                <img src="http://localhost:8000/white/img/hashtag-generator.jpg" alt="Table image">
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

<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
        demo.initChartPageCharts();
    });

</script>

@endpush
