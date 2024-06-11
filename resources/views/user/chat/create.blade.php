@extends('layouts.userbase')

@section('title', 'Direct Chat')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Direct Chat</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('user.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Direct Chat</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-4">
                    @include("user.chat.chatlist")
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Create New Chat</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="Roles">user Users</label>
                                    @foreach ($user as $u)
                                        @if($u->roles->contains('name', 'user'))
                                                <li>{{$u->name}}</li>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <!-- form start -->
                            <form role="form" action="{{route('user.chat.store')}}" method="post" >
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="createChat">Create new chat with</label>
                                        @csrf
                                        <select name="user_id">
                                            @foreach ($user as $u)
                                                @if($u->id !== auth()->user()->id)
                                                    <option value="{{$u->id}}">{{$u->name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Create New Chat</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
