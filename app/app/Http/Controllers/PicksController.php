<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
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
use App\SecondStage;
use Illuminate\Support\Facades\Validator;
use App\CurrentPhase;
use App\Ranking_pools;

use DB;

class PicksController extends Controller
{	

	// show pick
	public function index()
    {	
        
    }

    public function Ranking(){

        $polls = Ranking_pools::where('status', '=', 'active')->get();
        //$polls = Ranking_pools::ranking();
        $activepolls = Ranking_pools::where('status', '=', 'active')->count();

        return view('picks.ranking')->with('polls', $polls)->with('activepolls', $activepolls);
    }

    public function adminPick($id){

        $user = PollsModel::where('id_User', '=', $id)->first();
        if ($user != null) {
            return redirect()->route('picks.show', ['iduser_poll' => $user->iduser_poll]);

        }else{
            $id_user = auth()->user()->id;
            $polls = PollsModel::getBbyUser($id_user);
            $countpolls = PollsModel::all()->count();

            return view('home')->with('polls', $polls)->with('countpolls', $countpolls);
        }

    }


    public function show($iduser_poll){


        $user = Auth::user();

        $id = $user->id;

        $poll = PollsModel::find($iduser_poll);

        
        if ((PollsModel::where('iduser_poll', '=', $iduser_poll))->count() > 0 || (Auth::user()->role == 'admin')) {
            if ($id == $poll->id_User) {
          
        
            // Groups input boxes

        $poll = PollsModel::find($iduser_poll);
        $ga = PollsModel::find($iduser_poll)->groupa;
        $gb = PollsModel::find($iduser_poll)->groupb;
        $gc = PollsModel::find($iduser_poll)->groupc;
        $gd = PollsModel::find($iduser_poll)->groupd;
        $ge = PollsModel::find($iduser_poll)->groupe;
        $gf = PollsModel::find($iduser_poll)->groupf;
        $gg = PollsModel::find($iduser_poll)->groupg;
        $gh = PollsModel::find($iduser_poll)->grouph;

        // Sebastian's raw query winners
        $wa = Clasificado::where('id_poll', $iduser_poll)->where('id_fase', 1)->get()->first();
        $wb = Clasificado::where('id_poll', $iduser_poll)->where('id_fase', 2)->get()->first();
        $wc = Clasificado::where('id_poll', $iduser_poll)->where('id_fase', 3)->get()->first();
        $wd = Clasificado::where('id_poll', $iduser_poll)->where('id_fase', 4)->get()->first();
        $we = Clasificado::where('id_poll', $iduser_poll)->where('id_fase', 5)->get()->first();
        $wf = Clasificado::where('id_poll', $iduser_poll)->where('id_fase', 6)->get()->first();
        $wg=  Clasificado::where('id_poll', $iduser_poll)->where('id_fase', 7)->get()->first();
        $wh = Clasificado::where('id_poll', $iduser_poll)->where('id_fase', 8)->get()->first();

        // Ruben's query

        $winA = Clasificado::teamsClasificadosWin($iduser_poll,1);
        $winB = Clasificado::teamsClasificadosWin($iduser_poll,2);
        $winC = Clasificado::teamsClasificadosWin($iduser_poll,3);
        $winD = Clasificado::teamsClasificadosWin($iduser_poll,4);
        $winE = Clasificado::teamsClasificadosWin($iduser_poll,5);
        $winF = Clasificado::teamsClasificadosWin($iduser_poll,6);
        $winG = Clasificado::teamsClasificadosWin($iduser_poll,7);
        $winH = Clasificado::teamsClasificadosWin($iduser_poll,8);

        
        // second stage results

        $ss = SecondStage::where('id_poll', $iduser_poll)->get()->first();
        if($ss == null)
        {
            $ss = new SecondStage;
        }

        $countpolls = PollsModel::all()->count();


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
        ->with('winH', $winH)
        ->with('ss', $ss)
        ->with('countpolls', $countpolls);
        // ->with('drop1', $drop1)
        }else{
            return redirect('/home');   
        }
    }else{
        return redirect('/home');
    }
}


