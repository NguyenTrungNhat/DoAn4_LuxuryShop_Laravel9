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
                    <form action="{{route('admin.Products.update').'/'.$product->Id}}" method="post">

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Trạng thái</strong>
                                <input value="{{$product->Active}}" type="text" name="Active" class="form-control" placeholder="Trạng thái sản phẩm">
                            </div>
                            <div class="form-group">
                                <strong>Bán chạy</strong>
                                <input value="{{$product->BestSellers}}" type="text" name="BestSellers" class="form-control" placeholder="Có là sản phẩm bán chạy không ?">
                            </div>


                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Mã loại sản phẩm</strong>
                                <input value="{{$product->CatID}}" type="text" name="CatID" class="form-control" placeholder="Nhập mã loại sản phẩm">
                            </div>
                            <div class="form-group">
                                <strong>Ngày tạo : </strong>
                                <input value="<?php echo date("Y-m-d"); ?>" type="date"  name="DateCreated" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Ngày sửa : </strong>
                                <input value="<?php echo date("Y-m-d"); ?>" type="date"  name="DateModifed" class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>Giảm giá</strong>
                                <input value="{{$product->Discount}}" type="text" name="Discount" class="form-control" placeholder="Sản phẩm này có giảm giá không ?">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Hiển thị trang chủ : </strong>
                                <input value="{{$product->HomeFlag}}" type="text" name="HomeFlag" class="form-control" placeholder="Có hiển thị sản phẩm này trên trang chủ không ?">
                            </div>
                            <div class="form-group">
                                <strong>Tiêu đề quảng cáo : </strong>
                                <input value="{{$product->SeoAlias}}" type="text" name="SeoAlias" class="form-control" placeholder="Tiêu đề để sử dụng quảng cáo sản phẩm ?">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Tiêu đề sản phẩm</strong>
                                <input value="{{$product->Title}}" type="text" name="Title" class="form-control" placeholder="Nhập tiêu đề">
                            </div>
                            <div class="form-group">
                                <strong>Số lượng còn lại </strong>
                                <input value="{{$product->UnitsInStock}}" type="text" name="UnitsInStock" class="form-control" placeholder="Số lượng còn lại ?">
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