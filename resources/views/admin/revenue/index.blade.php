@extends('admin.layout.main')
@section('title', 'Doanh Thu')
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="container-fluid">
            {{-- <div class="header text-center">
                <h3 class="title">Chartist.js</h3>
                <p class="category">Handcrafted by our friends from
                    <a target="_blank" href="https://gionkunz.github.io/chartist-js/">Chartist.js</a>. Please checkout
                    their
                    <a href="https://gionkunz.github.io/chartist-js/getting-started.html" target="_blank">full
                        documentation.</a>
                </p>
            </div> --}}
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-chart">
                        <div class="card-header card-header-rose">
                            <div id="roundedLineChart" class="ct-chart"></div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Doanh thu theo ngày</h4>
                            {{-- <p class="card-category">Line Chart</p> --}}
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-4">
                    <div class="card card-chart">
                        <div class="card-header card-header-warning">
                            <div id="straightLinesChart" class="ct-chart"></div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Straight Lines Chart</h4>
                            <p class="card-category">Line Chart with Points</p>
                        </div>
                    </div>
                </div> --}}
                <div class="col-md-6">
                    <div class="card card-chart">
                        <div class="card-header card-header-info">
                            <div id="simpleBarChart" class="ct-chart"></div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title ">Doanh thu theo tháng</h4>
                            {{-- <p class="card-category">Bar Chart</p> --}}
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-header-icon card-header-info">
                            <div class="card-icon">
                                <i class="material-icons">timeline</i>
                            </div>
                            <h4 class="card-title">Coloured Line Chart
                                <small> - Rounded</small>
                            </h4>
                        </div>
                        <div class="card-body">
                            <div id="colouredRoundedLineChart" class="ct-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-header-icon card-header-rose">
                            <div class="card-icon">
                                <i class="material-icons">insert_chart</i>
                            </div>
                            <h4 class="card-title">Multiple Bars Chart
                                <small>- Bar Chart</small>
                            </h4>
                        </div>
                        <div class="card-body">
                            <div id="multipleBarsChart" class="ct-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header card-header-icon card-header-info">
                            <div class="card-icon">
                                <i class="material-icons">timeline</i>
                            </div>
                            <h4 class="card-title">Coloured Bars Chart
                                <small> - Rounded</small>
                            </h4>
                        </div>
                        <div class="card-body">
                            <div id="colouredBarsChart" class="ct-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card card-chart">
                        <div class="card-header card-header-icon card-header-danger">
                            <div class="card-icon">
                                <i class="material-icons">pie_chart</i>
                            </div>
                            <h4 class="card-title">Pie Chart</h4>
                        </div>
                        <div class="card-body">
                            <div id="chartPreferences" class="ct-chart"></div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6 class="card-category">Legend</h6>
                                </div>
                                <div class="col-md-12">
                                    <i class="fa fa-circle text-info"></i> Apple
                                    <i class="fa fa-circle text-warning"></i> Samsung
                                    <i class="fa fa-circle text-danger"></i> Windows Phone
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>

@endsection
@push('js')
<script>
    $(document).ready(function() {
        // Biểu dồ doanh thu theo ngày
        dataRoundedLineChart = {
            labels: ['Monday', 'Tuesday', 'Wenesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
            series: [
                [12, 17, 7, 17, 23, 18, 38]
            ]
        };

        optionsRoundedLineChart = {
            lineSmooth: Chartist.Interpolation.cardinal({
                tension: 10
            }),
            axisX: {
                showGrid: false,
            },
            low: 0,
            high: 50, // creative tim: we recommend you to set the high sa the biggest value + something for a better look
            chartPadding: {
                top: 0,
                right: 0,
                bottom: 0,
                left: 0
            },
            showPoint: false
        }

        var RoundedLineChart = new Chartist.Line('#roundedLineChart', dataRoundedLineChart, optionsRoundedLineChart);

        md.startAnimationForLineChart(RoundedLineChart);


        // Biểu đồ doanh thu theo tháng
        var dataSimpleBarChart = {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                series: [
                    [542, 443, 320, 780, 553, 453, 326, 434, 568, 610, 756, 895]
                ]
            };

            var optionsSimpleBarChart = {
                seriesBarDistance: 10,
                axisX: {
                    showGrid: false
                }
            };

            var responsiveOptionsSimpleBarChart = [
                ['screen and (max-width: 640px)', {
                    seriesBarDistance: 5,
                    axisX: {
                        labelInterpolationFnc: function(value) {
                            return value[0];
                        }
                    }
                }]
            ];

            var simpleBarChart = Chartist.Bar('#simpleBarChart', dataSimpleBarChart, optionsSimpleBarChart, responsiveOptionsSimpleBarChart);

            //start animation for the Emails Subscription Chart
            md.startAnimationForBarChart(simpleBarChart);
    });

    
  </script>
@endpush