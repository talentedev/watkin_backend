@extends('adminlte::page')

@section('title', 'Watkin - Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
@stop

@section('content')
    <!-- Info boxes -->
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-bar-chart"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Sales</span>
                    <span class="info-box-number">58<small>%</small></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-users"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Users</span>
                    <span class="info-box-number">435</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-th-list"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Tasks</span>
                    <span class="info-box-number">5000</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-th-list"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Upcoming</span>
                    <span class="info-box-number">5000</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-md-6">
            <!-- Line chart -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <i class="fa fa-bar-chart-o"></i>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <div id="line-chart" style="height: 300px;"></div>
                </div>
                <!-- /.box-body-->
            </div>
            <!-- /.box -->
            <!-- MAP & BOX PANE -->
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Customer Demographic</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="row">
                        <div class="col-md-12 col-sm-8">
                            <div class="pad">
                                <!-- Map will be created here -->
                                <div id="world-map-markers" style="height: 325px;"></div>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-md-6">
            <div class="box box-success">
                <div class="box-header with-border">
                    <i class="fa fa-th-list"></i>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="row h4">
                        <div class="col-md-6 text-bold">
                            Recent Task
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    Jan 2018 <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Feb 2018</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Apr 2018</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mar 2018</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row h4">
                        <div class="col-md-6">
                            January 2018
                        </div>
                        <div class="col-md-6 text-right text-green text-bold">
                            $ 14520
                        </div>
                    </div>
                    <table class="table table-striped">
                        <tr>
                            <th>Task Id</th>
                            <th>Tasks</th>
                            <th>Price</th>
                            <th>Status</th>
                        </tr>
                        <tr>
                            <td>TA123</td>
                            <td>Task Name</td>
                            <td>$123.50</td>
                            <td><span class="badge bg-green">completed</span></td>
                        </tr>
                        <tr>
                            <td>TA123</td>
                            <td>Task Name</td>
                            <td>$123.50</td>
                            <td><span class="badge bg-yellow">pending</span></td>
                        </tr>
                        <tr>
                            <td>TA123</td>
                            <td>Task Name</td>
                            <td>$123.50</td>
                            <td><span class="badge bg-green">completed</span></td>
                        </tr>
                        <tr>
                            <td>TA123</td>
                            <td>Task Name</td>
                            <td>$123.50</td>
                            <td><span class="badge bg-yellow">pending</span></td>
                        </tr>
                    </table>
                    <a class="visible-lg visible-md visible-sm mt-1 mb-1 text-underline" href="/upcoming">Check all the upcoming tasks</a>
                </div>
                <!-- /.box-body-->
            </div>
            <!-- /.box -->

            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Top Locations</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table">
                        <tr>
                            <td>1. Alabame</td>
                            <td class="text-right">29500</td>
                        </tr>
                        <tr>
                            <td>2. California</td>
                            <td class="text-right">29500</td>
                        </tr>
                        <tr>
                            <td>3. Florida</td>
                            <td class="text-right">29500</td>
                        </tr>
                    </table>
                    <a class="visible-lg visible-md mt-1 text-underline col-md-12" href="#">See all locations</a>
                    <div class="prgress-group mt-1 col-md-12">
                        <span class="progress-text h4">Gender</span>

                        <div class="progress md bg-blue">
                            <div class="progress-bar progress-bar-aqua" style="width: 40%;"></div>
                        </div>
                        <div class="progress md bg-white">
                            <div class="progress-bar progress-bar-aqua" style="width: 20px;"></div> &nbsp; 40% Male
                        </div>
                        <div class="progress md bg-white">
                            <div class="progress-bar bg-blue" style="width: 20px;"></div> &nbsp; 60% Female
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
@stop

@push('css')
    <!-- custom styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}">
@endpush

@push('js')
    <script src="{{ asset('js/dashboard.js') }}"></script>
@endpush