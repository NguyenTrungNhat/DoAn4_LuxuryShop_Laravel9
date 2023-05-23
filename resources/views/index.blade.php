@extends('layout')


@section('content')
@include('slide')
<!-- Begin Shipping Area -->
<div class="shipping-area section-space-top-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="shipping-item">
                    <div class="shipping-img">
                        <img src="/webApp/assets/images/shipping/icon/plane.png" alt="Shipping Icon">
                    </div>
                    <div class="shipping-content">
                        <h5 class="title">Miễn phí vẫn chuyển</h5>
                        <p class="short-desc mb-0">Miễn phí cho đơn hàng đầu tiên</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pt-6 pt-md-0">
                <div class="shipping-item">
                    <div class="shipping-img">
                        <img src="/webApp/assets/images/shipping/icon/earphones.png" alt="Shipping Icon">
                    </div>
                    <div class="shipping-content">
                        <h5 class="title">Hỗ trợ trực tuyến</h5>
                        <p class="short-desc mb-0">Tổng đài tư vấn khách hàng 24/7</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pt-6 pt-lg-0">
                <div class="shipping-item">
                    <div class="shipping-img">
                        <img src="/webApp/assets/images/shipping/icon/shield.png" alt="Shipping Icon">
                    </div>
                    <div class="shipping-content">
                        <h5 class="title">Thanh toán dễ dàng</h5>
                        <p class="short-desc mb-0">Chấp nhận mọi phương thức thanh toán</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shipping Area End Here -->

