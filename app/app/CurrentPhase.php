<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CurrentPhase extends Model
{
    protected $table = 'current_phase';

	public $timestamps = false;

	public $primaryKey = 'id';

}
