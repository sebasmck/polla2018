<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SecondStage;

class PollsModel extends Model
{
     protected $table = 'user_poll';

	public $timestamps = false;

	public function getKeyName(){
    	return "iduser_poll";
	}

	protected $fillable = ['poll_name', 'status', 'id_user'];

	public static function getBbyUser($idUser)
	{
		return PollsModel::where('id_User','=',$idUser)->orderBy('poll_name', 'desc')->get();
	}

	public function groupa(){
		return $this->hasOne('App\PickGroupA', 'id_poll', 'iduser_poll');
	}

	public function groupb(){
		return $this->hasOne('App\PickGroupB', 'id_poll', 'iduser_poll');
	}

	public function groupc(){
		return $this->hasOne('App\PickGroupC', 'id_poll', 'iduser_poll');
	}

	public function groupd(){
		return $this->hasOne('App\PickGroupD', 'id_poll', 'iduser_poll');
	}

	public function groupe(){
		return $this->hasOne('App\PickGroupE', 'id_poll', 'iduser_poll');
	}

	public function groupf(){
		return $this->hasOne('App\PickGroupF', 'id_poll', 'iduser_poll');
	}

	public function groupg(){
		return $this->hasOne('App\PickGroupG', 'id_poll', 'iduser_poll');
	}

	public function grouph(){
		return $this->hasOne('App\PickGroupH', 'id_poll', 'iduser_poll');
	}

	public function clasificado(){
		return $this->hasMany('App\Clasificado', 'id_poll', 'iduser_poll');
	}

	public function secondStage(){
		return $this->hasOne('App\SecondStage', 'id_poll', 'iduser_poll');
	}

	public function finalWinner($id){
		$idwinner = SecondStage::where('id_poll', '=', $id)->value('winner');
		return Team::where('id', '=', $idwinner)->value('team_name');
	}


	public static function getUserPools()
	{
		return PollsModel::join('users', 'users.id', '=', 'user_poll.id_User')
				->leftJoin('rep', 'users.id_rep', '=', 'rep.id_rep')
				->select('user_poll.iduser_poll', 'users.name', 'users.lastname', 'users.email', 'users.city', 'users.referredby', 
						'users.cellphone', 'user_poll.status', 'user_poll.poll_name', 'user_poll.complete', 'rep.name as rep')->orderBy('poll_name', 'desc')->get();
	}
}
