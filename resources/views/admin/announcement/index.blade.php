@extends('layouts.adminbase')

@section('title', 'Announcement List')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Announcement List</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Announcement list</li>
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
                        <h3 class="card-title">Announcement list</h3>
                    @endif
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 200px;">
                            <form action="{{ route('admin.announcement.search') }}" method="GET" class="input-group">
                                <input type="text" name="search" class="form-control" placeholder="Search by title">
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
                            <th>Sender</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Is Published</th>
                            <th>Published At</th>
                            <th style="width: 40px">Publish</th>
                            <th style="width: 40px">Show</th>
                            <th style="width: 40px">Edit</th>
                            <th style="width: 40px">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->sender->name}}</td>
                                <td>{{$rs->title}}</td>
                                <td>
                                    @if (strlen($rs->content) > 150)
                                        {{ substr($rs->content, 0, 150) . '...' }}
                                    @else
                                        {{ $rs->content }}
                                    @endif
                                </td>

                                <td>{{$rs->isPublished}}</td>
                                <td>{{$rs->published_at}}</td>
                                @if (!$rs->isPublished)
                                    <td><a href="{{route('admin.announcement.publish',['id'=>$rs->id])}}" class="btn btn-block btn-warning btn-sm"
                                           onclick="return confirm('Publishing !! Are you sure ?')">Publish</a>  </td>
                                @else
                                    <td>
                                        <div class="btn btn-block btn-warning disabled btn-sm">
                                            Published
                                        </div>
                                    </td>
                                @endif
                                <td><a href="{{route('admin.announcement.show',['id'=>$rs->id])}}" class="btn btn-block btn-success btn-sm">Show</a>  </td>
                                <td><a href="{{route('admin.announcement.edit',['id'=>$rs->id])}}" class="btn btn-block btn-info btn-sm">Edit</a>  </td>
                                <td><a href="{{route('admin.announcement.destroy',['id'=>$rs->id])}}" class="btn btn-block btn-danger btn-sm"
                                       onclick="return confirm('Deleting !! Are you sure ?')">Delete</a>  </td>
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


