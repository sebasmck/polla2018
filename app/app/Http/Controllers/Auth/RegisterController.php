<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Emails;
use App\PollsModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;



class RegisterController extends Controller

{
    
    use RegistersUsers;
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = '/awaitingconfirmation';
    protected $redirectTo = '/home';
     /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {

        $pool = array('poll_name' => $request->nickname);

        $validator1 = Validator::make($pool, [
            'poll_name' => 'unique:user_poll'
        ],
        [   'poll_name.unique' => 'This Nickname has already been chosen.']);

        $validator2 = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'nickname' => 'required|unique:users|string|max:255',
            'email' => 'required|confirmed|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'city' => 'required|string|min:2',
            'cellphone' => 'required|string|min:7'
        ],
        [   'nickname.unique' => 'This Nickname has already been chosen.']);




        if (($validator1->passes()) && ($validator2->passes())) {
             event(new Registered($user = $this->create($request->all())));

        $data = array('name' => $user->name,
                      'lastname' => $user->lastname,
                      'email' => $user->email,
                      'password' => $request->password,
                      'nickname' =>$request->nickname,
                      'city' => $request->city,
                      'cellphone' => $request->cellphone,
                      'referredby' => $request->referredby);

        Emails::email_registration_user($user->email, $data);
        Emails::email_registration_admin($data);



        $polls = new PollsModel;
        $polls->id_User = $user->id;
        $polls->poll_name = $request->nickname;
        $polls->complete = 'Incomplete';
        $polls->status = 'Pending';
        $polls->save();
        


       
       return redirect('/')->with(['message' => 'Thank you for registering in pollaworldcup.com! Please allow up to 24 hours for your registration to be accepted.']);

        }else{

            $array = $validator1->errors()->all();
            $array2 = $validator2->errors()->all();



            $csv1 = implode(", ", $array);
            $csv2 = implode(", ", $array2);

            $notification1 = array(
            'message' => $csv1 .' '. $csv2, 
            'alert-type' => 'error'
            );

            return back()->with($notification1);
        }

       
         
        // return $this->registered($request, $user)
        //                 ?: redirect($this->redirectPath())->with(['message' => 'Thank you for registering in pollaworldcup.com! Please allow up to 24 hours for your registration to be accepted.']);

        }





    // public function register(Request $request){
    //     // $pool = array('poll_name' => $request->nickname);

    //     // $this->validator_pool_name($pool)->validate();

    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|string|max:255',
    //         'lastname' => 'required|string|max:255',
    //         'poll_name' => 'required|unique:user_poll|string|max:255',
    //         'email' => 'required|confirmed|string|email|max:255|unique:users',
    //         'password' => 'required|string|min:6',
    //         'city' => 'required|string|min:2',
    //         'cellphone' => 'required|string|min:7'
    //     ]);


    //     if ($validator->passes()) {
    //         // $this->validator($request->all())->validate();

    //         event(new Registered($user = $this->create($request->all())));



    //         $data = array('name' => $user->name,
    //                   'lastname' => $user->lastname,
    //                   'email' => $user->email,
    //                   'password' => $request->password,
    //                   'nickname' =>$request->poll_name,
    //                   'city' => $request->city,
    //                   'cellphone' => $request->cellphone,
    //                   'referredby' => $request->referredby);


    //         $polls = new PollsModel;
    //         $polls->id_User = $user->id;
    //         $polls->poll_name = $request->poll_name;
    //         $polls->complete = 'Incomplete';
    //         $polls->status = 'Pending';

    //         $polls->save();

    //         Emails::email_registration_user($user->email, $data);
    //         Emails::email_registration_admin($data);
             

    //         // return $this->registered($request, $user, $request->session()->put('message', 'Thank you for registering in pollaworldcup.com! Please allow up to 24 hours for your registration to be accepted.'))
    //         //                 ?: redirect($this->redirectPath());

    //         // return view('auth/login')->with(['message' => 'Thank you']);

    //         return redirect('/')->with(['message' => 'Thank you for registering in pollaworldcup.com! Please allow up to 24 hours for your registration to be accepted.']);
    //     }else{
    //         return redirect()->back()->with(['error' => $validator->errors()->all()]);
    //     }

        
    // }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {   
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'poll_name' => 'required|unique:user_poll|string|max:255',
            'email' => 'required|confirmed|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'city' => 'required|string|min:2',
            'cellphone' => 'required|string|min:7'
        ],
        [   'poll_name.unique' => 'This Nickname has already been chosen.']);
    }

    protected function validator_pool_name(array $data)
    {   
        return Validator::make($data, [
            'poll_name' => 'unique:user_poll'
        ],
        [   'poll_name.unique' => 'This Nickname has already been chosen.']);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'lastname' => $data['lastname'],
            'nickname' => $data['nickname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'city' => $data['city'],
            'cellphone' => $data['cellphone'],
            'referredby' => $data['referredby'],
            'is_approved' => 0,
            'code' => $data['password'],
        ]);
    }

}
