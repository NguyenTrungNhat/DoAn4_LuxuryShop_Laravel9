@extends('/Admin/layoutAdmin')






@section('content')


<div class="main-content">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header" style="margin-top: 15px;">
                    <div class="row">
                        <div class="col-md-6 ">
                            <h3>Danh sách đơn hàng</h3>
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
                                <th>CustomerID</th>
                                <th>TransactStatusID</th>
                                <th>Deleted</th>
                                <th>Paid</th>
                                <th>TotalMoney</th>
                                <th>Note</th>
                                <th>Address</th>
                                <th>CREATED_AT</th>
                                <th>UPDATED_AT</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td>{{$order->Id}}</td>
                                <td>{{$order->CustomerID}}</td>
                                <td>{{$order->TransactStatusID}}</td>
                                <td>{{$order->Deleted}}</td>
                                <td>{{$order->Paid}}</td>
                                <td>{{$order->TotalMoney}}</td>
                                <td>{{$order->Note}}</td>
                                <td>{{$order->Address}}</td>
                                <td>{{$order->CREATED_AT}}</td>
                                <td>{{$order->UPDATED_AT}}</td>
                                <td>
                                    <a href="{{route('admin.OrderDetails.index').'/'.$order->Id}}" class="btn btn-infor">Chi tiết</a>
                                    <!-- <a href="{{route('admin.Products.edit').'/'.$order->Id}}" class="btn btn-infor">Sửa</a> -->
                                    <a href="{{route('admin.Orders.delete').'/'.$order->Id}}" class="btn btn-danger">Xóa</a>
                                </td>
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