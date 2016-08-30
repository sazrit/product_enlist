<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/home', function () {
    return view('index');
})->name('home');*/


//Route::auth();

//Route::get('/home', 'HomeController@index');



Route::get('/',[
         'uses' => 'CommonController@index',
         'as' => 'home'
]);

Route::get('/signIn',[
         'uses' => 'CommonController@signIn',
         'as' => 'signIn'
]);

Route::get('/product/view',[
         'uses' => 'ViewproductController@viewProducts',
         'as' => 'view.products'
]);

Route::post('/signup',[
   'uses' => 'CommonController@postSignUp',
   'as' => 'signup'
   ]);

Route::post('/signin',[
   'uses' => 'CommonController@postSignIn',
   'as' => 'signin'
   ]);

Route::post('/search',[
   'uses' => 'SearchController@postSearch',
   'as' => 'search'
   ]);


Route::group(['middleware'=>['auth']], function(){

    Route::get('/signOut',[
         'uses' => 'CommonController@signOut',
         'as' => 'signOut'
]);

   Route::get('/dashboard',[
   'uses' => 'CommonController@getDashboard',
   'as' => 'dashboard',
   'middleware' => 'auth'
   ]);

   Route::get('/product/category/new',[
         'uses' => 'CategoryController@addNewProductCategory',
         'as' => 'add.new.productCategory'
]);

Route::post('/product/category/new',[
         'uses' => 'CategoryController@doAddNewProductCategory',
         'as' => 'add.new.productCategory'
]);

Route::get('/product/new',[
         'uses' => 'ProductController@addNewProduct',
         'as' => 'add.new.product'
]);

Route::post('/product/new',[
         'uses' => 'ProductController@doAddNewProduct',
         'as' => 'add.new.product'
]);

});