<!-- Begin Product Area -->
<div class="product-area section-space-top-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav product-tab-nav pb-10" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="active" id="all-items-tab" data-bs-toggle="tab" href="#all-items" role="tab" aria-controls="all-items" aria-selected="true">
                            <div class="product-tab-icon">
                                <img src="/webApp/assets/images/product/icon/1.png" alt="Product Icon">
                            </div>
                            All Items
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a id="fresh-fruits-tab" data-bs-toggle="tab" href="#fresh-fruits" role="tab" aria-controls="fresh-fruits" aria-selected="false">
                            <div class="product-tab-icon">
                                <img src="/webApp/assets/images/product/icon/2.png" alt="Product Icon">
                            </div>
                            Shoes
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a id="vegetable-tab" data-bs-toggle="tab" href="#vegetable" role="tab" aria-controls="vegetable" aria-selected="false">
                            <div class="product-tab-icon">
                                <img src="/webApp/assets/images/product/icon/3.png" alt="Product Icon">
                            </div>
                            T-Shirt
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a id="fish-meat-tab" data-bs-toggle="tab" href="#fish-meat" role="tab" aria-controls="fish-meat" aria-selected="false">
                            <div class="product-tab-icon">
                                <img src="/webApp/assets/images/product/icon/4.png" alt="Product Icon">
                            </div>
                            Bag
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a id="wheat-tab" data-bs-toggle="tab" href="#wheat" role="tab" aria-controls="wheat" aria-selected="false">
                            <div class="product-tab-icon">
                                <img src="/webApp/assets/images/product/icon/5.png" alt="Product Icon">
                            </div>
                            Jacket
                        </a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="all-items" role="tabpanel" aria-labelledby="all-items-tab">
                        <div class="product-item-wrap row">
                            @foreach($data as $datas)
                            <div class="col-xl-3 col-lg-4 col-sm-6" style="margin-bottom: 40px;">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="{{route('detail').'/'.$datas->Id.'/'.$languageId}}">
                                            <img class="img-full" src="{{ asset('storage/'.$datas->ListImageProduct->first()->ImagePath) }}" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" value="{{ $datas->Id }}" name="id">
                                                        <input type="hidden" value="{{ $datas->ProductTranslation->where('LanguageId','=',$languageId)->first()->Name }}" name="name">
                                                        <input type="hidden" value="{{ $datas->AttributesPrice->Price }}" name="price">
                                                        <input type="hidden" value="{{ $datas->ListImageProduct->first()->ImagePath }}" name="image">
                                                        <input type="hidden" value="1" name="quantity">
                                                        <button class="buttonCart" style="background-color: #fff;
  width: 50px;
  height: 50px;
  line-height: 53px;
  text-align: center;
  display: block;
  -webkit-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  border:none;">
                                                            <i class="pe-7s-cart"></i>
                                                        </button>
                                                    </form>

                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a style="overflow: hidden;
                                                text-overflow: ellipsis;
                                                white-space: nowrap;
                                                width: 200px;" class="product-name" href="single-product.html">{{$datas->ProductTranslation->where('LanguageId','=',$languageId)->first()->Name}}</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">{{number_format($datas->AttributesPrice->Price)}}</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- <div class="col-xl-3 col-lg-4 col-sm-6 pt-6 pt-sm-0">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="single-product.html">
                                            <img class="img-full" src="/webApp/assets/images/product/medium-size/1-2-270x300.jpg" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="single-product.html">Peanut Big Bean</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6 pt-lg-0">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="single-product.html">
                                            <img class="img-full" src="/webApp/assets/images/product/medium-size/1-3-270x300.jpg" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="single-product.html">Dried Lemon Green</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6 pt-xl-0">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="single-product.html">
                                            <img class="img-full" src="/webApp/assets/images/product/medium-size/1-4-270x300.jpg" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="single-product.html">Natural Coconut</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="single-product.html">
                                            <img class="img-full" src="/webApp/assets/images/product/medium-size/1-5-270x300.jpg" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="single-product.html">Black Peppepr Read</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="single-product.html">
                                            <img class="img-full" src="/webApp/assets/images/product/medium-size/1-6-270x300.jpg" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="single-product.html">Green Vegetable</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="single-product.html">
                                            <img class="img-full" src="/webApp/assets/images/product/medium-size/1-7-270x300.jpg" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="single-product.html">Lemon Juice</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="single-product.html">
                                            <img class="img-full" src="/webApp/assets/images/product/medium-size/1-8-270x300.jpg" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="single-product.html">Cow Milk & Meat</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="fresh-fruits" role="tabpanel" aria-labelledby="fresh-fruits-tab">
                        <div class="product-item-wrap row">
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="single-product.html">
                                            <img class="img-full" src="/webApp/assets/images/product/medium-size/1-1-270x300.jpg" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="single-product.html">Black Pepper Grains</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6 pt-sm-0">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="single-product.html">
                                            <img class="img-full" src="/webApp/assets/images/product/medium-size/1-2-270x300.jpg" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="single-product.html">Peanut Big Bean</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6 pt-lg-0">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="single-product.html">
                                            <img class="img-full" src="/webApp/assets/images/product/medium-size/1-3-270x300.jpg" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="single-product.html">Dried Lemon Green</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6 pt-xl-0">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="single-product.html">
                                            <img class="img-full" src="/webApp/assets/images/product/medium-size/1-4-270x300.jpg" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="single-product.html">Natural Coconut</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="single-product.html">
                                            <img class="img-full" src="/webApp/assets/images/product/medium-size/1-5-270x300.jpg" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="single-product.html">Black Peppepr Read</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="single-product.html">
                                            <img class="img-full" src="/webApp/assets/images/product/medium-size/1-6-270x300.jpg" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="single-product.html">Green Vegetable</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="single-product.html">
                                            <img class="img-full" src="/webApp/assets/images/product/medium-size/1-7-270x300.jpg" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="single-product.html">Lemon Juice</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="single-product.html">
                                            <img class="img-full" src="/webApp/assets/images/product/medium-size/1-8-270x300.jpg" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="single-product.html">Cow Milk & Meat</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="vegetable" role="tabpanel" aria-labelledby="vegetable-tab">
                        <div class="product-item-wrap row">
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="single-product.html">
                                            <img class="img-full" src="/webApp/assets/images/product/medium-size/1-1-270x300.jpg" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="single-product.html">Black Pepper Grains</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6 pt-sm-0">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="single-product.html">
                                            <img class="img-full" src="/webApp/assets/images/product/medium-size/1-2-270x300.jpg" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="single-product.html">Peanut Big Bean</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6 pt-lg-0">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="single-product.html">
                                            <img class="img-full" src="/webApp/assets/images/product/medium-size/1-3-270x300.jpg" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="single-product.html">Dried Lemon Green</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6 pt-xl-0">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="single-product.html">
                                            <img class="img-full" src="/webApp/assets/images/product/medium-size/1-4-270x300.jpg" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="single-product.html">Natural Coconut</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="single-product.html">
                                            <img class="img-full" src="/webApp/assets/images/product/medium-size/1-5-270x300.jpg" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="single-product.html">Black Peppepr Read</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="single-product.html">
                                            <img class="img-full" src="/webApp/assets/images/product/medium-size/1-6-270x300.jpg" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="single-product.html">Green Vegetable</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="single-product.html">
                                            <img class="img-full" src="/webApp/assets/images/product/medium-size/1-7-270x300.jpg" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="single-product.html">Lemon Juice</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="single-product.html">
                                            <img class="img-full" src="/webApp/assets/images/product/medium-size/1-8-270x300.jpg" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="single-product.html">Cow Milk & Meat</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="fish-meat" role="tabpanel" aria-labelledby="fish-meat-tab">
                        <div class="product-item-wrap row">
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="single-product.html">
                                            <img class="img-full" src="/webApp/assets/images/product/medium-size/1-1-270x300.jpg" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="single-product.html">Black Pepper Grains</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6 pt-sm-0">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="single-product.html">
                                            <img class="img-full" src="/webApp/assets/images/product/medium-size/1-2-270x300.jpg" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="single-product.html">Peanut Big Bean</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6 pt-lg-0">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="single-product.html">
                                            <img class="img-full" src="/webApp/assets/images/product/medium-size/1-3-270x300.jpg" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="single-product.html">Dried Lemon Green</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6 pt-xl-0">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="single-product.html">
                                            <img class="img-full" src="/webApp/assets/images/product/medium-size/1-4-270x300.jpg" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="single-product.html">Natural Coconut</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="single-product.html">
                                            <img class="img-full" src="/webApp/assets/images/product/medium-size/1-5-270x300.jpg" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="single-product.html">Black Peppepr Read</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="single-product.html">
                                            <img class="img-full" src="/webApp/assets/images/product/medium-size/1-6-270x300.jpg" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="single-product.html">Green Vegetable</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="single-product.html">
                                            <img class="img-full" src="/webApp/assets/images/product/medium-size/1-7-270x300.jpg" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="single-product.html">Lemon Juice</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="single-product.html">
                                            <img class="img-full" src="/webApp/assets/images/product/medium-size/1-8-270x300.jpg" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="single-product.html">Cow Milk & Meat</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="wheat" role="tabpanel" aria-labelledby="wheat-tab">
                        <div class="product-item-wrap row">
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="single-product.html">
                                            <img class="img-full" src="/webApp/assets/images/product/medium-size/1-1-270x300.jpg" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="single-product.html">Black Pepper Grains</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6 pt-sm-0">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="single-product.html">
                                            <img class="img-full" src="/webApp/assets/images/product/medium-size/1-2-270x300.jpg" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="single-product.html">Peanut Big Bean</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6 pt-lg-0">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="single-product.html">
                                            <img class="img-full" src="/webApp/assets/images/product/medium-size/1-3-270x300.jpg" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="single-product.html">Dried Lemon Green</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6 pt-xl-0">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="single-product.html">
                                            <img class="img-full" src="/webApp/assets/images/product/medium-size/1-4-270x300.jpg" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="single-product.html">Natural Coconut</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="single-product.html">
                                            <img class="img-full" src="/webApp/assets/images/product/medium-size/1-5-270x300.jpg" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="single-product.html">Black Peppepr Read</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="single-product.html">
                                            <img class="img-full" src="/webApp/assets/images/product/medium-size/1-6-270x300.jpg" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="single-product.html">Green Vegetable</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="single-product.html">
                                            <img class="img-full" src="/webApp/assets/images/product/medium-size/1-7-270x300.jpg" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="single-product.html">Lemon Juice</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="single-product.html">
                                            <img class="img-full" src="/webApp/assets/images/product/medium-size/1-8-270x300.jpg" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="single-product.html">Cow Milk & Meat</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End Here -->

