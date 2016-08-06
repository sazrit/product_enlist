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

Route::get('/', function () {
    return view('index');
});


Route::auth();

//Route::get('/home', 'HomeController@index');



Route::get('/home',[
         'uses' => 'HomeController@index',
         'as' => 'login_register'
]);

Route::get('/product/category/new',[
         'uses' => 'HomeController@addNewProductCategory',
         'as' => 'add.new.productCategory'
]);

Route::post('/product/category/new',[
         'uses' => 'HomeController@doAddNewProductCategory',
         'as' => 'add.new.productCategory'
]);

Route::get('/product/new',[
         'uses' => 'HomeController@addNewProduct',
         'as' => 'add.new.product'
]);

Route::post('/product/new',[
         'uses' => 'HomeController@doAddNewProduct',
         'as' => 'add.new.product'
]);

Route::get('/product/view',[
         'uses' => 'HomeController@viewProducts',
         'as' => 'view.products'
]);