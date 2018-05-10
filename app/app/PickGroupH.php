<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PickGroupH extends Model
{
    protected $table = 'picks_group_h';

	public $timestamps = false;

	public $primaryKey = 'id';

	protected $fillable = [
						'id_poll',
						'group_name',
						'M1H1',
						'M1H2',
						'M2H3',
						'M2H4',
						'M3H1',
						'M3H3',
						'M4H4',
						'M4H2',
						'M5H4',
						'M5H1',
						'M6H2',
						'M6H3',
						'complete',
	];
}