    public function storeGroupA(Request $req){

        $pick = new PickGroupA;
        $phase = CurrentPhase::first();

        if ($phase->phase == 3) {
            $clasificadogroupa = Clasificado::updateOrCreate(

            ['id_poll' => $req->id_poll, 'id_fase' => $req->id_fase],

             [  
                'id_poll' => $req->id_poll,
                'id_winner_team' => $req->WA1,
                'id_runnerup' => $req->WA2,
                'id_fase' => $req->id_fase,
             ]);



            if($clasificadogroupa->wasChanged()) {
               PollsModel::where('iduser_poll', $req->id_poll)->update(array('complete' => 'Incomplete'));
            }


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
                'complete' => 1,
             ]);

        DB::select("call scores()");
        
        return response()->json($pick);

        }else{

            $validator = Validator::make($req->all(), [
            'M1A1' => 'required',
            'M1A2' => 'required',
            'M2A3' => 'required',
            'M2A4' => 'required',
            'M3A1' => 'required',
            'M3A3' => 'required',
            'M4A4' => 'required',
            'M4A2' => 'required',
            'M5A4' => 'required',
            'M5A1' => 'required',
            'M6A2' => 'required',
            'M6A3' => 'required',
            'WA1'  => 'required',
            'WA2'  => 'required'
        ]);

        
        if ($validator->passes()) {

            
            $clasificadogroupa = Clasificado::updateOrCreate(

            ['id_poll' => $req->id_poll, 'id_fase' => $req->id_fase],

             [  
                'id_poll' => $req->id_poll,
                'id_winner_team' => $req->WA1,
                'id_runnerup' => $req->WA2,
                'id_fase' => $req->id_fase,
             ]);


            if($clasificadogroupa->wasChanged()) {
               PollsModel::where('iduser_poll', $req->id_poll)->update(array('complete' => 'Incomplete'));
            }


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
                'complete' => 1,
             ]);

        DB::select("call scores()");

        return response()->json($pick);

        }else{
            return response()->json(['error'=>'All fields Are Required']);
        }

       }
    }


    public function storeGroupB(Request $req){

        $pick = new PickGroupB;
        $phase = CurrentPhase::first();

        if ($phase->phase == 3) {

            $clasificadogroupb = Clasificado::updateOrCreate(

            ['id_poll' => $req->id_poll, 'id_fase' => $req->id_fase],

             [  
                'id_poll' => $req->id_poll,
                'id_winner_team' => $req->WB1,
                'id_runnerup' => $req->WB2,
                'id_fase' => $req->id_fase,
             ]);

            if($clasificadogroupb->wasChanged()) {
               PollsModel::where('iduser_poll', $req->id_poll)->update(array('complete' => 'Incomplete'));
            }

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
                'complete' => 1,

             ]);

            DB::select("call scores()");
            return response()->json($pick);
        }else{
            $validator = Validator::make($req->all(), [

            'M1B1' => 'required',
            'M1B2' => 'required',
            'M2B3' => 'required',
            'M2B4' => 'required',
            'M3B1' => 'required',
            'M3B3' => 'required',
            'M4B4' => 'required',
            'M4B2' => 'required',
            'M5B4' => 'required',
            'M5B1' => 'required',
            'M6B2' => 'required',
            'M6B3' => 'required',
            'WB1'  => 'required',
            'WB2'  => 'required'
        ]);

        if ($validator->passes()) {

           $clasificadogroupb = Clasificado::updateOrCreate(

            ['id_poll' => $req->id_poll, 'id_fase' => $req->id_fase],

             [  
                'id_poll' => $req->id_poll,
                'id_winner_team' => $req->WB1,
                'id_runnerup' => $req->WB2,
                'id_fase' => $req->id_fase,
             ]);

            if($clasificadogroupb->wasChanged()) {
               PollsModel::where('iduser_poll', $req->id_poll)->update(array('complete' => 'Incomplete'));
            }

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
                'complete' => 1,

             ]);

            DB::select("call scores()");
        
            return response()->json($pick);
        }else{
            return response()->json(['error'=>'All fields Are Required']);
        }
      }
    }


    public function storeGroupC(Request $req){

        $pick = new PickGroupC;

        $phase = CurrentPhase::first();

        if ($phase->phase == 3) {
            $clasificadogroupc = Clasificado::updateOrCreate(

            ['id_poll' => $req->id_poll, 'id_fase' => $req->id_fase],

             [  
                'id_poll' => $req->id_poll,
                'id_winner_team' => $req->WC1,
                'id_runnerup' => $req->WC2,
                'id_fase' => $req->id_fase,
             ]);

            if($clasificadogroupc->wasChanged()) {
               PollsModel::where('iduser_poll', $req->id_poll)->update(array('complete' => 'Incomplete'));
            }


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
                'complete' => 1,

             ]);

            DB::select("call scores()");

            return response()->json($pick);
        }else{

            $validator = Validator::make($req->all(), [

            'M1C1' => 'required',
            'M1C2' => 'required',
            'M2C3' => 'required',
            'M2C4' => 'required',
            'M3C1' => 'required',
            'M3C3' => 'required',
            'M4C4' => 'required',
            'M4C2' => 'required',
            'M5C4' => 'required',
            'M5C1' => 'required',
            'M6C2' => 'required',
            'M6C3' => 'required',
            'WC1'  => 'required',
            'WC2'  => 'required'
        ]);

        if ($validator->passes()) {


            $clasificadogroupc = Clasificado::updateOrCreate(

            ['id_poll' => $req->id_poll, 'id_fase' => $req->id_fase],

             [  
                'id_poll' => $req->id_poll,
                'id_winner_team' => $req->WC1,
                'id_runnerup' => $req->WC2,
                'id_fase' => $req->id_fase,
             ]);

            if($clasificadogroupc->wasChanged()) {
               PollsModel::where('iduser_poll', $req->id_poll)->update(array('complete' => 'Incomplete'));
            }


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
                'complete' => 1,

             ]);

            DB::select("call scores()");
       
            return response()->json($pick);
        }else{
            return response()->json(['error'=>'All fields Are Required']);
        }
      }
    }  


    public function storeGroupD(Request $req){

        $pick = new PickGroupD;

        $phase = CurrentPhase::first();

        if ($phase->phase == 3) {
            $clasificadogroupd = Clasificado::updateOrCreate(

            ['id_poll' => $req->id_poll, 'id_fase' => $req->id_fase],

             [  
                'id_poll' => $req->id_poll,
                'id_winner_team' => $req->WD1,
                'id_runnerup' => $req->WD2,
                'id_fase' => $req->id_fase,
             ]);

            if($clasificadogroupd->wasChanged()) {
               PollsModel::where('iduser_poll', $req->id_poll)->update(array('complete' => 'Incomplete'));
            }

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
                'complete' => 1,

             ]);

            DB::select("call scores()");

            return response()->json($pick);
        }else{
            $validator = Validator::make($req->all(), [

            'M1D1' => 'required',
            'M1D2' => 'required',
            'M2D3' => 'required',
            'M2D4' => 'required',
            'M3D1' => 'required',
            'M3D3' => 'required',
            'M4D4' => 'required',
            'M4D2' => 'required',
            'M5D4' => 'required',
            'M5D1' => 'required',
            'M6D2' => 'required',
            'M6D3' => 'required',
            'WD1'  => 'required',
            'WD2'  => 'required'
        ]);

        if ($validator->passes()) {

            $clasificadogroupd = Clasificado::updateOrCreate(

            ['id_poll' => $req->id_poll, 'id_fase' => $req->id_fase],

             [  
                'id_poll' => $req->id_poll,
                'id_winner_team' => $req->WD1,
                'id_runnerup' => $req->WD2,
                'id_fase' => $req->id_fase,
             ]);

            if($clasificadogroupd->wasChanged()) {
               PollsModel::where('iduser_poll', $req->id_poll)->update(array('complete' => 'Incomplete'));
            }

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
                'complete' => 1,

             ]);


             DB::select("call scores()");

            return response()->json($pick);
        }else{
            return response()->json(['error'=>'All fields Are Required']);
        }
      }        
    }

    public function storeGroupE(Request $req){

        $pick = new PickGroupE;

        $phase = CurrentPhase::first();

        if ($phase->phase == 3) {

            $clasificadogroupe = Clasificado::updateOrCreate(

            ['id_poll' => $req->id_poll, 'id_fase' => $req->id_fase],

             [  
                'id_poll' => $req->id_poll,
                'id_winner_team' => $req->WE1,
                'id_runnerup' => $req->WE2,
                'id_fase' => $req->id_fase,
             ]);

            if($clasificadogroupe->wasChanged()) {
               PollsModel::where('iduser_poll', $req->id_poll)->update(array('complete' => 'Incomplete'));
            }



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
                'complete' => 1,

             ]);
        DB::select("call scores()");

            return response()->json($pick);
        }else{
            $validator = Validator::make($req->all(), [

            'M1E1' => 'required',
            'M1E2' => 'required',
            'M2E3' => 'required',
            'M2E4' => 'required',
            'M3E1' => 'required',
            'M3E3' => 'required',
            'M4E4' => 'required',
            'M4E2' => 'required',
            'M5E4' => 'required',
            'M5E1' => 'required',
            'M6E2' => 'required',
            'M6E3' => 'required',
            'WE1'  => 'required',
            'WE2'  => 'required'
        ]);

        if ($validator->passes()) {

            $clasificadogroupe = Clasificado::updateOrCreate(

            ['id_poll' => $req->id_poll, 'id_fase' => $req->id_fase],

             [  
                'id_poll' => $req->id_poll,
                'id_winner_team' => $req->WE1,
                'id_runnerup' => $req->WE2,
                'id_fase' => $req->id_fase,
             ]);

            if($clasificadogroupe->wasChanged()) {
               PollsModel::where('iduser_poll', $req->id_poll)->update(array('complete' => 'Incomplete'));
            }



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
                'complete' => 1,

             ]);
            DB::select("call scores()");
            return response()->json($pick);
        }else{
            return response()->json(['error'=>'All fields Are Required']);
        }
      }
    }


    public function storeGroupF(Request $req){

        $pick = new PickGroupF;

        $phase = CurrentPhase::first();

        if ($phase->phase == 3) {
            $clasificadogroupf = Clasificado::updateOrCreate(

            ['id_poll' => $req->id_poll, 'id_fase' => $req->id_fase],

             [  
                'id_poll' => $req->id_poll,
                'id_winner_team' => $req->WF1,
                'id_runnerup' => $req->WF2,
                'id_fase' => $req->id_fase,
             ]);

            if($clasificadogroupf->wasChanged()) {
               PollsModel::where('iduser_poll', $req->id_poll)->update(array('complete' => 'Incomplete'));
            }

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
                'complete' => 1,

             ]);
              DB::select("call scores()");
            return response()->json($pick);
        }else{
            $validator = Validator::make($req->all(), [

            'M1F1' => 'required',
            'M1F2' => 'required',
            'M2F3' => 'required',
            'M2F4' => 'required',
            'M3F1' => 'required',
            'M3F3' => 'required',
            'M4F4' => 'required',
            'M4F2' => 'required',
            'M5F4' => 'required',
            'M5F1' => 'required',
            'M6F2' => 'required',
            'M6F3' => 'required',
            'WF1'  => 'required',
            'WF2'  => 'required'
        ]);

        if ($validator->passes()) {

           $clasificadogroupf = Clasificado::updateOrCreate(

            ['id_poll' => $req->id_poll, 'id_fase' => $req->id_fase],

             [  
                'id_poll' => $req->id_poll,
                'id_winner_team' => $req->WF1,
                'id_runnerup' => $req->WF2,
                'id_fase' => $req->id_fase,
             ]);

            if($clasificadogroupf->wasChanged()) {
               PollsModel::where('iduser_poll', $req->id_poll)->update(array('complete' => 'Incomplete'));
            }

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
                'complete' => 1,

             ]);
              DB::select("call scores()");
            return response()->json($pick);
        }else{
            return response()->json(['error'=>'All fields Are Required']);
        }
      }
    }


    public function storeGroupG(Request $req){

        $pick = new PickGroupG;

        $phase = CurrentPhase::first();

        if ($phase->phase == 3) {
            $clasificadogroupg = Clasificado::updateOrCreate(

            ['id_poll' => $req->id_poll, 'id_fase' => $req->id_fase],

             [  
                'id_poll' => $req->id_poll,
                'id_winner_team' => $req->WG1,
                'id_runnerup' => $req->WG2,
                'id_fase' => $req->id_fase,
             ]);

           if($clasificadogroupg->wasChanged()) {
               PollsModel::where('iduser_poll', $req->id_poll)->update(array('complete' => 'Incomplete'));
            }


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
                'complete' => 1,

             ]);
            DB::select("call scores()");
            return response()->json($pick);
        }else{
            $validator = Validator::make($req->all(), [

            'M1G1' => 'required',
            'M1G2' => 'required',
            'M2G3' => 'required',
            'M2G4' => 'required',
            'M3G1' => 'required',
            'M3G3' => 'required',
            'M4G4' => 'required',
            'M4G2' => 'required',
            'M5G4' => 'required',
            'M5G1' => 'required',
            'M6G2' => 'required',
            'M6G3' => 'required',
            'WG1'  => 'required',
            'WG2'  => 'required'
        ]);

        if ($validator->passes()) {

           $clasificadogroupg = Clasificado::updateOrCreate(

            ['id_poll' => $req->id_poll, 'id_fase' => $req->id_fase],

             [  
                'id_poll' => $req->id_poll,
                'id_winner_team' => $req->WG1,
                'id_runnerup' => $req->WG2,
                'id_fase' => $req->id_fase,
             ]);

           if($clasificadogroupg->wasChanged()) {
               PollsModel::where('iduser_poll', $req->id_poll)->update(array('complete' => 'Incomplete'));
            }


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
                'complete' => 1,

             ]);
            DB::select("call scores()");
            return response()->json($pick);
        }else{
            return response()->json(['error'=>'All fields Are Required']);
        }
      }        
    }

    public function storeGroupH(Request $req){

        $pick = new PickGroupH;

        $phase = CurrentPhase::first();

        if ($phase->phase == 3) {
            $clasificadogrouph = Clasificado::updateOrCreate(

            ['id_poll' => $req->id_poll, 'id_fase' => $req->id_fase],

             [  
                'id_poll' => $req->id_poll,
                'id_winner_team' => $req->WH1,
                'id_runnerup' => $req->WH2,
                'id_fase' => $req->id_fase,
             ]);

              if($clasificadogrouph->wasChanged()) {
               PollsModel::where('iduser_poll', $req->id_poll)->update(array('complete' => 'Incomplete'));
            }
        

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
                'complete' => 1,

             ]);
            DB::select("call scores()");
            return response()->json($pick);
        }else{
            $validator = Validator::make($req->all(), [

            'M1H1' => 'required',
            'M1H2' => 'required',
            'M2H3' => 'required',
            'M2H4' => 'required',
            'M3H1' => 'required',
            'M3H3' => 'required',
            'M4H4' => 'required',
            'M4H2' => 'required',
            'M5H4' => 'required',
            'M5H1' => 'required',
            'M6H2' => 'required',
            'M6H3' => 'required',
            'WH1'  => 'required',
            'WH2'  => 'required'
        ]);
        
         if ($validator->passes()) {
            $clasificadogrouph = Clasificado::updateOrCreate(

            ['id_poll' => $req->id_poll, 'id_fase' => $req->id_fase],

             [  
                'id_poll' => $req->id_poll,
                'id_winner_team' => $req->WH1,
                'id_runnerup' => $req->WH2,
                'id_fase' => $req->id_fase,
             ]);

              if($clasificadogrouph->wasChanged()) {
               PollsModel::where('iduser_poll', $req->id_poll)->update(array('complete' => 'Incomplete'));
            }
        

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
                'complete' => 1,

             ]);      
            DB::select("call scores()");
            return response()->json($pick);
         }else{
            return response()->json(['error'=>'All fields Are Required']);
         
         }
       }
    }


    public function storeSecondStage(Request $req){


        $stage = new SecondStage;

        $phase = CurrentPhase::first();

        if ($phase->phase == 3) {
            SecondStage::updateOrCreate(

             ['id_poll' => $req->id_poll,],

             [  
                'id_poll' => $req->id_poll,
                'quarter_1' => $req->WRound1A2B,
                'quarter_2' => $req->WRound1C2D,
                'quarter_3' => $req->WRound1E2F,
                'quarter_4' => $req->WRound1G2H,
                'quarter_5' => $req->WRound1B2A,
                'quarter_6' => $req->WRound1D2C,
                'quarter_7' => $req->WRound1F2E,
                'quarter_8' => $req->WRound1H2G,
                'semi_1' => $req->Wquarter1_2,
                'semi_2' => $req->Wquarter3_4,
                'semi_3' => $req->Wquarter5_6,
                'semi_4' => $req->Wquarter7_8,
                'final_1' => $req->WSemi1_2,
                'final_2' => $req->WSemi3_4,
                'winner' => $req->Winner1,
                'complete' => 1,

             ]);

            PollsModel::where('iduser_poll', $req->id_poll)->update(array('complete' => 'Complete'));

            DB::select("call scores()");
            
            return response()->json($stage);
        }else{
            $validator = Validator::make($req->all(), [

            'WRound1A2B' => 'required',
            'WRound1C2D' => 'required',
            'WRound1E2F' => 'required',
            'WRound1G2H' => 'required',
            'WRound1B2A' => 'required',
            'WRound1D2C' => 'required',
            'WRound1F2E' => 'required',
            'WRound1H2G' => 'required',
            'Wquarter1_2' => 'required',
            'Wquarter3_4' => 'required',
            'Wquarter5_6' => 'required',
            'Wquarter7_8' => 'required',
            'WSemi1_2'  => 'required',
            'WSemi3_4'  => 'required',
            'Winner1'  => 'required',
        ]);

         if ($validator->passes()) {

            SecondStage::updateOrCreate(

             ['id_poll' => $req->id_poll,],

             [  
                'id_poll' => $req->id_poll,
                'quarter_1' => $req->WRound1A2B,
                'quarter_2' => $req->WRound1C2D,
                'quarter_3' => $req->WRound1E2F,
                'quarter_4' => $req->WRound1G2H,
                'quarter_5' => $req->WRound1B2A,
                'quarter_6' => $req->WRound1D2C,
                'quarter_7' => $req->WRound1F2E,
                'quarter_8' => $req->WRound1H2G,
                'semi_1' => $req->Wquarter1_2,
                'semi_2' => $req->Wquarter3_4,
                'semi_3' => $req->Wquarter5_6,
                'semi_4' => $req->Wquarter7_8,
                'final_1' => $req->WSemi1_2,
                'final_2' => $req->WSemi3_4,
                'winner' => $req->Winner1,
                'complete' => 1,

             ]);

            PollsModel::where('iduser_poll', $req->id_poll)->update(array('complete' => 'Complete'));

            DB::select("call scores()");
            
            return response()->json($stage);

         }else{
            return response()->json(['error'=>'All fields Are Required']);
         }
       }
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
        $id_user = auth()->user()->id;

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

        $polls = PollsModel::getBbyUser($id_user);

        $notification = array(
                'message' => 'Pool delete successfully!', 
                'alert-type' => 'success'
            );

        return redirect()->back()->with('polls', $polls)->with($notification);
    }


}
