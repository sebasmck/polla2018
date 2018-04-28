<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Clasificado extends Model
{
    protected $table = 'clasificado';

	public $timestamps = false;

	public $primaryKey = 'id';

	protected $fillable = [
		'id_poll',
		'id_winner_team',
		'id_fase',
		'id_runnerup',
	];

	// public function team(){
	// 	return $this->hasOne('App\Team', 'id')
	// }


	public static function teamsClasificadosWin($iduser_poll, $id_fase){
		return Clasificado::join('teams', 'clasificado.id_winner_team', '=', 'teams.id')
					->join('teams as cru', 'clasificado.id_runnerup', '=', 'cru.id')
					->where('clasificado.id_poll', $iduser_poll)
					->where('clasificado.id_fase', $id_fase)
					->select('clasificado.*', 'teams.team_name', 'cru.team_name as team_rumup')
					->get()
					->first();
	}
}
