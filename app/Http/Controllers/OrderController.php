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
        // dd($orderDetails[0]->Order->Customer);
        return view('/admin/Orders/orderDetail', ['orders' => $orders,'orderDetails' => $orderDetails,'customer' => $orderDetails[0]]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Orders::find($id)->delete();
        return redirect()->route('admin.Orders.index');
    }
}
