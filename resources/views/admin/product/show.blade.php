@extends('layouts.adminbase')

@section('title', 'Show Product: {{$data->name}}')

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
                            <li class="breadcrumb-item active">Show Product</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Detail Page</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Name</th>
                            <td>{{$data->name}}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{$data->description}}</td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td>{{$data->price}}</td>
                        </tr>
                        <tr>
                            <th>Quantity</th>
                            <td>{{$data->quantity}}</td>
                        </tr>
                        <tr>
                            <th>Is Active</th>
                            <td>{{$data->isActive}}</td>
                        </tr>
                        <tr>
                            <th>Created at</th>
                            <td>{{$data->created_at}}</td>
                        </tr>
                        <tr>
                            <th>Update at</th>
                            <td>{{$data->updated_at}}</td>
                        </tr>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <div class="container-fluid">
                <div class="row mb-2 justify-content-end">
                    <div class="col-sm-3">
                        <a href="{{route('admin.product.edit',['id'=>$data->id])}}" class="btn btn-block bg-gradient-info" style="width: 200px">Edit</a>
                    </div>
                    <div class="col-sm-3">
                        <a href="{{route('admin.product.destroy',['id'=>$data->id])}}" onclick="return confirm('Deleting !! Are you sure ?')" class="btn btn-block bg-gradient-danger" style="width: 200px">Delete</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection


