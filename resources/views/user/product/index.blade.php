@extends('layouts.userbase')

@section('title', 'Product List')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Product List</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('user.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Product list</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card">
                <div class="card-header">
                    @if ($search)
                        <h3 class="card-title">Search results with <b>{{ $search }}</b></h3>
                    @else
                        <h3 class="card-title">Product list</h3>
                    @endif
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 200px;">
                            <form action="{{ route('user.product.search') }}" method="GET" class="input-group">
                                <input type="text" name="search" class="form-control" placeholder="Search by name">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Is Actice</th>
                            <th style="width: 40px">Show</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->name}}</td>
                                <td>{{$rs->description}}</td>
                                <td>{{$rs->price}}</td>
                                <td>{{$rs->quantity}}</td>
                                <td>{{$rs->isActive}}</td>
                                <td><a href="{{route('user.product.show',['id'=>$rs->id])}}" class="btn btn-block btn-success btn-sm">Show</a>  </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection


