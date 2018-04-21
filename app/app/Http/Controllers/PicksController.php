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

    	$picks = PollsModel::find($id_userpoll)->picks;

        return view('picks.picks')->with('picks', $picks);
    }   

    public function storeGroupA(Request $req ){

    	$pick = new Pick;

    	$pick-> = $req->input('');
    	$pick-> = $req->input('');
    	$pick-> = $req->input('');
    	$pick-> = $req->input('');
    	$pick-> = $req->input('');
    	$pick-> = $req->input('');

    	$pick->save();

    	return view ('picks.picks');


    }





}
