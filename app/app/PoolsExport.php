<?php

namespace App\Exports;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;

use App\PollsModel;

class PoolsExports implements FromCollection
{

	use Exportable;

	public function collection(){
		return  PollsModel::all();
	}

}
