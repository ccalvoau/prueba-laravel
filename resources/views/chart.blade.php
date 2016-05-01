@extends('layout.master')

@section('title')
    @lang('common.company_name_capital') - @lang('validation.attributes.charts.page_title')
@endsection

@section('content')

    <div class="container-fluid" style="width: 98%">
        <div class="row">

            <div class="col-md-12">

                <!-- Content Header (Page header) -->
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        ChartJS
                        <small>Preview sample</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-primary pull-right" href="{{asset('assets/pdf/manual/Gmail - Novus Cleaning Company - Forgotten Password Reset Link.pdf')}}" download="PDFNameHere.pdf">
                                <i class="fa fa-download"></i> PDF Download
                            </a>
                            <hr />
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-6">

                            <!-- DONUT CHART -->
                            <div class="box box-primary">

                                <div class="box-header with-border">
                                    <h3 class="box-title">
                                        @lang('validation.attributes.charts.pie_title_example')
                                    </h3>

                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="box-body">
                                    <div class="row" style="height: 300px">
                                        <div class="col-md-8">
                                            <div class="chart-responsive">
                                                <canvas id="pieChart" height="250px"></canvas>
                                            </div>
                                            <!-- ./chart-responsive -->
                                        </div>
                                        <!-- /.col -->
                                        <div id="pieChartLegend" class="col-md-4 pieChartLegend">
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.box-body -->

                                <div class="box-body">
                                    <div class="col-md-12" align="center">
                                        @lang('validation.attributes.charts.pie_legend_example')
                                    </div>
                                </div>
                                <!-- /.box-body -->

                            </div>
                            <!-- /.box -->

                        </div>
                        <!-- /.col (LEFT) -->

                        <div class="col-md-6">

                            <!-- BAR CHART -->
                            <div class="box box-primary">

                                <div class="box-header with-border">
                                    <h3 class="box-title">
                                        @lang('validation.attributes.charts.bar_title_example')
                                    </h3>

                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="box-body" style="height: 315px">
                                    <div class="chart-responsive">
                                        <canvas id="barChart"></canvas>
                                    </div>
                                    <!-- ./chart-responsive -->
                                </div>

                                <div class="box-body" style="height: 45px" >
                                    <div id="barChartLegend" class="barChartLegend" align="center"></div>
                                </div>
                                <!-- /.box-body -->

                            </div>
                            <!-- /.box -->

                        </div>
                        <!-- /.col (RIGHT) -->

                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-md-12">
                            <!-- DONUT CHART -->
                            <div class="box box-primary">

                                <div class="box-header with-border">
                                    <h3 class="box-title">
                                        @lang('validation.attributes.charts.pie_title_example')
                                    </h3>

                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="box-body">
                                    <div class="row" style="height: 300px">
                                        <div class="col-md-6">
                                            <div class="chart-responsive">
                                                <canvas id="pieChartFull" style="height: 280px"></canvas>
                                            </div>
                                            <!-- ./chart-responsive -->
                                        </div>
                                        <!-- /.col -->
                                        <div id="pieChartLegendFull" class="col-md-6 pieChartLegend">
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.box-body -->

                                <div class="box-body">
                                    <div class="col-md-12" align="center">
                                        @lang('validation.attributes.charts.pie_legend_example')
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-md-12">

                            <!-- BAR CHART -->
                            <div class="box box-primary">

                                <div class="box-header with-border">
                                    <h3 class="box-title">
                                        @lang('validation.attributes.charts.bar_title_example')
                                    </h3>

                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="box-body">
                                    <div align="center">
                                        <canvas id="barChartFull" height="90"></canvas>
                                    </div>
                                    <!-- ./chart-responsive -->
                                </div>

                                <div class="box-body" style="height: 45px" >
                                    <div id="barChartLegendFull" class="barChartLegend" align="center"></div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                    </div>
                    <!-- /.row -->

                </section>
                <!-- /.content -->

            </div>
            <!-- /.column -->

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

@endsection


@section('scripts')
    <!-- ChartJS 1.0.1 -->
    {!! Html::script('/assets/adminlte/plugins/chartjs/Chart.min.js') !!}

    <!-- Page script -->
    <script>
        $(function () {
            // Variable array with 21 random colors
            var colorsChartData = [
                "#FF0F00",
                "#FF6600",
                "#FF9E01",
                "#FCD202",
                "#F8FF01",
                "#B0DE09",
                "#04D215",
                "#0D8ECF",
                "#0D52D1",
                "#2A0CD0",
                "#8A0CCF",
                "#CD0D74",
                "#754DEB",
                "#DDDDDD",
                "#999999",
                "#333333",
                "#000000",
                "#57032A",
                "#CA9726",
                "#990000",
                "#4B0C25"
            ];

            //-------------
            //- PIE CHART -
            //-------------

            var pieChartData = [
                @for($i = 0; $i < sizeof($pieChartData); $i++)
                    {
                        value: '{{ $pieChartData[$i]['value'] }}',
                        color: colorsChartData[ '{{$i}}' ],
                        highlight: colorsChartData[ '{{$i}}' ],
                        label: '{{ $pieChartData[$i]['label'] }}'
                    },
                @endfor
            ];

            // Setting the Legend given the data
            var pieChartLegend = '<ul class="pieChartLegend clearfix">';
            @for($i = 0; $i < sizeof($pieChartData); $i++)
                pieChartLegend += '<li>';
                    pieChartLegend += '<span style="background-color:' + colorsChartData[ '{{$i}}' ] + '">';
                    pieChartLegend += '</span>';
                    pieChartLegend += '{{ $pieChartData[$i]['label'] }}';
                pieChartLegend += '</li>';
            @endfor
            pieChartLegend += '</ul>';

            var pieOptions = {
                //Boolean - Whether we should show a stroke on each segment
                segmentShowStroke: true,
                //String - The colour of each segment stroke
                segmentStrokeColor: "#fff",
                //Number - The width of each segment stroke
                segmentStrokeWidth: 2,
                //Number - The percentage of the chart that we cut out of the middle
                percentageInnerCutout: 50, // This is 0 for Pie charts
                //Number - Amount of animation steps
                animationSteps: 100,
                //String - Animation easing effect
                animationEasing: "easeOutBounce",
                //Boolean - Whether we animate the rotation of the Doughnut
                animateRotate: true,
                //Boolean - Whether we animate scaling the Doughnut from the centre
                animateScale: true,
                //Boolean - whether to make the chart responsive to window resizing
                responsive: true,
                // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                maintainAspectRatio: true,
                //String - A legend template
                legendTemplate : pieChartLegend
            };

            // Create Pie or Doughnut Chart

            // PIE
            var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
            var pieChart = new Chart(pieChartCanvas);
            var myPieChart = pieChart.Doughnut(pieChartData, pieOptions);
            // Adding the legend
            $("#pieChartLegend").html(myPieChart.generateLegend());

            // PIE FULL
            var pieChartCanvasFull = $("#pieChartFull").get(0).getContext("2d");
            var pieChartFull = new Chart(pieChartCanvasFull);
            var myPieChartFull = pieChartFull.Doughnut(pieChartData, pieOptions);
            // Adding the legend
            $("#pieChartLegendFull").html(myPieChartFull.generateLegend());

            //-------------
            //- BAR CHART -
            //-------------

            var barChartData = {
                labels: '{!! json_encode($labelsBarChart) !!}',
                datasets: [
                    {
                        label: "Electronics",
                        fillColor: "rgba(210, 214, 222, 1)",
                        strokeColor: "rgba(210, 214, 222, 1)",
                        pointColor: "rgba(210, 214, 222, 1)",
                        pointStrokeColor: "#c1c7d1",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(220,220,220,1)",
                        data: '{!! json_encode($valuesBarChart) !!}'
                    }
                ]
            };

            barChartData.datasets[0].fillColor      = "#3c8dbc";
            barChartData.datasets[0].strokeColor    = "#3c8dbc";
            barChartData.datasets[0].pointColor     = "#3c8dbc";

            // Setting the Legend given the data
            var barChartLegend = '<ul class="barChartLegend">';
                barChartLegend += '<li>';
                    barChartLegend += '<span style="background-color:#3c8dbc">';
                    barChartLegend += '</span>';
                    barChartLegend += '@lang('validation.attributes.charts.bar_legend_example')';
                barChartLegend += '</li>';
            barChartLegend += '</ul>';

            var barChartOptions = {
                //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
                scaleBeginAtZero: true,
                //Boolean - Whether grid lines are shown across the chart
                scaleShowGridLines: true,
                //String - Colour of the grid lines
                scaleGridLineColor: "rgba(0,0,0,.05)",
                //Number - Width of the grid lines
                scaleGridLineWidth: 1,
                //Boolean - Whether to show horizontal lines (except X axis)
                scaleShowHorizontalLines: true,
                //Boolean - Whether to show vertical lines (except Y axis)
                scaleShowVerticalLines: true,
                //Boolean - If there is a stroke on each bar
                barShowStroke: true,
                //Number - Pixel width of the bar stroke
                barStrokeWidth: 2,
                //Number - Spacing between each of the X value sets
                barValueSpacing: 5,
                //Number - Spacing between data sets within X values
                barDatasetSpacing: 1,
                //String - A legend template
                legendTemplate: barChartLegend,
                //Boolean - whether to make the chart responsive
                responsive: true,
                maintainAspectRatio: true
            };

            barChartOptions.datasetFill = false;

            // Create Bar Chart

            // BAR
            var barChartCanvas = $("#barChart").get(0).getContext("2d");
            var barChart = new Chart(barChartCanvas);
            var myBarChart = barChart.Bar(barChartData, barChartOptions);
            // Adding the legend
            $("#barChartLegend").html(myBarChart.generateLegend());

            // BAR FULL
            var barChartCanvasFull = $("#barChartFull").get(0).getContext("2d");
            var barChartFull = new Chart(barChartCanvasFull);
            var myBarChartFull = barChartFull.Bar(barChartData, barChartOptions);
            // Adding the legend
            $("#barChartLegendFull").html(myBarChartFull.generateLegend());
        });
    </script>

@endsection