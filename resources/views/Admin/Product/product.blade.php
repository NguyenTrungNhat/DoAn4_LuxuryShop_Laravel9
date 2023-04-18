@extends('/Admin/layoutAdmin')






@section('content')


<div class="main-content">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header" style="margin-top: 15px;">
                    <div class="row">
                        <div class="col-md-6 ">
                            <h3>Danh sách sản phẩm</h3>
                        </div>
                        <div class="col-md-6 ">
                            <a href="{{route('admin.Products.create')}}" class="btn btn-primary" style="float: right;">Thêm mới</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if (Session::has('thongbao'))
                        <div class="alert alert-success">
                            {{Session::get('thongbao')}}
                        </div>
                    @endif
                    <table  id="data-table" class="table" style="overflow-y:scroll">
                        <thead>
                            <tr>
                                <th>ProductID</th>
                                <th>CatID</th>
                                <th>DateCreated</th>
                                <th>DateModified</th>
                                <th>Discount</th>
                                <th>UnitsInStock</th>
                                <th>Active</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Products as $product)
                            <tr>
                                <td>{{$product->Id}}</td>
                                <td>{{$product->CatID}}</td>
                                <td>{{$product->DateCreated}}</td>
                                <td>{{$product->DateModified}}</td>
                                <td>{{$product->Discount}}</td>
                                <td>{{$product->UnitsInStock}}</td>
                                <td>{{$product->Active}}</td>
                                <td>
                                    <a href="{{route('admin.Products.edit').'/'.$product->Id}}" class="btn btn-infor">Sửa</a>
                                    <a href="{{route('admin.Products.delete').'/'.$product->Id}}" class="btn btn-danger">Xóa</a>
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