<!-- Begin Banner Area -->
<div class="banner-area section-space-top-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="banner-item">
                    <div class="banner-img img-zoom-effect">
                        <img class="img-full" src="/webApp/assets/images/banner/370x250_1.png" alt="Banner Image">
                        <div class="inner-content">
                            <h5 class="offer"></h5>
                            <h4 class="title mb-5" style="color: aliceblue;">New<br style="color: aliceblue;"></h4>
                            <div class="button-wrap">
                                <a class="btn btn-primary btn-white-hover rounded-0" href="shop.html">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pt-6 pt-md-0">
                <div class="banner-item">
                    <div class="banner-img img-zoom-effect">
                        <img class="img-full" src="/webApp/assets/images/banner/370x250_2.png" alt="Banner Image">
                        <div class="inner-content">
                            <h5 class="offer"></h5>
                            <h4 class="title mb-5" style="color: aliceblue;">Best Buy<br style="color: aliceblue;"></h4>
                            <div class="button-wrap">
                                <a class="btn btn-custom-size btn-primary btn-white-hover rounded-0" href="shop.html">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pt-6 pt-lg-0">
                <div class="banner-item">
                    <div class="banner-img img-zoom-effect">
                        <img class="img-full" src="/webApp/assets/images/banner/370x250_3.png" alt="Banner Image">
                        <div class="inner-content">
                            <h5 class="offer"></h5>
                            <h4 class="title mb-5" style="color: aliceblue;">Best Seller<br style="color: aliceblue;"></h4>
                            <div class="button-wrap">
                                <a class="btn btn-custom-size btn-primary btn-white-hover rounded-0" href="shop.html">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End Here -->

<!-- Begin Product Area -->
<div class="product-area section-space-y-axis-100">
    <div class="container">
        <div class="section-title text-center pb-55">
            <span class="sub-title text-primary">NEW</span>
            <h2 class="title mb-0">New Products</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="swiper-container product-slider swiper-arrow with-radius border-issue">
                    <div class="swiper-wrapper">
                        <!-- <div class="swiper-slide">
                            <div class="product-item">
                                <div class="product-img img-zoom-effect">
                                    <a href="single-product.html">
                                        <img class="img-full" src="/webApp/assets/images/product/medium-size/1-9-270x300.jpg" alt="Product Images">
                                    </a>
                                    <div class="product-add-action">
                                        <ul>
                                            <li>
                                                <a href="cart.html">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i class="pe-7s-shuffle"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <a class="product-name" href="single-product.html">Black Pepper Grains</a>
                                    <div class="price-box pb-1">
                                        <span class="new-price">$80.00</span>
                                    </div>
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-item">
                                <div class="product-img img-zoom-effect">
                                    <a href="single-product.html">
                                        <img class="img-full" src="/webApp/assets/images/product/medium-size/1-10-270x300.jpg" alt="Product Images">
                                    </a>
                                    <div class="product-add-action">
                                        <ul>
                                            <li>
                                                <a href="cart.html">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i class="pe-7s-shuffle"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <a class="product-name" href="single-product.html">Peanut Big Bean</a>
                                    <div class="price-box pb-1">
                                        <span class="new-price">$80.00</span>
                                    </div>
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-item">
                                <div class="product-img img-zoom-effect">
                                    <a href="single-product.html">
                                        <img class="img-full" src="/webApp/assets/images/product/medium-size/1-11-270x300.jpg" alt="Product Images">
                                    </a>
                                    <div class="product-add-action">
                                        <ul>
                                            <li>
                                                <a href="cart.html">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i class="pe-7s-shuffle"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <a class="product-name" href="single-product.html">Dried Lemon Green</a>
                                    <div class="price-box pb-1">
                                        <span class="new-price">$80.00</span>
                                    </div>
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-item">
                                <div class="product-img img-zoom-effect">
                                    <a href="single-product.html">
                                        <img class="img-full" src="/webApp/assets/images/product/medium-size/1-12-270x300.jpg" alt="Product Images">
                                    </a>
                                    <div class="product-add-action">
                                        <ul>
                                            <li>
                                                <a href="cart.html">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i class="pe-7s-shuffle"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <a class="product-name" href="single-product.html">Natural Coconut</a>
                                    <div class="price-box pb-1">
                                        <span class="new-price">$80.00</span>
                                    </div>
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        @foreach($data as $datas)
                            <div class="col-xl-3 col-lg-4 col-sm-6" style="margin-bottom: 40px;">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="{{route('detail').'/'.$datas->Id.'/'.$languageId}}">
                                            <img class="img-full" src="{{ asset('storage/'.$datas->ListImageProduct->first()->ImagePath) }}" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" value="{{ $datas->Id }}" name="id">
                                                        <input type="hidden" value="{{ $datas->ProductTranslation->where('LanguageId','=',$languageId)->first()->Name }}" name="name">
                                                        <input type="hidden" value="{{ $datas->AttributesPrice->Price }}" name="price">
                                                        <input type="hidden" value="{{ $datas->ListImageProduct->first()->ImagePath }}" name="image">
                                                        <input type="hidden" value="1" name="quantity">
                                                        <button class="buttonCart" style="background-color: #fff;
  width: 50px;
  height: 50px;
  line-height: 53px;
  text-align: center;
  display: block;
  -webkit-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  border:none;">
                                                            <i class="pe-7s-cart"></i>
                                                        </button>
                                                    </form>

                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a style="overflow: hidden;
                                                text-overflow: ellipsis;
                                                white-space: nowrap;
                                                width: 200px;" class="product-name" href="single-product.html">{{$datas->ProductTranslation->where('LanguageId','=',$languageId)->first()->Name}}</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">{{number_format($datas->AttributesPrice->Price)}}</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-nav-wrap">
                        <div class="swiper-button-next"></div>
                    </div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End Here -->

<!-- Begin Banner Area -->
<div class="banner-area banner-with-parallax py-10" data-bg-image="/webApp/assets/images/banner/2-1-1920x523.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="parallax-img-wrap">
                    <div class="papaya">
                        <div class="scene fill">
                            <div class="expand-width" data-depth="0.2">
                                <img src="/webApp/assets/images/banner/inner-img/503x414.png" alt="Banner Images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 align-self-center">
                <div class="banner-content text-white text-center text-md-start">
                    <div class="section-title">
                        <span class="sub-title">New Offer Products</span>
                        <h2 class="title font-size-60 mb-6">SAVE 20% OFF</h2>
                    </div>
                    <div class="countdown-wrap">
                        <div class="countdown item-4" data-countdown="2022/01/01" data-format="short">
                            <div class="countdown__item me-3">
                                <span class="countdown__time daysLeft"></span>
                                <span class="countdown__text daysText"></span>
                            </div>
                            <div class="countdown__item me-3">
                                <span class="countdown__time hoursLeft"></span>
                                <span class="countdown__text hoursText"></span>
                            </div>
                            <div class="countdown__item me-3">
                                <span class="countdown__time minsLeft"></span>
                                <span class="countdown__text minsText"></span>
                            </div>
                            <div class="countdown__item">
                                <span class="countdown__time secsLeft"></span>
                                <span class="countdown__text secsText"></span>
                            </div>
                        </div>
                    </div>
                    <div class="button-wrap pt-10">
                        <a class="btn btn-custom-size lg-size btn-white rounded-0" href="shop.html">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End Here -->

