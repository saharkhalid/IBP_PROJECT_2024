<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Fortify\Contracts\PasswordUpdateResponse;
use Laravel\Fortify\Contracts\UpdatesUserPasswords;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data= User::find($id);
        $roles= Role::all();
        return  view('user.profile.edit',[
            'data' => $data,
            'roles' => $roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->save();
        $roles= Role::all();
        return redirect()->route('user.profile.edit', [
            'id'=>$id
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data= User::find($id);
        $data->delete();
        return redirect(route('logout'));
    }
}
