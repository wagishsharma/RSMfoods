<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Test;
use App\Product;
class ProductTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function __construct()
    {
        $this->middleware('auth');

        
    }
    public function index()
    {
        //
        //$product = Product::find(2);
        $product = Product::find(2);
        $tests = $product->tests;
        //dd($product->tests);
         return view('products.addTestProducts',compact('product','tests')); 
            //[
            //'testDone' => $this->testDone,
            //forUser($request->user()),
        //]

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //$request>products()->attach($problemId, ['price' => 22]);
       
       // $product = Product::find($product);
        $product = Product::find(3);
       // $product->tests()->attach(1);
        //dd($request->all());
          $product->tests()->attach(3,['method' => $request->method,'wherePrescribed'=>$request->wherePrescribed,'whereTested' => $request->whereTested,'currentTestOn' => $request->currentTestOn,'value' => $request->value] );
        
     //   dd($request->all());

   // $request->products()->attach(1, ['products_amount' => 100, 'price' => 49.99]);
        return redirect('/productTest');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
