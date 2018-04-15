<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PicksController extends Controller
{
	public function index()
    {
        return view('picks.picks');
    }   
}
