<?php

namespace App\Http\Controllers;

use App\Formulation;
use App\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
	public function ppic()
	{
		$formulations = Formulation::orderBy('name')->get();

		return view('home.ppic', compact('formulations'));
	}


	public function postPpic(Request $request)
	{
		$batch = $request->batch;
		$date = $request->date;
		$formulations = Formulation::orderBy('name')->get();
		$formulation = Formulation::find($request->formulations);

		return redirect()->route('ppic', compact('formulations', 'batch', 'formulation', 'date'));
	}

	public function discount()
	{
		$sells = Product::orderBy('name')->get();

		return view('home.discount', compact('Products'));
	}
}
