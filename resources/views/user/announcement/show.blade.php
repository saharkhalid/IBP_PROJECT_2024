@extends('layouts.userbase')

@section('title', 'Show Announcement')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{$data->name}}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('user.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Show Announcement</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Announcement</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="card-body">
                        <h5>{{$data->title}}</h5>
                    </div>
                    <div class="card-body">
                        <p>{{$data->content}}</p>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title ml-auto">{{$data->sender->name}}</h3>
                        <br>
                        <h3 class="card-title ml-auto">{{$data->published_at}}</h3>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection


