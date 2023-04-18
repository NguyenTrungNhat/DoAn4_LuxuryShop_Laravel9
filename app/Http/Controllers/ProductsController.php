<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsModels;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = ProductsModels::all();
        return view('/admin/Product/product',['Products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/admin/Product/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ProductsModels::create($request -> all());
        return redirect()-> route('admin.Products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = ProductsModels::find($id);
        return $product;

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = ProductsModels::find($id);
        return view('admin/Product/update',['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        ProductsModels::find($id)->update([
        'Active' => $request->Active,
        'BestSeller' => $request->BestSeller,
        'CatID' => $request->CatID,
        'DateCreated' => $request->DateCreated,
        'DateModified' => $request->DateModified,
        'Discount' => $request->Discount,
        'HomeFlag' => $request->HomeFlag,
        'Id' => $request->Id,
        'SeoAlias' => $request->SeoAlias,
        'Title' => $request->Title,
        'UnitsInStock'=> $request->UnitsInStock]);
        return redirect()-> route('admin.Products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ProductsModels::find($id)->delete();
        return redirect()-> route('admin.Products.index');
    }
}
