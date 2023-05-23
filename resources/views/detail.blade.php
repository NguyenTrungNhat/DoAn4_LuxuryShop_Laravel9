@extends('layout')



@section('content')


<!-- Begin Main Content Area  -->
<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height" data-bg-image="/webApp/assets/images/breadcrumb/bg/1920x373.png">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h2 style="color: #fff; margin-bottom: -5px;" class="breadcrumb-heading">Product Detail</h2>
                        <ul>
                            <li>
                                <a style="color: #fff; margin-bottom: 40px;" href="index.html">Home <i class="pe-7s-angle-right"></i></a>
                            </li>
                            <li style="color: #fff; margin-bottom: 40px;">Product Detail</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-product-area section-space-top-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-product-img">
                        <div class="swiper-container single-product-slider">
                            <div class="swiper-wrapper">
                                @foreach($data->first()->ListImageProduct as $listImg)
                                <div class="swiper-slide">
                                    <a class="single-img gallery-popup">
                                        <img class="img-full" src="{{ asset('storage/'.$listImg->ImagePath) }}" alt="Product Image">
                                    </a>
                                </div>
                                @endforeach
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="swiper-container single-product-thumbs pt-6">
                            <div class="swiper-wrapper">
                                @foreach($data->first()->ListImageProduct as $listImg)
                                <a class="swiper-slide">
                                    <img class="img-full" src="{{ asset('storage/'.$listImg->ImagePath) }}" alt="Product Thumnail">
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pt-9 pt-lg-0">
                    <div class="single-product-content">
                        <h2 class="title">{{$data->first()->ProductTranslation->where('LanguageId','=',$languageId)->first()->Name}}</h2>
                        <div class="price-box pb-1">
                            <span class="new-price text-danger">{{ number_format($data->first()->AttributesPrice->Price)}}</span>
                        </div>
                        <div class="rating-box-wrap pb-7">
                            <div class="rating-box">
                                <ul>
                                    <li><i class="pe-7s-star"></i></li>
                                    <li><i class="pe-7s-star"></i></li>
                                    <li><i class="pe-7s-star"></i></li>
                                    <li><i class="pe-7s-star"></i></li>
                                    <li><i class="pe-7s-star"></i></li>
                                </ul>
                            </div>
                            <div class="review-status ps-4">
                                <a href="javascript:void(0)">( 1 Customer Review )</a>
                            </div>
                        </div>
                        <p class="short-desc mb-6">{{$data->first()->ProductTranslation->first()->Details}}
                        </p>
                        <div class="selector-wrap color-option pb-2">
                            <span>Size</span>
                            <select class="nice-select wide rounded-0">
                                <option value="default">Choose an option</option>
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                            </select>
                        </div>
                        <ul class="quantity-with-btn pb-7">
                            <!-- <li class="quantity">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" value="1" type="text">
                                </div>
                            </li> -->
                            <li class="add-to-cart">
                                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $data->first()->Id }}" name="id">
                                    <input type="hidden" value="{{ $data->first()->ProductTranslation->where('LanguageId','=',$languageId)->first()->Name }}" name="name">
                                    <input type="hidden" value="{{ $data->first()->AttributesPrice->Price }}" name="price">
                                    <input type="hidden" value="{{ $data->first()->ListImageProduct->first()->ImagePath }}" name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button class="btn btn-custom-size lg-size btn-primary btn-secondary-hover rounded-0">Add to cart</button>
                                </form>
                            </li>
                            <li class="wishlist-btn-wrap">
                                <a class="btn rounded-0" href="wishlist.html">
                                    <i class="pe-7s-like"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="product-category text-matterhorn pb-2">

                        </div>
                        <div class="product-category product-tags text-matterhorn pb-4">
                            <span class="title">Product Tags :</span>
                            <ul>
                                <li>
                                    <a href="javascript:void(0)">{{$data->first()->ProductTranslation->first()->SeoDescription}}</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">{{$data->first()->ProductTranslation->first()->SeoTitle}}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="social-link align-items-center">
                            <span class="title pe-3">Share:</span>
                            <ul>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-pinterest-p"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-tumblr"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-tab-area section-space-top-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav product-tab-nav product-tab-style-2" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="active btn btn-custom-size" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">
                                Description
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="btn btn-custom-size" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">
                                Reviews
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="btn btn-custom-size" id="shipping-tab" data-bs-toggle="tab" href="#shipping" role="tab" aria-controls="shipping" aria-selected="false">
                                Shipping
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content product-tab-content">
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <div class="product-description-body">
                                <p class="short-desc mb-0">{{$data[0]->ProductTranslation[0]->Description}}</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                            <div class="product-review-body">
                                <h4 class="heading mb-5">3 Review Items</h4>
                                <ul class="user-info-wrap">
                                    <li>
                                        <ul class="user-info">
                                            <li class="user-avatar">
                                                <img src="assets/images/testimonial/user/1.png" alt="User Image">
                                            </li>
                                            <li class="user-comment">
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="meta">
                                                    <span><strong>Oscar -</strong> March 15, 2021</span>
                                                </div>
                                                <p class="short-desc mb-0">“Sed ligula sapien, fermentum id est eget,
                                                    viverra auctor sem. Vivamus maximus enim vitae urna porta, ut
                                                    euismod nibh lacinia ellentesque at diam voluptas quas nisi, culpa
                                                    in accusantium“</p>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul class="user-info">
                                            <li class="user-avatar">
                                                <img src="assets/images/testimonial/user/1.png" alt="User Image">
                                            </li>
                                            <li class="user-comment">
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="meta">
                                                    <span><strong>Oscar -</strong> March 15, 2021</span>
                                                </div>
                                                <p class="short-desc mb-0">“Sed ligula sapien, fermentum id est eget,
                                                    viverra auctor sem. Vivamus maximus enim vitae urna porta, ut
                                                    euismod nibh lacinia ellentesque at diam voluptas quas nisi, culpa
                                                    in accusantium“</p>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul class="user-info">
                                            <li class="user-avatar">
                                                <img src="assets/images/testimonial/user/1.png" alt="User Image">
                                            </li>
                                            <li class="user-comment">
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="meta">
                                                    <span><strong>Oscar -</strong> March 15, 2021</span>
                                                </div>
                                                <p class="short-desc mb-0">“Sed ligula sapien, fermentum id est eget,
                                                    viverra auctor sem. Vivamus maximus enim vitae urna porta, ut
                                                    euismod nibh lacinia ellentesque at diam voluptas quas nisi, culpa
                                                    in accusantium“</p>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="feedback-area pt-5">
                                    <h2 class="heading mb-1">Add a review</h2>
                                    <p class="short-desc mb-3">Your email address will not be published.</p>
                                    <div class="rating-box">
                                        <span>Your rating</span>
                                        <ul class="ps-4">
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                        </ul>
                                    </div>
                                    <form class="feedback-form pt-8" action="#">
                                        <div class="group-input">
                                            <div class="form-field me-md-6 mb-6 mb-md-0">
                                                <input type="text" name="name" placeholder="Your Name*" class="input-field">
                                            </div>
                                            <div class="form-field me-md-6 mb-6 mb-md-0">
                                                <input type="text" name="email" placeholder="Your Email*" class="input-field">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" name="number" placeholder="Phone number" class="input-field">
                                            </div>
                                        </div>
                                        <div class="form-field mt-6">
                                            <textarea name="message" placeholder="Message" class="textarea-field"></textarea>
                                        </div>
                                        <div class="button-wrap mt-8">
                                            <button type="submit" value="submit" class="btn btn-custom-size lg-size btn-secondary btn-primary-hover btn-lg rounded-0" name="submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="shipping" role="tabpanel" aria-labelledby="shipping-tab">
                            <div class="product-shipping-body">
                                <h4 class="title">Shipping</h4>
                                <p class="short-desc mb-4">The item will be shipped from China. So it need 15-20 days to
                                    deliver. Our product is good with reasonable price and we believe you will worth it.
                                    So please wait for it patiently! Thanks.Any question please kindly to contact us and
                                    we promise to work hard to help you to solve the problem</p>
                                <h4 class="title">About return request</h4>
                                <p class="short-desc mb-4">If you don't need the item with worry, you can contact us
                                    then we will help you to solve the problem, so please close the return request!
                                    Thanks</p>
                                <h4 class="title">Guarantee</h4>
                                <p class="short-desc mb-0">If it is the quality question, we will resend or refund to
                                    you; If you receive damaged or wrong items, please contact us and attach some
                                    pictures about product, we will exchange a new correct item to you after the
                                    confirmation.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-slider-area section-space-top-95 section-space-bottom-100">
        <div class="container">
            <div class="section-title text-center pb-55">
                <span class="sub-title text-primary">You Can Be Love It</span>
                <h2 class="title mb-0">Related Products</h2>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper-slider-holder swiper-arrow">
                        <div class="swiper-container product-slider border-issue">
                            <div class="swiper-wrapper">
                                @foreach($dataWithCat as $datas)
                                <div class="swiper-slide">
                                    <div class="product-item">
                                        <div class="product-img  img-zoom-effect">
                                            <a href="{{route('detail').'/'.$datas->Id.'/'.$languageId}}">
                                                <img class="img-full" src="{{ asset('storage/'.$datas->ListImageProduct->first()->ImagePath) }}" alt="Product Images">
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
                                        <div class="product-content texx">
                                            <a style="overflow: hidden;
                                                    text-overflow: ellipsis;
                                                    white-space: nowrap;
                                                    width: 200px;" class="product-name" href="{{route('detail').'/'.$datas->Id.'/'.$languageId}}">{{$datas->ProductTranslation->where('LanguageId','=',$languageId)->first()->Name}}</a>
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
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection