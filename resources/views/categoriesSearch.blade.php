@extends('layout')



@section('content')


<!-- Begin Main Content Area -->
<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height" data-bg-image="/webApp/assets/images/breadcrumb/bg/1920x373.png">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h2 class="breadcrumb-heading">Shop</h2>
                        <ul>
                            <li>
                                <a href="index.html">Home <i class="pe-7s-angle-right"></i></a>
                            </li>
                            <li>Shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shop-area section-space-y-axis-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-lg-1 order-2 pt-10 pt-lg-0">
                    <div class="sidebar-area">
                        <div class="widgets-searchbox mb-9">
                            <form id="widgets-searchbox" action="#">
                                <input class="input-field" type="text" placeholder="Search">
                                <button class="widgets-searchbox-btn" type="submit">
                                    <i class="pe-7s-search"></i>
                                </button>
                            </form>
                        </div>
                        <div class="widgets-area mb-9">
                            <h2 class="widgets-title mb-5">Categories</h2>
                            <div class="widgets-item">
                                <ul style="margin: 0;
                                        padding: 0;
                                        list-style: none;">
                                    <li style="margin-bottom: 25px;">
                                        <label style="position: relative;
                                                padding-left: 30px;
                                                line-height: 1;
                                                font-size: 14px;
                                                font-weight: 400;
                                                margin: 0; cursor: pointer;">All Products
                                            <!-- <span></span> -->
                                        </label>
                                    </li>
                                    @foreach($categories as $ca)
                                    <li style="margin-bottom: 25px;">
                                        <label style="position: relative;
                                                padding-left: 30px;
                                                line-height: 1;
                                                font-size: 14px;
                                                font-weight: 400;
                                                margin: 0; cursor: pointer;"><a href="{{route('productWithCategories').'/'.$ca->CatID.'/'.$languageId}}">{{$ca->Name}}</a>
                                            <!-- <span></span> -->
                                        </label>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="widgets-area widgets-filter mb-9">
                            <h2 class="widgets-title mb-5">Price Filter</h2>
                            <div class="price-filter">
                                <div id="slider-range"></div>
                                <div class="price-slider-amount">
                                    <button class="btn btn-primary btn-secondary-hover">Filter</button>
                                    <div class="label-input position-relative">
                                        <label>price : </label>
                                        <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widgets-area mb-9">
                            <h2 class="widgets-title mb-5">Color</h2>
                            <div class="widgets-item">
                                <ul class="widgets-checkbox">
                                    <li>
                                        <input class="input-checkbox" type="checkbox" id="color-selection-1">
                                        <label class="label-checkbox mb-0" for="color-selection-1">Green
                                            <span>7</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input class="input-checkbox" type="checkbox" id="color-selection-2" checked>
                                        <label class="label-checkbox mb-0" for="color-selection-2">Cream
                                            <span>3</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input class="input-checkbox" type="checkbox" id="color-selection-3">
                                        <label class="label-checkbox mb-0" for="color-selection-3">Blue
                                            <span>4</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input class="input-checkbox" type="checkbox" id="color-selection-4">
                                        <label class="label-checkbox mb-0" for="color-selection-4">Black
                                            <span>6</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widgets-area mb-9">
                            <h2 class="widgets-title mb-5">Size</h2>
                            <div class="widgets-item">
                                <ul class="widgets-checkbox">
                                    <li>
                                        <input class="input-checkbox" type="checkbox" id="size-selection-1">
                                        <label class="label-checkbox mb-0" for="size-selection-1">XL</label>
                                    </li>
                                    <li>
                                        <input class="input-checkbox" type="checkbox" id="size-selection-2" checked>
                                        <label class="label-checkbox mb-0" for="size-selection-2">L</label>
                                    </li>
                                    <li>
                                        <input class="input-checkbox" type="checkbox" id="size-selection-3">
                                        <label class="label-checkbox mb-0" for="size-selection-3">SM</label>
                                    </li>
                                    <li>
                                        <input class="input-checkbox" type="checkbox" id="size-selection-4">
                                        <label class="label-checkbox mb-0" for="size-selection-4">XXL</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widgets-area mb-9">
                            <h2 class="widgets-title mb-5">BestSeller Products</h2>
                            <div class="widgets-item">
                                <div class="swiper-container widgets-list-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="product-list-item">
                                                <div class="product-img img-zoom-effect">
                                                    <a href="single-product.html">
                                                        <img class="img-full" src="" alt="Product Images">
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <a class="product-name" href="single-product.html"></a>
                                                    <div class="price-box pb-1">
                                                        <span class="new-price"></span>
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widgets-area">
                            <h2 class="widgets-title mb-5">Tag</h2>
                            <div class="widgets-item">
                                <ul class="widgets-tags">
                                    <li>
                                        <a href="javascript:void(0)">Clothing</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Accessories</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">For Men</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Women</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Fashion</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 order-lg-2 order-1">
                    <div class="product-topbar">
                        <ul>
                            <li class="product-view-wrap">
                                <ul class="nav" role="tablist">
                                    <li class="grid-view" role="presentation">
                                        <a class="active" id="grid-view-tab" data-bs-toggle="tab" href="#grid-view" role="tab" aria-selected="true">
                                            <i class="fa fa-th"></i>
                                        </a>
                                    </li>
                                    <li class="list-view" role="presentation">
                                        <a id="list-view-tab" data-bs-toggle="tab" href="#list-view" role="tab" aria-selected="true">
                                            <i class="fa fa-th-list"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="page-count">
                                <span>23</span> Product Found of <span>50</span>
                            </li>
                            <li class="short">
                                <select class="nice-select wide rounded-0">
                                    <option value="1">Sort by Default</option>
                                    <option value="2">Sort by Popularity</option>
                                    <option value="3">Sort by Rated</option>
                                    <option value="4">Sort by Latest</option>
                                    <option value="5">Sort by High Price</option>
                                    <option value="6">Sort by Low Price</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content text-charcoal pt-8">
                        <div class="tab-pane fade show active" id="grid-view" role="tabpanel" aria-labelledby="grid-view-tab">
                            <div class="product-grid-view row">
                                @foreach($data as $datas)
                                <div class="col-lg-4 col-sm-6 pt-6">
                                    <div class="product-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="{{route('detail').'/'.$datas->Id.'/'.$languageId}}">
                                                <img class="img-full" src="{{ asset('storage/'.$datas->ImagePath) }}" alt="Product Images">
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
                                            <a style="overflow: hidden;
                                                    text-overflow: ellipsis;
                                                    white-space: nowrap;
                                                    width: 200px;" class="product-name" href="{{route('detail').'/'.$datas->Id.'/'.$languageId}}">{{$datas->Name}}</a>
                                            <div class="price-box pb-1">
                                                <span class="new-price">{{number_format($datas->Price)}}</span>
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
                        </div>
                        <div class="tab-pane fade" id="list-view" role="tabpanel" aria-labelledby="list-view-tab">
                            <div class="product-list-view row">
                                <div class="col-12">
                                    <div class="product-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="single-product.html">
                                                <img class="img-full" src="assets/images/product/medium-size/1-1-270x300.jpg" alt="Product Images">
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
                                        <div class="product-content align-self-center">
                                            <a class="product-name pb-2" href="single-product.html">Black Peppepr Read</a>
                                            <div class="price-box pb-1">
                                                <span class="new-price">$80.00</span>
                                            </div>
                                            <div class="rating-box pb-2">
                                                <ul>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                </ul>
                                            </div>
                                            <p class="short-desc mb-0">Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 pt-6">
                                    <div class="product-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="single-product.html">
                                                <img class="img-full" src="assets/images/product/medium-size/1-2-270x300.jpg" alt="Product Images">
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
                                        <div class="product-content align-self-center">
                                            <a class="product-name pb-2" href="single-product.html">Green Vegetable</a>
                                            <div class="price-box pb-1">
                                                <span class="new-price">$80.00</span>
                                            </div>
                                            <div class="rating-box pb-2">
                                                <ul>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                </ul>
                                            </div>
                                            <p class="short-desc mb-0">Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 pt-6">
                                    <div class="product-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="single-product.html">
                                                <img class="img-full" src="assets/images/product/medium-size/1-3-270x300.jpg" alt="Product Images">
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
                                        <div class="product-content align-self-center">
                                            <a class="product-name pb-2" href="single-product.html">Lemon Juice</a>
                                            <div class="price-box pb-1">
                                                <span class="new-price">$80.00</span>
                                            </div>
                                            <div class="rating-box pb-2">
                                                <ul>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                </ul>
                                            </div>
                                            <p class="short-desc mb-0">Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 pt-6">
                                    <div class="product-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="single-product.html">
                                                <img class="img-full" src="assets/images/product/medium-size/1-4-270x300.jpg" alt="Product Images">
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
                                        <div class="product-content align-self-center">
                                            <a class="product-name pb-2" href="single-product.html">Cow Milk & Meat</a>
                                            <div class="price-box pb-1">
                                                <span class="new-price">$80.00</span>
                                            </div>
                                            <div class="rating-box pb-2">
                                                <ul>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                </ul>
                                            </div>
                                            <p class="short-desc mb-0">Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 pt-6">
                                    <div class="product-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="single-product.html">
                                                <img class="img-full" src="assets/images/product/medium-size/1-5-270x300.jpg" alt="Product Images">
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
                                        <div class="product-content align-self-center">
                                            <a class="product-name pb-2" href="single-product.html">Black Pepper Grains</a>
                                            <div class="price-box pb-1">
                                                <span class="new-price">$80.00</span>
                                            </div>
                                            <div class="rating-box pb-2">
                                                <ul>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                </ul>
                                            </div>
                                            <p class="short-desc mb-0">Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 pt-6">
                                    <div class="product-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="single-product.html">
                                                <img class="img-full" src="assets/images/product/medium-size/1-6-270x300.jpg" alt="Product Images">
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
                                        <div class="product-content align-self-center">
                                            <a class="product-name pb-2" href="single-product.html">Peanut Big Bean</a>
                                            <div class="price-box pb-1">
                                                <span class="new-price">$80.00</span>
                                            </div>
                                            <div class="rating-box pb-2">
                                                <ul>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                </ul>
                                            </div>
                                            <p class="short-desc mb-0">Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 pt-6">
                                    <div class="product-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="single-product.html">
                                                <img class="img-full" src="assets/images/product/medium-size/1-7-270x300.jpg" alt="Product Images">
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
                                        <div class="product-content align-self-center">
                                            <a class="product-name pb-2" href="single-product.html">Dried Lemon Green</a>
                                            <div class="price-box pb-1">
                                                <span class="new-price">$80.00</span>
                                            </div>
                                            <div class="rating-box pb-2">
                                                <ul>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                </ul>
                                            </div>
                                            <p class="short-desc mb-0">Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 pt-6">
                                    <div class="product-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="single-product.html">
                                                <img class="img-full" src="assets/images/product/medium-size/1-8-270x300.jpg" alt="Product Images">
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
                                        <div class="product-content align-self-center">
                                            <a class="product-name pb-2" href="single-product.html">Natural Coconut</a>
                                            <div class="price-box pb-1">
                                                <span class="new-price">$80.00</span>
                                            </div>
                                            <div class="rating-box pb-2">
                                                <ul>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                </ul>
                                            </div>
                                            <p class="short-desc mb-0">Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 pt-6">
                                    <div class="product-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="single-product.html">
                                                <img class="img-full" src="assets/images/product/medium-size/1-9-270x300.jpg" alt="Product Images">
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
                                        <div class="product-content align-self-center">
                                            <a class="product-name pb-2" href="single-product.html">Black Peppepr Read</a>
                                            <div class="price-box pb-1">
                                                <span class="new-price">$80.00</span>
                                            </div>
                                            <div class="rating-box pb-2">
                                                <ul>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                </ul>
                                            </div>
                                            <p class="short-desc mb-0">Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-area pt-10">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item">
                                    <a class="page-link" aria-label="Previous" style="cursor: pointer;">
                                        <span class="fa fa-chevron-left"></span>
                                    </a>
                                </li>
                                <li ng-repeat="page in totalPages" class="page-item"><a class="page-link" style="cursor: pointer;"></a></li>
                                <li class="page-item">
                                    <a class="page-link" aria-label="Next" style="cursor: pointer;">
                                        <span class="fa fa-chevron-right"></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Main Content Area End Here -->

@endsection