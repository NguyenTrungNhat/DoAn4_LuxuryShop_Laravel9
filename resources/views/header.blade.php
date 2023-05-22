<!-- Begin Main Header Area -->
<header class="main-header_area position-relative">
    <div class="header-top border-bottom d-none d-md-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="header-top-left">
                        <ul class="dropdown-wrap text-matterhorn">
                            <li class="dropdown">
                                <button class="btn btn-link dropdown-toggle ht-btn" type="button" id="languageButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    English
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="languageButton">
                                    <li><a class="dropdown-item" href="#">French</a></li>
                                    <li><a class="dropdown-item" href="#">Italian</a></li>
                                    <li><a class="dropdown-item" href="#">Spanish</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <button class="btn btn-link dropdown-toggle ht-btn" type="button" id="currencyButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    USD
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="currencyButton">
                                    <li><a class="dropdown-item" href="#">GBP</a></li>
                                    <li><a class="dropdown-item" href="#">ISO</a></li>
                                </ul>
                            </li>
                            <li>
                                Call Us
                                <a href="tel://3965410">3965410</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">
                    <div class="header-top-right text-matterhorn">
                        <p class="shipping mb-0">Free delivery on order over <span>$200</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="header-middle-wrap">
                        <a href="{{route('home')}}" class="header-logo">
                            <img src="/webApp/assets/images/logo/dark.png" alt="Header Logo">
                        </a>
                        <div class="header-search-area d-none d-lg-block">
                            <form action="#" class="header-searchbox form-categories">
                                <!-- <select class="nice-select select-search-category wide"> -->
                                <select class="form-select-categories">
                                    <option value="all">All Category</option>
                                    @foreach($categories as $ca)
                                        <option value="{{$ca->CatID}}">{{$ca->Name}}</option>
                                    @endforeach
                                    
                                </select>
                                <input class="input-field form-categories-input" type="text" placeholder="Search Products">
                                <button class="btn btn-outline-whisper btn-primary-hover" type="submit"><i class="pe-7s-search"></i></button>
                            </form>
                        </div>
                        <div class="header-right">
                            <ul>
                                <li class="dropdown d-none d-md-block">
                                    <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button" id="settingButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="pe-7s-users"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="settingButton">
                                        <li><a class="dropdown-item" href="my-account.html">My account</a></li>
                                        <li><a class="dropdown-item" href="login-register.html">Login | Register</a></li>
                                    </ul>
                                </li>
                                <li class="d-none d-md-block">
                                    <a href="wishlist.html">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                </li>
                                <li class="d-block d-lg-none">
                                    <a href="#searchBar" class="search-btn toolbar-btn">
                                        <i class="pe-7s-search"></i>
                                    </a>
                                </li>
                                <li class="minicart-wrap me-3 me-lg-0">
                                    <a href="#miniCart" class="minicart-btn toolbar-btn">
                                        <i class="pe-7s-shopbag"></i>
                                        <span class="quantity">3</span>
                                    </a>
                                </li>
                                <li class="mobile-menu_wrap d-block d-lg-none">
                                    <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn pl-0">
                                        <i class="pe-7s-menu"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-header header-sticky" data-bg-color="#bac34e">
        <div class="container">
            <div class="main-header_nav position-relative">
                <div class="row align-items-center">
                    <div class="col-lg-12 d-none d-lg-block">
                        <div class="main-menu">
                            <nav class="main-nav">
                                <ul>
                                    <li class="drop-holder">
                                        <a href="{{route('home')}}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{route('about').'/'.$languageId}}">About</a>
                                    </li>
                                    <li class="megamenu-holder">
                                        <a href="{{route('categories').'/'.$languageId}}">Shop
                                        </a>
                                    </li>
                                    <li class="drop-holder">
                                        <a href="{{route('pages').'/'.$languageId}}">Pages
                                        </a>
                                    </li>
                                    <li class="drop-holder">
                                        <a href="{{route('blog').'/'.$languageId}}">Blog
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('contact').'/'.$languageId}}">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-menu_wrapper" id="mobileMenu">
        <div class="harmic-offcanvas-body">
            <div class="inner-body">
                <div class="harmic-offcanvas-top">
                    <a href="#" class="button-close"><i class="pe-7s-close"></i></a>
                </div>
                <div class="offcanvas-user-info text-center px-6 pb-5">
                    <div class=" text-silver">
                        <p class="shipping mb-0">Free delivery on order over <span class="text-primary">$200</span></p>
                    </div>
                    <ul class="dropdown-wrap justify-content-center text-silver">
                        <li class="dropdown dropup">
                            <button class="btn btn-link dropdown-toggle ht-btn" type="button" id="languageButtonTwo" data-bs-toggle="dropdown" aria-expanded="false">
                                English
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="languageButtonTwo">
                                <li><a class="dropdown-item" href="#">French</a></li>
                                <li><a class="dropdown-item" href="#">Italian</a></li>
                                <li><a class="dropdown-item" href="#">Spanish</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropup">
                            <button class="btn btn-link dropdown-toggle ht-btn usd-dropdown" type="button" id="currencyButtonTwo" data-bs-toggle="dropdown" aria-expanded="false">
                                USD
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="currencyButtonTwo">
                                <li><a class="dropdown-item" href="#">GBP</a></li>
                                <li><a class="dropdown-item" href="#">ISO</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropup">
                            <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button" id="settingButtonTwo" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="pe-7s-users"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="settingButtonTwo">
                                <li><a class="dropdown-item" href="my-account.html">My account</a></li>
                                <li><a class="dropdown-item" href="login-register.html">Login | Register</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="wishlist.html">
                                <i class="pe-7s-like"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="offcanvas-menu_area">
                    <nav class="offcanvas-navigation">
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children">
                                <a href="#">
                                    <span class="mm-text">Home
                                        <i class="pe-7s-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="index.html">
                                            <span class="mm-text">Home One</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index-2.html">
                                            <span class="mm-text">Home Two</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="about.html">
                                    <span class="mm-text">About Us</span>
                                </a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">
                                    <span class="mm-text">Shop
                                        <i class="pe-7s-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="mm-text">Shop Layout
                                                <i class="pe-7s-angle-down"></i>
                                            </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="shop.html">
                                                    <span class="mm-text">Shop Default</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-leftsidebar.html">
                                                    <span class="mm-text">Shop Left Sidebar</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-rightsidebar.html">
                                                    <span class="mm-text">Shop Right Sidebar</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-list-fullwidth.html">
                                                    <span class="mm-text">Shop List Fullwidth</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-list-left-sidebar.html">
                                                    <span class="mm-text">Shop List Left Sidebar</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-list-right-sidebar.html">
                                                    <span class="mm-text">Shop List Right Sidebar</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="mm-text">Product Style
                                                <i class="pe-7s-angle-down"></i>
                                            </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="single-product.html">
                                                    <span class="mm-text">Single Product Default</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="single-product-group.html">
                                                    <span class="mm-text">Single Product Group</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="single-product-variable.html">
                                                    <span class="mm-text">Single Product Variable</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="single-product-sale.html">
                                                    <span class="mm-text">Single Product Sale</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="single-product-sticky.html">
                                                    <span class="mm-text">Single Product Sticky</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="single-product-affiliate.html">
                                                    <span class="mm-text">Single Product Affiliate</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="mm-text">Product Related
                                                <i class="pe-7s-angle-down"></i>
                                            </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="my-account.html">
                                                    <span class="mm-text">My Account</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="login-register.html">
                                                    <span class="mm-text">Login | Register</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="cart.html">
                                                    <span class="mm-text">Shopping Cart</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html">
                                                    <span class="mm-text">Wishlist</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <span class="mm-text">Compare</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="checkout.html">
                                                    <span class="mm-text">Checkout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">
                                    <span class="mm-text">Pages
                                        <i class="pe-7s-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="faq.html">
                                            <span class="mm-text">Frequently Questions</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="404.html">
                                            <span class="mm-text">Error 404</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">
                                    <span class="mm-text">Blog
                                        <i class="pe-7s-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="mm-text">Blog Holder
                                                <i class="pe-7s-angle-down"></i>
                                            </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="blog.html">
                                                    <span class="mm-text">Blog Default</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-left-sidebar.html">
                                                    <span class="mm-text">Blog Left Sidebar</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-right-sidebar.html">
                                                    <span class="mm-text">Blog Right Sidebar</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-list-left-sidebar.html">
                                                    <span class="mm-text">Blog List Left Sidebar</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-list-right-sidebar.html">
                                                    <span class="mm-text">Blog List Right Sidebar</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="mm-text">Blog Detail Holder
                                                <i class="pe-7s-angle-down"></i>
                                            </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="blog-detail.html">
                                                    <span class="mm-text">Blog Detail Default</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-detail-left-sidebar.html">
                                                    <span class="mm-text">Blog Detail Left Sidebar</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-detail-right-sidebar.html">
                                                    <span class="mm-text">Blog Detail Right Sidebar</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.html">
                                    <span class="mm-text">Contact</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-search_wrapper" id="searchBar">
        <div class="harmic-offcanvas-body">
            <div class="container h-100">
                <div class="offcanvas-search">
                    <div class="harmic-offcanvas-top">
                        <a href="#" class="button-close"><i class="pe-7s-close"></i></a>
                    </div>
                    <span class="searchbox-info">Start typing and press Enter to search</span>
                    <form action="#" class="hm-searchbox">
                        <input type="text" placeholder="Search">
                        <button class="search-btn" type="submit"><i class="pe-7s-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-minicart_wrapper" id="miniCart">
        <div class="harmic-offcanvas-body">
            <div class="minicart-content">
                <div class="minicart-heading">
                    <h4 class="mb-0">Shopping Cart</h4>
                    <a href="#" class="button-close"><i class="pe-7s-close"></i></a>
                </div>
                <ul class="minicart-list">
                    <li class="minicart-product">
                        <a class="product-item_remove" href="#"><i class="pe-7s-close"></i></a>
                        <a href="shop.html" class="product-item_img">
                            <img class="img-full" src="/webApp/assets/images/product/small-size/1-1-112x124.jpg" alt="Product Image">
                        </a>
                        <div class="product-item_content">
                            <a class="product-item_title" href="shop.html">Black Pepper Grains</a>
                            <span class="product-item_quantity">1 x $80.00</span>
                        </div>
                    </li>
                    <li class="minicart-product">
                        <a class="product-item_remove" href="#"><i class="pe-7s-close"></i></a>
                        <a href="shop.html" class="product-item_img">
                            <img class="img-full" src="/webApp/assets/images/product/small-size/1-2-112x124.jpg" alt="Product Image">
                        </a>
                        <div class="product-item_content">
                            <a class="product-item_title" href="shop.html">Peanut Big Bean</a>
                            <span class="product-item_quantity">1 x $80.00</span>
                        </div>
                    </li>
                    <li class="minicart-product">
                        <a class="product-item_remove" href="#">
                            <i class="pe-7s-close"></i>
                        </a>
                        <a href="shop.html" class="product-item_img">
                            <img class="img-full" src="/webApp/assets/images/product/small-size/1-3-112x124.jpg" alt="Product Image">
                        </a>
                        <div class="product-item_content">
                            <a class="product-item_title" href="shop.html">Dried Lemon Green</a>
                            <span class="product-item_quantity">1 x $80.00</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="minicart-item_total">
                <span>Subtotal</span>
                <span class="ammount">$240.00</span>
            </div>
            <div class="group-btn_wrap d-grid gap-2">
                <a href="cart.html" class="btn btn-secondary btn-primary-hover">View Cart</a>
                <a href="checkout.html" class="btn btn-secondary btn-primary-hover">Checkout</a>
            </div>
        </div>
    </div>
    <div class="global-overlay"></div>
</header>
<!-- Main Header Area End Here -->