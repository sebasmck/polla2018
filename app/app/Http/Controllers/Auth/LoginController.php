<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

use App\CurrentPhase;

use Auth;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }


     public function __construct(){

        $phase = CurrentPhase::first();
        if ($phase == 1) {
            $this->middleware('guest', ['only' => 'showLoginForm']);
        }elseif($phase == 2){
            return "2";
        }
        
    }


    public function showLoginForm(){

        return view('auth.login');
        
    }

    public function credentials(Request $request)
    {
        return [
            'email' => $request->email,
            'password' => $request->password,
        ];
    }

    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }


    protected function authenticated($request, $user)
    {

    if (($user->id_phase != 2) || ($user->role == 'admin')) {
        
    
        if ($user->is_approved == 1) {
            if($user->role === 'admin') {
                return redirect()->intended('/admin');
            }else{
                return redirect()->intended('/home');
            }
        }else{
            
            $notification = array(
                'message' => 'You are registered but pending authorization, please contact your city rep to be authorized..', 
                'alert-type' => 'warning'
            );

            Auth::logout();

            return redirect()->back()->with($notification);
        }
    }else{

        $notification = array(
                'message' => 'This is phase 2', 
                'alert-type' => 'warning'
            );

            Auth::logout();

            return redirect()->back()->with($notification);

        }

    }

    
}
