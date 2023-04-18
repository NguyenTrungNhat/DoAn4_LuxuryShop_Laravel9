@extends('layout')



@section('content')


<!-- Begin Main Content Area  -->
<main class="main-content">
            <div class="breadcrumb-area breadcrumb-height" data-bg-image="/webApp/assets/images/breadcrumb/bg/1-1-1920x373.jpg">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-lg-12">
                            <div class="breadcrumb-item">
                                <h2 class="breadcrumb-heading">Product Style</h2>
                                <ul>
                                    <li>
                                        <a href="index.html">Home <i class="pe-7s-angle-right"></i></a>
                                    </li>
                                    <li>Single Product Variable</li>
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
                                        <div class="swiper-slide">
                                            <a href="/webApp/assets/images/product/large-size/2-1-555x645.jpg" class="single-img gallery-popup">
                                                <img class="img-full" src="/webApp/assets/images/product/large-size/2-1-555x645.jpg" alt="Product Image">
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="/webApp/assets/images/product/large-size/2-2-555x645.jpg" class="single-img gallery-popup">
                                                <img class="img-full" src="/webApp/assets/images/product/large-size/2-2-555x645.jpg" alt="Product Image">
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="/webApp/assets/images/product/large-size/2-3-555x645.jpg" class="single-img gallery-popup">
                                                <img class="img-full" src="/webApp/assets/images/product/large-size/2-3-555x645.jpg" alt="Product Image">
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="/webApp/assets/images/product/large-size/2-4-555x645.jpg" class="single-img gallery-popup">
                                                <img class="img-full" src="/webApp/assets/images/product/large-size/2-4-555x645.jpg" alt="Product Image">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination"></div>
                                </div>
                                <div class="swiper-container single-product-thumbs pt-6">
                                    <div class="swiper-wrapper">
                                        <a href="javascript:void(0)" class="swiper-slide">
                                            <img class="img-full" src="/webApp/assets/images/product/large-size/2-1-555x645.jpg" alt="Product Thumnail">
                                        </a>
                                        <a href="javascript:void(0)" class="swiper-slide">
                                            <img class="img-full" src="/webApp/assets/images/product/large-size/2-2-555x645.jpg" alt="Product Thumnail">
                                        </a>
                                        <a href="javascript:void(0)" class="swiper-slide">
                                            <img class="img-full" src="/webApp/assets/images/product/large-size/2-3-555x645.jpg" alt="Product Thumnail">
                                        </a>
                                        <a href="javascript:void(0)" class="swiper-slide">
                                            <img class="img-full" src="/webApp/assets/images/product/large-size/2-4-555x645.jpg" alt="Product Thumnail">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pt-9 pt-lg-0">
                            <div class="single-product-content">
                                <h2 class="title">Green Vegetable</h2>
                                <div class="price-box pb-1">
                                    <span class="new-price text-danger">$80.00</span>
                                    <span class="old-price text-primary">$90.00</span>
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
                                <p class="short-desc mb-6">Lorem ipsum dolor sit amet, consecte adipisicin elit, sed do
                                    eiusmod tempor incidi ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud exercita ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum dolore.
                                </p>
                                <div class="selector-wrap color-option pb-2">
                                    <span>Color</span>
                                    <select class="nice-select wide rounded-0">
                                        <option value="default">Choose an option</option>
                                        <option value="blue">Blue</option>
                                        <option value="green">Green</option>
                                        <option value="red">Red</option>
                                    </select>
                                </div>
                                <div class="selector-wrap pb-6">
                                    <span>Logo</span>
                                    <select class="nice-select wide rounded-0">
                                        <option value="default">Choose an option</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                                <ul class="quantity-with-btn pb-7">
                                    <li class="quantity">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" value="1" type="text">
                                        </div>
                                    </li>
                                    <li class="add-to-cart">
                                        <a class="btn btn-custom-size lg-size btn-primary btn-secondary-hover rounded-0" href="cart.html">Add to cart</a>
                                    </li>
                                    <li class="wishlist-btn-wrap">
                                        <a class="btn rounded-0" href="wishlist.html">
                                            <i class="pe-7s-like"></i>
                                        </a>
                                    </li>
                                </ul>
                                <div class="product-category text-matterhorn pb-2">
                                    <span class="title">Categories :</span>
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)">Natural,</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Organic,</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Beautiful,</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Organic Food</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-category product-tags text-matterhorn pb-4">
                                    <span class="title">Product Tags :</span>
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)">Organic,</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Vegetable,</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Fruits</a>
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
                                        <p class="short-desc mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                            do eiusmod tempor incidi ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercit ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                            nulla pariatur. Excepteurdf sint occaecat cupidatat non proident, sunt in culpa qui
                                            officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste
                                            natus error sit voluptatem accusl doloremque laudantium, totam rem aperiam, eaque
                                            ipsa quae ab illo inventore v et quasi architecto beatae vitae dicta sunt explicabo.
                                            Nemo enim ipsam voluptadtem quia voluptas sit aspernatur aut odit aut fugit, sed
                                            quia consequuntur magni dolores eos qui ratione</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                    <div class="product-review-body">
                                        <h4 class="heading mb-5">3 Review Items</h4>
                                        <ul class="user-info-wrap">
                                            <li>
                                                <ul class="user-info">
                                                    <li class="user-avatar">
                                                        <img src="/webApp/assets/images/testimonial/user/1.png" alt="User Image">
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
                                                        <img src="/webApp/assets/images/testimonial/user/1.png" alt="User Image">
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
                                                        <img src="/webApp/assets/images/testimonial/user/1.png" alt="User Image">
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
                                        <div class="swiper-slide">
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
                                                <div class="product-content texx">
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
                                                <div class="product-content texx">
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
                                                <div class="product-content texx">
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
                                                <div class="product-content texx">
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
        <!-- Main Content Area End Here  -->
        @endsection