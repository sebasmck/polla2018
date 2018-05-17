<?php

namespace App\;

use PollsModel;


class PoolsExports implements \Maatwebsite\Excel\Concerns\FromCollection
{

	public function collection(){
		return  PollsModel::all();
	}

}
