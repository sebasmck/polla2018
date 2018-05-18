<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PickGroupG extends Model
{
    protected $table = 'picks_group_g';

	public $timestamps = false;

	public $primaryKey = 'id';

	protected $fillable = [
				'id_poll',
				'group_name',
				'M1G1',
				'M1G2',
				'M2G3',
				'M2G4',
				'M3G1',
				'M3G3',
				'M4G4',
				'M4G2',
				'M5G4',
				'M5G1',
				'M6G2',
				'M6G3',
				'complete',
	];

	public static function GetByPool($idpoll){
		return PickGroupG::where('id_poll','=',$idpoll)->get();
	}
}
