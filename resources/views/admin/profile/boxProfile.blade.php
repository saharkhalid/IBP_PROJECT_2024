<div class="card-body box-profile">
    <div class="text-center">
        <img class="profile-user-img img-fluid img-circle" src="{{asset('assets')}}/dist/img/userprofile-128x128.png" alt="User profile picture">
    </div>

    <h3 class="profile-username text-center">{{$data->name}}</h3>

    <p class="text-muted text-center">{{$data->email}}</p>

    <ul class="list-group list-group-unbordered mb-3">
        <li class="list-group-item">
            <b>Name</b> <a class="float-right">{{$data->name}}</a>
        </li>
        <li class="list-group-item">
            <b>Email</b> <a class="float-right">{{$data->email}}</a>
        </li>
        <li class="list-group-item">
            <b>Roles</b> <a class="float-right">
                @foreach ($data->roles as $role)
                    {{$role->name}}
                @endforeach</a>
        </li>
        <li class="list-group-item">
            <b>Cerated Date</b> <a class="float-right">{{$data->created_at}}</a>
        </li>
        <li class="list-group-item">
            <b>Update Date</b> <a class="float-right">{{$data->updated_at}}</a>
        </li>
    </ul>
</div>
