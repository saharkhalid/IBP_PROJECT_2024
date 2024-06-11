@extends('layouts.userbase')

@section('title', 'User Panel')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> Home Page</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Home</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="small-box bg-info">
                                            <div class="inner">
                                                <h3 class="text-white">{{$productCount}}</h3>
                                                <p class="text-white">Products</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-cube"></i>
                                            </div>
                                            <a href="{{route('user.product.index')}}" class="small-box-footer">
                                                More info <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="small-box bg-info">
                                            <div class="inner">
                                                <h3 class="text-white">{{$chatCount}}</h3>
                                                <p class="text-white">Chats</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-comments"></i>
                                            </div>
                                            <a href="{{route('user.chat.index')}}" class="small-box-footer">
                                                More info <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Latest Announcements</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Sender</th>
                                        <th>Title</th>
                                        <th style="width: 40px">Show</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $rs)
                                        <tr>
                                            <td>{{$rs->sender->name}}</td>
                                            <td>{{$rs->title}}</td>
                                            <td><a href="{{route('user.announcement.show',['id'=>$rs->id])}}" class="btn btn-block btn-success btn-sm">Show</a>  </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <a href="{{route('user.announcement.index')}}" class="dropdown-item dropdown-footer">See All Announcements</a>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection


