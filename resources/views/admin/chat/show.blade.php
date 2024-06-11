@extends('layouts.adminbase')

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
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
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
                    @include("admin.chat.chatlist")
                </div>
                <div class="col-md-8">
                    <div class="card direct-chat direct-chat-primary">
                        <div class="card-header ui-sortable-handle" style="cursor: move;">
                            <h3 class="card-title">Direct Chat with
                                @foreach($data->users as $u)
                                    @if($u->id != Auth::user()->id)
                                        <b>{{$u->name}}</b>
                                    @endif
                                @endforeach
                            </h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Conversations are loaded here -->
                            <div class="direct-chat-messages" style="height: 400px; overflow-y: scroll;">
                                @foreach($data->messages as $rs)
                                    @if($rs->sender->id == Auth::user()->id)
                                        <!-- Message to the right -->
                                        <div class="direct-chat-msg right">
                                            <div class="direct-chat-infos clearfix">
                                                <span class="direct-chat-name float-right">{{$rs->sender->name}}</span>
                                                <span class="direct-chat-timestamp float-left">
                                                @php
                                                    echo \Carbon\Carbon::parse($rs->sent_at)->format('d M g:i a');
                                                @endphp
                                                </span>
                                            </div>
                                            <!-- /.direct-chat-infos -->
                                            <img class="direct-chat-img" src="{{asset('assets')}}/dist/img/userprofile-128x128.png" alt="message user image">
                                            <!-- /.direct-chat-img -->
                                            <div class="direct-chat-text">
                                                {{$rs->content}}
                                                @if($rs->isRead)
                                                    <i class="fas fa-check-circle"></i>
                                                @endif
                                                <div class="dropdown show-time-dropdown float-right">
                                                    <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </span>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        @if($rs->isSent)
                                                            <a class="dropdown-item" href="#">{{$rs->sent_at}} (Sent)</a>
                                                        @endif
                                                        @if($rs->isRead)
                                                            <a class="dropdown-item" href="#">{{$rs->read_at}} (Read)</a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.direct-chat-text -->
                                        </div>
                                        <!-- /.direct-chat-msg -->
                                    @else
                                        <!-- Message. Default to the left -->
                                        <div class="direct-chat-msg">
                                            <div class="direct-chat-infos clearfix">
                                                <span class="direct-chat-name float-left">{{$rs->sender->name}}</span>
                                                <span class="direct-chat-timestamp float-right">
                                                @php
                                                    echo \Carbon\Carbon::parse($rs->sent_at)->format('d M g:i a');
                                                @endphp
                                                </span>
                                            </div>
                                            <!-- /.direct-chat-infos -->
                                            <img class="direct-chat-img" src="{{asset('assets')}}/dist/img/userprofile-128x128.png" alt="message user image">
                                            <!-- /.direct-chat-img -->
                                            <div class="direct-chat-text">
                                                <div class="message-content">
                                                    {{$rs->content}}
                                                    @if($rs->isRead)
                                                        <i class="fas fa-check-circle"></i>
                                                    @endif
                                                    <div class="dropdown show-time-dropdown float-right">
                                                        <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-v"></i>
                                                        </span>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            @if($rs->isSent)
                                                                <a class="dropdown-item" href="#">{{$rs->sent_at}} (Sent)</a>
                                                            @endif
                                                            @if($rs->isRead)
                                                                <a class="dropdown-item" href="#">{{$rs->read_at}} (Read)</a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.direct-chat-text -->
                                        </div>
                                        <!-- /.direct-chat-msg -->
                                    @endif
                                @endforeach
                            </div>
                            <!--/.direct-chat-messages-->
                            <!-- /.direct-chat-pane -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <form action="{{ route('admin.message.store', ['chatId' => $data->id]) }}" method="post">
                                @csrf
                                <div class="input-group">
                                    <input type="text" name="textContent" placeholder="Type Message ..." class="form-control">
                                    <span class="input-group-append">
                                            <button type="submit" class="btn btn-primary">Send</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-footer-->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection

@section('scripts')
    @parent
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(window).on('load', function() {
            var element = $('.direct-chat-messages');
            element.scrollTop(element.prop('scrollHeight'));
        });
    </script>
@endsection
