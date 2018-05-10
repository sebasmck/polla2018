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
		'complete',
	];


	// Quarters

	public function quarter1(){
		return $this->hasOne('App\Team', 'id', 'quarter_1');
	}

	public function quarter2(){
		return $this->hasOne('App\Team', 'id', 'quarter_2');
	}

	public function quarter3(){
		return $this->hasOne('App\Team', 'id', 'quarter_3');
	}

	public function quarter4(){
		return $this->hasOne('App\Team', 'id', 'quarter_4');
	}

	public function quarter5(){
		return $this->hasOne('App\Team', 'id', 'quarter_5');
	}

	public function quarter6(){
		return $this->hasOne('App\Team', 'id', 'quarter_6');
	}

	public function quarter7(){
		return $this->hasOne('App\Team', 'id', 'quarter_7');
	}

	public function quarter8(){
		return $this->hasOne('App\Team', 'id', 'quarter_8');
	}







	// Semi 


	public function semi1(){
		return $this->hasOne('App\Team', 'id', 'semi_1');
	}

	public function semi2(){
		return $this->hasOne('App\Team', 'id', 'semi_2');
	}

	public function semi3(){
		return $this->hasOne('App\Team', 'id', 'semi_3');
	}

	public function semi4(){
		return $this->hasOne('App\Team', 'id', 'semi_4');
	}


	// Finals

	public function final1(){
		return $this->hasOne('App\Team', 'id', 'final_1');
	}

	public function final2(){
		return $this->hasOne('App\Team', 'id', 'final_2');
	}

	// Winner

	public function winner1(){
		return $this->hasOne('App\Team', 'id', 'winner');
	}


}
