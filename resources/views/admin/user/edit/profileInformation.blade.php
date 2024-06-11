<div class="tab-pane active" id="profileInformation">
    <!-- Default box -->
    <div class="card">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Profile Information</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('admin.user.update',['id'=>$data->id])}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" class="form-control" name="name" value={{$data->name}} required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" value={{$data->email}}>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /.card -->
</div>
