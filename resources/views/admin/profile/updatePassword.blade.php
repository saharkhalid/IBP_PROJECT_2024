<div class="tab-pane" id="updatePassword">
    <div class="card">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Update Password</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('admin.password.update')}}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="current_password">Current Password</label>
                        <input id="current_password" type="password" name="current_password" required>
                        @error('current_password')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input id="password" type="password" name="password" required>
                        @error('password')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input id="password_confirmation" type="password" name="password_confirmation" required>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <!-- /.card -->
</div>
