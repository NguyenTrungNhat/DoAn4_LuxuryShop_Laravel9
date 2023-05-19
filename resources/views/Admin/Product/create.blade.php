@extends('/Admin/layoutAdmin')






@section('content')


<div class="main-content">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header" style="margin-top: 15px;">
                    <div class="row">
                        <div class="col-md-6 ">
                            <h3>Thêm sản phẩm</h3>
                        </div>
                        <div class="col-md-6 ">
                            <a href="{{route('admin.Products.index')}}" class="btn btn-primary" style="float: right;">Về Trang Chủ</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.Products.store')}}" method="post" enctype="multipart/form-data">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Mã loại sản phẩm</strong>
                                <input type="text" name="CatID" class="form-control" placeholder="Nhập mã loại sản phẩm">
                            </div>
                            <div class="form-group">
                                <strong>Giảm giá</strong>
                                <input type="text" name="Discount" class="form-control" placeholder="Sản phẩm này có giảm giá không ?">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Số lượng còn lại </strong>
                                <input type="text" name="UnitsInStock" class="form-control" placeholder="Số lượng còn lại ?">
                            </div>
                            <div class="form-group">
                                <strong>Tên sản phẩm</strong>
                                <input type="text" name="Name" class="form-control" placeholder="Nhập tên sản phẩm ?">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Chi tiết sản phẩm </strong>
                                <input type="text" name="Details" class="form-control" placeholder="Chi tiết sản phẩm ?">
                            </div>
                            <div class="form-group">
                                <strong>Mô tả sản phẩm</strong>
                                <input type="text" name="Description" class="form-control" placeholder="Mô tả sản phẩm ?">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Mô tả ngắn </strong>
                                <input type="text" name="SeoDescription" class="form-control" placeholder="Mô tả ngắn sản phẩm ?">
                            </div>
                            <div class="form-group">
                                <strong>Tiêu đề</strong>
                                <input type="text" name="Title" class="form-control" placeholder="Mô tả tiêu đề sản phẩm ?">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Tiêu đề ngắn</strong>
                                <input type="text" name="SeoTitle" class="form-control" placeholder="Mô tả tiêu đề ngắn ?">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Ngôn ngữ </strong>
                                <input type="text" name="LanguageId" class="form-control" placeholder="Ngôn ngữ sản phẩm ?">
                            </div>
                            <div class="form-group">
                                <strong>Tên gọi ngắn sản phẩm</strong>
                                <input type="text" name="SeoAlias" class="form-control" placeholder="Tên gọi ngắn sản phẩm ?">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Giá </strong>
                                <input type="text" name="Price" class="form-control" placeholder="Giá sản phẩm ?">
                            </div>
                            <div class="form-group">
                                <strong>Hình ảnh</strong>
                                <input type="file" name="ImageFile" class="form-control">
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