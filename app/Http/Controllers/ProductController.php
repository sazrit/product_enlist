<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductCategory;
use App\User;

class ProductController extends Controller
{
	public function addNewProduct(){
        $categories = ProductCategory::all();
        return view('products.productadd', ['categories' => $categories]);;
    }

     public function doAddNewProduct(Request $request) {
        $request['category'] *=1;      
        $this->validate($request,[
           'name'=>'required|max:60',
           'category' => 'exists:product_categories,id'
        ]);
        
        $category = ProductCategory::find($request['category']);
        $product = new Product();
        $product->name = $request['name'];
        $product->user_id = rand();
        //$product->User()->associate(Auth::user());
        $product->ProductCategory()->associate($category);
        $product->save();

        return redirect()->route('add.new.product')->with([
            'success'=>'Product Saved'
        ]);
    }
}