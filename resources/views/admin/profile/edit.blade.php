@extends('layouts.adminbase')

@section('title', 'Edit User: {{$data->name}}')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>User Profile: {{$data->name}}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">User Profile</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">
                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                @include("admin.profile.boxProfile")
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-header p-2">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item"><a class="nav-link active" href="#profileInformation" data-toggle="tab">Profile Information</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#updatePassword" data-toggle="tab">Update Password</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#deleteAccount" data-toggle="tab">Delete Account</a></li>
                                    </ul>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content">
                                        @include("admin.profile.profileInformation")
                                        <!-- /.tab-pane -->
                                        @include("admin.profile.updatePassword")
                                        <!-- /.tab-pane -->
                                        @include("admin.profile.deleteAccount")
                                        <!-- /.tab-pane -->
                                    </div>
                                    <!-- /.tab-content -->
                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                </div><!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
