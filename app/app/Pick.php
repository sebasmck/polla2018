<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pick extends Model
{
    protected $table = 'picks';

	public $timestamps = false;

	public $primaryKey = 'id';

	
}
