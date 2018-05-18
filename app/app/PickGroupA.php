<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PickGroupA extends Model
{
    protected $table = 'picks_group_a';

	public $timestamps = false;

	public $primaryKey = 'id';

	protected $fillable = ['id_poll',
							'group_name',
							'M1A1',
							'M1A2',
							'M2A3',
							'M2A4',
							'M3A1',
							'M3A3',
							'M4A4',
							'M4A2',
							'M5A4',
							'M5A1',
							'M6A2',
							'M6A3',
							'complete',
	];

	public static function GetByPool($idpoll){
		return PickGroupA::where('id_poll','=',$idpoll)->get();
	}
}
