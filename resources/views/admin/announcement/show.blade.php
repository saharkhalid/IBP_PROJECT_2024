@extends('layouts.adminbase')

@section('title', 'Show Announcement')

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
                            <li class="breadcrumb-item active">Show Announcement</li>
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
                            <th>Sender</th>
                            <td>{{$data->sender->name}}</td>
                        </tr>
                        <tr>
                            <th>Title</th>
                            <td>{{$data->title}}</td>
                        </tr>
                        <tr>
                            <th>Content</th>
                            <td>{{$data->content}}</td>
                        </tr>
                        <tr>
                            <th>Is Published</th>
                            <td>{{$data->isPublished}}</td>
                        </tr>
                        <tr>
                            <th>Published at</th>
                            <td>{{$data->published_at}}</td>
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
                        @if (!$data->isPublished)
                            <td><a href="{{route('admin.announcement.publish',['id'=>$data->id])}}" class="btn btn-block btn-warning" style="width: 200px"
                                   onclick="return confirm('Publishing !! Are you sure ?')">Publish</a>  </td>
                        @else
                            <td>
                                <div class="btn btn-block btn-warning disabled" style="width: 200px">
                                    Published
                                </div>
                            </td>
                        @endif
                    </div>
                    <div class="col-sm-3">
                        <a href="{{route('admin.announcement.edit',['id'=>$data->id])}}" class="btn btn-block bg-gradient-info" style="width: 200px">Edit</a>
                    </div>
                    <div class="col-sm-3">
                        <a href="{{route('admin.announcement.destroy',['id'=>$data->id])}}"
                           onclick="return confirm('Deleting !! Are you sure ?')" class="btn btn-block bg-gradient-danger" style="width: 200px">Delete</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection


