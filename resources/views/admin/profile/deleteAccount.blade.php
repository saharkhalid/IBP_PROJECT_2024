<div class="tab-pane" id="deleteAccount">
    <div class="card">
        <div class="card card-primary">
            <div class="card-header bg-danger">
                <h3 class="card-title">Delete Account</h3>
            </div>
            <div class="card-body">
                <p>
                    Once your account is deleted, all of its resources and data will be permanently deleted.
                    Before deleting your account, please download any data or information that you wish to retain.
                </p>
            </div>
        </div>
        <div class="card-footer">
            <div class="row mb-2 justify-content-end">
                <div class="col-sm-3">
                    <a href="{{route('admin.profile.destroy',['id'=>$data->id])}}" onclick="return confirm('Deleting !! Are you sure ?')" class="btn btn-block bg-gradient-danger" style="width: 200px">Delete</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card -->
</div>
