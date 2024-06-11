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
                        <h1>Edit User: {{$data->name}}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Edit User</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#profileInformation" data-toggle="tab">Profile Information</a></li>
                        <li class="nav-item"><a class="nav-link" href="#manageUserRole" data-toggle="tab">Manage User Role</a></li>
                        <li class="nav-item"><a class="nav-link" href="#resetPassword" data-toggle="tab">Reset Password</a></li>
                    </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">
                        @include("admin.user.edit.profileInformation")
                        <!-- /.tab-pane -->
                        @include("admin.user.edit.manageUserRole")
                        <!-- /.tab-pane -->
                        @include("admin.user.edit.resetPassword")
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div><!-- /.card-body -->
            </div><!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection


