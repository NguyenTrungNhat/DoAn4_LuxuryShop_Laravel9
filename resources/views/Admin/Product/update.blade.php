@extends('/Admin/layoutAdmin')






@section('content')


<div class="main-content">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header" style="margin-top: 15px;">
                    <div class="row">
                        <div class="col-md-6 ">
                            <h3>Sửa sản phẩm</h3>
                        </div>
                        <div class="col-md-6 ">
                            <a href="{{route('admin.Products.index')}}" class="btn btn-primary" style="float: right;">Về trang chủ</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.Products.update').'/'.$product[0]->Id}}" method="post">

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Mã loại sản phẩm</strong>
                                <input value="{{$product[0]->CatID}}" type="text" name="CatID" class="form-control" placeholder="Trạng thái sản phẩm">
                            </div>
                            <div class="form-group">
                                <strong>Giảm giá</strong>
                                <input value="{{$product[0]->Discount}}" type="text" name="Discount" class="form-control" placeholder="Có là sản phẩm bán chạy không ?">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Số lượng còn lại</strong>
                                <input value="{{$product[0]->UnitsInStock}}" type="text" name="UnitsInStock" class="form-control" placeholder="Nhập mã loại sản phẩm">
                            </div>
                            <div class="form-group">
                                <strong>Tên sản phẩm </strong>
                                <input value="{{$product[0]->Name}}" type="text" name="Name" class="form-control" placeholder="Nhập mã loại sản phẩm">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Chi tiết sản phẩm </strong>
                                <input value="{{$product[0]->Details}}" type="text" name="Details" class="form-control" placeholder="Nhập mã loại sản phẩm">
                            </div>
                            <div class="form-group">
                                <strong>Mô tả sản phẩm</strong>
                                <input value="{{$product[0]->Description}}" type="text" name="Description" class="form-control" placeholder="Sản phẩm này có giảm giá không ?">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Mô tả ngắn </strong>
                                <input value="{{$product[0]->SeoDescription}}" type="text" name="SeoDescription" class="form-control" placeholder="Có hiển thị sản phẩm này trên trang chủ không ?">
                            </div>
                            <div class="form-group">
                                <strong>Tiêu đề </strong>
                                <input value="{{$product[0]->Title}}" type="text" name="Title" class="form-control" placeholder="Tiêu đề để sử dụng quảng cáo sản phẩm ?">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Tiêu đề ngắn</strong>
                                <input value="{{$product[0]->SeoTitle}}" type="text" name="SeoTitle" class="form-control" placeholder="Nhập tiêu đề">
                            </div>
                            <div class="form-group">
                                <strong>Tên gọi ngắn </strong>
                                <input value="{{$product[0]->SeoAlias}}" type="text" name="SeoAlias" class="form-control" placeholder="Số lượng còn lại ?">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Ngôn ngữ</strong>
                                <input value="{{$product[0]->LanguageId}}" type="text" name="LanguageId" class="form-control" placeholder="Nhập tiêu đề">
                            </div>
                            <div class="form-group">
                                <strong>Giá </strong>
                                <input value="{{$product[0]->Price}}" type="text" name="Price" class="form-control" placeholder="Số lượng còn lại ?">
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