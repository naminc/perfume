
<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'My Application')</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png"/>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
          rel="stylesheet">
          <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/chosen.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/fancybox/source/jquery.fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.scrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/mobile-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
</head>

<body class="home">
<header class="header style7">
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-left">
                <div class="header-message">
                    Welcome to our online store!
                </div>
            </div>
            <div class="top-bar-right">
                <div class="header-language">
                    <div class="stelina-language stelina-dropdown">
                        <a href="#" class="active language-toggle" data-stelina="stelina-dropdown">
								<span>
									Việt Nam (VND)
								</span>
                        </a>
                        <ul class="stelina-submenu">
                            <li class="switcher-option">
                                <a href="#">
										<span>
                                        English (USD)
										</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <ul class="header-user-links">
    <li>
        @if (Auth::check())

            <a href="{{ route('profile') }}">{{ Auth::user()->username }}</a><span>    |    </span>
            <a href="{{ route('logout') }}">Đăng xuất</a>
        @else
            <a href="{{ route('login') }}">Login or Register</a>
        @endif
    </li>
</ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="main-header">
            <div class="row">
                <div class="col-lg-3 col-sm-4 col-md-3 col-xs-7 col-ts-12 header-element">
                    <div class="logo">
                        <a href="/">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="img">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-sm-8 col-md-6 col-xs-5 col-ts-12">
                    <div class="block-search-block">
                        <form class="form-search form-search-width-category">
                            <div class="form-content">
                                <div class="category">
                                    <select title="cate" data-placeholder="All Categories" class="chosen-select"
                                            tabindex="1">
                                        <option value="United States">Accessories</option>
                                        <option value="United Kingdom">Accents</option>
                                        <option value="Afghanistan">Desks</option>
                                        <option value="Aland Islands">Sofas</option>
                                        <option value="Albania">New Arrivals</option>
                                        <option value="Algeria">Bedroom</option>
                                    </select>
                                </div>
                                <div class="inner">
                                    <input type="text" class="input" name="s" value="" placeholder="Search here">
                                </div>
                                <button class="btn-search" type="submit">
                                    <span class="icon-search"></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-12 col-md-3 col-xs-12 col-ts-12">
                    <div class="header-control">
                        <div class="block-minicart stelina-mini-cart block-header stelina-dropdown">
                            <a href="javascript:void(0);" class="shopcart-icon" data-stelina="stelina-dropdown">
                                Cart
                                <span class="count">
									0
									</span>
                            </a>
                            <div class="no-product stelina-submenu">
                                <p class="text">
                                    You have
                                    <span>
											 0 item(s)
										</span>
                                    in your bag
                                </p>
                            </div>
                        </div>
                        <div class="block-account block-header stelina-dropdown">
                        @if (Auth::check())
                        <a href="{{ route('profile') }}" data-stelina="stelina-dropdown">
        <span class="flaticon-user"></span>
    </a>
          @else
    <a href="javascript:void(0);" data-stelina="stelina-dropdown">
        <span class="flaticon-user"></span>
    </a>
    <div class="header-account stelina-submenu">
            <!-- Display Login and Register tabs if user is not logged in -->
            <div class="header-user-form-tabs">
                <ul class="tab-link">
                    <li class="active">
                        <a data-toggle="tab" aria-expanded="true" href="#header-tab-login">Login</a>
                    </li>
                    <li>
                        <a data-toggle="tab" aria-expanded="true" href="#header-tab-register">Register</a>
                    </li>
                </ul>
                <div class="tab-container">
                    <!-- Login Form -->
                    <div id="header-tab-login" class="tab-panel active">
                        <form method="POST" action="{{ route('login') }}" class="login form-login">
                            @csrf
                            @if ($errors->getBag('login')->any())
                                <div>
                                    @foreach ($errors->getBag('login')->all() as $error)
                                        <p class="text-danger">{{ $error }}</p>
                                    @endforeach
                                </div>
                            @endif
                            <p class="form-row form-row-wide">
                                <label class="text">Tài khoản</label>
                                <input name="username" type="text" class="input-text" title="username" placeholder="Username" required>
                            </p>
                            <p class="form-row form-row-wide">
                                <label class="text">Mật khẩu</label>
                                <input name="password" type="password" class="input-text" title="password" placeholder="Password" required>
                            </p>
                            <p class="form-row">
                                <input type="submit" class="button-submit" value="Đăng Nhập">
                            </p>
                        </form>
                    </div>

                    <!-- Register Form -->
                    <div id="header-tab-register" class="tab-panel">
                        <form method="POST" action="{{ route('register') }}" class="register form-register">
                            @csrf
                            @if ($errors->getBag('register')->any())
                                <div>
                                    @foreach ($errors->getBag('register')->all() as $error)
                                        <p class="text-danger">{{ $error }}</p>
                                    @endforeach
                                </div>
                            @endif
                            <p class="form-row form-row-wide">
                                <label class="text">Email</label>
                                <input name="email" type="email" class="input-text" title="email" placeholder="Email" required>
                            </p>
                            <p class="form-row form-row-wide">
                                <label class="text">Tài khoản</label>
                                <input name="username" type="text" class="input-text" title="username" placeholder="Username" required>
                            </p>
                            <p class="form-row form-row-wide">
                                <label class="text">Họ và Tên</label>
                                <input name="fullname" type="text" class="input-text" title="fullname" placeholder="Full Name" required>
                            </p>
                            <p class="form-row form-row-wide">
                                <label class="text">Mật khẩu</label>
                                <input name="password" type="password" class="input-text" title="password" placeholder="Password" required>
                            </p>
                            <p class="form-row">
                                <span class="inline">
                                    <input type="checkbox" id="cb2" name="terms" checked>
                                    <label for="cb2" class="label-text">I agree to <span>Terms & Conditions</span></label>
                                </span>
                            </p>
                            <p class="form-row">
                                <input type="submit" class="button-submit" value="Đăng Ký">
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        
    </div>
    @endif
