<div class="tab-pane" id="manageUserRole">
    <div class="card">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Manage User Role</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
                <div class="form-group">
                    <label for="Roles">Roles</label>
                    @foreach ($data->roles as $role)
                        <li>{{$role->name}}
                            <a href="{{route('admin.user.destroyrole',['uid'=>$data->id,'rid'=>$role->id ])}}"
                               onclick="return confirm('Deleting !! Are you sure ?')">[x]</a>
                        </li>
                    @endforeach
                </div>
                <div class="form-group">
                    <label for="AddRoleToUser">Add Role to User</label>
                    <form role="form" action="{{route('admin.user.addrole',['id'=>$data->id])}}" method="post" >
                        @csrf
                        <select name="role_id">
                            @foreach ($roles as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add Role</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    <!-- /.card -->
</div>
