@extends('layouts.adminbase')

@section('title', 'Edit Announcement')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Announcement</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Edit Announcement</li>
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
                        <h3 class="card-title">Edit Announcement</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('admin.announcement.update',['id'=>$data->id])}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="Name">Sender</label>
                                <input type="text" class="form-control" name="sender" value={{$data->sender->name}} disabled>
                            </div>
                            <div class="form-group">
                                <label for="Name">Title</label>
                                <input type="text" class="form-control" name="title" value={{$data->title}} required>
                            </div>
                            <div class="form-group">
                                <label for="textContent">Content</label>
                                <textarea id="textContent" class="form-control" name="textContent" rows="8" cols="40" required>{{$data->content}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="isPublished">Is Published</label>
                                <input type="text" class="form-control" name="isPublished" value={{$data->isPublished}} disabled>
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