<!-- Begin Product Area -->
<div class="product-area section-space-top-100">
    <div class="container">
        <div class="section-title text-center pb-55">
            <span class="sub-title text-primary">Best Seller</span>
            <h2 class="title mb-0">Products</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="swiper-container product-list-slider border-issue">
                    <div class="swiper-wrapper">
                        <!-- <div class="swiper-slide">
                            <div class="product-list-item">
                                <div class="product-img img-zoom-effect">
                                    <a href="single-product.html">
                                        <img class="img-full" src="/webApp/assets/images/product/small-size/1-1-112x124.jpg" alt="Product Images">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <a class="product-name" href="single-product.html">Black Pepper Grains</a>
                                    <div class="price-box pb-1">
                                        <span class="new-price">$80.00</span>
                                    </div>
                                    <div class="rating-box-wrap">
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-list-item">
                                <div class="product-img img-zoom-effect">
                                    <a href="single-product.html">
                                        <img class="img-full" src="/webApp/assets/images/product/small-size/1-2-112x124.jpg" alt="Product Images">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <a class="product-name" href="single-product.html">Peanut Big Bean</a>
                                    <div class="price-box pb-1">
                                        <span class="new-price">$80.00</span>
                                    </div>
                                    <div class="rating-box-wrap">
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-list-item">
                                <div class="product-img img-zoom-effect">
                                    <a href="single-product.html">
                                        <img class="img-full" src="/webApp/assets/images/product/small-size/1-3-112x124.jpg" alt="Product Images">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <a class="product-name" href="single-product.html">Dried Lemon Green</a>
                                    <div class="price-box pb-1">
                                        <span class="new-price">$80.00</span>
                                    </div>
                                    <div class="rating-box-wrap">
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-list-item">
                                <div class="product-img img-zoom-effect">
                                    <a href="single-product.html">
                                        <img class="img-full" src="/webApp/assets/images/product/small-size/1-4-112x124.jpg" alt="Product Images">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <a class="product-name" href="single-product.html">Natural Coconut</a>
                                    <div class="price-box pb-1">
                                        <span class="new-price">$80.00</span>
                                    </div>
                                    <div class="rating-box-wrap">
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-list-item">
                                <div class="product-img img-zoom-effect">
                                    <a href="single-product.html">
                                        <img class="img-full" src="/webApp/assets/images/product/small-size/1-5-112x124.jpg" alt="Product Images">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <a class="product-name" href="single-product.html">Black Peppepr Read</a>
                                    <div class="price-box pb-1">
                                        <span class="new-price">$80.00</span>
                                    </div>
                                    <div class="rating-box-wrap">
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-list-item">
                                <div class="product-img img-zoom-effect">
                                    <a href="single-product.html">
                                        <img class="img-full" src="/webApp/assets/images/product/small-size/1-6-112x124.jpg" alt="Product Images">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <a class="product-name" href="single-product.html">Green Vegetable</a>
                                    <div class="price-box pb-1">
                                        <span class="new-price">$80.00</span>
                                    </div>
                                    <div class="rating-box-wrap">
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        @foreach($data as $datas)
                            <div class="col-xl-3 col-lg-4 col-sm-6" style="margin-bottom: 40px;">
                                <div class="product-item">
                                    <div class="product-img img-zoom-effect">
                                        <a href="{{route('detail').'/'.$datas->Id.'/'.$languageId}}">
                                            <img class="img-full" src="{{ asset('storage/'.$datas->ListImageProduct->first()->ImagePath) }}" alt="Product Images">
                                        </a>
                                        <div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" value="{{ $datas->Id }}" name="id">
                                                        <input type="hidden" value="{{ $datas->ProductTranslation->where('LanguageId','=',$languageId)->first()->Name }}" name="name">
                                                        <input type="hidden" value="{{ $datas->AttributesPrice->Price }}" name="price">
                                                        <input type="hidden" value="{{ $datas->ListImageProduct->first()->ImagePath }}" name="image">
                                                        <input type="hidden" value="1" name="quantity">
                                                        <button class="buttonCart" style="background-color: #fff;
  width: 50px;
  height: 50px;
  line-height: 53px;
  text-align: center;
  display: block;
  -webkit-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  border:none;">
                                                            <i class="pe-7s-cart"></i>
                                                        </button>
                                                    </form>

                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <i class="pe-7s-shuffle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a style="overflow: hidden;
                                                text-overflow: ellipsis;
                                                white-space: nowrap;
                                                width: 200px;" class="product-name" href="single-product.html">{{$datas->ProductTranslation->where('LanguageId','=',$languageId)->first()->Name}}</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">{{number_format($datas->AttributesPrice->Price)}}</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                    </div>
                    <!-- Add Arrows -->
                    <!-- <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End Here -->

