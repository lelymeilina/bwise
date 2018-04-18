<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
* Dashboard
*/
class DashboardController extends Controller
{	

	function __construct()
	{
		$this->middleware('auth');
		$this->pgtitle = "Dashboard";
	}
	
	public function index(){		
		return view('admin.dashboard', ['_pgtitle'=>$this->pgtitle]);
	}	

}