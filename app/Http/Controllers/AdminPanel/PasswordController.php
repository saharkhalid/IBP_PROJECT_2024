<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Fortify\Contracts\UpdatesUserPasswords;

class PasswordController extends Controller
{
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'current_password' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = Auth::user();
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'The current password is incorrect']);
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('admin.profile.edit', ['id' => $user->id])->with('success', 'Password changed successfully');
    }

    // Reset another user's password in admin panel
    public function reset(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required|confirmed|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::find($id);
        if (!$user) {
            return redirect()->back()->withErrors(['error' => 'User not found']);
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('admin.user.edit', ['id' => $user->id])->with('success', 'Password reset successfully');
    }
}
