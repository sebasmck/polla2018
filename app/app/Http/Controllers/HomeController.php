<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function indexAdmin()
    {   
        $users = User::all();

        return view('admin.home')->with('users', $users);
    }

    public function awaiting()
    {
        return view('awaiting');
    }

    public function rules()
    {
        return view('usermenu.rules');
    }
}
