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

class PicksController extends Controller
{	

	// show pick
	public function index()
    {	
        
    }   


    public function show($iduser_poll){

        $poll = PollsModel::find($iduser_poll);

        return view('picks.picks')->with('poll', $poll);

    }


    public function storeGroupA(Request $req){

    	$pick = new PickGroupA;
        // $clasificado = new Clasificado;
        // $clasificado-> = $req->;
        // $clasificado-> = $req->;
        // $clasificado->save();


        $pick->group_name = $req->group_name;
        $pick->id_poll = $req->id_poll;

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


    public function storeGroupB(Request $req){

        $pick = new PickGroupB;
        // $clasificado = new Clasificado;
        // $clasificado-> = $req->;
        // $clasificado-> = $req->;
        // $clasificado->save();
        $pick->group_name = $req->group_name;
        $pick->id_poll = $req->id_poll;

        $pick->M1B1 = $req->M1B1;
        $pick->M1B2 = $req->M1B2;
        $pick->M2B3 = $req->M2B3;
        $pick->M2B4 = $req->M2B4;
        $pick->M3B1 = $req->M3B1;
        $pick->M3B3 = $req->M3B3;
        $pick->M4B4 = $req->M4B4;
        $pick->M4B2 = $req->M4B2;
        $pick->M5B4 = $req->M5B4;
        $pick->M5B1 = $req->M5B1;
        $pick->M6B2 = $req->M6B2;
        $pick->M6B3 = $req->M6B3;

        $pick->save();
        
        return response()->json($pick);
        
    }


    public function storeGroupC(Request $req){

        $pick = new PickGroupC;
        // $clasificado = new Clasificado;
        // $clasificado-> = $req->;
        // $clasificado-> = $req->;
        // $clasificado->save();
        $pick->group_name = $req->group_name;
        $pick->id_poll = $req->id_poll;

        $pick->M1C1 = $req->M1C1;
        $pick->M1C2 = $req->M1C2;
        $pick->M2C3 = $req->M2C3;
        $pick->M2C4 = $req->M2C4;
        $pick->M3C1 = $req->M3C1;
        $pick->M3C3 = $req->M3C3;
        $pick->M4C4 = $req->M4C4;
        $pick->M4C2 = $req->M4C2;
        $pick->M5C4 = $req->M5C4;
        $pick->M5C1 = $req->M5C1;
        $pick->M6C2 = $req->M6C2;
        $pick->M6C3 = $req->M6C3;

        $pick->save();
        
        return response()->json($pick);
        
    }  


    public function storeGroupD(Request $req){

        $pick = new PickGroupD;
        // $clasificado = new Clasificado;
        // $clasificado-> = $req->;
        // $clasificado-> = $req->;
        // $clasificado->save();
        $pick->group_name = $req->group_name;
        $pick->id_poll = $req->id_poll;


        $pick->M1D1 = $req->M1D1;
        $pick->M1D2 = $req->M1D2;
        $pick->M2D3 = $req->M2D3;
        $pick->M2D4 = $req->M2D4;
        $pick->M3D1 = $req->M3D1;
        $pick->M3D3 = $req->M3D3;
        $pick->M4D4 = $req->M4D4;
        $pick->M4D2 = $req->M4D2;
        $pick->M5D4 = $req->M5D4;
        $pick->M5D1 = $req->M5D1;
        $pick->M6D2 = $req->M6D2;
        $pick->M6D3 = $req->M6D3;

        $pick->save();
        
        return response()->json($pick);
        
    }

    public function storeGroupE(Request $req){

        $pick = new PickGroupE;
        // $clasificado = new Clasificado;
        // $clasificado-> = $req->;
        // $clasificado-> = $req->;
        // $clasificado->save();
        $pick->group_name = $req->group_name;
        $pick->id_poll = $req->id_poll;

        $pick->M1E1 = $req->M1E1;
        $pick->M1E2 = $req->M1E2;
        $pick->M2E3 = $req->M2E3;
        $pick->M2E4 = $req->M2E4;
        $pick->M3E1 = $req->M3E1;
        $pick->M3E3 = $req->M3E3;
        $pick->M4E4 = $req->M4E4;
        $pick->M4E2 = $req->M4E2;
        $pick->M5E4 = $req->M5E4;
        $pick->M5E1 = $req->M5E1;
        $pick->M6E2 = $req->M6E2;
        $pick->M6E3 = $req->M6E3;

        $pick->save();
        
        return response()->json($pick);
        
    }


    public function storeGroupF(Request $req){

        $pick = new PickGroupF;
        // $clasificado = new Clasificado;
        // $clasificado-> = $req->;
        // $clasificado-> = $req->;
        // $clasificado->save();

        $pick->group_name = $req->group_name;
        $pick->id_poll = $req->id_poll;

        $pick->M1F1 = $req->M1F1;
        $pick->M1F2 = $req->M1F2;
        $pick->M2F3 = $req->M2F3;
        $pick->M2F4 = $req->M2F4;
        $pick->M3F1 = $req->M3F1;
        $pick->M3F3 = $req->M3F3;
        $pick->M4F4 = $req->M4F4;
        $pick->M4F2 = $req->M4F2;
        $pick->M5F4 = $req->M5F4;
        $pick->M5F1 = $req->M5F1;
        $pick->M6F2 = $req->M6F2;
        $pick->M6F3 = $req->M6F3;

        $pick->save();
        
        return response()->json($pick);
        
    }


    public function storeGroupG(Request $req){

        $pick = new PickGroupG;
        // $clasificado = new Clasificado;
        // $clasificado-> = $req->;
        // $clasificado-> = $req->;
        // $clasificado->save();

        $pick->group_name = $req->group_name;
        $pick->id_poll = $req->id_poll;

        $pick->M1G1 = $req->M1G1;
        $pick->M1G2 = $req->M1G2;
        $pick->M2G3 = $req->M2G3;
        $pick->M2G4 = $req->M2G4;
        $pick->M3G1 = $req->M3G1;
        $pick->M3G3 = $req->M3G3;
        $pick->M4G4 = $req->M4G4;
        $pick->M4G2 = $req->M4G2;
        $pick->M5G4 = $req->M5G4;
        $pick->M5G1 = $req->M5G1;
        $pick->M6G2 = $req->M6G2;
        $pick->M6G3 = $req->M6G3;

        $pick->save();
        
        return response()->json($pick);
        
    }

    public function storeGroupH(Request $req){

        $pick = new PickGroupH;
        // $clasificado = new Clasificado;
        // $clasificado-> = $req->;
        // $clasificado-> = $req->;
        // $clasificado->save();


        $pick->group_name = $req->group_name;
        $pick->id_poll = $req->id_poll;

        $pick->M1H1 = $req->M1H1;
        $pick->M1H2 = $req->M1H2;
        $pick->M2H3 = $req->M2H3;
        $pick->M2H4 = $req->M2H4;
        $pick->M3H1 = $req->M3H1;
        $pick->M3H3 = $req->M3H3;
        $pick->M4H4 = $req->M4H4;
        $pick->M4H2 = $req->M4H2;
        $pick->M5H4 = $req->M5H4;
        $pick->M5H1 = $req->M5H1;
        $pick->M6H2 = $req->M6H2;
        $pick->M6H3 = $req->M6H3;

        $pick->save();
        
        return response()->json($pick);
        
    }




}
