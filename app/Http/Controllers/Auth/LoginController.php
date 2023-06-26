<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
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
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout()
    {
        Auth::logout();

        // You can redirect the user to the desired page after logout
        return redirect('/login');
    }
    // protected function authenticated(Request $request, $user)
    // {
    //     if ($user->type == 'Admin') {
    //         // User is an admin, proceed with the default behavior
    //         // ...
    //     } else {
    //         Auth::logout();
    //         return redirect()->back()->with('error', 'These credentials do not match our records.');
    //     }
    // }

}
