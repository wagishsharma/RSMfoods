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

    Route::get('/', function () {
        return view('welcome');
    })->middleware('guest');

    Route::get('/tasks', 'TaskController@index');
    Route::post('/task', 'TaskController@store');
    Route::delete('/task/{task}', 'TaskController@destroy');
    Route::resource('product', 'ProductController');
    Route::resource('test', 'TestController');
    //Route::resource('productTest', 'ProductTestController');
    Route::get('products/{id}/tests/create/','ProductController@addTest');
    Route::post('product/{id}/test','ProductController@storeTest');
    Route::get('/testingForm', function () {
        return view('products.testingForm');
    });
    Route::delete('product/{product_id}/test/{test_id}','ProductController@destroyTest');
    Route::get('/showproducts','ProductController@showAll');
    Route::post('product/{id}/processing','ProductController@storeProcessing');
    Route::get('product/show/{id}','ProductController@show');
    Route::get('/home','ProductController@showQR');
    Route::auth();

});
