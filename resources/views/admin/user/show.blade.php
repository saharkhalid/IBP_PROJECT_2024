@extends('layouts.adminbase')

@section('title', 'User Detail :'.$data->title)

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
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Show User</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">User Detail Page</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-striped">
                    <tr>
                        <th style="width: 200px">Id</th>
                        <td>{{$data->id}}</td>
                    </tr>
                    </tr>

                    <tr>
                        <th>Name & Surname</th>
                        <td>{{$data->name}}</td>
                    </tr>

                    <tr>
                        <th>Email</th>
                        <td>{{$data->email}}</td>
                    </tr>
                    <tr>
                        <th>Password Encrypted</th>
                        <td>{{$data->password}}</td>
                    </tr>
                    <tr>
                        <th>Roles</th>
                        <td>
                            @foreach ($data->roles as $role)
                                <li>{{$role->name}}</li>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th >Cerated Date</th>
                        <td>{{$data->created_at}}</td>
                    </tr>
                    <tr>
                        <th >Update Date</th>
                        <td>{{$data->updated_at}}</td>
                    </tr>

                </table>
            </div>
                <!-- /.card-body -->
            </div>
            <div class="container-fluid">
                <div class="row mb-2 justify-content-end">
                    <div class="col-sm-3">
                        <a href="{{route('admin.user.edit',['id'=>$data->id])}}" class="btn btn-block bg-gradient-info" style="width: 200px">Edit</a>
                    </div>
                    <div class="col-sm-3">
                        <a href="{{route('admin.user.destroy',['id'=>$data->id])}}" onclick="return confirm('Deleting !! Are you sure ?')" class="btn btn-block bg-gradient-danger" style="width: 200px">Delete</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
