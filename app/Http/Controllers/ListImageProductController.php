<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ListImageProductModels;
use App\Models\ProductsModels;

class ListImageProductController extends Controller
{
    public function index()
    {
        $products = ProductsModels::all();
        return view('/admin/ListImageProduct/listImageProduct', ['Products' => $products]);
    }

    public function create()
    {
        return view('/admin/ListImageProduct/createImageProduct');
    }

    public function store(Request $request)
    {
        $Path = $request->file('ImageFile')->store('Image/Products');
        dd($Path);
    }

    public function edit(string $id)
    {
        $productImage = DB::table('listproductimage')   
            ->select('listproductimage.*')
            ->where('listproductimage.ProductID','=',$id)
            ->get();
        return view('admin/ListImageProduct/listImageProductDetail', ['productImage' => $productImage]);
    }

    public function destroy(string $id)
    {
        $productImage = DB::table('listproductimage')->where('Id', $id)->delete();
        return redirect()->back();
    }
}
