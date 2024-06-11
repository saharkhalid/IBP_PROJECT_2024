@extends('layouts.adminbase')

@section('title', 'Add Product')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Product</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Add Product</li>
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
                        <h3 class="card-title">Add Product</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('admin.product.store')}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="Name">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter name" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" class="form-control" name="description" placeholder="Enter description">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" name="price" placeholder="Enter price" required>
                            </div>
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="text" class="form-control" name="quantity" placeholder="Enter quantity" required>
                            </div>
                            <div class="form-group">
                                <label for="isActive">Is Active</label>
                                <select class="form-control" name="isActive" required>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
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


