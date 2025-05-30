<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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

    // public function authenticated(Request $request, $user)
    // {
    //     if ($user->hasRole('super_admin') || $user->hasRole('admin')) {
    //         return redirect()->route('admin.home');
    //     } else if (auth()->user()->hasRole('provider')) {
    //         return redirect()->route('provider.home');
    //     } else {
    //         return redirect()->route('welcome');
    //     }
    //
    // }// end of authenticated

    public function authenticated(Request $request, $user)
    {
        if ($user->hasRole('super_admin') || $user->hasRole('admin')) {

            return redirect()->route('admin.home');

        } else if (auth()->user()->hasRole('teacher')) {

            return redirect()->route('teacher.home');

        } else if (auth()->user()->hasRole('examiner')) {

            return redirect()->route('examiner.home');

        } elseif (auth()->user()->hasRole('student')) {

            return redirect()->route('student.home');

        }

    }// end of authenticated

}//end of controller
