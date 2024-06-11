@extends('layouts.adminbase')

@section('title', 'Admin Panel')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Home Page</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Home Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-title">Home Page</h3>
                    </div>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small card -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3 class="text-white">{{$productCount}}</h3>
                                    <p class="text-white">Products</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-cube"></i>
                                </div>
                                <a href="{{route('admin.product.index')}}" class="small-box-footer">
                                    More info <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>

                            <div class="text-center">
                                <a href="{{route('admin.product.create')}}" class="btn btn-block btn-info btn-lg" style="width: 100%; font-size: 15px;">Create New Product</a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small card -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3 class="text-white">{{$userCount}}</h3>

                                    <p class="text-white">Users</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user"></i>
                                </div>
                                <a href="{{route('admin.user.index')}}" class="small-box-footer">
                                    More info <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>

                            <div class="text-center">
                                <a href="{{route('admin.user.create')}}" class="btn btn-block btn-success btn-lg" style="width: 100%; font-size: 15px;">Create New User</a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small card -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3 class="text-white">{{$chatCount}}</h3>
                                    <p class="text-white">Chats</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-comments"></i>
                                </div>
                                <a href="{{route('admin.chat.index')}}" class="small-box-footer">
                                    More info <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>

                            <div class="text-center">
                                <a href="{{route('admin.chat.create')}}" class="btn btn-block btn-warning btn-lg" style="width: 100%; font-size: 15px;">Create New Chat</a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small card -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3 class="text-white">{{$announcementCount}}</h3>
                                    <p class="text-white">Total Announcements</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-bullhorn"></i>
                                </div>
                                <a href="{{route('admin.announcement.index')}}" class="small-box-footer">
                                    More info <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>

                            <div class="text-center">
                                <a href="{{route('admin.announcement.create')}}" class="btn btn-block btn-danger btn-lg" style="width: 100%; font-size: 15px;">Create New Announcement</a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                </div>
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection


