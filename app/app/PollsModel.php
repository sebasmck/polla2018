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

	public function picks(){
		return $this->hasMany('App\Pick');
	}

}
