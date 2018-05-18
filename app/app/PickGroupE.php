<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PickGroupE extends Model
{
    protected $table = 'picks_group_e';

	public $timestamps = false;

	public $primaryKey = 'id';

	protected $fillable = [
		'id_poll',
		'group_name',
		'M1E1',
		'M1E2',
		'M2E3',
		'M2E4',
		'M3E1',
		'M3E3',
		'M4E4',
		'M4E2',
		'M5E4',
		'M5E1',
		'M6E2',
		'M6E3',
		'complete',
	];

	public static function GetByPool($idpoll){
		return PickGroupE::where('id_poll','=',$idpoll)->get();
	}
}
