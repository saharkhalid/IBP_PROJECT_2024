@extends('layouts.userbase')

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
                            <li class="breadcrumb-item"><a href="{{route('user.index')}}">Home</a></li>
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
                            <form action="{{ route('user.announcement.search') }}" method="GET" class="input-group">
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
                            <th style="width: 40px">Show</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->sender->name}}</td>
                                <td>{{$rs->title}}</td>
                                <td>
                                    @if (strlen($rs->content) > 300)
                                        {{ substr($rs->content, 0, 300) . '...' }}
                                    @else
                                        {{ $rs->content }}
                                    @endif
                                </td>
                                <td><a href="{{route('user.announcement.show',['id'=>$rs->id])}}" class="btn btn-block btn-success btn-sm">Show</a>  </td>
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


