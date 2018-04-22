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
        $ga = PollsModel::find($iduser_poll)->groupa;
        $gb = PollsModel::find($iduser_poll)->groupb;
        $gc = PollsModel::find($iduser_poll)->groupc;
        $gd = PollsModel::find($iduser_poll)->groupd;
        $ge = PollsModel::find($iduser_poll)->groupe;
        $gf = PollsModel::find($iduser_poll)->groupf;
        $gg = PollsModel::find($iduser_poll)->groupg;
        $gh = PollsModel::find($iduser_poll)->grouph;

        return view('picks.picks')->with('poll', $poll)->with('ga', $ga)->with('gb', $gb)->with('gc', $gc)->with('gd', $gd)->with('ge', $ge)->with('gf', $gf)->with('gg', $gg)->with('gh', $gh);

    }


    public function storeGroupA(Request $req){

    	$pick = new PickGroupA;
        // $clasificado = new Clasificado;
        // $clasificado-> = $req->;
        // $clasificado-> = $req->;
        // $clasificado->save();



        PickGroupA::updateOrCreate(

             ['id_poll' => $req->id_poll,],

             [  
                'group_name' => $req->group_name,
                'id_poll' => $req->id_poll,
                'M1A1' => $req->M1A1,
                'M1A2' => $req->M1A2,
                'M2A3' => $req->M2A3,
                'M2A4' => $req->M2A4,
                'M3A1' => $req->M3A1,
                'M3A3' => $req->M3A3,
                'M4A4' => $req->M4A4,
                'M4A2' => $req->M4A2,
                'M5A4' => $req->M5A4,
                'M5A1' => $req->M5A1,
                'M6A2' => $req->M6A2,
                'M6A3' => $req->M6A3,
             ]);

    	return response()->json($pick);
    	
    }


    public function storeGroupB(Request $req){

        $pick = new PickGroupB;
        // $clasificado = new Clasificado;
        // $clasificado-> = $req->;
        // $clasificado-> = $req->;
        // $clasificado->save();


        PickGroupB::updateOrCreate(

             ['id_poll' => $req->id_poll,],

             [  
                'id_poll' => $req->id_poll,
                'group_name' => $req->group_name,
                'M1B1' => $req->M1B1,
                'M1B2' => $req->M1B2,
                'M2B3' => $req->M2B3,
                'M2B4' => $req->M2B4,
                'M3B1' => $req->M3B1,
                'M3B3' => $req->M3B3,
                'M4B4' => $req->M4B4,
                'M4B2' => $req->M4B2,
                'M5B4' => $req->M5B4,
                'M5B1' => $req->M5B1,
                'M6B2' => $req->M6B2,
                'M6B3' => $req->M6B3,

             ]);
        
        return response()->json($pick);
        
    }


    public function storeGroupC(Request $req){

        $pick = new PickGroupC;
        // $clasificado = new Clasificado;
        // $clasificado-> = $req->;
        // $clasificado-> = $req->;
        // $clasificado->save();


       PickGroupC::updateOrCreate(

             ['id_poll' => $req->id_poll,],

             [  
                'id_poll' => $req->id_poll,
                'group_name' => $req->group_name,
                'M1C1' => $req->M1C1,
                'M1C2' => $req->M1C2,
                'M2C3' => $req->M2C3,
                'M2C4' => $req->M2C4,
                'M3C1' => $req->M3C1,
                'M3C3' => $req->M3C3,
                'M4C4' => $req->M4C4,
                'M4C2' => $req->M4C2,
                'M5C4' => $req->M5C4,
                'M5C1' => $req->M5C1,
                'M6C2' => $req->M6C2,
                'M6C3' => $req->M6C3,

             ]);
        
        return response()->json($pick);
        
    }  


    public function storeGroupD(Request $req){

        $pick = new PickGroupD;
        // $clasificado = new Clasificado;
        // $clasificado-> = $req->;
        // $clasificado-> = $req->;
        // $clasificado->save();

        PickGroupD::updateOrCreate(

             ['id_poll' => $req->id_poll,],

             [  
                'id_poll' => $req->id_poll,
                'group_name' => $req->group_name,
                'M1D1' => $req->M1D1,
                'M1D2' => $req->M1D2,
                'M2D3' => $req->M2D3,
                'M2D4' => $req->M2D4,
                'M3D1' => $req->M3D1,
                'M3D3' => $req->M3D3,
                'M4D4' => $req->M4D4,
                'M4D2' => $req->M4D2,
                'M5D4' => $req->M5D4,
                'M5D1' => $req->M5D1,
                'M6D2' => $req->M6D2,
                'M6D3' => $req->M6D3,

             ]);

        return response()->json($pick);
        
    }

    public function storeGroupE(Request $req){

        $pick = new PickGroupE;
        // $clasificado = new Clasificado;
        // $clasificado-> = $req->;
        // $clasificado-> = $req->;
        // $clasificado->save();

        PickGroupE::updateOrCreate(

             ['id_poll' => $req->id_poll,],

             [  
                'id_poll' => $req->id_poll,
                'group_name' => $req->group_name,
                'M1E1' => $req->M1E1,
                'M1E2' => $req->M1E2,
                'M2E3' => $req->M2E3,
                'M2E4' => $req->M2E4,
                'M3E1' => $req->M3E1,
                'M3E3' => $req->M3E3,
                'M4E4' => $req->M4E4,
                'M4E2' => $req->M4E2,
                'M5E4' => $req->M5E4,
                'M5E1' => $req->M5E1,
                'M6E2' => $req->M6E2,
                'M6E3' => $req->M6E3,

             ]);
        
        return response()->json($pick);
        
    }


    public function storeGroupF(Request $req){

        $pick = new PickGroupF;
        // $clasificado = new Clasificado;
        // $clasificado-> = $req->;
        // $clasificado-> = $req->;
        // $clasificado->save();

       PickGroupF::updateOrCreate(

             ['id_poll' => $req->id_poll,],

             [  
                'id_poll' => $req->id_poll,
                'group_name' => $req->group_name,
                'M1F1' => $req->M1F1,
                'M1F2' => $req->M1F2,
                'M2F3' => $req->M2F3,
                'M2F4' => $req->M2F4,
                'M3F1' => $req->M3F1,
                'M3F3' => $req->M3F3,
                'M4F4' => $req->M4F4,
                'M4F2' => $req->M4F2,
                'M5F4' => $req->M5F4,
                'M5F1' => $req->M5F1,
                'M6F2' => $req->M6F2,
                'M6F3' => $req->M6F3,

             ]);
        
        return response()->json($pick);
        
    }


    public function storeGroupG(Request $req){

        $pick = new PickGroupG;
        // $clasificado = new Clasificado;
        // $clasificado-> = $req->;
        // $clasificado-> = $req->;
        // $clasificado->save();



        PickGroupG::updateOrCreate(

             ['id_poll' => $req->id_poll,],

             [  
                'id_poll' => $req->id_poll,
                'group_name' => $req->group_name,
                'M1G1' => $req->M1G1,
                'M1G2' => $req->M1G2,
                'M2G3' => $req->M2G3,
                'M2G4' => $req->M2G4,
                'M3G1' => $req->M3G1,
                'M3G3' => $req->M3G3,
                'M4G4' => $req->M4G4,
                'M4G2' => $req->M4G2,
                'M5G4' => $req->M5G4,
                'M5G1' => $req->M5G1,
                'M6G2' => $req->M6G2,
                'M6G3' => $req->M6G3,

             ]);

  
        
        return response()->json($pick);
        
    }

    public function storeGroupH(Request $req){

        $pick = new PickGroupH;
        // $clasificado = new Clasificado;
        // $clasificado-> = $req->;
        // $clasificado-> = $req->;
       // $clasificado->save();
        

        PickGroupH::updateOrCreate(

             ['id_poll' => $req->id_poll,],

             [  
                'id_poll' => $req->id_poll,
                'group_name' => $req->group_name,
                'M1H1' => $req->M1H1,
                'M1H2' => $req->M1H2,
                'M2H3' => $req->M2H3,
                'M2H4' => $req->M2H4,
                'M3H1' => $req->M3H1,
                'M3H3' => $req->M3H3,
                'M4H4' => $req->M4H4,
                'M4H2' => $req->M4H2,
                'M5H4' => $req->M5H4,
                'M5H1' => $req->M5H1,
                'M6H2' => $req->M6H2,
                'M6H3' => $req->M6H3,

             ]);

        
        return response()->json($pick);
        
    }




}
