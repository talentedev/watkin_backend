@extends('adminlte::page')

@section('title', 'Watkin - Completed Tasks')

@section('content_header')
    <h1>Completed Tasks</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Completed Tasks</li>
    </ol>
@stop

@section('content')
    <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
            <table id="completedTasks" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center"><input type="checkbox" class="minimal"></th>
                        <th class="text-center">Task Name</th>
                        <th class="text-center">Phone No.</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Task Description</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center"><input type="checkbox" class="minimal"></td>
                        <td class="text-center">Task Name</td>
                        <td class="text-center">0123456789</td>
                        <td class="text-center">chetanshah@gmail.com</td>
                        <td class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                        <td class="text-center text-green h4""><i class="fa fa-check-square"></td>
                        <td class="text-center text-red h4"><i class="fa fa-trash pointer"></i></td>
                    </tr>
                </tbody>    
            </table>
            <button class="btn btn-primary">Remove</button>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
@stop

@push('css')
    <!-- iCheck -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/adminlte/plugins/iCheck/all.css') }}">
    <!-- custom styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/completed.css') }}">
@endpush

@push('js')
    <!-- Common JS -->
    <script src="{{ asset('js/common.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/completed.js') }}"></script>
@endpush