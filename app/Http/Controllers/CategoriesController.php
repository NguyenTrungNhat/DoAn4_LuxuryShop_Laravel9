<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsModels;
use App\Models\ProducttranslationModels;
use App\Models\AttributespricesModels;
use App\Models\CategoriesModels;
use App\Models\CategoriestranslationModels;
use App\Models\ListImageProductModels;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = CategoriesModels::all();
        return view('/admin/Categories/category', ['Products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/admin/Categories/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        CategoriesModels::create([
            'ParentID' => $request->ParentID,
            'SortOrder' => $request->SortOrder,
            'IsShowOnHome' => $request->IsShowOnHome,
            'Status' => 1,
        ]);
        $ProductNewId = CategoriesModels::latest()->first();
        CategoriestranslationModels::create([
            'Name' => $request->Name,
            'LanguageId' => $request->LanguageId,
            'SeoAlias' => $request->SeoAlias,
            'SeoDescription' => $request->SeoDescription,
            'CatID' => $ProductNewId->Id,
            'SeoTitle' => $request->SeoTitle,
        ]);

        return redirect()->route('admin.Categories.index');
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
        $product = DB::table('categories')
            ->join('categorytranslation', 'categorytranslation.CatID', '=', 'categories.Id')    
            ->select('categories.*','categorytranslation.LanguageId','categorytranslation.Name',
            'categorytranslation.SeoAlias','categorytranslation.SeoDescription','categorytranslation.SeoTitle')
            ->where('categories.Id','=',$id)
            ->get();
        return view('admin/Categories/update', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categorytranslation = DB::table('categorytranslation')
            ->where('CatID', $id)
            ->where('LanguageId', 'vi-VN')->update([
                'Name' => $request->Name,
                'SeoDescription' => $request->SeoDescription,
                'SeoTitle' => $request->SeoTitle,
                'SeoAlias' => $request->SeoAlias,
                'LanguageId' => $request->LanguageId
            ]);        
        CategoriesModels::find($id)->update([
            'IsShowOnHome' => $request->IsShowOnHome,
            'ParentID' => $request->ParentID,
            'SortOrder' => $request->SortOrder,
            'Status' => $request->Status
        ]);
        return redirect()->route('admin.Categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        CategoriesModels::find($id)->delete();
        return redirect()->route('admin.Categories.index');
    }

    
}
