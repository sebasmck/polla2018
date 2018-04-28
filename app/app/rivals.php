<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class rivals extends Model
{
	public $timestamps = false;

	protected $fillable = [
		'id',
		'team_name',
	];

    public static function teamsQuarter($iduser_poll, $id_fase1, $id_fase2){

		$queryResult = DB::select("call rivals($iduser_poll, $id_fase1, $id_fase2)");

		$result = collect($queryResult);

		return $result;
	}
}
