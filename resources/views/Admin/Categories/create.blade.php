@extends('/Admin/layoutAdmin')






@section('content')


<div class="main-content">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header" style="margin-top: 15px;">
                    <div class="row">
                        <div class="col-md-6 ">
                            <h3>Thêm loại sản phẩm</h3>
                        </div>
                        <div class="col-md-6 ">
                            <a href="{{route('admin.Categories.index')}}" class="btn btn-primary" style="float: right;">Về Trang Chủ</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.Categories.store')}}" method="post" enctype="multipart/form-data">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Loại sản phẩm cha</strong>
                                <input type="text" name="ParentID" class="form-control" placeholder="Loại sản phẩm này có thuộc loại nào lớn hơn không ?">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Thứ tự sắp xếp</strong>
                                <input type="text" name="SortOrder" class="form-control" placeholder="Thứ tự sắp xếp ?">
                            </div>
                            <div class="form-group">
                                <strong>Có hiển thị ở trang chủ không</strong>
                                <input type="text" name="IsShowOnHome" class="form-control" placeholder="Có hiển thị loại sản phẩm này ở trang chủ không ?">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Tên loại sản phẩm</strong>
                                <input type="text" name="Name" class="form-control" placeholder="Tên loại sản phẩm ?">
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
                                <strong>Mô tả ngắn </strong>
                                <input type="text" name="SeoDescription" class="form-control" placeholder="Mô tả ngắn sản phẩm ?">
                            </div>
                            <div class="form-group">
                                <strong>Tiêu đề ngắn</strong>
                                <input type="text" name="SeoTitle" class="form-control" placeholder="Mô tả tiêu đề ngắn ?">
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