<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clasificado extends Model
{
    protected $table = 'clasificado';

	public $timestamps = false;

	public $primaryKey = 'id';

	protected $fillable = [
		'id_poll',
		'id_winner_team',
		'id_fase',
		'id_runnerup',
	];
}
