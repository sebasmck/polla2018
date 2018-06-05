<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PollsModel;
use App\PickGroupA;
use App\PickGroupB;
use App\PickGroupC;
use App\PickGroupD;
use App\PickGroupE;
use App\PickGroupF;
use App\PickGroupG;
use App\PickGroupH;
use App\clasificado;

use App\User;
use App\Emails;
use App\Rep;
use Excel;

use DB;



class AdminsController extends Controller 
{


  public function allUsers(){

    $role = Auth()->user()->role;

    if($role != NULL){
      if($role = 'admin'){
        $users = User::all();

        return view('admin.all_users')->with('users', $users);

      }else{
        return redirect('/');
      }
    }else{
      return redirect('/');
    }

  }

  public function assignRep(){

    $role = Auth()->user()->role;

    if($role != NULL){
      if($role = 'admin'){
        $users = User::all();
        $reps = Rep::all();
        $polls = PollsModel::all();

        return view('admin.assign_rep')->with('users', $users)->with('reps', $reps)->with('polls', $polls);
      }else{
        return redirect('/');
      }
    }else{
      return redirect('/');
    }

  }

  public function assignToUser(Request $req){

    $role = Auth()->user()->role;

    if($role != NULL){
      if($role = 'admin'){
        $user = User::find($req->input('id'));
        $user->id_rep = $req->input('id_rep');
        $user->save();

        return redirect()->back();
      }else{
        return redirect('/');
      }
    }else{
      return redirect('/');
    }

  }

  public function addRep(){

    $role = Auth()->user()->role;

    if($role != NULL){
      if($role = 'admin'){
        $reps = Rep::all();

        return view('admin.add_rep')->with('reps', $reps);
      }else{
        return redirect('/');
      }
    }else{
      return redirect('/');
    }
  }


  public function storeRep(Request $req){

    $role = Auth()->user()->role;

    if($role != NULL){
      if($role = 'admin'){
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
      }else{
        return redirect('/');
      }
    }else{
      return redirect('/');
    }
  }

  public function phases(){

    $role = Auth()->user()->role;

    if($role != NULL){
      if($role = 'admin'){
        $users = User::all();
        $reps = Rep::all();

        return view('admin.phases');
      }else{
        return redirect('/');
      }
    }else{
      return redirect('/');
    }

  }

  public function changephace(Request $req){

    $role = Auth()->user()->role;

    if($role != NULL){
      if($role = 'admin'){
        
        $user = User::find($req->input('id'));
        $user->id_rep = $req->input('id_rep');
        $user->save();

        return redirect()->back();
      }else{
        return redirect('/');
      }
    }else{
      return redirect('/');
    }

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

      $role = Auth()->user()->role;

      if($role != NULL){
        if($role = 'admin'){
          $rep = new Rep;

          $rep->name = $req->input('name');
          $rep->email = $req->input('email');

          $rep->save();

          return redirect()->back();
        }else{
          return redirect('/');
        }
      }else{
        return redirect('/');
      }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

      $role = Auth()->user()->role;

      if($role != NULL){
        if($role = 'admin'){
          $polls = User::find($id)->polls;
          $user = User::find($id);

          return view('admin.user_polls')->with('polls', $polls)->with('user', $user);
        }else{
          return redirect('/');
        }
      }else{
        return redirect('/');
      }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


      $role = Auth()->user()->role;

        if($role != NULL){
            if($role = 'admin'){
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

        return redirect()->back()->with($notification);
}else{
                return redirect('/');
            }
        }else{
            return redirect('/');
        }


       
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

      $role = Auth()->user()->role;

      if($role != NULL){
        if($role = 'admin'){
          $poll = PollsModel::find($req->input('iduser_poll'));

          $poll->status = $req->input('status');

          $poll->save();

          $notification = array(
            'message' => " $poll->poll_name " . 'Has changed to: ' . "$poll->status", 
            'alert-type' => 'success'
          );

          return redirect()->back()->with($notification);
        }else{
          return redirect('/');
        }
      }else{
        return redirect('/');
      }

    }


    public function editRep($id){

      $role = Auth()->user()->role;

      if($role != NULL){
        if($role = 'admin'){
          $user = User::find($id);
          $reps = Rep::all();
          return view ('admin.editrep')->with('user', $user)->with('reps', $reps);
        }else{
          return redirect('/');
        }
      }else{
        return redirect('/');
      }
    }


    public function updateRep(Request $req){

      $role = Auth()->user()->role;

      if($role != NULL){
        if($role = 'admin'){
          $user = User::find($req->input('id'));
          $user->id_rep = $req->input('id_rep');

          $user->save();

          $users = User::all();
          $reps = Rep::all();

          return view('admin.assign_rep')->with('users', $users)->with('reps', $reps);
        }else{
          return redirect('/');
        }
      }else{
        return redirect('/');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      $role = Auth()->user()->role;

        if($role != NULL){
            if($role = 'admin'){
              $user = User::find($id);
        $pools = PollsModel::getBbyUser($user->id);

        foreach($pools as $poll)
        {

          $poll = PollsModel::find($poll->iduser_poll);

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
        }


        $user->delete();
        
        

        $notification = array(
            'message' => 'User: ' . $user->name . ' '. $user->lastname .' Was deleted Successfully', 
            'alert-type' => 'success'
        );

    
        return redirect()->back()->with($notification);
}else{
                return redirect('/');
            }
        }else{
            return redirect('/');
        }

        
    }


    public function deletePoll($iduser_poll){


      $role = Auth()->user()->role;

      if($role != NULL){
        if($role = 'admin'){
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
        }else{
          return redirect('/');
        }
      }else{
        return redirect('/');
      }
    }


    public function deleteRep($id_rep){

      $role = Auth()->user()->role;

      if($role != NULL){
        if($role = 'admin'){$rep = Rep::find($id_rep);

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
        }else{
          return redirect('/');
        }
      }else{
        return redirect('/');
      }
    }


    public function exportExcel(){

      $role = Auth()->user()->role;

      if($role != NULL){
        if($role = 'admin'){
          $pools = PollsModel::getUserPools();

    // $pools = PollsModel::select('poll_name', 'status', 'complete')->get();

          return Excel::create('all_pools', function($excel) use($pools) {
            $excel->sheet('Sheet 1', function($sheet) use($pools) {
              $sheet->fromArray($pools);
            });
          })->export('xls');
        }else{
          return redirect('/');
        }
      }else{
        return redirect('/');
      }

    }


}
