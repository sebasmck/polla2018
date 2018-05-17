<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Emails;
use App\Rep;
use App\PollsModel;
use DB;



class AdminsController extends Controller
{

    public function allUsers(){

        $users = User::all();

        return view('admin.all_users')->with('users', $users);

    }

    public function assignRep(){

        $users = User::all();
        $reps = Rep::all();

        return view('admin.assign_rep')->with('users', $users)->with('reps', $reps);

    }

    public function assignToUser(Request $req){

        $user = User::find($req->input('id'));

        $user->id_rep = $req->input('id_rep');
        $user->save();

        return redirect()->back();

    }

    public function addRep(){

        $reps = Rep::all();

        return view('admin.add_rep')->with('reps', $reps);
    }


    public function storeRep(Request $req){

        $rep = new Rep;

        $users = User::all();
        $reps = Rep::all();

        $rep->name = $req->input('name');


        $rep->save();

        $notification = array(
            'message' => 'Rep ' . "$rep->name" . ' Was added Successfully', 
            'alert-type' => 'success'
        );

        // return view('admin.assign_rep')->with($notification)->with('users', $users)->with('reps', $reps);
        return redirect()->back()->with($notification);
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $rep = new Rep;

        $rep->name = $req->input('name');
        $rep->email = $req->input('email');

        $rep->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $polls = User::find($id)->polls;
        $user = User::find($id);

        return view('admin.user_polls')->with('polls', $polls)->with('user', $user);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        DB::select("call aproval($id)");

        $user = User::find($id);

        $data = array('name' => $user->name,
                      'lastname' => $user->lastname,
                      'email' => $user->email,
                      'code' => $user->code);

        Emails::email_registration_user_approved($user->email, $data);

        $notification = array(
            'message' => " $user->name " . 'Has been approved', 
            'alert-type' => 'success'
        );

        dd($notification);

        return redirect()->back()->with($notification);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        
    }


    public function editStatus(Request $req){

        $poll = PollsModel::find($req->input('iduser_poll'));

        $poll->status = $req->input('status');
        
        $poll->save();

        $notification = array(
            'message' => " $poll->poll_name " . 'Has changed to: ' . "$poll->status", 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }


    public function editRep($id){

        $user = User::find($id);
        $reps = Rep::all();
        return view ('admin.editrep')->with('user', $user)->with('reps', $reps);

    }


    public function updateRep(Request $req){
        $user = User::find($req->input('id'));
        $user->id_rep = $req->input('id_rep');

        $user->save();

        $users = User::all();
        $reps = Rep::all();

        return view('admin.assign_rep')->with('users', $users)->with('reps', $reps);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        // DB::table('clasificado')->where('id', '=', 1)->delete(); 

        // $user->polls()->clasificado->delete();

       

        // $user->polls()->delete();

        // $user->delete();

        // $users = User::all();
        // $reps = Rep::all();

        return view('admin.assign_rep')->with('users', $users)->with('reps', $reps);
    }


    public function deletePoll($iduser_poll){

        $poll = PollsModel::find($iduser_poll);

        $poll->clasificado()->delete();

        $poll->groupa()->delete();

        $poll->groupb()->delete();

        $poll->groupc()->delete();

        $poll->groupd()->delete();

        $poll->groupe()->delete();

        $poll->groupf()->delete();

        $poll->groupg()->delete();

        $poll->grouph()->delete();

        $poll->secondStage()->delete();

        $poll->delete();

        $notification = array(
            'message' => 'Pool ' . "$poll->poll_name" . ' Was deleted Successfully', 
            'alert-type' => 'success'
        );

    
        return redirect()->back()->with($notification);
        

    }


    public function deleteRep($id_rep){

        $rep = Rep::find($id_rep);

        if ($rep->delete()) {

            $notification = array(
                'message' => 'Rep ' . "$rep->name" . ' Was deleted Successfully', 
                'alert-type' => 'success'
            );

            // DB::update('update users set id_rep = NULL where id_rep', '=', $id_rep);

            User::where('id_rep', '=', $id_rep)->update(['id_rep' => NULL]);

            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'message' => 'Rep ' . "$rep->name" . ' Could not be deleted, please unlink him/her from any users to continue', 
                'alert-type' => 'error'
            );
            
        }

        
        

    }


}
