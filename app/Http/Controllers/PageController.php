<?php

namespace App\Http\Controllers;

use App\Formulation;
use Illuminate\Http\Request;

class PageController extends Controller
{
	public function ppic()
	{
		$formulations = Formulation::orderBy('name')->get();

		return view('home.ppic', compact('formulations'));
	}
}
