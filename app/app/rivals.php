<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rivals extends Model
{
	public $timestamps = false;

	protected $fillable = [
		'id',
		'team_name',
	];

    public static function teamsQuarter($iduser_poll, $id_fase1, $id_fase2){
		return rivals::select("call rivals($iduser_poll, $id_fase1, $id_fase2)");
	}
}
