<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\ProductCategory;
use App\Product;
use App\User;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('home');
    }

    public function addNewProductCategory(){
        return view('products.category.add');
    }

    public function doAddNewProductCategory(Request $request) {

        $this->validate($request,[
           'name'=>'required|max:60', 
           'description' =>'required|max:500' 
        ]);

        $category = new ProductCategory();
        $category->name = $request['name'];
        $category->description = $request['description'];
        $category->save();

        return redirect()->route('add.new.productCategory')->with([
                'success'=>'Category Saved'
            ]);
    }

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
        $product->User()->associate(Auth::user());
        $product->ProductCategory()->associate($category);
        $product->save();

        return redirect()->route('add.new.product')->with([
            'success'=>'Product Saved'
        ]);
    }

     public function viewProducts(){
        $products = Product::all();
        return view('products.view', ['products' => $products]);
    }
    
}