</div>

                        <a class="menu-bar mobile-navigation menu-toggle" href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav-container">
        <div class="container">
            <div class="header-nav-wapper main-menu-wapper">
                <div class="vertical-wapper block-nav-categori">
                    <div class="block-title">
						<span class="icon-bar">
							<span></span>
							<span></span>
							<span></span>
						</span>
                        <span class="text">NAMINC</span>
                    </div>
                   
                </div>
                <div class="header-nav">
                    <div class="container-wapper">
                        <ul class="stelina-clone-mobile-menu stelina-nav main-menu " id="menu-main-menu">
                        <li class="menu-item">
                                <a href="/" class="stelina-menu-item-title" title="Trang chủ">Trang chủ</a>
                            </li>
                            <li class="menu-item menu-item-has-children">
    <a href="#" class="stelina-menu-item-title" title="Sản phẩm">Sản phẩm</a>
    <span class="toggle-submenu"></span>
    <ul class="submenu">
    @foreach($loaiNuocHoas as $loaiNuocHoa)
        <li class="menu-item">
            <a href="{{ route('products.index', ['code' => $loaiNuocHoa->code]) }}">
                {{ $loaiNuocHoa->name }}
            </a>
        </li>
    @endforeach
</ul>

</li>
                            <li class="menu-item  menu-item-has-children item-megamenu">
                                <a href="#" class="stelina-menu-item-title" title="Pages">Pages</a>
                                <span class="toggle-submenu"></span>
                                <div class="submenu mega-menu menu-page">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 menu-page-item">
                                            <div class="stelina-custommenu default">
                                                <h2 class="widgettitle">Shop Pages</h2>
                                                <ul class="menu">
                                                    <li class="menu-item">
                                                        <a href="shoppingcart.html">Shopping Cart</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="checkout.html">Checkout</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="contact.html">Contact us</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="404page.html">404</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="login.html">Login/Register</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 menu-page-item">
                                            <div class="stelina-custommenu default">
                                                <h2 class="widgettitle">Product</h2>
                                                <ul class="menu">
                                                    <li class="menu-item">
                                                        <a href="productdetails-fullwidth.html">Product Fullwidth</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="productdetails-leftsidebar.html">Product left
                                                            sidebar</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="productdetails-rightsidebar.html">Product right
                                                            sidebar</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 menu-page-item">
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 menu-page-item">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="stelina-menu-item-title" title="Blog">Blog</a>
                            </li>
                            <li class="menu-item">
                                <a href="about.html" class="stelina-menu-item-title" title="About">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="header-device-mobile">
    <div class="wapper">
        <div class="item mobile-logo">
            <div class="logo">
                <a href="#">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="img">
                </a>
            </div>
        </div>
        <div class="item item mobile-search-box has-sub">
            <a href="#">
						<span class="icon">
							<i class="fa fa-search" aria-hidden="true"></i>
						</span>
            </a>
            <div class="block-sub">
                <a href="#" class="close">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
                <div class="header-searchform-box">
                    <form class="header-searchform">
                        <div class="searchform-wrap">
                            <input type="text" class="search-input" placeholder="Enter keywords to search...">
                            <input type="submit" class="submit button" value="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="item mobile-settings-box has-sub">
            <a href="#">
						<span class="icon">
							<i class="fa fa-cog" aria-hidden="true"></i>
						</span>
            </a>
            <div class="block-sub">
                <a href="#" class="close">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
                <div class="block-sub-item">
                    <h5 class="block-item-title">Currency</h5>
                    <form class="currency-form stelina-language">
                        <ul class="stelina-language-wrap">
                            <li class="active">
                                <a href="#">
											<span>
												English (USD)
											</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
											<span>
												French (EUR)
											</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
											<span>
												Japanese (JPY)
											</span>
                                </a>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
        <div class="item menu-bar">
            <a class=" mobile-navigation  menu-toggle" href="#">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>
    </div>
