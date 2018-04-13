<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rep extends Model
{
    protected $table = 'rep';

	public $timestamps = false;

	public $primaryKey = 'id_rep';
}
