<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class ViewproductController extends Controller
{
	public function viewProducts(){
        $products = Product::all();
        return view('products.view', ['products' => $products]);
    }
}