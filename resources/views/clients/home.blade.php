@extends('layouts.client')

@section('content')
    <!-- twitter feed area start -->
    <div class="twitter-feed">
        @include('clients.blocks.banner')
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="twitter-feed-content text-center">
                        <p>Check out "Corano - Multipurpose eCommerce Bootstrap 5 template" on #Envato by @<a
                                href="#">Corano</a> #Themeforest <a
                                href="http://1.envato.market/9LbxW">http://1.envato.market/9LbxW</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- twitter feed area end -->

    <!-- service policy area start -->
    <div class="service-policy section-padding">
        <div class="container">
            <div class="row mtn-30">
                <div class="col-sm-6 col-lg-3">
                    <div class="policy-item">
                        <div class="policy-icon">
                            <i class="pe-7s-plane"></i>
                        </div>
                        <div class="policy-content">
                            <h6>Free Shipping</h6>
                            <p>Free shipping all order</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="policy-item">
                        <div class="policy-icon">
                            <i class="pe-7s-help2"></i>
                        </div>
                        <div class="policy-content">
                            <h6>Support 24/7</h6>
                            <p>Support 24 hours a day</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="policy-item">
                        <div class="policy-icon">
                            <i class="pe-7s-back"></i>
                        </div>
                        <div class="policy-content">
                            <h6>Money Return</h6>
                            <p>30 days for free return</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="policy-item">
                        <div class="policy-icon">
                            <i class="pe-7s-credit"></i>
                        </div>
                        <div class="policy-content">
                            <h6>100% Payment Secure</h6>
                            <p>We ensure secure payment</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service policy area end -->

    <!-- banner statistics area start -->
    <div class="banner-statistics-area">
        <div class="container">
            <div class="row row-20 mtn-20">
                <div class="col-sm-6">
                    <figure class="banner-statistics mt-20">
                        <a href="#">
                            <img src="/assets/client/img/banner/img1-top.jpg" alt="product banner">
                        </a>
                        <div class="banner-content text-right">
                            <h5 class="banner-text1">BEAUTIFUL</h5>
                            <h2 class="banner-text2">Wedding<span>Rings</span></h2>
                            <a href="shop.html" class="btn btn-text">Shop Now</a>
                        </div>
                    </figure>
                </div>
                <div class="col-sm-6">
                    <figure class="banner-statistics mt-20">
                        <a href="#">
                            <img src="/assets/client/img/banner/img2-top.jpg" alt="product banner">
                        </a>
                        <div class="banner-content text-center">
                            <h5 class="banner-text1">EARRINGS</h5>
                            <h2 class="banner-text2">Tangerine Floral <span>Earring</span></h2>
                            <a href="shop.html" class="btn btn-text">Shop Now</a>
                        </div>
                    </figure>
                </div>
                <div class="col-sm-6">
                    <figure class="banner-statistics mt-20">
                        <a href="#">
                            <img src="/assets/client/img/banner/img3-top.jpg" alt="product banner">
                        </a>
                        <div class="banner-content text-center">
                            <h5 class="banner-text1">NEW ARRIVALLS</h5>
                            <h2 class="banner-text2">Pearl<span>Necklaces</span></h2>
                            <a href="shop.html" class="btn btn-text">Shop Now</a>
                        </div>
                    </figure>
                </div>
                <div class="col-sm-6">
                    <figure class="banner-statistics mt-20">
                        <a href="#">
                            <img src="/assets/client/img/banner/img4-top.jpg" alt="product banner">
                        </a>
                        <div class="banner-content text-right">
                            <h5 class="banner-text1">NEW DESIGN</h5>
                            <h2 class="banner-text2">Diamond<span>Jewelry</span></h2>
                            <a href="shop.html" class="btn btn-text">Shop Now</a>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!-- banner statistics area end -->

    <!-- product area start -->
    <section class="product-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- section title start -->
                    <div class="section-title text-center">
                        <h2 class="title">our products</h2>
                        <p class="sub-title">Add our products to weekly lineup</p>
                    </div>
                    <!-- section title start -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-container">
                        <!-- product tab menu start -->
                        <div class="product-tab-menu">
                            <ul class="nav justify-content-center">
                                <li><a href="#tab1" class="active" data-bs-toggle="tab">Nhẫn</a></li>
                                <li><a href="#tab2" data-bs-toggle="tab">Dây chuyền</a></li>
                                <li><a href="#tab3" data-bs-toggle="tab">Bông tai</a></li>
                                <li><a href="#tab4" data-bs-toggle="tab">Dây cổ</a></li>
                            </ul>
                        </div>
                        <!-- product tab menu end -->

                        <!-- product tab content start -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab1">
                                <div class="product-carousel-4 slick-row-10 slick-arrow-style">
                                    @foreach ($products as $item)
                                        <!-- product item start -->
                                        @include('clients.components.product-item')
                                        <!-- product item end -->
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab2">
                                <div class="product-carousel-4 slick-row-10 slick-arrow-style">
                                    <!-- product item start -->
                                    <div class="product-item">
                                        <figure class="product-thumb">
                                            <a href="product-details.html">
                                                <img class="pri-img" src="/assets/client/img/product/product-6.jpg"
                                                    alt="product">
                                                <img class="sec-img" src="/assets/client/img/product/product-13.jpg"
                                                    alt="product">
                                            </a>
                                            <div class="product-badge">
                                                <div class="product-label new">
                                                    <span>new</span>
                                                </div>
                                                <div class="product-label discount">
                                                    <span>10%</span>
                                                </div>
                                            </div>
                                            <div class="button-group">
                                                <a href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to wishlist"><i class="pe-7s-like"></i></a>
                                                <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick_view"><span data-bs-toggle="tooltip"
                                                        data-bs-placement="left" title="Quick View"><i
                                                            class="pe-7s-search"></i></span></a>
                                            </div>
                                            <div class="cart-hover">
                                                <button class="btn btn-cart">add to cart</button>
                                            </div>
                                        </figure>
                                        <div class="product-caption text-center">
                                            <div class="product-identity">
                                                <p class="manufacturer-name"><a href="product-details.html">Gold</a></p>
                                            </div>
                                            <ul class="color-categories">
                                                <li>
                                                    <a class="c-lightblue" href="#" title="LightSteelblue"></a>
                                                </li>
                                                <li>
                                                    <a class="c-darktan" href="#" title="Darktan"></a>
                                                </li>
                                                <li>
                                                    <a class="c-grey" href="#" title="Grey"></a>
                                                </li>
                                                <li>
                                                    <a class="c-brown" href="#" title="Brown"></a>
                                                </li>
                                            </ul>
                                            <h6 class="product-name">
                                                <a href="product-details.html">Perfect Diamond Jewelry</a>
                                            </h6>
                                            <div class="price-box">
                                                <span class="price-regular">$60.00</span>
                                                <span class="price-old"><del>$70.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product item end -->

                                    <!-- product item start -->
                                    <div class="product-item">
                                        <figure class="product-thumb">
                                            <a href="product-details.html">
                                                <img class="pri-img" src="/assets/client/img/product/product-7.jpg"
                                                    alt="product">
                                                <img class="sec-img" src="/assets/client/img/product/product-12.jpg"
                                                    alt="product">
                                            </a>
                                            <div class="product-badge">
                                                <div class="product-label new">
                                                    <span>sale</span>
                                                </div>
                                                <div class="product-label discount">
                                                    <span>new</span>
                                                </div>
                                            </div>
                                            <div class="button-group">
                                                <a href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to wishlist"><i class="pe-7s-like"></i></a>
                                                <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick_view"><span data-bs-toggle="tooltip"
                                                        data-bs-placement="left" title="Quick View"><i
                                                            class="pe-7s-search"></i></span></a>
                                            </div>
                                            <div class="cart-hover">
                                                <button class="btn btn-cart">add to cart</button>
                                            </div>
                                        </figure>
                                        <div class="product-caption text-center">
                                            <div class="product-identity">
                                                <p class="manufacturer-name"><a href="product-details.html">mony</a></p>
                                            </div>
                                            <ul class="color-categories">
                                                <li>
                                                    <a class="c-lightblue" href="#" title="LightSteelblue"></a>
                                                </li>
                                                <li>
                                                    <a class="c-darktan" href="#" title="Darktan"></a>
                                                </li>
                                                <li>
                                                    <a class="c-grey" href="#" title="Grey"></a>
                                                </li>
                                                <li>
                                                    <a class="c-brown" href="#" title="Brown"></a>
                                                </li>
                                            </ul>
                                            <h6 class="product-name">
                                                <a href="product-details.html">Handmade Golden Necklace</a>
                                            </h6>
                                            <div class="price-box">
                                                <span class="price-regular">$50.00</span>
                                                <span class="price-old"><del>$80.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product item end -->

                                    <!-- product item start -->
                                    <div class="product-item">
                                        <figure class="product-thumb">
                                            <a href="product-details.html">
                                                <img class="pri-img" src="/assets/client/img/product/product-8.jpg"
                                                    alt="product">
                                                <img class="sec-img" src="/assets/client/img/product/product-11.jpg"
                                                    alt="product">
                                            </a>
                                            <div class="product-badge">
                                                <div class="product-label new">
                                                    <span>new</span>
                                                </div>
                                            </div>
                                            <div class="button-group">
                                                <a href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to wishlist"><i class="pe-7s-like"></i></a>
                                                <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick_view"><span data-bs-toggle="tooltip"
                                                        data-bs-placement="left" title="Quick View"><i
                                                            class="pe-7s-search"></i></span></a>
                                            </div>
                                            <div class="cart-hover">
                                                <button class="btn btn-cart">add to cart</button>
                                            </div>
                                        </figure>
                                        <div class="product-caption text-center">
                                            <div class="product-identity">
                                                <p class="manufacturer-name"><a href="product-details.html">Diamond</a>
                                                </p>
                                            </div>
                                            <ul class="color-categories">
                                                <li>
                                                    <a class="c-lightblue" href="#" title="LightSteelblue"></a>
                                                </li>
                                                <li>
                                                    <a class="c-darktan" href="#" title="Darktan"></a>
                                                </li>
                                                <li>
                                                    <a class="c-grey" href="#" title="Grey"></a>
                                                </li>
                                                <li>
                                                    <a class="c-brown" href="#" title="Brown"></a>
                                                </li>
                                            </ul>
                                            <h6 class="product-name">
                                                <a href="product-details.html">Perfect Diamond Jewelry</a>
                                            </h6>
                                            <div class="price-box">
                                                <span class="price-regular">$99.00</span>
                                                <span class="price-old"><del></del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product item end -->

                                    <!-- product item start -->
                                    <div class="product-item">
                                        <figure class="product-thumb">
                                            <a href="product-details.html">
                                                <img class="pri-img" src="/assets/client/img/product/product-9.jpg"
                                                    alt="product">
                                                <img class="sec-img" src="/assets/client/img/product/product-10.jpg"
                                                    alt="product">
                                            </a>
                                            <div class="product-badge">
                                                <div class="product-label new">
                                                    <span>sale</span>
                                                </div>
                                                <div class="product-label discount">
                                                    <span>15%</span>
                                                </div>
                                            </div>
                                            <div class="button-group">
                                                <a href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to wishlist"><i class="pe-7s-like"></i></a>
                                                <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick_view"><span data-bs-toggle="tooltip"
                                                        data-bs-placement="left" title="Quick View"><i
                                                            class="pe-7s-search"></i></span></a>
                                            </div>
                                            <div class="cart-hover">
                                                <button class="btn btn-cart">add to cart</button>
                                            </div>
                                        </figure>
                                        <div class="product-caption text-center">
                                            <div class="product-identity">
                                                <p class="manufacturer-name"><a href="product-details.html">silver</a></p>
                                            </div>
                                            <ul class="color-categories">
                                                <li>
                                                    <a class="c-lightblue" href="#" title="LightSteelblue"></a>
                                                </li>
                                                <li>
                                                    <a class="c-darktan" href="#" title="Darktan"></a>
                                                </li>
                                                <li>
                                                    <a class="c-grey" href="#" title="Grey"></a>
                                                </li>
                                                <li>
                                                    <a class="c-brown" href="#" title="Brown"></a>
                                                </li>
                                            </ul>
                                            <h6 class="product-name">
                                                <a href="product-details.html">Diamond Exclusive Ornament</a>
                                            </h6>
                                            <div class="price-box">
                                                <span class="price-regular">$55.00</span>
                                                <span class="price-old"><del>$75.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product item end -->

                                    <!-- product item start -->
                                    <div class="product-item">
                                        <figure class="product-thumb">
                                            <a href="product-details.html">
                                                <img class="pri-img" src="/assets/client/img/product/product-10.jpg"
                                                    alt="product">
                                                <img class="sec-img" src="/assets/client/img/product/product-9.jpg"
                                                    alt="product">
                                            </a>
                                            <div class="product-badge">
                                                <div class="product-label new">
                                                    <span>new</span>
                                                </div>
                                                <div class="product-label discount">
                                                    <span>20%</span>
                                                </div>
                                            </div>
                                            <div class="button-group">
                                                <a href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to wishlist"><i class="pe-7s-like"></i></a>
                                                <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick_view"><span data-bs-toggle="tooltip"
                                                        data-bs-placement="left" title="Quick View"><i
                                                            class="pe-7s-search"></i></span></a>
                                            </div>
                                            <div class="cart-hover">
                                                <button class="btn btn-cart">add to cart</button>
                                            </div>
                                        </figure>
                                        <div class="product-caption text-center">
                                            <div class="product-identity">
                                                <p class="manufacturer-name"><a href="product-details.html">mony</a></p>
                                            </div>
                                            <ul class="color-categories">
                                                <li>
                                                    <a class="c-lightblue" href="#" title="LightSteelblue"></a>
                                                </li>
                                                <li>
                                                    <a class="c-darktan" href="#" title="Darktan"></a>
                                                </li>
                                                <li>
                                                    <a class="c-grey" href="#" title="Grey"></a>
                                                </li>
                                                <li>
                                                    <a class="c-brown" href="#" title="Brown"></a>
                                                </li>
                                            </ul>
                                            <h6 class="product-name">
                                                <a href="product-details.html">Citygold Exclusive Ring</a>
                                            </h6>
                                            <div class="price-box">
                                                <span class="price-regular">$60.00</span>
                                                <span class="price-old"><del>$70.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product item end -->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab3">
                                <div class="product-carousel-4 slick-row-10 slick-arrow-style">
                                    <!-- product item start -->
                                    <div class="product-item">
                                        <figure class="product-thumb">
                                            <a href="product-details.html">
                                                <img class="pri-img" src="/assets/client/img/product/product-11.jpg"
                                                    alt="product">
                                                <img class="sec-img" src="/assets/client/img/product/product-8.jpg"
                                                    alt="product">
                                            </a>
                                            <div class="product-badge">
                                                <div class="product-label new">
                                                    <span>new</span>
                                                </div>
                                                <div class="product-label discount">
                                                    <span>10%</span>
                                                </div>
                                            </div>
                                            <div class="button-group">
                                                <a href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to wishlist"><i class="pe-7s-like"></i></a>
                                                <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick_view"><span data-bs-toggle="tooltip"
                                                        data-bs-placement="left" title="Quick View"><i
                                                            class="pe-7s-search"></i></span></a>
                                            </div>
                                            <div class="cart-hover">
                                                <button class="btn btn-cart">add to cart</button>
                                            </div>
                                        </figure>
                                        <div class="product-caption text-center">
                                            <div class="product-identity">
                                                <p class="manufacturer-name"><a href="product-details.html">Gold</a></p>
                                            </div>
                                            <ul class="color-categories">
                                                <li>
                                                    <a class="c-lightblue" href="#" title="LightSteelblue"></a>
                                                </li>
                                                <li>
                                                    <a class="c-darktan" href="#" title="Darktan"></a>
                                                </li>
                                                <li>
                                                    <a class="c-grey" href="#" title="Grey"></a>
                                                </li>
                                                <li>
                                                    <a class="c-brown" href="#" title="Brown"></a>
                                                </li>
                                            </ul>
                                            <h6 class="product-name">
                                                <a href="product-details.html">Perfect Diamond Jewelry</a>
                                            </h6>
                                            <div class="price-box">
                                                <span class="price-regular">$60.00</span>
                                                <span class="price-old"><del>$70.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product item end -->

                                    <!-- product item start -->
                                    <div class="product-item">
                                        <figure class="product-thumb">
                                            <a href="product-details.html">
                                                <img class="pri-img" src="/assets/client/img/product/product-12.jpg"
                                                    alt="product">
                                                <img class="sec-img" src="/assets/client/img/product/product-7.jpg"
                                                    alt="product">
                                            </a>
                                            <div class="product-badge">
                                                <div class="product-label new">
                                                    <span>sale</span>
                                                </div>
                                                <div class="product-label discount">
                                                    <span>new</span>
                                                </div>
                                            </div>
                                            <div class="button-group">
                                                <a href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to wishlist"><i class="pe-7s-like"></i></a>
                                                <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick_view"><span data-bs-toggle="tooltip"
                                                        data-bs-placement="left" title="Quick View"><i
                                                            class="pe-7s-search"></i></span></a>
                                            </div>
                                            <div class="cart-hover">
                                                <button class="btn btn-cart">add to cart</button>
                                            </div>
                                        </figure>
                                        <div class="product-caption text-center">
                                            <div class="product-identity">
                                                <p class="manufacturer-name"><a href="product-details.html">mony</a></p>
                                            </div>
                                            <ul class="color-categories">
                                                <li>
                                                    <a class="c-lightblue" href="#" title="LightSteelblue"></a>
                                                </li>
                                                <li>
                                                    <a class="c-darktan" href="#" title="Darktan"></a>
                                                </li>
                                                <li>
                                                    <a class="c-grey" href="#" title="Grey"></a>
                                                </li>
                                                <li>
                                                    <a class="c-brown" href="#" title="Brown"></a>
                                                </li>
                                            </ul>
                                            <h6 class="product-name">
                                                <a href="product-details.html">Handmade Golden Necklace</a>
                                            </h6>
                                            <div class="price-box">
                                                <span class="price-regular">$50.00</span>
                                                <span class="price-old"><del>$80.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product item end -->

                                    <!-- product item start -->
                                    <div class="product-item">
                                        <figure class="product-thumb">
                                            <a href="product-details.html">
                                                <img class="pri-img" src="/assets/client/img/product/product-13.jpg"
                                                    alt="product">
                                                <img class="sec-img" src="/assets/client/img/product/product-6.jpg"
                                                    alt="product">
                                            </a>
                                            <div class="product-badge">
                                                <div class="product-label new">
                                                    <span>new</span>
                                                </div>
                                            </div>
                                            <div class="button-group">
                                                <a href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to wishlist"><i class="pe-7s-like"></i></a>
                                                <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick_view"><span data-bs-toggle="tooltip"
                                                        data-bs-placement="left" title="Quick View"><i
                                                            class="pe-7s-search"></i></span></a>
                                            </div>
                                            <div class="cart-hover">
                                                <button class="btn btn-cart">add to cart</button>
                                            </div>
                                        </figure>
                                        <div class="product-caption text-center">
                                            <div class="product-identity">
                                                <p class="manufacturer-name"><a href="product-details.html">Diamond</a>
                                                </p>
                                            </div>
                                            <ul class="color-categories">
                                                <li>
                                                    <a class="c-lightblue" href="#" title="LightSteelblue"></a>
                                                </li>
                                                <li>
                                                    <a class="c-darktan" href="#" title="Darktan"></a>
                                                </li>
                                                <li>
                                                    <a class="c-grey" href="#" title="Grey"></a>
                                                </li>
                                                <li>
                                                    <a class="c-brown" href="#" title="Brown"></a>
                                                </li>
                                            </ul>
                                            <h6 class="product-name">
                                                <a href="product-details.html">Perfect Diamond Jewelry</a>
                                            </h6>
                                            <div class="price-box">
                                                <span class="price-regular">$99.00</span>
                                                <span class="price-old"><del></del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product item end -->

                                    <!-- product item start -->
                                    <div class="product-item">
                                        <figure class="product-thumb">
                                            <a href="product-details.html">
                                                <img class="pri-img" src="/assets/client/img/product/product-14.jpg"
                                                    alt="product">
                                                <img class="sec-img" src="/assets/client/img/product/product-5.jpg"
                                                    alt="product">
                                            </a>
                                            <div class="product-badge">
                                                <div class="product-label new">
                                                    <span>sale</span>
                                                </div>
                                                <div class="product-label discount">
                                                    <span>15%</span>
                                                </div>
                                            </div>
                                            <div class="button-group">
                                                <a href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to wishlist"><i class="pe-7s-like"></i></a>
                                                <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick_view"><span data-bs-toggle="tooltip"
                                                        data-bs-placement="left" title="Quick View"><i
                                                            class="pe-7s-search"></i></span></a>
                                            </div>
                                            <div class="cart-hover">
                                                <button class="btn btn-cart">add to cart</button>
                                            </div>
                                        </figure>
                                        <div class="product-caption text-center">
                                            <div class="product-identity">
                                                <p class="manufacturer-name"><a href="product-details.html">silver</a></p>
                                            </div>
                                            <ul class="color-categories">
                                                <li>
                                                    <a class="c-lightblue" href="#" title="LightSteelblue"></a>
                                                </li>
                                                <li>
                                                    <a class="c-darktan" href="#" title="Darktan"></a>
                                                </li>
                                                <li>
                                                    <a class="c-grey" href="#" title="Grey"></a>
                                                </li>
                                                <li>
                                                    <a class="c-brown" href="#" title="Brown"></a>
                                                </li>
                                            </ul>
                                            <h6 class="product-name">
                                                <a href="product-details.html">Diamond Exclusive Ornament</a>
                                            </h6>
                                            <div class="price-box">
                                                <span class="price-regular">$55.00</span>
                                                <span class="price-old"><del>$75.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product item end -->

                                    <!-- product item start -->
                                    <div class="product-item">
                                        <figure class="product-thumb">
                                            <a href="product-details.html">
                                                <img class="pri-img" src="/assets/client/img/product/product-15.jpg"
                                                    alt="product">
                                                <img class="sec-img" src="/assets/client/img/product/product-4.jpg"
                                                    alt="product">
                                            </a>
                                            <div class="product-badge">
                                                <div class="product-label new">
                                                    <span>new</span>
                                                </div>
                                                <div class="product-label discount">
                                                    <span>20%</span>
                                                </div>
                                            </div>
                                            <div class="button-group">
                                                <a href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to wishlist"><i class="pe-7s-like"></i></a>
                                                <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick_view"><span data-bs-toggle="tooltip"
                                                        data-bs-placement="left" title="Quick View"><i
                                                            class="pe-7s-search"></i></span></a>
                                            </div>
                                            <div class="cart-hover">
                                                <button class="btn btn-cart">add to cart</button>
                                            </div>
                                        </figure>
                                        <div class="product-caption text-center">
                                            <div class="product-identity">
                                                <p class="manufacturer-name"><a href="product-details.html">mony</a></p>
                                            </div>
                                            <ul class="color-categories">
                                                <li>
                                                    <a class="c-lightblue" href="#" title="LightSteelblue"></a>
                                                </li>
                                                <li>
                                                    <a class="c-darktan" href="#" title="Darktan"></a>
                                                </li>
                                                <li>
                                                    <a class="c-grey" href="#" title="Grey"></a>
                                                </li>
                                                <li>
                                                    <a class="c-brown" href="#" title="Brown"></a>
                                                </li>
                                            </ul>
                                            <h6 class="product-name">
                                                <a href="product-details.html">Citygold Exclusive Ring</a>
                                            </h6>
                                            <div class="price-box">
                                                <span class="price-regular">$60.00</span>
                                                <span class="price-old"><del>$70.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product item end -->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab4">
                                <div class="product-carousel-4 slick-row-10 slick-arrow-style">
                                    <!-- product item start -->
                                    <div class="product-item">
                                        <figure class="product-thumb">
                                            <a href="product-details.html">
                                                <img class="pri-img" src="/assets/client/img/product/product-16.jpg"
                                                    alt="product">
                                                <img class="sec-img" src="/assets/client/img/product/product-3.jpg"
                                                    alt="product">
                                            </a>
                                            <div class="product-badge">
                                                <div class="product-label new">
                                                    <span>new</span>
                                                </div>
                                                <div class="product-label discount">
                                                    <span>10%</span>
                                                </div>
                                            </div>
                                            <div class="button-group">
                                                <a href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to wishlist"><i class="pe-7s-like"></i></a>
                                                <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick_view"><span data-bs-toggle="tooltip"
                                                        data-bs-placement="left" title="Quick View"><i
                                                            class="pe-7s-search"></i></span></a>
                                            </div>
                                            <div class="cart-hover">
                                                <button class="btn btn-cart">add to cart</button>
                                            </div>
                                        </figure>
                                        <div class="product-caption text-center">
                                            <div class="product-identity">
                                                <p class="manufacturer-name"><a href="product-details.html">Gold</a></p>
                                            </div>
                                            <ul class="color-categories">
                                                <li>
                                                    <a class="c-lightblue" href="#" title="LightSteelblue"></a>
                                                </li>
                                                <li>
                                                    <a class="c-darktan" href="#" title="Darktan"></a>
                                                </li>
                                                <li>
                                                    <a class="c-grey" href="#" title="Grey"></a>
                                                </li>
                                                <li>
                                                    <a class="c-brown" href="#" title="Brown"></a>
                                                </li>
                                            </ul>
                                            <h6 class="product-name">
                                                <a href="product-details.html">Perfect Diamond Jewelry</a>
                                            </h6>
                                            <div class="price-box">
                                                <span class="price-regular">$60.00</span>
                                                <span class="price-old"><del>$70.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product item end -->

                                    <!-- product item start -->
                                    <div class="product-item">
                                        <figure class="product-thumb">
                                            <a href="product-details.html">
                                                <img class="pri-img" src="/assets/client/img/product/product-17.jpg"
                                                    alt="product">
                                                <img class="sec-img" src="/assets/client/img/product/product-2.jpg"
                                                    alt="product">
                                            </a>
                                            <div class="product-badge">
                                                <div class="product-label new">
                                                    <span>sale</span>
                                                </div>
                                                <div class="product-label discount">
                                                    <span>new</span>
                                                </div>
                                            </div>
                                            <div class="button-group">
                                                <a href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to wishlist"><i class="pe-7s-like"></i></a>
                                                <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick_view"><span data-bs-toggle="tooltip"
                                                        data-bs-placement="left" title="Quick View"><i
                                                            class="pe-7s-search"></i></span></a>
                                            </div>
                                            <div class="cart-hover">
                                                <button class="btn btn-cart">add to cart</button>
                                            </div>
                                        </figure>
                                        <div class="product-caption text-center">
                                            <div class="product-identity">
                                                <p class="manufacturer-name"><a href="product-details.html">mony</a></p>
                                            </div>
                                            <ul class="color-categories">
                                                <li>
                                                    <a class="c-lightblue" href="#" title="LightSteelblue"></a>
                                                </li>
                                                <li>
                                                    <a class="c-darktan" href="#" title="Darktan"></a>
                                                </li>
                                                <li>
                                                    <a class="c-grey" href="#" title="Grey"></a>
                                                </li>
                                                <li>
                                                    <a class="c-brown" href="#" title="Brown"></a>
                                                </li>
                                            </ul>
                                            <h6 class="product-name">
                                                <a href="product-details.html">Handmade Golden Necklace</a>
                                            </h6>
                                            <div class="price-box">
                                                <span class="price-regular">$50.00</span>
                                                <span class="price-old"><del>$80.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product item end -->

                                    <!-- product item start -->
                                    <div class="product-item">
                                        <figure class="product-thumb">
                                            <a href="product-details.html">
                                                <img class="pri-img" src="/assets/client/img/product/product-18.jpg"
                                                    alt="product">
                                                <img class="sec-img" src="/assets/client/img/product/product-1.jpg"
                                                    alt="product">
                                            </a>
                                            <div class="product-badge">
                                                <div class="product-label new">
                                                    <span>new</span>
                                                </div>
                                            </div>
                                            <div class="button-group">
                                                <a href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to wishlist"><i class="pe-7s-like"></i></a>
                                                <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick_view"><span data-bs-toggle="tooltip"
                                                        data-bs-placement="left" title="Quick View"><i
                                                            class="pe-7s-search"></i></span></a>
                                            </div>
                                            <div class="cart-hover">
                                                <button class="btn btn-cart">add to cart</button>
                                            </div>
                                        </figure>
                                        <div class="product-caption text-center">
                                            <div class="product-identity">
                                                <p class="manufacturer-name"><a href="product-details.html">Diamond</a>
                                                </p>
                                            </div>
                                            <ul class="color-categories">
                                                <li>
                                                    <a class="c-lightblue" href="#" title="LightSteelblue"></a>
                                                </li>
                                                <li>
                                                    <a class="c-darktan" href="#" title="Darktan"></a>
                                                </li>
                                                <li>
                                                    <a class="c-grey" href="#" title="Grey"></a>
                                                </li>
                                                <li>
                                                    <a class="c-brown" href="#" title="Brown"></a>
                                                </li>
                                            </ul>
                                            <h6 class="product-name">
                                                <a href="product-details.html">Perfect Diamond Jewelry</a>
                                            </h6>
                                            <div class="price-box">
                                                <span class="price-regular">$99.00</span>
                                                <span class="price-old"><del></del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product item end -->

                                    <!-- product item start -->
                                    <div class="product-item">
                                        <figure class="product-thumb">
                                            <a href="product-details.html">
                                                <img class="pri-img" src="/assets/client/img/product/product-12.jpg"
                                                    alt="product">
                                                <img class="sec-img" src="/assets/client/img/product/product-9.jpg"
                                                    alt="product">
                                            </a>
                                            <div class="product-badge">
                                                <div class="product-label new">
                                                    <span>sale</span>
                                                </div>
                                                <div class="product-label discount">
                                                    <span>15%</span>
                                                </div>
                                            </div>
                                            <div class="button-group">
                                                <a href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to wishlist"><i class="pe-7s-like"></i></a>
                                                <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick_view"><span data-bs-toggle="tooltip"
                                                        data-bs-placement="left" title="Quick View"><i
                                                            class="pe-7s-search"></i></span></a>
                                            </div>
                                            <div class="cart-hover">
                                                <button class="btn btn-cart">add to cart</button>
                                            </div>
                                        </figure>
                                        <div class="product-caption text-center">
                                            <div class="product-identity">
                                                <p class="manufacturer-name"><a href="product-details.html">silver</a>
                                                </p>
                                            </div>
                                            <ul class="color-categories">
                                                <li>
                                                    <a class="c-lightblue" href="#" title="LightSteelblue"></a>
                                                </li>
                                                <li>
                                                    <a class="c-darktan" href="#" title="Darktan"></a>
                                                </li>
                                                <li>
                                                    <a class="c-grey" href="#" title="Grey"></a>
                                                </li>
                                                <li>
                                                    <a class="c-brown" href="#" title="Brown"></a>
                                                </li>
                                            </ul>
                                            <h6 class="product-name">
                                                <a href="product-details.html">Diamond Exclusive Ornament</a>
                                            </h6>
                                            <div class="price-box">
                                                <span class="price-regular">$55.00</span>
                                                <span class="price-old"><del>$75.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product item end -->

                                    <!-- product item start -->
                                    <div class="product-item">
                                        <figure class="product-thumb">
                                            <a href="product-details.html">
                                                <img class="pri-img" src="/assets/client/img/product/product-7.jpg"
                                                    alt="product">
                                                <img class="sec-img" src="/assets/client/img/product/product-14.jpg"
                                                    alt="product">
                                            </a>
                                            <div class="product-badge">
                                                <div class="product-label new">
                                                    <span>new</span>
                                                </div>
                                                <div class="product-label discount">
                                                    <span>20%</span>
                                                </div>
                                            </div>
                                            <div class="button-group">
                                                <a href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to wishlist"><i class="pe-7s-like"></i></a>
                                                <a href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick_view"><span data-bs-toggle="tooltip"
                                                        data-bs-placement="left" title="Quick View"><i
                                                            class="pe-7s-search"></i></span></a>
                                            </div>
                                            <div class="cart-hover">
                                                <button class="btn btn-cart">add to cart</button>
                                            </div>
                                        </figure>
                                        <div class="product-caption text-center">
                                            <div class="product-identity">
                                                <p class="manufacturer-name"><a href="product-details.html">mony</a></p>
                                            </div>
                                            <ul class="color-categories">
                                                <li>
                                                    <a class="c-lightblue" href="#" title="LightSteelblue"></a>
                                                </li>
                                                <li>
                                                    <a class="c-darktan" href="#" title="Darktan"></a>
                                                </li>
                                                <li>
                                                    <a class="c-grey" href="#" title="Grey"></a>
                                                </li>
                                                <li>
                                                    <a class="c-brown" href="#" title="Brown"></a>
                                                </li>
                                            </ul>
                                            <h6 class="product-name">
                                                <a href="product-details.html">Citygold Exclusive Ring</a>
                                            </h6>
                                            <div class="price-box">
                                                <span class="price-regular">$60.00</span>
                                                <span class="price-old"><del>$70.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product item end -->
                                </div>
                            </div>
                        </div>
                        <!-- product tab content end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product area end -->

    <!-- product banner statistics area start -->
    <section class="product-banner-statistics">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="product-banner-carousel slick-row-10">
                        <!-- banner single slide start -->
                        <div class="banner-slide-item">
                            <figure class="banner-statistics">
                                <a href="#">
                                    <img src="/assets/client/img/banner/img1-middle.jpg" alt="product banner">
                                </a>
                                <div class="banner-content banner-content_style2">
                                    <h5 class="banner-text3"><a href="#">BRACELATES</a></h5>
                                </div>
                            </figure>
                        </div>
                        <!-- banner single slide start -->
                        <!-- banner single slide start -->
                        <div class="banner-slide-item">
                            <figure class="banner-statistics">
                                <a href="#">
                                    <img src="/assets/client/img/banner/img2-middle.jpg" alt="product banner">
                                </a>
                                <div class="banner-content banner-content_style2">
                                    <h5 class="banner-text3"><a href="#">EARRINGS</a></h5>
                                </div>
                            </figure>
                        </div>
                        <!-- banner single slide start -->
                        <!-- banner single slide start -->
                        <div class="banner-slide-item">
                            <figure class="banner-statistics">
                                <a href="#">
                                    <img src="/assets/client/img/banner/img3-middle.jpg" alt="product banner">
                                </a>
                                <div class="banner-content banner-content_style2">
                                    <h5 class="banner-text3"><a href="#">NECJLACES</a></h5>
                                </div>
                            </figure>
                        </div>
                        <!-- banner single slide start -->
                        <!-- banner single slide start -->
                        <div class="banner-slide-item">
                            <figure class="banner-statistics">
                                <a href="#">
                                    <img src="/assets/client/img/banner/img4-middle.jpg" alt="product banner">
                                </a>
                                <div class="banner-content banner-content_style2">
                                    <h5 class="banner-text3"><a href="#">RINGS</a></h5>
                                </div>
                            </figure>
                        </div>
                        <!-- banner single slide start -->
                        <!-- banner single slide start -->
                        <div class="banner-slide-item">
                            <figure class="banner-statistics">
                                <a href="#">
                                    <img src="/assets/client/img/banner/img5-middle.jpg" alt="product banner">
                                </a>
                                <div class="banner-content banner-content_style2">
                                    <h5 class="banner-text3"><a href="#">PEARLS</a></h5>
                                </div>
                            </figure>
                        </div>
                        <!-- banner single slide start -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product banner statistics area end -->

    <!-- featured product area start -->
    <section class="feature-product section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- section title start -->
                    <div class="section-title text-center">
                        <h2 class="title">featured products</h2>
                        <p class="sub-title">Add featured products to weekly lineup</p>
                    </div>
                    <!-- section title start -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-carousel-4_2 slick-row-10 slick-arrow-style">
                        <!-- product item start -->
                        @foreach ($products as $item)
                            <!-- product item start -->
                            @include('clients.components.product-item')
                            <!-- product item end -->
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- featured product area end -->

    <!-- testimonial area start -->
    <section class="testimonial-area section-padding bg-img" data-bg="/assets/client/img/testimonial/testimonials-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- section title start -->
                    <div class="section-title text-center">
                        <h2 class="title">testimonials</h2>
                        <p class="sub-title">What they say</p>
                    </div>
                    <!-- section title start -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-thumb-wrapper">
                        <div class="testimonial-thumb-carousel">
                            <div class="testimonial-thumb">
                                <img src="/assets/client/img/testimonial/testimonial-1.png" alt="testimonial-thumb">
                            </div>
                            <div class="testimonial-thumb">
                                <img src="/assets/client/img/testimonial/testimonial-2.png" alt="testimonial-thumb">
                            </div>
                            <div class="testimonial-thumb">
                                <img src="/assets/client/img/testimonial/testimonial-3.png" alt="testimonial-thumb">
                            </div>
                            <div class="testimonial-thumb">
                                <img src="/assets/client/img/testimonial/testimonial-2.png" alt="testimonial-thumb">
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-content-wrapper">
                        <div class="testimonial-content-carousel">
                            <div class="testimonial-content">
                                <p>Vivamus a lobortis ipsum, vel condimentum magna. Etiam id turpis tortor. Nunc
                                    scelerisque, nisi a blandit varius, nunc purus venenatis ligula, sed venenatis orci
                                    augue nec sapien. Cum sociis natoque</p>
                                <div class="ratings">
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                </div>
                                <h5 class="testimonial-author">lindsy niloms</h5>
                            </div>
                            <div class="testimonial-content">
                                <p>Vivamus a lobortis ipsum, vel condimentum magna. Etiam id turpis tortor. Nunc
                                    scelerisque, nisi a blandit varius, nunc purus venenatis ligula, sed venenatis orci
                                    augue nec sapien. Cum sociis natoque</p>
                                <div class="ratings">
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                </div>
                                <h5 class="testimonial-author">Daisy Millan</h5>
                            </div>
                            <div class="testimonial-content">
                                <p>Vivamus a lobortis ipsum, vel condimentum magna. Etiam id turpis tortor. Nunc
                                    scelerisque, nisi a blandit varius, nunc purus venenatis ligula, sed venenatis orci
                                    augue nec sapien. Cum sociis natoque</p>
                                <div class="ratings">
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                </div>
                                <h5 class="testimonial-author">Anamika lusy</h5>
                            </div>
                            <div class="testimonial-content">
                                <p>Vivamus a lobortis ipsum, vel condimentum magna. Etiam id turpis tortor. Nunc
                                    scelerisque, nisi a blandit varius, nunc purus venenatis ligula, sed venenatis orci
                                    augue nec sapien. Cum sociis natoque</p>
                                <div class="ratings">
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                </div>
                                <h5 class="testimonial-author">Maria Mora</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial area end -->

    <!-- group product start -->
    <section class="group-product-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="group-product-banner">
                        <figure class="banner-statistics">
                            <a href="#">
                                <img src="/assets/client/img/banner/img-bottom-banner.jpg" alt="product banner">
                            </a>
                            <div class="banner-content banner-content_style3 text-center">
                                <h6 class="banner-text1">BEAUTIFUL</h6>
                                <h2 class="banner-text2">Wedding Rings</h2>
                                <a href="shop.html" class="btn btn-text">Shop Now</a>
                            </div>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories-group-wrapper">
                        <!-- section title start -->
                        <div class="section-title-append">
                            <h4>best seller product</h4>
                            <div class="slick-append"></div>
                        </div>
                        <!-- section title start -->

                        <!-- group list carousel start -->
                        <div class="group-list-item-wrapper">
                            <div class="group-list-carousel">
                                @foreach ($products as $item)
                                    <!-- group list item start -->
                                    <div class="group-slide-item">
                                        <div class="group-item">
                                            <div class="group-item-thumb">
                                                <a href="{{ route('product.detail', $item->id) }}">
                                                    <img src="{{ Storage::url($item->img_thumnail) }}" alt="">
                                                </a>
                                            </div>
                                            <div class="group-item-desc">
                                                <h5 class="group-product-name"><a
                                                        href="{{ route('product.detail', $item->id) }}">
                                                        {{ $item->name }}</a></h5>
                                                <div class="price-box">
                                                    @if ($item->price_sale != null)
                                                        <span class="price-regular">
                                                            {{ number_format($item->price_sale, 0, '', '.') }} đ</span>
                                                        <span class="price-old"><del>{{ number_format($item->price_regular, 0, '', '.') }}
                                                                đ</del></span>
                                                    @else
                                                        <span class="price-regular">
                                                            {{ number_format($item->price_regular, 0, '', '.') }} đ</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- group list item end -->
                                @endforeach
                            </div>
                        </div>
                        <!-- group list carousel start -->
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories-group-wrapper">
                        <!-- section title start -->
                        <div class="section-title-append">
                            <h4>on-sale product</h4>
                            <div class="slick-append"></div>
                        </div>
                        <!-- section title start -->

                        <!-- group list carousel start -->
                        <div class="group-list-item-wrapper">
                            <div class="group-list-carousel">
                                @foreach ($products as $item)
                                    <!-- group list item start -->
                                    <div class="group-slide-item">
                                        <div class="group-item">
                                            <div class="group-item-thumb">
                                                <a href="{{ route('product.detail', $item->id) }}">
                                                    <img src="{{ Storage::url($item->img_thumnail) }}" alt="">
                                                </a>
                                            </div>
                                            <div class="group-item-desc">
                                                <h5 class="group-product-name"><a
                                                        href="{{ route('product.detail', $item->id) }}">
                                                        {{ $item->name }}</a></h5>
                                                <div class="price-box">
                                                    @if ($item->price_sale != null)
                                                        <span class="price-regular">
                                                            {{ number_format($item->price_sale, 0, '', '.') }} đ</span>
                                                        <span class="price-old"><del>{{ number_format($item->price_regular, 0, '', '.') }}
                                                                đ</del></span>
                                                    @else
                                                        <span class="price-regular">
                                                            {{ number_format($item->price_regular, 0, '', '.') }} đ</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- group list item end -->
                                @endforeach
                            </div>
                        </div>
                        <!-- group list carousel start -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- group product end -->

    <!-- latest blog area start -->
    <section class="latest-blog-area section-padding pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- section title start -->
                    <div class="section-title text-center">
                        <h2 class="title">latest blogs</h2>
                        <p class="sub-title">There are latest blog posts</p>
                    </div>
                    <!-- section title start -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="blog-carousel-active slick-row-10 slick-arrow-style">
                        <!-- blog post item start -->
                        <div class="blog-post-item">
                            <figure class="blog-thumb">
                                <a href="blog-details.html">
                                    <img src="/assets/client/img/blog/blog-img1.jpg" alt="blog image">
                                </a>
                            </figure>
                            <div class="b   log-content">
                                <div class="blog-meta">
                                    <p>25/03/2019 | <a href="#">Corano</a></p>
                                </div>
                                <h5 class="blog-title">
                                    <a href="blog-details.html">Celebrity Daughter Opens Up About Having Her Eye Color
                                        Changed</a>
                                </h5>
                            </div>
                        </div>
                        <!-- blog post item end -->

                        <!-- blog post item start -->
                        <div class="blog-post-item">
                            <figure class="blog-thumb">
                                <a href="blog-details.html">
                                    <img src="/assets/client/img/blog/blog-img2.jpg" alt="blog image">
                                </a>
                            </figure>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <p>25/03/2019 | <a href="#">Corano</a></p>
                                </div>
                                <h5 class="blog-title">
                                    <a href="blog-details.html">Children Left Home Alone For 4 Days In TV series
                                        Experiment</a>
                                </h5>
                            </div>
                        </div>
                        <!-- blog post item end -->

                        <!-- blog post item start -->
                        <div class="blog-post-item">
                            <figure class="blog-thumb">
                                <a href="blog-details.html">
                                    <img src="/assets/client/img/blog/blog-img3.jpg" alt="blog image">
                                </a>
                            </figure>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <p>25/03/2019 | <a href="#">Corano</a></p>
                                </div>
                                <h5 class="blog-title">
                                    <a href="blog-details.html">Lotto Winner Offering Up Money To Any Man That Will Date
                                        Her</a>
                                </h5>
                            </div>
                        </div>
                        <!-- blog post item end -->

                        <!-- blog post item start -->
                        <div class="blog-post-item">
                            <figure class="blog-thumb">
                                <a href="blog-details.html">
                                    <img src="/assets/client/img/blog/blog-img4.jpg" alt="blog image">
                                </a>
                            </figure>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <p>25/03/2019 | <a href="#">Corano</a></p>
                                </div>
                                <h5 class="blog-title">
                                    <a href="blog-details.html">People are Willing Lie When Comes Money, According to
                                        Research</a>
                                </h5>
                            </div>
                        </div>
                        <!-- blog post item end -->

                        <!-- blog post item start -->
                        <div class="blog-post-item">
                            <figure class="blog-thumb">
                                <a href="blog-details.html">
                                    <img src="/assets/client/img/blog/blog-img5.jpg" alt="blog image">
                                </a>
                            </figure>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <p>25/03/2019 | <a href="#">Corano</a></p>
                                </div>
                                <h5 class="blog-title">
                                    <a href="blog-details.html">romantic Love Stories Of Hollywoodâ€™s Biggest
                                        Celebrities</a>
                                </h5>
                            </div>
                        </div>
                        <!-- blog post item end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- latest blog area end -->

    <!-- brand logo area start -->
    <div class="brand-logo section-padding pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand-logo-carousel slick-row-10 slick-arrow-style">
                        <!-- single brand start -->
                        <div class="brand-item">
                            <a href="#">
                                <img src="/assets/client/img/brand/1.png" alt="">
                            </a>
                        </div>
                        <!-- single brand end -->

                        <!-- single brand start -->
                        <div class="brand-item">
                            <a href="#">
                                <img src="/assets/client/img/brand/2.png" alt="">
                            </a>
                        </div>
                        <!-- single brand end -->

                        <!-- single brand start -->
                        <div class="brand-item">
                            <a href="#">
                                <img src="/assets/client/img/brand/3.png" alt="">
                            </a>
                        </div>
                        <!-- single brand end -->

                        <!-- single brand start -->
                        <div class="brand-item">
                            <a href="#">
                                <img src="/assets/client/img/brand/4.png" alt="">
                            </a>
                        </div>
                        <!-- single brand end -->

                        <!-- single brand start -->
                        <div class="brand-item">
                            <a href="#">
                                <img src="/assets/client/img/brand/5.png" alt="">
                            </a>
                        </div>
                        <!-- single brand end -->

                        <!-- single brand start -->
                        <div class="brand-item">
                            <a href="#">
                                <img src="/assets/client/img/brand/6.png" alt="">
                            </a>
                        </div>
                        <!-- single brand end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand logo area end -->
@endsection
