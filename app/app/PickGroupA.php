<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PickGroupA extends Model
{
    protected $table = 'picks_group_a';

	public $timestamps = false;

	public $primaryKey = 'id';
}
