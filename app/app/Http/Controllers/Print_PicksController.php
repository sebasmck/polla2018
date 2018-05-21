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

use App\SecondStage;
use Auth;
use DB;

class Print_PicksController extends Controller
{
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($iduser_poll)
    {

        $user = Auth::user();

        $id = $user->id;

        $poll = PollsModel::find($iduser_poll);

        
        if ((PollsModel::where('iduser_poll', '=', $iduser_poll))->count() > 0) {
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

         $ss = SecondStage::where('id_poll', $iduser_poll)->get()->first();
        if($ss == null)
        {
            $ss = new SecondStage;
        }

        $countpolls = PollsModel::all()->count();

         return view('picks.print_picks')
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
        ->with('ss', $ss)
        ->with('winA', $winA)
        ->with('winB', $winB)
        ->with('winC', $winC)
        ->with('winD', $winD)
        ->with('winE', $winE)
        ->with('winF', $winF)
        ->with('winG', $winG)
        ->with('winH', $winH)
        ->with('countpolls', $countpolls);
            }else{
            return redirect('/home');   
        }
    }else{
        return redirect('/home');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
