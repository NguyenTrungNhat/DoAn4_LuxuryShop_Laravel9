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
                                <th>Title</th>
                                <th>Active</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Products as $product)
                            <tr>
                                <td>{{$product->Id}}</td>
                                <td>{{$product->CatID}}</td>
                                <td>{{$product->Title}}</td>
                                <td>{{$product->Active}}</td>
                                <td>
                                    <a href="{{route('admin.ListImageProduct.edit').'/'.$product->Id}}" class="btn btn-infor">Sửa</a>
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