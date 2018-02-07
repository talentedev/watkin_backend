@extends('adminlte::page')

@section('title', 'Watkin - Upcoming Tasks')

@section('content_header')
    <h1>Upcoming Tasks</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Upcoming Tasks</li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-body">
            <table id="upcomingTasks" class="table table-bordered table-striped">
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
                @foreach ($tasks as $task)
                    <tr>
                        <td class="text-center"><input type="checkbox" class="minimal" data-id="{{ $task->id }}"></td>
                        <td class="text-center">{{ $task->name }}</td>
                        <td class="text-center">{{ $task->user->phone }}</td>
                        <td class="text-center">{{ $task->user->email }}</td>
                        <td class="text-center">{{ $task->description }}</td>
                        <td class="text-center h4">
                            <span class="label label-danger">
                            @if( $task->deadline == date('Y-m-d'))
                                Today
                            @else
                                @php
                                    echo date('j M', strtotime($task->deadline));
                                @endphp
                            @endif
                            </span>
                        </td>
                        <td class="text-center text-green h4"><i class="fa fa-check-square"></i></td>
                        <td class="text-center text-red h4">
                            <i class="fa fa-trash delete-task" data-id="{{ $task->id }}"></i>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <button class="btn btn-primary" id="removeTasks">Remove</button>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
@stop

@push('css')
    <!-- iCheck -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/adminlte/plugins/iCheck/all.css') }}">
    <!-- custom styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/upcoming.css') }}">
@endpush

@push('js')
    <!-- Common JS -->
    <script src="{{ asset('js/common.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/upcoming.js') }}"></script>
@endpush