</div>
@yield('content')
<!-- <div class="instagram-wrapp">
    <div>
        <h3 class="custommenu-title-blog">
            <i class="flaticon-instagram" aria-hidden="true"></i>
            Instagram Feed
        </h3>
        <div class="stelina-instagram">
            <div class="instagram owl-slick equal-container"
                 data-slick='{"autoplay":false, "autoplaySpeed":1000, "arrows":false, "dots":false, "infinite":true, "speed":800, "rows":1}'
                 data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":5}},{"breakpoint":"1200","settings":{"slidesToShow":4}},{"breakpoint":"992","settings":{"slidesToShow":3}},{"breakpoint":"768","settings":{"slidesToShow":2}},{"breakpoint":"481","settings":{"slidesToShow":2}}]'>
                <div class="item-instagram">
                    <a href="#">
                        <img src="assets/images/item-instagram-1.jpg" alt="img">
                    </a>
                    <span class="text">
                        <i class="icon flaticon-instagram" aria-hidden="true"></i>
			        </span>
                </div>
                <div class="item-instagram">
                    <a href="#">
                        <img src="assets/images/item-instagram-2.jpg" alt="img">
                    </a>
                    <span class="text">
                        <i class="icon flaticon-instagram" aria-hidden="true"></i>
			        </span>
                </div>
                <div class="item-instagram">
                    <a href="#">
                        <img src="assets/images/item-instagram-3.jpg" alt="img">
                    </a>
                    <span class="text">
                        <i class="icon flaticon-instagram" aria-hidden="true"></i>
			        </span>
                </div>
                <div class="item-instagram">
                    <a href="#">
                        <img src="assets/images/item-instagram-4.jpg" alt="img">
                    </a>
                    <span class="text">
                        <i class="icon flaticon-instagram" aria-hidden="true"></i>
			        </span>
                </div>
                <div class="item-instagram">
                    <a href="#">
                        <img src="assets/images/item-instagram-5.jpg" alt="img">
                    </a>
                    <span class="text">
                        <i class="icon flaticon-instagram" aria-hidden="true"></i>
			        </span>
                </div>
            </div>
        </div>
    </div>
