<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    
    //routes for static website

    Route::get('/', function() {
        return view('home');
    });
    Route::get('/about', function() {
        return view('about');
    });
    Route::get('/whatwestandfor', function() {
        return view('whatWeStandFor');
    });


    //routes for admin section

    Route::get('/admin', function () {
        return view('welcome');
    })->middleware('guest');

    

    Route::resource('product', 'ProductController');
    Route::resource('test', 'TestController');
    //Route::resource('productTest', 'ProductTestController');
    Route::get('products/{id}/tests/create/','ProductController@addTest');
    Route::post('product/{id}/test','ProductController@storeTest');
    Route::get('/testingForm', function () {
        return view('products.testingForm');
    });
    Route::delete('product/{product_id}/test/{test_id}','ProductController@destroyTest');
    Route::get('/products','ProductController@showAll');
    Route::post('product/{id}/processing','ProductController@storeProcessing');
    Route::get('product/show/{id}','ProductController@show');
    Route::get('/home','ProductController@showQR');
    Route::auth();

});
