<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */
    protected $products;
    public function __construct()
    {
        $this->middleware('auth');

        $this->products =Product::all();
    }
    public function index()
    {
        //
         //$this->products=Product::all();
     
         return view('products.addProducts', [
            'products' => $this->products,
            //forUser($request->user()),
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

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
            $this->validate($request, [
            'item' => 'required|max:255','varietySeed'=>'required|max:255', ]);
            //dd($request->all());
         
       $request->user()->products()->create([
            'item' => $request->item,'varietySeed'=>$request->varietySeed,'harvestedDate' => $request->harvestedDate,'receivedDate' => $request->receivedDate,'receivedFrom' => $request->receivedFrom,'lotNo' => $request->lotNo,'certification' => $request->certification,
        ]);
     //   dd($request->all());

        return redirect('/product');
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
    public function destroy(Request $request, Product $product)
    {
        $this->authorize('destroy', $product);
        $product->delete();

        return redirect('/product');
    }
}
