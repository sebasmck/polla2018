<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SecondStage;

class Ranking_pools extends Model
{
     protected $table = 'ranking_pools';

	public $timestamps = false;



	public function finalWinner($id){
		$idwinner = SecondStage::where('id_poll', '=', $id)->value('winner');
		return Team::where('id', '=', $idwinner)->value('team_name');
	}

	public function finalFinalist($id){

		$idwinner = SecondStage::where('id_poll', '=', $id)->value('winner');
		$final_1 = SecondStage::where('id_poll', '=', $id)->value('final_1');
		$final_2 = SecondStage::where('id_poll', '=', $id)->value('final_2');

		//dd($idwinner);

		$finalist = 0;

		if ($idwinner == $final_1)
		{
			$finalist = $final_2;
		}
		else
		{
			$finalist = $final_1;
		}



		return Team::where('id', '=', $finalist)->value('team_name');
	}

	public static function getBbyUser($idUser)
	{
		return Ranking_pools::where('id_User','=',$idUser)->get();
	}

	public static function ranking(){
		return Ranking_pools::join('second_stage', 'ranking_pools.iduser_poll', '=', 'second_stage.id_poll')
				->select('Ranking_pools.poll_name', 'Ranking_pools.score', 'second_stage.final_1' ,'second_stage.final_2' , 'second_stage.winner')
				->where('status', '=', 'active')->get();
	}
}
