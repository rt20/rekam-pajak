<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    #dari laraboi
    public function username()
    {
        return 'login';
    }
    protected function sendLoginResponse(User $user, Request $request)
    {
        $request->session()->regenerate();
        $this->clearLoginAttempts($request);
        Auth::login($user, $request->has('remember'));
        return redirect()->route('dashboard');
    }
    public function login(Request $request)
    {
        $this->validate($request, [
            'login' => 'required|min:2|max:30',
            'password' => 'required|min:6|max:20'
        ]);

        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            return $this->sendLockoutResponse($request);
        }

        $login = $request->input('login');
        $loginIsEmail = filter_var($login, FILTER_VALIDATE_EMAIL);
        $user = User::where($loginIsEmail ? 'email' : 'nip', $login)->first(); #->where('active', true)->first();

        if (!$user) {
            flash('Email atau NIP tidak ditemukan di database!')->error();
            return redirect('/login');
        }

        if (Hash::check($request->input('password'), $user->password)) {
            $user->last_login = Carbon::now()->toDateTimeString();
            $user->save();
            return $this->sendLoginResponse($user, $request);
        }

        $this->incrementLoginAttempts($request);
        return $this->sendFailedLoginResponse($request);
    }
}
