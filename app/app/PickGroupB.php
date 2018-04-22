<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PickGroupB extends Model
{
    protected $table = 'picks_group_b';

	public $timestamps = false;

	public $primaryKey = 'id';

	protected $fillable = [
							'id_poll',
							'group_name',
							'M1B1',
							'M1B2',
							'M2B3',
							'M2B4',
							'M3B1',
							'M3B3',
							'M4B4',
							'M4B2',
							'M5B4',
							'M5B1',
							'M6B2',
							'M6B3',
	];

}
