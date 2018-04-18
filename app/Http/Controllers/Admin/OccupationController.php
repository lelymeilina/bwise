<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Occupation;

/**
* Dashboard
*/
class OccupationController extends Controller
{	

	function __construct()
	{
		// ...
	}
	
	public function index()
	{
		$Occupation = Occupation::orderBy('id', 'ASC')->get();
		return $Occupation;
	}

}