<div class="col-lg-6 col-12" style="width: 35%">                                
    <div class="your-order" style="background: #f1f1f1;
                                    padding: 30px 40px 30px;">
        <h2 style="text-align: center;">LUXURY SHOP</h2>
        <h3>Name: <strong style="font-weight: 100">{{$customer->Order->Customer->FullName}}</strong></h3>
        <h3>Email: <strong style="font-weight: 100">{{$customer->Order->Customer->Email}}</strong></h3>
        <h3>Addres: <strong style="font-weight: 100">{{$customer->Order->Customer->Address}}</strong></h3>
        <h3>Phone: <strong style="font-weight: 100">{{$customer->Order->Customer->Phone}}</strong></h3>
        <h3 style=" border-bottom: 1px solid #dee2e6;
                    font-size: 25px;
                    padding-bottom: 10px;
                    text-transform: uppercase;
                    width: 100%;
                    margin-bottom: 5px;">Your order</h3>


        <div class="your-order-table table-responsive">
            <table class="table" style="border-collapse: collapse;
                                        width: 100%;">
                <thead style="border-bottom: 1px solid #3e3e3f">
                    <tr>
                        <th style="font-size: 14px;
                                    padding: 15px 0;
                                    text-align: center;
                                    font-weight: normal;
                                    text-transform: uppercase;
                                    vertical-align: middle;
                                    width: 250px;" class="cart-product-name">Product</th>
                        <th style="font-size: 14px;
                                    padding: 15px 0;
                                    text-align: center;
                                    font-weight: normal;
                                    text-transform: uppercase;
                                    vertical-align: middle;
                                    width: 250px;" class="cart-product-total">Total</th>
                    </tr>
                </thead>
                <tbody style="border-bottom: 1px solid #3e3e3f">
                @foreach($orderDetails as $orderDetail)
                    <tr class="cart_item">
                        <td style="padding: 8px;" class="cart-product-name">{{$orderDetail->Product->ProductTranslation[0]->Name}}<strong class="product-quantity">
                                x {{$orderDetail->Amount}}</strong></td>
                        <td style="padding: 8px;" class="cart-product-total"><span class="amount">{{number_format($orderDetail->Amount*$orderDetail->Product->AttributesPrice->Price)}}</span></td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                    <tr class="order-total">
                        <th style="font-size: 18px; padding: 8px; text-align: start;font-size: 25px;">Order Total</th>
                        <td><strong style="font-size: 25px;"><span class="amount">{{ number_format($orderDetail->TotalMoney)  }}</span></strong></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>