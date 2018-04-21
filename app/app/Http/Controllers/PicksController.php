<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PollsModel;
use App\Pick;

class PicksController extends Controller
{	

	// show pick
	public function show($id_userpoll)
    {	

    	$poll = PollsModel::find($id_userpoll);

        return view('picks.picks')->with('poll', $poll);
    }   

    public function storeGroupA(Request $req ){

    	$pick = new Pick;

    	$pick->id_userpoll = $req->input('id_userpoll');
    	$pick->id_poll = $req->input('id_poll');
    	$pick->id_fase = $req->input('id_fase');
    	$pick->team1 = $req->input('team1');
    	$pick->team2 = $req->input('team2');
    	$pick->pickt1 = $req->input('pickt1');
    	$pick->pickt2 = $req->input('pickt2');

    	$pick->save();

    	return view ('picks.picks');


    }





}