</div> -->
@if(!isset($showFooter) || $showFooter)
<footer class="footer style7">
    <div class="container">
        <div class="container-wapper">
            <div class="row">
                <div class="box-footer col-xs-12 col-sm-4 col-md-4 col-lg-4 hidden-sm hidden-md hidden-lg">
                    <div class="stelina-newsletter style1">
                        <div class="newsletter-head">
                            <h3 class="title">Newsletter</h3>
                        </div>
                        <div class="newsletter-form-wrap">
                            <div class="list">
                                Sign up for our free video course and <br/> urban garden inspiration
                            </div>
                            <input type="email" class="input-text email email-newsletter"
                                   placeholder="Your email letter">
                            <button class="button btn-submit submit-newsletter">SUBSCRIBE</button>
                        </div>
                    </div>
                </div>
                <div class="box-footer col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="stelina-custommenu default">
                        <h2 class="widgettitle">Quick Menu</h2>
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="#">New arrivals</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Life style</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Accents</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Tables</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Dining</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="box-footer col-xs-12 col-sm-4 col-md-4 col-lg-4 hidden-xs">
                    <div class="stelina-newsletter style1">
                        <div class="newsletter-head">
                            <h3 class="title">Newsletter</h3>
                        </div>
                        <div class="newsletter-form-wrap">
                            <div class="list">
                                Sign up for our free video course and <br/> urban garden inspiration
                            </div>
                            <input type="email" class="input-text email email-newsletter"
                                   placeholder="Your email letter">
                            <button class="button btn-submit submit-newsletter">SUBSCRIBE</button>
                        </div>
                    </div>
                </div>
                <div class="box-footer col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="stelina-custommenu default">
                        <h2 class="widgettitle">Information</h2>
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="#">FAQs</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Track Order</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Delivery</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Contact Us</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Return</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-end">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="stelina-socials">
                            <ul class="socials">
                                <li>
                                    <a href="#" class="social-item" target="_blank">
                                        <i class="icon fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="social-item" target="_blank">
                                        <i class="icon fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="social-item" target="_blank">
                                        <i class="icon fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="coppyright">
                            Copyright © 2024
                            <a href="#">naminc</a>
                            . All rights reserved
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer-device-mobile">
    <div class="wapper">
        <div class="footer-device-mobile-item device-home">
            <a href="index.html">
					<span class="icon">
						<i class="fa fa-home" aria-hidden="true"></i>
					</span>
                Home
            </a>
        </div>
        <div class="footer-device-mobile-item device-home device-wishlist">
            <a href="#">
					<span class="icon">
						<i class="fa fa-heart" aria-hidden="true"></i>
					</span>
                Wishlist
            </a>
        </div>
        <div class="footer-device-mobile-item device-home device-cart">
            <a href="#">
					<span class="icon">
						<i class="fa fa-shopping-basket" aria-hidden="true"></i>
						<span class="count-icon">
							0
						</span>
					</span>
                <span class="text">Cart</span>
            </a>
        </div>
        <div class="footer-device-mobile-item device-home device-user">
            <a href="login.html">
					<span class="icon">
						<i class="fa fa-user" aria-hidden="true"></i>
					</span>
                Account
            </a>
        </div>
    </div>
</div>
@endif
<a href="#" class="backtotop">
    <i class="fa fa-angle-double-up"></i>
</a>

<script src="{{ asset('assets/js/jquery.plugin-countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/js/mobile-menu.js') }}"></script>
<script src="{{ asset('assets/js/chosen.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.js') }}"></script>
<script src="{{ asset('assets/js/jquery.elevateZoom.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.actual.min.js') }}"></script>
<script src="{{ asset('assets/js/fancybox/source/jquery.fancybox.js') }}"></script>
<script src="{{ asset('assets/js/lightbox.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.thumbs.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/js/frontend-plugin.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>




</body>
</html>