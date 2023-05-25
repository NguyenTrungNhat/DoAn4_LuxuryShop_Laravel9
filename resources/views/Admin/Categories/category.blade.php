@extends('/Admin/layoutAdmin')






@section('content')


<div class="main-content">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header" style="margin-top: 15px;">
                    <div class="row">
                        <div class="col-md-6 ">
                            <h3>Danh sách loại sản phẩm</h3>
                        </div>
                        <div class="col-md-6 ">
                            <a href="{{route('admin.Categories.create')}}" class="btn btn-primary" style="float: right;">Thêm mới</a>
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
                                <th>ParentID</th>
                                <th>SortOrder</th>
                                <th>IsShowOnHome</th>
                                <th>Status</th>
                                <th>CREATED_AT</th>
                                <th>UPDATED_AT</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Products as $product)
                            <tr>
                                <td>{{$product->Id}}</td>
                                <td>{{$product->ParentID}}</td>
                                <td>{{$product->SortOrder}}</td>
                                <td>{{$product->IsShowOnHome}}</td>
                                <td>{{$product->Status}}</td>
                                <td>{{$product->CREATED_AT}}</td>
                                <td>{{$product->UPDATED_AT}}</td>
                                <td>
                                    <a href="{{route('admin.Categories.edit').'/'.$product->Id}}" class="btn btn-infor">Sửa</a>
                                    <a href="{{route('admin.Categories.delete').'/'.$product->Id}}" class="btn btn-danger">Xóa</a>
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