<?php

namespace App\Http\Controllers;

use App\ProductCategory;
use Illuminate\Http\Request;


class CategoryController extends Controller
{

public function addNewProductCategory(){
        return view('products.category.add');
    }

    public function doAddNewProductCategory(Request $request) {

        $this->validate($request,[
           'category_name'=>'required|max:60', 
           'description' =>'required|max:500' 
        ]);

        $category = new ProductCategory();
        $category->category_name = $request['category_name'];
        $category->description = $request['description'];
        $category->save();

        return redirect()->route('add.new.productCategory')->with([
                'success'=>'Category Saved'
            ]);
    }

}    