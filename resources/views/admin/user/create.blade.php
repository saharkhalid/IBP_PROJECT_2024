@extends('layouts.adminbase')

@section('title', 'Add User')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add User</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Add User</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add User</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('admin.user.store')}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="Name">Name</label>
                                <input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" >
                            </div>
                            <div class="form-group">
                                <label for="price">Password</label>
                                <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password">
                            </div>
                            <div class="form-group">
                                <label for="price">Confirm Password</label>
                                <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="form-group">
                            <x-validation-errors class="mb-4" />
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit New User</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection


