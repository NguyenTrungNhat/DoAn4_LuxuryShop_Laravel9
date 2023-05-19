@extends('/Admin/layoutAdmin')



@section('content')


<div class="main-content" style="overflow:scroll;">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header" style="margin-top: 15px;">
                    <div class="row">
                        <div class="col-md-6 ">
                            <h3>Chi tiết đơn hàng</h3>
                        </div>
                        <div class="col-md-6 ">

                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if (Session::has('thongbao'))
                    <div class="alert alert-success">
                        {{Session::get('thongbao')}}
                    </div>
                    @endif
                    <table id="data-table" class="table" style="overflow-y:scroll">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>OrderID</th>
                                <th>ProductName</th>
                                <th>ProductImage</th>
                                <th>Price</th>
                                <th>Amount</th>
                                <th>Discount</th>
                                <th>TotalMoney</th>
                            </tr>
                        </thead>
                        <tbody >
                            @foreach($orderDetails as $orderDetail)
                            <tr>
                                <td>{{$orderDetail->Id}}</td>
                                <td>{{$orderDetail->OrderID}}</td>
                                <td>{{$orderDetail->Product->ProductTranslation[0]->Name}}</td>
                                <td>
                                    <img style="width: 100px; height: 100px;" src="{{ asset('storage/'.$orderDetail->Product->ListImageProduct[0]->ImagePath) }}" alt="">
                                </td>
                                <td>{{$orderDetail->Product->AttributesPrice->Price}}</td>
                                <td>{{$orderDetail->Amount}}</td>
                                <td>{{$orderDetail->Discount}}</td>
                                <td>{{$orderDetail->TotalMoney}}</td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection