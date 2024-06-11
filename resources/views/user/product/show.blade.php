@extends('layouts.userbase')

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
                            <li class="breadcrumb-item"><a href="{{route('user.index')}}">Home</a></li>
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
                            <th>Title</th>
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
        </section>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection


