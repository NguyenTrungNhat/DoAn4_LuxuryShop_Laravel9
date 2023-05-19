<?php

namespace App\Http\Controllers;

use App\Http\Middleware\TrimStrings;
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

    public function create(string $id)
    {
        return view('/admin/ListImageProduct/createImageProduct',['productID' => $id]);
    }

    public function store(Request $request, string $id)
    {
        $Path = $request->file('ImageFile')->store('public/Products');
        ListImageProductModels::create([
            'ProductID' => $id,
            'ImagePath' => substr($Path,7,strlen($Path)),
            'Caption' => $request->Caption,
            'IsDefault' => $request->IsDefault,
            'SortOrder' => $request->SortOrder
        ]);
        return redirect('/admin/ListImageProduct/edit/'.$id);
    }

    public function edit(string $id)
    {
        $productImage = DB::table('listproductimage')   
            ->select('listproductimage.*')
            ->where('listproductimage.ProductID','=',$id)
            ->get();
        return view('admin/ListImageProduct/listImageProductDetail', ['productImage' => $productImage,'productID' => $id]);
    }

    public function destroy(string $id)
    {
        $productImage = DB::table('listproductimage')->where('Id', $id)->delete();
        return redirect()->back();
    }
}