<!-- Begin Blog Area -->
<div class="blog-area section-space-y-axis-100">
    <div class="container">
        <div class="section-title text-center pb-55">
            <span class="sub-title text-primary">Read Our</span>
            <h2 class="title mb-0">Latest Blog</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="swiper-container blog-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="blog-item">
                                <div class="blog-img img-zoom-effect">
                                    <a href="blog-detail-left-sidebar.html">
                                        <img class="img-full" src="/webApp/assets/images/blog/medium-size/370x315_1.png" alt="Blog Image">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta text-dim-gray pb-3">
                                        <ul>
                                            <li class="date"><i class="fa fa-calendar-o me-2"></i>May 21, 2021</li>
                                            <li>
                                                <span class="comments me-3">
                                                    <a href="javascript:void(0)">2 Comments</a>
                                                </span>
                                                <span class="link-share">
                                                    <a href="javascript:void(0)">Share</a>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h5 class="title mb-4">
                                        <a href="blog-detail-left-sidebar.html">Lorem ipsum dolor consec adipisicing elit</a>
                                    </h5>
                                    <p class="short-desc mb-5">Lorem ipsum dolor sit amet, consectet adipi elit, sed do eius tempor incididunt ut labore gthydolore magna aliqua.</p>
                                    <div class="button-wrap">
                                        <a class="btn btn-custom-size btn-dark btn-lg rounded-0" href="blog-detail-left-sidebar.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-item">
                                <div class="blog-img img-zoom-effect">
                                    <a href="blog-detail-left-sidebar.html">
                                        <img class="img-full" src="/webApp/assets/images/blog/medium-size/370x315_2.png" alt="Blog Image">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta text-dim-gray pb-3">
                                        <ul>
                                            <li class="date"><i class="fa fa-calendar-o me-2"></i>May 21, 2021</li>
                                            <li>
                                                <span class="comments me-3">
                                                    <a href="javascript:void(0)">2 Comments</a>
                                                </span>
                                                <span class="link-share">
                                                    <a href="javascript:void(0)">Share</a>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h5 class="title mb-4">
                                        <a href="blog-detail-left-sidebar.html">Voluptate minus temporibus nostrum adipi</a>
                                    </h5>
                                    <p class="short-desc mb-5">Lorem ipsum dolor sit amet, consectet adipi elit, sed do eius tempor incididunt ut labore gthydolore magna aliqua.</p>
                                    <div class="button-wrap">
                                        <a class="btn btn-custom-size btn-dark btn-lg rounded-0" href="blog-detail-left-sidebar.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-item">
                                <div class="blog-img img-zoom-effect">
                                    <a href="blog-detail-left-sidebar.html">
                                        <img class="img-full" src="/webApp/assets/images/blog/medium-size/370x315_3.png" alt="Blog Image">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta text-dim-gray pb-3">
                                        <ul>
                                            <li class="date"><i class="fa fa-calendar-o me-2"></i>May 21, 2021</li>
                                            <li>
                                                <span class="comments me-3">
                                                    <a href="javascript:void(0)">2 Comments</a>
                                                </span>
                                                <span class="link-share">
                                                    <a href="javascript:void(0)">Share</a>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h5 class="title mb-4">
                                        <a href="blog-detail-left-sidebar.html">Corporis tempora molestiae nulla esse ipsam</a>
                                    </h5>
                                    <p class="short-desc mb-5">Lorem ipsum dolor sit amet, consectet adipi elit, sed do eius tempor incididunt ut labore gthydolore magna aliqua.</p>
                                    <div class="button-wrap">
                                        <a class="btn btn-custom-size btn-dark btn-lg rounded-0" href="blog-detail-left-sidebar.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Area End Here -->
@endsection