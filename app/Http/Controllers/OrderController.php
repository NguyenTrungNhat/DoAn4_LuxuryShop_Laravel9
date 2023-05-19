<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsModels;
use App\Models\Orders;
use App\Models\OrderDetails;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Orders::all();
        return view('/admin/Orders/order', ['orders' => $orders]);
    }

    public function detail(string $id)
    {
        $orders = Orders::find($id);
        $orderDetails = OrderDetails::where('OrderID',$id)->get();
        return view('/admin/Orders/orderDetail', ['orders' => $orders,'orderDetails' => $orderDetails]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = DB::table('products')
            ->join('attributesprices', 'attributesprices.ProductID', '=', 'products.Id')
            ->join('producttranslation', 'producttranslation.ProductId', '=', 'products.Id')    
            ->select('products.*','producttranslation.Description','producttranslation.Details','producttranslation.LanguageId','producttranslation.Name',
            'producttranslation.SeoAlias','producttranslation.SeoDescription','producttranslation.SeoTitle','attributesprices.Price')
            ->where('products.Id','=',$id)
            ->get();
        return view('admin/Product/update', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $producttranslation = DB::table('producttranslation')
            ->where('ProductId', $id)
            ->where('LanguageId', 'vi-VN')->update([
                'Name' => $request->Name,
                'Details' => $request->Details,
                'Description' => $request->Description,
                'SeoDescription' => $request->SeoDescription,
                'SeoTitle' => $request->SeoTitle,
                'SeoAlias' => $request->SeoAlias,
                'LanguageId' => $request->LanguageId
            ]);
        

        $attributesprices = DB::table('attributesprices')->where('ProductID', $id)->update([
            'Price' => $request->Price
        ]);
        
        ProductsModels::find($id)->update([
            'CatID' => $request->CatID,
            'Discount' => $request->Discount,
            'UnitsInStock' => $request->UnitsInStock,
            'Title' => $request->Title
        ]);
        return redirect()->route('admin.Products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producttranslation = DB::table('producttranslation')->where('ProductId', $id)
            ->where('LanguageId', 'vi-VN')->delete();
        $attributesprices = DB::table('attributesprices')->where('ProductID', $id)->delete();
        ProductsModels::find($id)->delete();
        return redirect()->route('admin.Products.index');
    }
}
