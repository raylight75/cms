<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProduct;
use App\Product;
use Request;
use App\Http\Requests;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $products=Product::all();
        $products=Product::paginate(10);
        return view('product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
       return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateProduct $request
     * @return Response
     */
    
    public function store(CreateProduct $request)
    {
       //$products=Request::all();
       Product::create($request->all());
       return redirect('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
       $product=Product::find($id);
       return view('product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */

    public function edit($id)
    {
       $product=Product::find($id);
       return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */

    public function update($id)
    {
       $ProductsUpdate=Request::all();
       $products=Product::find($id);
       $products->update(ProductsUpdate);
       return redirect('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
