@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Upcoming Tasks</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Upcoming Tasks</li>
    </ol>
@stop

@section('content')
    <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th class="text-center"><input type="checkbox" class="minimal"></th>
                    <th class="text-center">Task Name</th>
                    <th class="text-center">Phone No.</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Task Description</th>
                    <th class="text-center">Expire</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input type="checkbox" class="minimal"></td>
                    <td>Task Name</td>
                    <td>0123456789</td>
                    <td>chetanshah@gmail.com</td>
                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                    <td class="text-center">
                        <span class="label label-success">Today</span>
                    </td>
                    <td class="text-center"><input type="checkbox" class="minimal"></td>
                    <td class="text-center text-danger"><i class="fa fa-trash"></i></td>
                </tr>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
@stop

@stack('js')
    <!-- iCheck -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/adminlte/plugins/iCheck/all.css') }}">
    <!-- custom styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/upcoming.css') }}">