<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
	 public function postSearch(Request $request)
    {
             $q = $request->input('q');
        $products = DB::table('products')
                            ->join('product_categories', function ($join) use ($q) {
                                $join->on('category_id', '=', 'product_categories.id')
                                    ->where('name','LIKE','%'.$q.'%')->orWhere('category_name','LIKE','%'.$q.'%');
                                })->get();
        if(count($products) > 0)
            return view('search')->withDetails($products)->withQuery ( $q );
        else return view ('search')->withMessage('No Details found. Try to search again !');
    }
}