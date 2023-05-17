@extends('/Admin/layoutAdmin')






@section('content')


<div class="main-content">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header" style="margin-top: 15px;">
                    <div class="row">
                        <div class="col-md-6 ">
                            <h3>Thêm ảnh sản phẩm</h3>
                        </div>
                        <div class="col-md-6 ">
                            <a href="{{route('admin.ListImageProduct.index')}}" class="btn btn-primary" style="float: right;">Về Trang Chủ</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.ListImageProduct.store')}}" method="post" enctype="multipart/form-data">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Tiêu đề</strong>
                                <input type="text" name="Caption" class="form-control" placeholder="Nhập tiêu đề của ảnh">
                            </div>
                            <div class="form-group">
                                <strong>Mặc định</strong>
                                <input type="text" name="IsDefault" class="form-control" placeholder="Ảnh này có là ảnh mặc định của sản phẩm không ?">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Thứ tự sắp xếp </strong>
                                <input type="text" name="SortOrder" class="form-control" placeholder="Thứ tự sắp xếp của ảnh ?">
                            </div>
                            <div class="form-group">
                                <strong>Hình ảnh</strong>
                                <input type="file" name="ImageFile" class="form-control" placeholder="Nhập tên sản phẩm ?">
                            </div>
                        </div>

                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <button type="submit" class="btn btn-success mt-2">Lưu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection