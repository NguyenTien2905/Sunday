<header class="header-area header-wide">
    <!-- main header start -->
    <div class="main-header d-none d-lg-block">
        <!-- header top start -->
        <div class="header-top bdr-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="welcome-message">
                            <p>Welcome to Corano Jewelry online store</p>
                        </div>
                    </div>
                    <div class="col-lg-6 text-right">
                        <div class="header-top-settings">
                            <ul class="nav align-items-center justify-content-end">
                                <li class="curreny-wrap">
                                    $ Currency
                                    <i class="fa fa-angle-down"></i>
                                    <ul class="dropdown-list curreny-list">
                                        <li><a href="#">$ USD</a></li>
                                        <li><a href="#">€ EURO</a></li>
                                    </ul>
                                </li>
                                <li class="language">
                                    <img src="/assets/client/img/icon/en.png" alt="flag"> English
                                    <i class="fa fa-angle-down"></i>
                                    <ul class="dropdown-list">
                                        <li><a href="#"><img src="/assets/client/img/icon/en.png" alt="flag">
                                                english</a></li>
                                        <li><a href="#"><img src="/assets/client/img/icon/fr.png" alt="flag">
                                                french</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header top end -->

        <!-- header middle area start -->
        <div class="header-main-area sticky">
            <div class="container">
                <div class="row align-items-center position-relative">

                    <!-- start logo area -->
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="{{ route('client.home') }}">
                                <img src="/assets/client/img/logo/logo.png" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <!-- start logo area -->

                    <!-- main menu area start -->
                    <div class="col-lg-6 position-static">
                        <div class="main-menu-area">
                            <div class="main-menu">
                                <!-- main menu navbar start -->
                                <nav class="desktop-menu">
                                    <ul>
                                        <li class="active"><a href="{{ route('client.home') }}">Trang chủ</a></li>
                                        <li><a href="{{ route('client.introduce') }}">Giới thiệu</a></li>
                                        <li><a href="{{ route('product.getAll') }}">Sản phẩm<i
                                                    class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown">
                                                @php
                                                    $categories = App\Models\Category::all();
                                                @endphp
                                                @foreach ($categories as $item)
                                                    <li><a
                                                            href="{{ route('product.getProbyCat', $item->id) }}">{{ $item->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li><a href="">Chương trình khuyến mãi</a></li>
                                        <li><a href="{{ route('client.contact') }}">Liên hệ</a></li>
                                    </ul>
                                </nav>
                                <!-- main menu navbar end -->
                            </div>
                        </div>
                    </div>
                    <!-- main menu area end -->

                    <!-- mini cart area start -->
                    <div class="col-lg-4">
                        <div
                            class="header-right d-flex align-items-center justify-content-xl-between justify-content-lg-end">
                            <div class="header-search-container">
                                <button class="search-trigger d-xl-none d-lg-block"><i
                                        class="pe-7s-search"></i></button>
                                <form class="header-search-box d-lg-none d-xl-block">
                                    <input type="text" placeholder="Search entire store hire"
                                        class="header-search-field">
                                    <button class="header-search-btn"><i class="pe-7s-search"></i></button>
                                </form>
                            </div>
                            <div class="header-configure-area">
                                <ul class="nav justify-content-end">
                                    <li class="user-hover">
                                        <a href="#">
                                            <i class="pe-7s-user"></i>
                                        </a>
                                        <ul class="dropdown-list">
                                            <li><a href="{{ route('login') }}">Login</a></li>
                                            <li><a href="{{ route('register') }}">Register</a></li>
                                            @if (Auth::check())
                                                <li><a href="">My account</a></li>
                                                <li><a href="{{ route('orders.index') }}">My order</a></li>
                                                <li>
                                                    <form action="{{ route('logout') }}" method="post">
                                                        @csrf
                                                        <button type="submit" style="none">Logout</button>
                                                    </form>
                                            @endif

                                        </ul>
                                    </li>
                                    <li>
                                        <a href="wishlist.html">
                                            <i class="pe-7s-like"></i>
                                            <div class="notification">0</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('cart.list') }}" class="minicart-btn">
                                            <i class="pe-7s-shopbag"></i>
                                            <div class="notification">
                                                {{ session('cart') ? count(session('cart')) : '0' }}
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- mini cart area end -->

                </div>
            </div>
        </div>
        <!-- header middle area end -->
    </div>
    <!-- main header start -->

    <!-- mobile header start -->
    <!-- mobile header start -->
    <div class="mobile-header d-lg-none d-md-block sticky">
        <!--mobile header top start -->
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="mobile-main-header">
                        <div class="mobile-logo">
                            <a href="{{ route('client.home') }}">
                                <img src="/assets/client/img/logo/logo.png" alt="Brand Logo">
                            </a>
                        </div>
                        <div class="mobile-menu-toggler">
                            <div class="mini-cart-wrap">
                                <a href="cart.html">
                                    <i class="pe-7s-shopbag"></i>
                                    <div class="notification">0</div>
                                </a>
                            </div>
                            <button class="mobile-menu-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile header top start -->
    </div>
</header>
