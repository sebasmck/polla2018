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
use App\Team;
use App\rivals;
use DB;

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


        
        

        // raw query
        $wa = Clasificado::where('id_poll', $iduser_poll)->where('id_fase', 1)->get()->first();
        $wb = Clasificado::where('id_poll', $iduser_poll)->where('id_fase', 2)->get()->first();
        $wc = Clasificado::where('id_poll', $iduser_poll)->where('id_fase', 3)->get()->first();
        $wd = Clasificado::where('id_poll', $iduser_poll)->where('id_fase', 4)->get()->first();
        $we = Clasificado::where('id_poll', $iduser_poll)->where('id_fase', 5)->get()->first();
        $wf = Clasificado::where('id_poll', $iduser_poll)->where('id_fase', 6)->get()->first();
        $wg=  Clasificado::where('id_poll', $iduser_poll)->where('id_fase', 7)->get()->first();
        $wh = Clasificado::where('id_poll', $iduser_poll)->where('id_fase', 8)->get()->first();

        $winA = Clasificado::teamsClasificadosWin($iduser_poll,1);
        $winB = Clasificado::teamsClasificadosWin($iduser_poll,2);
        $winC = Clasificado::teamsClasificadosWin($iduser_poll,3);
        $winD = Clasificado::teamsClasificadosWin($iduser_poll,4);
        $winE = Clasificado::teamsClasificadosWin($iduser_poll,5);
        $winF = Clasificado::teamsClasificadosWin($iduser_poll,6);
        $winG = Clasificado::teamsClasificadosWin($iduser_poll,7);
        $winH = Clasificado::teamsClasificadosWin($iduser_poll,8);

        //$drop1 = rivals::teamsQuarter($iduser_poll,1, 2);
        //dd($drop1);
        // $drop1->prepend('None');
        //dd($drop1);

       

        // $round16_1 = Clasificado::teamsClasificadosWin($iduser_poll,9);
        // $round16_2 = Clasificado::teamsClasificadosWin($iduser_poll,10);
        // $round16_3 = Clasificado::teamsClasificadosWin($iduser_poll,11);
        // $round16_4 = Clasificado::teamsClasificadosWin($iduser_poll,12);


        return view('picks.picks')
        ->with('poll', $poll)
        ->with('ga', $ga)
        ->with('gb', $gb)
        ->with('gc', $gc)
        ->with('gd', $gd)
        ->with('ge', $ge)
        ->with('gf', $gf)
        ->with('gg', $gg)
        ->with('gh', $gh)
        ->with('wa', $wa)
        ->with('wb', $wb)
        ->with('wc', $wc)
        ->with('wd', $wd)
        ->with('we', $we)
        ->with('wf', $wf)
        ->with('wg', $wg)
        ->with('wh', $wh)
        ->with('winA', $winA)
        ->with('winB', $winB)
        ->with('winC', $winC)
        ->with('winD', $winD)
        ->with('winE', $winE)
        ->with('winF', $winF)
        ->with('winG', $winG)
        ->with('winH', $winH);
        // ->with('drop1', $drop1)
        

    }


    public function storeGroupA(Request $req){

    	$pick = new PickGroupA;

        Clasificado::updateOrCreate(

            ['id_poll' => $req->id_poll, 'id_fase' => $req->id_fase],

             [  
                'id_poll' => $req->id_poll,
                'id_winner_team' => $req->WA1,
                'id_runnerup' => $req->WA2,
                'id_fase' => $req->id_fase,
             ]);

        


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

         Clasificado::updateOrCreate(

            ['id_poll' => $req->id_poll, 'id_fase' => $req->id_fase],

             [  
                'id_poll' => $req->id_poll,
                'id_winner_team' => $req->WB1,
                'id_runnerup' => $req->WB2,
                'id_fase' => $req->id_fase,
             ]);

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
        
        Clasificado::updateOrCreate(

            ['id_poll' => $req->id_poll, 'id_fase' => $req->id_fase],

             [  
                'id_poll' => $req->id_poll,
                'id_winner_team' => $req->WC1,
                'id_runnerup' => $req->WC2,
                'id_fase' => $req->id_fase,
             ]);


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
        
        Clasificado::updateOrCreate(

            ['id_poll' => $req->id_poll, 'id_fase' => $req->id_fase],

             [  
                'id_poll' => $req->id_poll,
                'id_winner_team' => $req->WD1,
                'id_runnerup' => $req->WD2,
                'id_fase' => $req->id_fase,
             ]);

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
        
        Clasificado::updateOrCreate(

            ['id_poll' => $req->id_poll, 'id_fase' => $req->id_fase],

             [  
                'id_poll' => $req->id_poll,
                'id_winner_team' => $req->WE1,
                'id_runnerup' => $req->WE2,
                'id_fase' => $req->id_fase,
             ]);

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

        Clasificado::updateOrCreate(

            ['id_poll' => $req->id_poll, 'id_fase' => $req->id_fase],

             [  
                'id_poll' => $req->id_poll,
                'id_winner_team' => $req->WF1,
                'id_runnerup' => $req->WF2,
                'id_fase' => $req->id_fase,
             ]);

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
        
        Clasificado::updateOrCreate(

            ['id_poll' => $req->id_poll, 'id_fase' => $req->id_fase],

             [  
                'id_poll' => $req->id_poll,
                'id_winner_team' => $req->WG1,
                'id_runnerup' => $req->WG2,
                'id_fase' => $req->id_fase,
             ]);


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
        
        Clasificado::updateOrCreate(

            ['id_poll' => $req->id_poll, 'id_fase' => $req->id_fase],

             [  
                'id_poll' => $req->id_poll,
                'id_winner_team' => $req->WH1,
                'id_runnerup' => $req->WH2,
                'id_fase' => $req->id_fase,
             ]);
        

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

    public function update($iduser_poll){

        $id_user = Auth::user()->id;
        
        $poll = PollsModel::find($iduser_poll);
        $poll->active = 0;
        $poll->save();

        $polls = PollsModel::getBbyUser($id_user);
        return view('home')->with('polls', $polls);


    }


    public function destroy($iduser_poll)
    {
        $id_user = Auth::user()->id;

        $poll  PollsModel::find($iduser_poll);
        $poll->delete();

        $polls = PollsModel::getBbyUser($id_user);
        return view('home')->with('polls', $polls);
    }


}
