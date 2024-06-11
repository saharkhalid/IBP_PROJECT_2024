<div class="tab-pane" id="resetPassword">
    <div class="card">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Reset Password</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('admin.password.reset', ['id' => $data->id]) }}">
                @csrf
                <div class="card-body">
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
                        @error('password_confirmation')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <div>
                        <button type="submit" class="btn btn-primary">Reset Password</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /.card -->
</div>
