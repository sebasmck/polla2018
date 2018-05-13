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

use App\User;

use App\Exports;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function pollManagement(){

        $allpolls = PollsModel::getUserPools();

        return view('admin.poll_management')->with('allpolls', $allpolls);

    }


    public function index()
    {
        $id_user = auth()->user()->id;
        $polls = PollsModel::getBbyUser($id_user);
        $countpolls = PollsModel::all()->count();

        //$countpolls = PollsModel::where('status', '=', 'Active')->count();

        return view('home')->with('polls', $polls)->with('countpolls', $countpolls);
    }

    public function indexAdmin()
    {   
        $users = User::all();

        return view('admin.home')->with('users', $users);
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

    public function exportExcel() 
    {
        //dd('hola');
        return Excel::download(new InvoicesExport, 'invoices.xlsx');
    }

}
