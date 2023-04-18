@extends('layout')



@section('content')



<!-- Begin Main Content Area -->
<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height" data-bg-image="/webApp/assets/images/breadcrumb/bg/1-1-1920x373.jpg">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h2 class="breadcrumb-heading">Product Related</h2>
                        <ul>
                            <li>
                                <a href="index.html">Home <i class="pe-7s-angle-right"></i></a>
                            </li>
                            <li>Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cart-area section-space-y-axis-100">
        <div class="container">
            <div class="row">
                @if ($message = Session::get('success'))
                <div class="p-4 mb-3 bg-green-400 rounded" style="background-color: aquamarine;">
                    <p class="text-green-800">{{ $message }}</p>
                </div>
                @endif
            </div>
            <div class="row">
                <div class="col-12">
                <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="product_remove">remove</th>
                                        <th class="product-thumbnail">images</th>
                                        <th class="cart-product-name">Product</th>
                                        <th class="product-price">Unit Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cartItems as $item)
                                    <tr>
                                        <td class="product_remove">
                                            <form action="{{route('cart.remove')}}" method="POST">
                                                @csrf
                                                <input type="hidden" value="{{ $item->id }}" name="id">
                                                <button class="buttonCart" style="background-color: #fff;
                                                                                            width: 50px;
                                                                                            height: 50px;
                                                                                            line-height: 53px;
                                                                                            text-align: center;
                                                                                            display: block;
                                                                                            -webkit-transition: all 0.3s ease 0s;
                                                                                            -o-transition: all 0.3s ease 0s;
                                                                                            transition: all 0.3s ease 0s;
                                                                                            border:none;
                                                                                            margin-left:10px">
                                                    <i class="pe-7s-close" title="Remove"></i>
                                                </button>
                                            </form>
                                        </td>
                                        <td class="product-thumbnail">
                                            <a href="javascript:void(0)">
                                                <img style="width: 112px;height: 124px;" src="/webApp/assets/images/{{$item->attributes->image}}" alt="Cart Thumbnail">
                                            </a>
                                        </td>
                                        <td class="product-name"><a href="javascript:void(0)">{{ $item->name }}</a></td>
                                        <td class="product-price"><span class="amount">{{number_format($item->price) }}</span></td>
                                        <td class="quantity">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" value="{{$item->quantity}}" type="text">
                                            </div>
                                        </td>
                                        <td class="product-subtotal"><span class="amount">{{number_format($item->price * $item->quantity)}}</span></td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="coupon-all">
                                    <div class="coupon">
                                        <form action="{{ route('cart.clear') }}" method="POST">
                                            @csrf
                                            <button class="buttonCart" style="background-color: #010101;
                                                                                border: 0 none;
                                                                                border-radius: 2px;
                                                                                color: #fff;
                                                                                display: inline-block;
                                                                                font-size: 13px;
                                                                                font-weight: 700;
                                                                                cursor: pointer;
                                                                                height: 42px;
                                                                                letter-spacing: 1px;
                                                                                line-height: 42px;
                                                                                padding: 0 25px;
                                                                                text-transform: uppercase;
                                                                                -webkit-transition: all 0.3s ease 0s;
                                                                                -o-transition: all 0.3s ease 0s;
                                                                                transition: all 0.3s ease 0s;
                                                                                width: inherit;" class="button mt-xxs-30">Remove All Cart</button>
                                        </form>
                                        
                                    </div>
                                    <div class="coupon2">
                                        <input class="button" name="update_cart" value="Update cart" type="submit">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 ml-auto">
                                <div class="cart-page-total">
                                    <h2>Cart totals</h2>
                                    <ul>
                                        <li>Total <span>${{number_format(Cart::getTotal()) }}</span></li>
                                    </ul>
                                    <a href="javascript:void(0)">Proceed to checkout</a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Main Content Area End Here -->
@endsection