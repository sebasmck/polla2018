<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PickGroupC extends Model
{
    protected $table = 'picks_group_c';

	public $timestamps = false;

	public $primaryKey = 'id';

	protected $fillable = [
							'id_poll',
							'group_name',
							'M1C1',
							'M1C2',
							'M2C3',
							'M2C4',
							'M3C1',
							'M3C3',
							'M4C4',
							'M4C2',
							'M5C4',
							'M5C1',
							'M6C2',
							'M6C3',
	];
}
