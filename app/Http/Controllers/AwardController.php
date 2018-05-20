<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Award;

class AwardController extends Controller
{
	public function index()
	{
		$awards = Award::all();

		return view ('/awards', compact('awards'));

	}
     
}
