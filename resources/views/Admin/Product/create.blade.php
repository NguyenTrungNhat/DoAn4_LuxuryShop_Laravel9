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
                            <a href="{{route('admin.Products.index')}}" class="btn btn-primary" style="float: right;">Ve trang chu</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.Products.store')}}" method="post">

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Trạng thái</strong>
                                <input type="text" name="Active" class="form-control" placeholder="Trạng thái sản phẩm">
                            </div>
                            <div class="form-group">
                                <strong>Bán chạy</strong>
                                <input type="text" name="BestSellers" class="form-control" placeholder="Có là sản phẩm bán chạy không ?">
                            </div>


                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Mã loại sản phẩm</strong>
                                <input type="text" name="CatID" class="form-control" placeholder="Nhập mã loại sản phẩm">
                            </div>
                            <div class="form-group">
                                <strong>Ngày tạo : </strong>
                                <input type="date" value="<?php echo date("Y-m-d"); ?>" name="DateCreated" class="form-control">
                            </div>


                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Ngày sửa : </strong>
                                <input type="date"  name="DateModifed" class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>Giảm giá</strong>
                                <input type="text" name="Discount" class="form-control" placeholder="Sản phẩm này có giảm giá không ?">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Hiển thị trang chủ : </strong>
                                <input type="text" name="HomeFlag" class="form-control" placeholder="Có hiển thị sản phẩm này trên trang chủ không ?">
                            </div>
                            <div class="form-group">
                                <strong>Tiêu đề quảng cáo : </strong>
                                <input type="text" name="SeoAlias" class="form-control" placeholder="Tiêu đề để sử dụng quảng cáo sản phẩm ?">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Tiêu đề sản phẩm</strong>
                                <input type="text" name="Title" class="form-control" placeholder="Nhập tiêu đề">
                            </div>
                            <div class="form-group">
                                <strong>Số lượng còn lại </strong>
                                <input type="text" name="UnitsInStock" class="form-control" placeholder="Số lượng còn lại ?">
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