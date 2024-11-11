
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Stelina - Products Grid</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png"/>
	<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<link rel="stylesheet" href="assets/css/jquery-ui.css">
	<link rel="stylesheet" href="assets/css/slick.css">
	<link rel="stylesheet" href="assets/css/chosen.min.css">
	<link rel="stylesheet" href="assets/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.min.css">
	<link rel="stylesheet" href="assets/css/lightbox.min.css">
	<link rel="stylesheet" href="assets/js/fancybox/source/jquery.fancybox.css">
	<link rel="stylesheet" href="assets/css/jquery.scrollbar.min.css">
	<link rel="stylesheet" href="assets/css/mobile-menu.css">
	<link rel="stylesheet" href="assets/fonts/flaticon/flaticon.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="productsgrid-page">
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
									English (USD)
								</span>
						</a>
						<ul class="stelina-submenu">
							<li class="switcher-option">
								<a href="#">
										<span>
											French (EUR)
										</span>
								</a>
							</li>
							<li class="switcher-option">
								<a href="#">
										<span>
											Japanese (JPY)
										</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<ul class="header-user-links">
					<li>
						<a href="login.html">Login or Register</a>
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
						<a href="index.html">
							<img src="assets/images/logo.png" alt="img">
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
							<a href="javascript:void(0);" data-stelina="stelina-dropdown">
								<span class="flaticon-user"></span>
							</a>
							<div class="header-account stelina-submenu">
								<div class="header-user-form-tabs">
									<ul class="tab-link">
										<li class="active">
											<a data-toggle="tab" aria-expanded="true" href="#header-tab-login">Login</a>
										</li>
										<li>
											<a data-toggle="tab" aria-expanded="true" href="#header-tab-rigister">Register</a>
										</li>
									</ul>
									<div class="tab-container">
										<div id="header-tab-login" class="tab-panel active">
											<form method="post" class="login form-login">
												<p class="form-row form-row-wide">
													<input type="email" placeholder="Email" class="input-text">
												</p>
												<p class="form-row form-row-wide">
													<input type="password" class="input-text" placeholder="Password">
												</p>
												<p class="form-row">
													<label class="form-checkbox">
														<input type="checkbox" class="input-checkbox">
														<span>
																Remember me
															</span>
													</label>
													<input type="submit" class="button" value="Login">
												</p>
												<p class="lost_password">
													<a href="#">Lost your password?</a>
												</p>
											</form>
										</div>
										<div id="header-tab-rigister" class="tab-panel">
											<form method="post" class="register form-register">
												<p class="form-row form-row-wide">
													<input type="email" placeholder="Email" class="input-text">
												</p>
												<p class="form-row form-row-wide">
													<input type="password" class="input-text" placeholder="Password">
												</p>
												<p class="form-row">
													<input type="submit" class="button" value="Register">
												</p>
											</form>
										</div>
									</div>
								</div>
							</div>
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
						<span class="text">All Categories</span>
					</div>
					<div class="block-content verticalmenu-content">
						<ul class="stelina-nav-vertical vertical-menu stelina-clone-mobile-menu">
							<li class="menu-item">
								<a href="#" class="stelina-menu-item-title" title="New Arrivals">New Arrivals</a>
							</li>
							<li class="menu-item">
								<a title="Hot Sale" href="#" class="stelina-menu-item-title">Hot Sale</a>
							</li>
							<li class="menu-item menu-item-has-children">
								<a title="Accessories" href="#" class="stelina-menu-item-title">Accessories</a>
								<span class="toggle-submenu"></span>
								<ul role="menu" class=" submenu">
									<li class="menu-item">
										<a title="Living" href="#" class="stelina-item-title">Living</a>
									</li>
									<li class="menu-item">
										<a title="Accents" href="#" class="stelina-item-title">Accents</a>
									</li>
									<li class="menu-item">
										<a title="New Arrivals" href="#" class="stelina-item-title">New Arrivals</a>
									</li>
									<li class="menu-item">
										<a title="Accessories" href="#" class="stelina-item-title">Accessories</a>
									</li>
									<li class="menu-item">
										<a title="Bedroom" href="#" class="stelina-item-title">Bedroom</a>
									</li>
								</ul>
							</li>
							<li class="menu-item">
								<a title="Accents" href="#" class="stelina-menu-item-title">Accents</a>
							</li>
							<li class="menu-item">
								<a title="Tables" href="#" class="stelina-menu-item-title">Tables</a>
							</li>
							<li class="menu-item">
								<a title="Dining" href="#" class="stelina-menu-item-title">Dining</a>
							</li>
							<li class="menu-item">
								<a title="Lighting" href="#" class="stelina-menu-item-title">Lighting</a>
							</li>
							<li class="menu-item">
								<a title="Office" href="#" class="stelina-menu-item-title">Office</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="header-nav">
					<div class="container-wapper">
						<ul class="stelina-clone-mobile-menu stelina-nav main-menu " id="menu-main-menu">
							<li class="menu-item  menu-item-has-children">
								<a href="index.html" class="stelina-menu-item-title" title="Home">Home</a>
								<span class="toggle-submenu"></span>
								<ul class="submenu">
									<li class="menu-item">
										<a href="index.html">Home 01</a>
									</li>
									<li class="menu-item">
										<a href="home2.html">Home 02</a>
									</li>
									<li class="menu-item">
										<a href="home3.html">Home 03</a>
									</li>
								</ul>
							</li>
							<li class="menu-item menu-item-has-children">
								<a href="gridproducts.html" class="stelina-menu-item-title" title="Shop">Shop</a>
								<span class="toggle-submenu"></span>
								<ul class="submenu">
									<li class="menu-item">
										<a href="gridproducts.html">Grid Fullwidth</a>
									</li>
									<li class="menu-item">
										<a href="gridproducts_leftsidebar.html">Grid Left sidebar</a>
									</li>
									<li class="menu-item">
										<a href="gridproducts_bannerslider.html">Grid Bannerslider</a>
									</li>
									<li class="menu-item">
										<a href="listproducts.html">List</a>
									</li>
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
														<a href="productdetails-leftsidebar.html">Product left sidebar</a>
													</li>
													<li class="menu-item">
														<a href="productdetails-rightsidebar.html">Product right sidebar</a>
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
							<li class="menu-item  menu-item-has-children">
								<a href="inblog_right-siderbar.html" class="stelina-menu-item-title"
								   title="Blogs">Blogs</a>
								<span class="toggle-submenu"></span>
								<ul class="submenu">
									<li class="menu-item menu-item-has-children">
										<a href="#" class="stelina-menu-item-title" title="Blog Style">Blog Style</a>
										<span class="toggle-submenu"></span>
										<ul class="submenu">
											<li class="menu-item">
												<a href="bloggrid.html">Grid</a>
											</li>
											<li class="menu-item">
												<a href="bloglist.html">List</a>
											</li>
											<li class="menu-item">
												<a href="bloglist-leftsidebar.html">List Sidebar</a>
											</li>
										</ul>
									</li>
									<li class="menu-item menu-item-has-children">
										<a href="#" class="stelina-menu-item-title" title="Post Layout">Post Layout</a>
										<span class="toggle-submenu"></span>
										<ul class="submenu">
											<li class="menu-item">
												<a href="inblog_left-siderbar.html">Left Sidebar</a>
											</li>
											<li class="menu-item">
												<a href="inblog_right-siderbar.html">Right Sidebar</a>
											</li>
										</ul>
									</li>
								</ul>
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
						<img src="assets/images/logo.png" alt="img">
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
	<div class="main-content main-content-product no-sidebar">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb-trail breadcrumbs">
						<ul class="trail-items breadcrumb">
							<li class="trail-item trail-begin">
								<a href="index.html">Home</a>
							</li>
							<li class="trail-item trail-end active">
								Grid Products
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="content-area shop-grid-content full-width col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="site-main">
						<h3 class="custom_blog_title">
							Grid Products
						</h3>
						<div class="shop-top-control">
							<form class="select-item select-form">
								<span class="title">Sort</span>
								<select title="sort" data-placeholder="9 Products/Page" class="chosen-select">
									<option value="2">9 Products/Page</option>
									<option value="1">12 Products/Page</option>
									<option value="3">10 Products/Page</option>
									<option value="4">8 Products/Page</option>
									<option value="5">6 Products/Page</option>
								</select>
							</form>
							<form class="filter-choice select-form">
								<span class="title">Sort by</span>
								<select title="sort-by" data-placeholder="Price: Low to High" class="chosen-select">
									<option value="1">Price: Low to High</option>
									<option value="2">Sort by popularity</option>
									<option value="3">Sort by average rating</option>
									<option value="4">Sort by newness</option>
									<option value="5">Sort by price: low to high</option>
								</select>
							</form>
							<div class="grid-view-mode">
								<div class="inner">
									<a href="listproducts.html" class="modes-mode mode-list">
										<span></span>
										<span></span>
									</a>
									<a href="gridproducts.html" class="modes-mode mode-grid  active">
										<span></span>
										<span></span>
										<span></span>
										<span></span>
									</a>
								</div>
							</div>
						</div>
						<ul class="row list-products auto-clear equal-container product-grid">
							<li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
								<div class="product-inner equal-element">
									<div class="product-top">
										<div class="flash">
											<span class="onnew">
												<span class="text">
													new
												</span>
											</span>
										</div>
									</div>
									<div class="product-thumb">
										<div class="thumb-inner">
											<a href="#">
												<img src="assets/images/product-item-1.jpg" alt="img">
											</a>
											<div class="thumb-group">
												<div class="yith-wcwl-add-to-wishlist">
													<div class="yith-wcwl-add-button">
														<a href="#">Add to Wishlist</a>
													</div>
												</div>
												<a href="#" class="button quick-wiew-button">Quick View</a>
												<div class="loop-form-add-to-cart">
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
											</div>
										</div>
									</div>
									<div class="product-info">
										<h5 class="product-name product_title">
											<a href="#">Aluminum Plant</a>
										</h5>
										<div class="group-info">
											<div class="stars-rating">
												<div class="star-rating">
													<span class="star-3"></span>
												</div>
												<div class="count-star">
													(3)
												</div>
											</div>
											<div class="price">
												<del>
													$65
												</del>
												<ins>
													$45
												</ins>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
								<div class="product-inner equal-element">
									<div class="product-top">
									</div>
									<div class="product-thumb">
										<div class="thumb-inner">
											<a href="#">
												<img src="assets/images/product-item-2.jpg" alt="img">
											</a>
											<div class="thumb-group">
												<div class="yith-wcwl-add-to-wishlist">
													<div class="yith-wcwl-add-button">
														<a href="#">Add to Wishlist</a>
													</div>
												</div>
												<a href="#" class="button quick-wiew-button">Quick View</a>
												<div class="loop-form-add-to-cart">
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
											</div>
										</div>
									</div>
									<div class="product-info">
										<h5 class="product-name product_title">
											<a href="#">Glorious Eau</a>
										</h5>
										<div class="group-info">
											<div class="stars-rating">
												<div class="star-rating">
													<span class="star-3"></span>
												</div>
												<div class="count-star">
													(3)
												</div>
											</div>
											<div class="price">
												<del>
													$65
												</del>
												<ins>
													$45
												</ins>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
								<div class="product-inner equal-element">
									<div class="product-top">
										<div class="flash">
											<span class="onnew">
												<span class="text">
													new
												</span>
											</span>
										</div>
									</div>
									<div class="product-thumb">
										<div class="thumb-inner">
											<a href="#">
												<img src="assets/images/product-item-3.jpg" alt="img">
											</a>
											<div class="thumb-group">
												<div class="yith-wcwl-add-to-wishlist">
													<div class="yith-wcwl-add-button">
														<a href="#">Add to Wishlist</a>
													</div>
												</div>
												<a href="#" class="button quick-wiew-button">Quick View</a>
												<div class="loop-form-add-to-cart">
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
											</div>
										</div>
									</div>
									<div class="product-info">
										<h5 class="product-name product_title">
											<a href="#">Cuerpo Eau</a>
										</h5>
										<div class="group-info">
											<div class="stars-rating">
												<div class="star-rating">
													<span class="star-3"></span>
												</div>
												<div class="count-star">
													(3)
												</div>
											</div>
											<div class="price">
												<del>
													$65
												</del>
												<ins>
													$45
												</ins>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
								<div class="product-inner equal-element">
									<div class="product-top">
									</div>
									<div class="product-thumb">
										<div class="thumb-inner">
											<a href="#">
												<img src="assets/images/product-item-4.jpg" alt="img">
											</a>
											<div class="thumb-group">
												<div class="yith-wcwl-add-to-wishlist">
													<div class="yith-wcwl-add-button">
														<a href="#">Add to Wishlist</a>
													</div>
												</div>
												<a href="#" class="button quick-wiew-button">Quick View</a>
												<div class="loop-form-add-to-cart">
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
											</div>
										</div>
									</div>
									<div class="product-info">
										<h5 class="product-name product_title">
											<a href="#">The Alchemist</a>
										</h5>
										<div class="group-info">
											<div class="stars-rating">
												<div class="star-rating">
													<span class="star-3"></span>
												</div>
												<div class="count-star">
													(3)
												</div>
											</div>
											<div class="price">
												<del>
													$65
												</del>
												<ins>
													$45
												</ins>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
								<div class="product-inner equal-element">
									<div class="product-top">
									</div>
									<div class="product-thumb">
										<div class="thumb-inner">
											<a href="#">
												<img src="assets/images/product-item-5.jpg" alt="img">
											</a>
											<div class="thumb-group">
												<div class="yith-wcwl-add-to-wishlist">
													<div class="yith-wcwl-add-button">
														<a href="#">Add to Wishlist</a>
													</div>
												</div>
												<a href="#" class="button quick-wiew-button">Quick View</a>
												<div class="loop-form-add-to-cart">
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
											</div>
										</div>
									</div>
									<div class="product-info">
										<h5 class="product-name product_title">
											<a href="#">Boston Fern</a>
										</h5>
										<div class="group-info">
											<div class="stars-rating">
												<div class="star-rating">
													<span class="star-3"></span>
												</div>
												<div class="count-star">
													(3)
												</div>
											</div>
											<div class="price">
												<del>
													$65
												</del>
												<ins>
													$45
												</ins>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
								<div class="product-inner equal-element">
									<div class="product-top">
										<div class="flash">
											<span class="onnew">
												<span class="text">
													new
												</span>
											</span>
										</div>
									</div>
									<div class="product-thumb">
										<div class="thumb-inner">
											<a href="#">
												<img src="assets/images/product-item-6.jpg" alt="img">
											</a>
											<div class="thumb-group">
												<div class="yith-wcwl-add-to-wishlist">
													<div class="yith-wcwl-add-button">
														<a href="#">Add to Wishlist</a>
													</div>
												</div>
												<a href="#" class="button quick-wiew-button">Quick View</a>
												<div class="loop-form-add-to-cart">
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
											</div>
										</div>
									</div>
									<div class="product-info">
										<h5 class="product-name product_title">
											<a href="#">Garden A Winter </a>
										</h5>
										<div class="group-info">
											<div class="stars-rating">
												<div class="star-rating">
													<span class="star-3"></span>
												</div>
												<div class="count-star">
													(3)
												</div>
											</div>
											<div class="price">
												<del>
													$65
												</del>
												<ins>
													$45
												</ins>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
								<div class="product-inner equal-element">
									<div class="product-top">
									</div>
									<div class="product-thumb">
										<div class="thumb-inner">
											<a href="#">
												<img src="assets/images/product-item-7.jpg" alt="img">
											</a>
											<div class="thumb-group">
												<div class="yith-wcwl-add-to-wishlist">
													<div class="yith-wcwl-add-button">
														<a href="#">Add to Wishlist</a>
													</div>
												</div>
												<a href="#" class="button quick-wiew-button">Quick View</a>
												<div class="loop-form-add-to-cart">
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
											</div>
										</div>
									</div>
									<div class="product-info">
										<h5 class="product-name product_title">
											<a href="#">Toilette </a>
										</h5>
										<div class="group-info">
											<div class="stars-rating">
												<div class="star-rating">
													<span class="star-3"></span>
												</div>
												<div class="count-star">
													(3)
												</div>
											</div>
											<div class="price">
												<del>
													$65
												</del>
												<ins>
													$45
												</ins>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
								<div class="product-inner equal-element">
									<div class="product-top">
									</div>
									<div class="product-thumb">
										<div class="thumb-inner">
											<a href="#">
												<img src="assets/images/product-item-20.jpg" alt="img">
											</a>
											<div class="thumb-group">
												<div class="yith-wcwl-add-to-wishlist">
													<div class="yith-wcwl-add-button">
														<a href="#">Add to Wishlist</a>
													</div>
												</div>
												<a href="#" class="button quick-wiew-button">Quick View</a>
												<div class="loop-form-add-to-cart">
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
											</div>
										</div>
									</div>
									<div class="product-info">
										<h5 class="product-name product_title">
											<a href="#">Magnificent Bangle</a>
										</h5>
										<div class="group-info">
											<div class="stars-rating">
												<div class="star-rating">
													<span class="star-3"></span>
												</div>
												<div class="count-star">
													(3)
												</div>
											</div>
											<div class="price">
												<del>
													$65
												</del>
												<ins>
													$45
												</ins>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
								<div class="product-inner equal-element">
									<div class="product-top">
										<div class="flash">
											<span class="onnew">
												<span class="text">
													new
												</span>
											</span>
										</div>
									</div>
									<div class="product-thumb">
										<div class="thumb-inner">
											<a href="#">
												<img src="assets/images/product-item-9.jpg" alt="img">
											</a>
											<div class="thumb-group">
												<div class="yith-wcwl-add-to-wishlist">
													<div class="yith-wcwl-add-button">
														<a href="#">Add to Wishlist</a>
													</div>
												</div>
												<a href="#" class="button quick-wiew-button">Quick View</a>
												<div class="loop-form-add-to-cart">
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
											</div>
										</div>
									</div>
									<div class="product-info">
										<h5 class="product-name product_title">
											<a href="#">Terra Rossa</a>
										</h5>
										<div class="group-info">
											<div class="stars-rating">
												<div class="star-rating">
													<span class="star-3"></span>
												</div>
												<div class="count-star">
													(3)
												</div>
											</div>
											<div class="price">
												<del>
													$65
												</del>
												<ins>
													$45
												</ins>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
								<div class="product-inner equal-element">
									<div class="product-top">
									</div>
									<div class="product-thumb">
										<div class="thumb-inner">
											<a href="#">
												<img src="assets/images/product-item-8.jpg" alt="img">
											</a>
											<div class="thumb-group">
												<div class="yith-wcwl-add-to-wishlist">
													<div class="yith-wcwl-add-button">
														<a href="#">Add to Wishlist</a>
													</div>
												</div>
												<a href="#" class="button quick-wiew-button">Quick View</a>
												<div class="loop-form-add-to-cart">
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
											</div>
										</div>
									</div>
									<div class="product-info">
										<h5 class="product-name product_title">
											<a href="#">Dainty Bangle</a>
										</h5>
										<div class="group-info">
											<div class="stars-rating">
												<div class="star-rating">
													<span class="star-3"></span>
												</div>
												<div class="count-star">
													(3)
												</div>
											</div>
											<div class="price">
												<del>
													$65
												</del>
												<ins>
													$45
												</ins>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
								<div class="product-inner equal-element">
									<div class="product-top">
										<div class="flash">
											<span class="onnew">
												<span class="text">
													new
												</span>
											</span>
										</div>
									</div>
									<div class="product-thumb">
										<div class="thumb-inner">
											<a href="#">
												<img src="assets/images/product-item-21.jpg" alt="img">
											</a>
											<div class="thumb-group">
												<div class="yith-wcwl-add-to-wishlist">
													<div class="yith-wcwl-add-button">
														<a href="#">Add to Wishlist</a>
													</div>
												</div>
												<a href="#" class="button quick-wiew-button">Quick View</a>
												<div class="loop-form-add-to-cart">
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
											</div>
										</div>
									</div>
									<div class="product-info">
										<h5 class="product-name product_title">
											<a href="#">The Alchemist</a>
										</h5>
										<div class="group-info">
											<div class="stars-rating">
												<div class="star-rating">
													<span class="star-3"></span>
												</div>
												<div class="count-star">
													(3)
												</div>
											</div>
											<div class="price">
												<del>
													$65
												</del>
												<ins>
													$45
												</ins>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
								<div class="product-inner equal-element">
									<div class="product-top">
										<div class="flash">
											<span class="onnew">
												<span class="text">
													new
												</span>
											</span>
										</div>
									</div>
									<div class="product-thumb">
										<div class="thumb-inner">
											<a href="#">
												<img src="assets/images/product-item-22.jpg" alt="img">
											</a>
											<div class="thumb-group">
												<div class="yith-wcwl-add-to-wishlist">
													<div class="yith-wcwl-add-button">
														<a href="#">Add to Wishlist</a>
													</div>
												</div>
												<a href="#" class="button quick-wiew-button">Quick View</a>
												<div class="loop-form-add-to-cart">
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
											</div>
										</div>
									</div>
									<div class="product-info">
										<h5 class="product-name product_title">
											<a href="#">Garden A Winter  </a>
										</h5>
										<div class="group-info">
											<div class="stars-rating">
												<div class="star-rating">
													<span class="star-3"></span>
												</div>
												<div class="count-star">
													(3)
												</div>
											</div>
											<div class="price">
												<del>
													$65
												</del>
												<ins>
													$45
												</ins>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
						<div class="pagination clearfix style2">
							<div class="nav-link">
								<a href="#" class="page-numbers"><i class="icon fa fa-angle-left" aria-hidden="true"></i></a>
								<a href="#" class="page-numbers">1</a>
								<a href="#" class="page-numbers">2</a>
								<a href="#" class="page-numbers current">3</a>
								<a href="#" class="page-numbers"><i class="icon fa fa-angle-right" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="wrapper-sidebar shop-sidebar">
						<div class="widget woof_Widget">
							<div class="widget widget-categories">
								<h3 class="widgettitle">Categories</h3>
								<ul class="list-categories">
									<li>
										<input type="checkbox" id="cb1">
										<label for="cb1" class="label-text">
											New Arrivals
										</label>
									</li>
									<li>
										<input type="checkbox" id="cb2">
										<label for="cb2" class="label-text">
											Dining
										</label>
									</li>
									<li>
										<input type="checkbox" id="cb3">
										<label for="cb3" class="label-text">
											Desks
										</label>
									</li>
									<li>
										<input type="checkbox" id="cb4">
										<label for="cb4" class="label-text">
											Accents
										</label>
									</li>
									<li>
										<input type="checkbox" id="cb5">
										<label for="cb5" class="label-text">
											Accessories
										</label>
									</li>
									<li>
										<input type="checkbox" id="cb6">
										<label for="cb6" class="label-text">
											Tables
										</label>
									</li>
								</ul>
							</div>
							<div class="widget widget_filter_price">
								<h4 class="widgettitle">
									Price
								</h4>
								<div class="price-slider-wrapper">
		                    		<div data-label-reasult="Range:" data-min="0" data-max="3000" data-unit="$" class="slider-range-price " data-value-min="0" data-value-max="1000">	
		                    		</div>
		                    		<div class="price-slider-amount">
			                            <span class="from">$45</span>
			                            <span class="to">$215</span>
			                        </div>
								</div>
							</div>
							<div class="widget widget-brand">
								<h3 class="widgettitle">Brand</h3>
								<ul class="list-brand">
									<li>
										<input id="cb7" type="checkbox">
										<label for="cb7" class="label-text">New Arrivals</label>
									</li>
									<li>
										<input id="cb8" type="checkbox">
										<label for="cb8" class="label-text">Dining</label>
									</li>
									<li>
										<input id="cb9" type="checkbox">
										<label for="cb9" class="label-text">Desks</label>
									</li>
									<li>
										<input id="cb10" type="checkbox">
										<label for="cb10" class="label-text">Accents</label>
									</li>
									<li>
										<input id="cb11" type="checkbox">
										<label for="cb11" class="label-text">Accessories</label>
									</li>
									<li>
										<input id="cb12" type="checkbox">
										<label for="cb12" class="label-text">Tables</label>
									</li>
								</ul>
							</div>
							<div class="widget widget_filter_size">
								<h4 class="widgettitle">Size</h4>
								<ul class="list-brand">
									<li>
										<input id="cb13" type="checkbox">
										<label for="cb13" class="label-text">14.0 mm</label>
									</li>
									<li>
										<input id="cb14" type="checkbox">
										<label for="cb14" class="label-text">14.4 mm</label>
									</li>
									<li>
										<input id="cb15" type="checkbox">
										<label for="cb15" class="label-text">14.8 mm</label>
									</li>
									<li>
										<input id="cb16" type="checkbox">
										<label for="cb16" class="label-text">15.2 mm</label>
									</li>
									<li>
										<input id="cb17" type="checkbox">
										<label for="cb17" class="label-text">15.6 mm</label>
									</li>
									<li>
										<input id="cb18" type="checkbox">
										<label for="cb18" class="label-text">16.0 mm</label>
									</li>
								</ul>
							</div>
							<div class="widget widget-color">
								<h4 class="widgettitle">
									Color
								</h4>
								<div class="list-color">
									<a href="#" class="color1"></a>
									<a href="#" class="color2 "></a>
									<a href="#" class="color3 active"></a>
									<a href="#" class="color4"></a>
									<a href="#" class="color5"></a>
									<a href="#" class="color6"></a>
									<a href="#" class="color7"></a>
								</div>
							</div>
							<div class="widget widget-tags">
								<h3 class="widgettitle">
									Popular Tags
								</h3>
								<ul class="tagcloud">
									<li class="tag-cloud-link">
										<a href="#">Office</a>
									</li>
									<li class="tag-cloud-link">
										<a href="#">Accents</a>
									</li>
									<li class="tag-cloud-link">
										<a href="#">Flowering</a>
									</li>
									<li class="tag-cloud-link active">
										<a href="#">Accessories</a>
									</li>
									<li class="tag-cloud-link">
										<a href="#">Hot</a>
									</li>
									<li class="tag-cloud-link">
										<a href="#">Tables</a>
									</li>
									<li class="tag-cloud-link">
										<a href="#">Dining</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="widget newsletter-widget">
							<div class="newsletter-form-wrap ">
								<h3 class="title">Subscribe to Our Newsletter</h3>
								<div class="subtitle">
									More special Deals, Events & Promotions
								</div>
								<input type="email" class="email" placeholder="Your email letter">
								<button type="submit" class="button submit-newsletter">Subscribe</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
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
								Copyright © 2020
								<a href="#">Stelina</a>
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
				<a href="#">
					<span class="icon">
						<i class="fa fa-user" aria-hidden="true"></i>
					</span>
					Account
				</a>
			</div>
		</div>
	</div>
	<a href="#" class="backtotop">
		<i class="fa fa-angle-double-up"></i>
	</a>
