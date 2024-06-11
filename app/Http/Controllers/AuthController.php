<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Fortify\Contracts\RegisterResponse;

class AuthController extends Controller
{
    protected $guard;

    public function __construct(StatefulGuard $guard)
    {
        $this->guard = $guard;
    }

    public function store(Request $request, CreatesNewUsers $creator)
    {
        try {
            event(new Registered($user = $creator->create($request->all())));
            $this->guard->login($user);

            $userRoles = Auth::user()->roles->pluck('name');
            if ($userRoles->contains('admin')) {
                return redirect()->intended(route('admin.index'));
            } else {
                return redirect()->intended(route('user.index'));
            }
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        }
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $userRoles = Auth::user()->roles->pluck('name');
            if (!$userRoles->contains('admin')){
                return redirect(route('user.index'))->with('error','You do not have permission');
            }

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
