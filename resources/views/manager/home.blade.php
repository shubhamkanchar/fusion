@extends('admin.layout.index')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Student</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $u_count ?? 0}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Course</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $c_count ?? 0}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Batch
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $b_count ?? 0 }}</div>
                                </div>
                                <!-- <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Total Requests</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $r_count ?? 0 }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div id="myChart" style="width: 100%;height:400px;"></div>
        </div>
        <div class="col-md-6">
            <div id="main2" style="width: 100%;height:400px;"></div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection

@section('model')
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('jspage')
<script>
    var chartDom = document.getElementById('myChart');
    var myChart = echarts.init(chartDom);
    var option;

    $(document).ready(function() {
        $.ajax({
            url: '{{ route("manager.requestData") }}',
            method: 'get',
            success: function(response) {
                let dates = [];
                let counts = [];
                $.each(response, function(key, value) {
                    dates.push(value['date']);
                    counts.push(value['total']);
                });

                console.log(counts);
                option = {
                    title: {
                        text: 'Request received'
                    },
                    tooltip: {
                        trigger: 'axis'
                    },
                    // legend: {
                    //     data: ['Email', 'Union Ads', 'Video Ads', 'Direct', 'Search Engine']
                    // },
                    grid: {
                        left: '3%',
                        right: '4%',
                        bottom: '3%',
                        containLabel: true
                    },
                    toolbox: {
                        feature: {
                            saveAsImage: {}
                        }
                    },
                    xAxis: {
                        type: 'category',
                        boundaryGap: false,
                        data: dates
                    },
                    yAxis: {
                        type: 'value'
                    },
                    series: [{
                            name: 'Request',
                            type: 'line',
                            stack: 'Total',
                            data: counts
                        },
                        // {
                        //     name: 'Union Ads',
                        //     type: 'line',
                        //     stack: 'Total',
                        //     data: [220, 182, 191, 234, 290, 330, 310]
                        // },
                        // {
                        //     name: 'Video Ads',
                        //     type: 'line',
                        //     stack: 'Total',
                        //     data: [150, 232, 201, 154, 190, 330, 410]
                        // },
                        // {
                        //     name: 'Direct',
                        //     type: 'line',
                        //     stack: 'Total',
                        //     data: [320, 332, 301, 334, 390, 330, 320]
                        // },
                        // {
                        //     name: 'Search Engine',
                        //     type: 'line',
                        //     stack: 'Total',
                        //     data: [820, 932, 901, 934, 1290, 1330, 1320]
                        // }
                    ]
                };

                option && myChart.setOption(option);
            }
        });

        $.ajax({
            url: '{{ route("manager.requestData2") }}',
            method: 'get',
            success: function(response) {
                var chartDom = document.getElementById('main2');
                var myChart = echarts.init(chartDom);
                var option;

                option = {
                    title: {
                        text: 'Total Request',
                        left: 'center'
                    },
                    tooltip: {
                        trigger: 'item'
                    },
                    legend: {
                        orient: 'vertical',
                        left: 'left'
                    },
                    series: [{
                        name: 'Access From',
                        type: 'pie',
                        radius: '50%',
                        data: [{
                                value: response.cb_count,
                                name: 'Callback'
                            },
                            {
                                value: response.vs_count,
                                name: 'Visit'
                            },
                            {
                                value: response.ms_count,
                                name: 'Message'
                            },
                        ],
                        emphasis: {
                            itemStyle: {
                                shadowBlur: 10,
                                shadowOffsetX: 0,
                                shadowColor: 'rgba(0, 0, 0, 0.5)'
                            }
                        }
                    }]
                };
                option && myChart.setOption(option);
            }
        });
    })
</script>
@endsection