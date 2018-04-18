<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
* Landing Page
*/
class HomeController extends Controller
{	

	function __construct()
	{
		$this->middleware('auth');
		$this->pgtitle = "Landing Page";
	}
	
	public function index(){		
		return view('admin.dashboard', ['_pgtitle'=>$this->pgtitle]);
	}	

}