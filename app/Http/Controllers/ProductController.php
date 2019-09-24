<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
	public function __construct()
	{
		return $this->middleware(['auth:api']);
	}

	public function show(Product $product)
	{
		return $product;
	}
}
