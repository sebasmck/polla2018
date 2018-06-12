<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SecondStage;

class Ranking_pools extends Model
{
     protected $table = 'ranking';

	public $timestamps = false;

	public function finalWinner($id){
		$idwinner = SecondStage::where('id_poll', '=', $id)->value('winner');
		return Team::where('id', '=', $idwinner)->value('team_name');
	}

	public static function getBbyUser($idUser)
	{
		return Ranking_pools::where('id_User','=',$idUser)->get();
	}
}
