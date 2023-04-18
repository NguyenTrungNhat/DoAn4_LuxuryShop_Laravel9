<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriesModels;

class CartController extends Controller
{
    public function cartList()
    {
        $category = CategoriesModels::where('LanguageId','=','vi-VN')->get();
        $cartItems = \Cart::getContent();
        return view('/cart',['categories' => $category],compact('cartItems'));
    }


    public function addToCart(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->image,
            )
        ]);
        session()->flash('success', 'Thêm sản phẩm vào giỏ hàng thành công !');
        //dd(session());
        return redirect()->route('cart.list');
    }

    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Đã xóa sản phẩm trong giỏ hàng !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'Tất cả sản phẩm trong giỏ hàng đã được xóa !');

        return redirect()->route('cart.list');
    }
}
