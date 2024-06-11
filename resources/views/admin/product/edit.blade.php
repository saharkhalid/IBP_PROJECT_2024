@extends('layouts.adminbase')

@section('title', 'Edit Product: {{$data->name}}')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Product: {{$data->name}}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Edit Product</li>
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
                        <h3 class="card-title">Edit Product Page</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('admin.product.update',['id'=>$data->id])}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="Name">Name</label>
                                <input type="text" class="form-control" name="name" value={{$data->name}} required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" class="form-control" name="description" value={{$data->description}}>
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" name="price" value={{$data->price}} required>
                            </div>
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="text" class="form-control" name="quantity" value={{$data->quantity}} required>
                            </div>
                            <div class="form-group">
                                <label for="isActive">Is Active</label>
                                @if($data->isActive == 1)
                                    <select class="form-control" name="isActive" required>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                @else
                                    <select class="form-control" name="isActive" required>
                                        <option>False</option>
                                        <option>True</option>
                                    </select>
                                @endif
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Data</button>
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


