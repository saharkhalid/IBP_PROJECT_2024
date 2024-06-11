<div class="card">
    <div class="card-header">
        <h3 class="card-title">Chats</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <ul class="list-group">
            @foreach($chat as $c)
                <li class="card bg-light d-flex flex-fill">
                    <a href="{{route('admin.chat.show',['id'=>$c->id])}}" class="btn btn-sm bg-teal">
                        <i class="fas fa-comments"></i>
                        <span class="user-name">
                        @foreach($c->users as $user)
                                @if($user->id !== auth()->user()->id)
                                    {{ $user->name }}
                                @endif
                            @endforeach
                    </span>
                    </a>
                    <div class="card-header text-muted border-bottom-0">
                        @if($c->messages()->latest()->first() !== null)
                            <div class="last-message">
                                <b>{{$c->messages()->latest()->first()->sender->name}}:</b>
                                {{$c->messages()->latest()->first()->content}}
                            </div>
                        @endif
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    <!-- /.card-body -->
    <div class="card-body">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <a href="{{route('admin.chat.create')}}" class="btn btn-block bg-gradient-info" style="width: 200px">Create New Chat</a>
            </div>
        </div>
    </div>
</div>
