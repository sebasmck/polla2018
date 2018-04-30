<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SecondStage extends Model
{
    protected $table = 'second_stage';

	public $timestamps = false;

	public $primaryKey = 'id';

	protected $fillable = [
		'id_poll',
		'quarter_1',
		'quarter_2',
		'quarter_3',
		'quarter_4',
		'quarter_5',
		'quarter_6',
		'quarter_7',
		'quarter_8',
		'semi_1',
		'semi_2',
		'semi_3',
		'semi_4',
		'final_1',
		'final_2',
		'winner',
	];
}
