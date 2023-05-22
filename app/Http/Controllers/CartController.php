<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriesModels;
use App\Models\Customers;
use App\Models\OrderDetails;
use App\Models\Orders;

class CartController extends Controller
{
    public function cartList()
    {
        $category = CategoriesModels::where('LanguageId','=','vi-VN')->get();
        $cartItems = \Cart::getContent();
        return view('/cart',['categories' => $category,'languageId'=> 'vi-VN'],compact('cartItems'));
    }


    public function addToCart(Request $request)
    {
        //dd($request);
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

    public function checkoutget($language = 'vi-VN')
    {
        $cartItems = \Cart::getContent();
        $category = CategoriesModels::where('LanguageId','=',$language)->get();
        // dd($cartItems);
        return view('checkout', compact('cartItems'),['categories' => $category]);
    }

    public function checkoutpost(Request $request)
    {
        $customer = new Customers();
        $customer->Active = 1;
        $customer->FullName = $request->FullName;
        $customer->Address = $request->Address;
        $customer->Email = $request->Email;
        $customer->Phone = $request->Phone;
        $customer->save();
        $customerNewId = Customers::latest()->first();

        $dh = new Orders();
        $dh->Address = $request->Address;
        $dh->CustomerID = $customerNewId->Id;
        $dh->Deleted = 0;
        $dh->Paid = 0;
        $dh->TransactStatusID = 1;
        $dh->TotalMoney = \Cart::getTotal();
        $dh->save();
        $OrderNewId = Orders::latest()->first();



        $cartItems = \Cart::getContent();
        foreach($cartItems as $sp){
            $sp1 = new OrderDetails();
            $sp1->OrderID = $OrderNewId->Id;
            $sp1->ProductID = $sp->id;
            $sp1->Amount = $sp->quantity;
            $sp1->Discount = 0;
            $sp1->TotalMoney = $sp->quantity * $sp->price;
            $sp1->save();
        }
        \Cart::clear();

        session()->flash('success','Dat hang thanh cong !');
        return redirect()->route('cart.list');
    }
}
