<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;

use App\PollsModel;


use App\User;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $id_user = auth()->user()->id;
        $polls = PollsModel::getBbyUser($id_user);
        return view('home')->with('polls', $polls);
    }

    public function indexAdmin()
    {   
        $users = User::all();

        return view('admin.home')->with('users', $users);
    }

    public function awaiting()
    {
        return view('awaiting');
    }

    public function rules()
    {
        return view('usermenu.rules');
    }


    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $this->create($request->all());

        // $this->guard()->login($user);

        // return $this->registered($request, $poll_name)
        //                 ?: redirect($this->redirectPath());
    }


    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {   
        return Validator::make($data, [
            'poll_name' => 'required|unique:user_poll|string|max:255'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return PollsModel::create([
            'id_User' => auth()->user()->id,
            'poll_name' =>$data['poll_name'],
            'status' => 'Pending Activation',
        ]);
    }
}
