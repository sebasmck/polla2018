<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PollsModel;
use App\PickGroupA;

class PicksController extends Controller
{	

	// show pick
	public function index()
    {	
        return view('picks.picks');
    }   

    public function storeGroupA(Request $req){

    	$pick = new PickGroupA;

    	$pick->M1A1 = $req->M1A1;
    	$pick->M1A2 = $req->M1A2;
    	$pick->M2A3 = $req->M2A3;
    	$pick->M2A4 = $req->M2A4;
    	$pick->M3A1 = $req->M3A1;
    	$pick->M3A3 = $req->M3A3;
    	$pick->M4A4 = $req->M4A4;
    	$pick->M4A2 = $req->M4A2;
    	$pick->M5A4 = $req->M5A4;
    	$pick->M5A1 = $req->M5A1;
    	$pick->M6A2 = $req->M6A2;
    	$pick->M6A3 = $req->M6A3;

    	$pick->save();
    	
    	return response()->json($pick);
    	
    }





}
