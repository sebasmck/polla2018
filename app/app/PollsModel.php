<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
		return PollsModel::where('id_User','=',$idUser)->get();
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
		return $this->hasOne('App\Clasificado', 'id_poll', 'iduser_poll');
	}

	// public function secondStage(){
	// 	return $this->hasOne('App\Clasificado', 'id_poll', 'iduser_poll');
	// }

}
