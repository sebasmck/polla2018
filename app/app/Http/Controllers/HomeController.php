<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;

use App\PollsModel;

use App\PicksGroupA;
use App\PicksGroupB;
use App\PicksGroupC;
use App\PicksGroupD;
use App\PicksGroupE;
use App\PicksGroupF;
use App\PicksGroupG;
use App\PicksGroupH;
use App\SecondStage;
use App\Ranking_pools;

use App\User;
use App\Auth;
use App\Exports;

class HomeController extends Controller
{   


    
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function pollManagement(){

        $role = Auth()->user()->role;

        if($role != NULL){
            if($role = 'admin'){
                $allpolls = PollsModel::getUserPools();

                return view('admin.poll_management')->with('allpolls', $allpolls);
            }else{
                return redirect('/');
            }
        }else{
            return redirect('/');
        }

        

    }


    public function index()
    {
        $id_user = auth()->user()->id;
        $role = Auth()->user()->role;
        if($role == 'admin'){
            $polls = PollsModel::getBbyUser($id_user);
        }
        else
        {
            $polls = Ranking_pools::getBbyUser($id_user);
        }
        
        $countpolls = PollsModel::all()->count();
        $activepolls = PollsModel::where('status', '=', 'active')->count();
        
        return view('home')
        ->with('polls', $polls)
        ->with('countpolls', $countpolls)
        ->with('activepolls', $activepolls);
    }

    public function indexAdmin()
    {   
        $role = Auth()->user()->role;

        if($role != NULL){
            if($role = 'admin'){
                $users = User::all();

                return view('admin.home')->with('users', $users);
            }else{
              return redirect('/');
          }
      }else{
        return redirect('/');
    }

}

    // Clients awaiting for confirmation.

    public function awaiting()
    {
        return view('awaiting');
    }

    // Display Rules

    public function rules()
    {
        $countpolls = PollsModel::all()->count();
        return view('usermenu.rules')->with('countpolls', $countpolls);
    }


    public function pollregistration(Request $req)
    {
        // $this->validator($req->all())->validate();

        $validator = Validator::make($req->all(), [

            'poll_name' => 'required|unique:user_poll|string|max:255',

        ],
        [   'poll_name.unique' => 'This Nickname has already been chosen.']);

        if ($validator->passes()) {

            $polls = new PollsModel;
            $polls->id_User = $req->input('user_id');
            $polls->poll_name = $req->input('poll_name');
            $polls->complete = 'Incomplete';
            $polls->status = 'Pending';

            $polls->save();

            return response()->json(['success'=>'done']);
             
        }else{
            return response()->json(['error'=>$validator->errors()->all()]);
        }
        
        
    }


}
