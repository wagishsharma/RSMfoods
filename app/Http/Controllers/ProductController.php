<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Test;
use App\Processing;

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
        $this->middleware('auth',['except'=>['show']]);

        $this->products =Product::all();
    }

    public function index()
    {
        //
         //$this->products=Product::all();
     
         return view('Products.addProducts', [
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
       //  dd($request->all());
            $this->validate($request, [
            'item' => 'required|max:255','varietySeed'=>'required|max:255', ]);
            
         
     $product =  $request->user()->products()->create([
            'item' => $request->item,'varietySeed'=>$request->varietySeed,'harvestedDate' => $request->harvestedDate,'receivedDate' => $request->receivedDate,'receivedFrom' => $request->receivedFrom,'lotNo' => $request->lotNo,'certification' => $request->certification,
        ]);
     //   dd($request->all());

        return redirect('products/'.$product->id.'/tests/create/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('Products.productQR',compact('product')); 

        
    }
     public function showAll()
    {
        return view('Products.showProducts', [
            'products' => $this->products,
            //forUser($request->user()),
        ]);
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

        return back();
    }

    public function addTest($id)
    {
       //   dd($id);
        //$product_id = $id;
        $product = Product::find($id);
        $tests =Test::lists('name','id');
        
        //dd($processings->started);
        return view('Products.addTestProducts',compact('product','tests','processing')); 

    }
    public function storeProcessing(Request $request,$id)
    {
       // dd($request->all());
        $product = Product::find($id);
        $product->processing()->create(['started'=>$request->started,'completed'=>$request->completed,'batchNo'=>$request->batchNo,'certification'=>$request->certification,'barCodeNo'=>$request->barCodeNo,'dispatchedTo'=>$request->dispatchedTo,'dispatchedOn'=>$request->dispatchedOn,'remarks'=>$request->remarks]);
         //return redirect('');
        return back();
    }
    
    public function storeTest(Request $request,$id)
    {
       // dd($request->all());
        $product = Product::find($id);
        $product->tests()->attach($request->test_id,['method' => $request->method,'wherePrescribed'=>$request->wherePrescribed,'whereTested' => $request->whereTested,'currentTestOn' => $request->currentTestOn,'value' => $request->value] );
         //return redirect('');
        return back();
    }
     public function destroyTest(Request $request,$product_id,$test_id)
    {
        //dd([$product_id,$id]);
        $product = Product::find($product_id);
        $product->tests()->detach($test_id);

        return back();
    }

    public function showQR()
    {
        //
         //$this->products=Product::all();
     
         return view('showQR', [
            'products' => $this->products,
            //forUser($request->user()),
        ]);
        
    }
}
