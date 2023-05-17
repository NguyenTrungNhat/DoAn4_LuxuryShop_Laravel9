@extends('/Admin/layoutAdmin')






@section('content')


<div class="main-content">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header" style="margin-top: 15px;">
                    <div class="row">
                        <div class="col-md-6 ">
                            <h3>Danh sách ảnh sản phẩm</h3>
                        </div>
                        <div class="col-md-6 ">
                            <a href="{{route('admin.ListImageProduct.create')}}" class="btn btn-primary" style="float: right;">Thêm mới</a>
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
                                <th>ListProductImageID</th>
                                <th>ProductID</th>
                                <th>Caption</th>
                                <th>DateCreated</th>
                                <th>DateModified</th>
                                <th>IsDefault</th>
                                <th>SortOrder</th>
                                <th>Image</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($productImage  as $ProductImage)
                            <tr>
                                <td>{{$ProductImage->Id}}</td>
                                <td>{{$ProductImage->ProductID}}</td>
                                <td>{{$ProductImage->Caption}}</td>
                                <td>{{$ProductImage->CREATED_AT}}</td>
                                <td>{{$ProductImage->UPDATED_AT}}</td>
                                <td>{{$ProductImage->IsDefault}}</td>
                                <td>{{$ProductImage->SortOrder}}</td>
                                <td>
                                        <img style="width: 100px; height: 100px;" src="{{ asset('storage/'.$ProductImage->ImagePath) }}" alt="">
                                    </td>
                                <td>
                                <a href="{{route('admin.ListImageProduct.delete').'/'.$ProductImage->Id}}" class="btn btn-danger">Xóa</a>
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