<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PickGroupF extends Model
{
    protected $table = 'picks_group_f';

	public $timestamps = false;

	public $primaryKey = 'id';

	protected $fillable = [
				'id_poll',
				'group_name',
				'M1F1',
				'M1F2',
				'M2F3',
				'M2F4',
				'M3F1',
				'M3F3',
				'M4F4',
				'M4F2',
				'M5F4',
				'M5F1',
				'M6F2',
				'M6F3',
				'complete',
	];

	public static function GetByPool($idpoll){
		return PickGroupF::where('id_poll','=',$idpoll)->get();
	}
}
