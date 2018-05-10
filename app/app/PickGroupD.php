<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PickGroupD extends Model
{
    protected $table = 'picks_group_d';

	public $timestamps = false;

	public $primaryKey = 'id';

	protected $fillable = [
							'id_poll',
							'group_name',
							'M1D1',
							'M1D2',
							'M2D3',
							'M2D4',
							'M3D1',
							'M3D3',
							'M4D4',
							'M4D2',
							'M5D4',
							'M5D1',
							'M6D2',
							'M6D3',
							'complete',
	];
}
