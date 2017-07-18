<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>@yield('title')</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	
	<!-- CSS -->
	<!-- Bootstrap CSS
	============================================ -->
	<link rel="stylesheet" href="{!! asset('store/css/bootstrap.min.css') !!}">
	<!-- Icon Font CSS
	============================================ -->
	<link rel="stylesheet" href="{!! asset('store/css/material-design-iconic-font.min.css') !!}">
	<!-- Plugins Import CSS
	============================================ -->
	<link rel="stylesheet" href="{!! asset('store/css/import.css') !!}">  
	
	<!-- Style CSS
	============================================ -->
	<link rel="stylesheet" href="{!! asset('store/style.css') !!}">
	<!-- Responsive CSS
	============================================ -->
	<link rel="stylesheet" href="{!! asset('store/css/responsive.css') !!}">
	
	<!-- Modernizer JS
	============================================ -->
	<script src="{!! asset('store/js/vendor/modernizr-2.8.3.min.js') !!}"></script>
	
</head>
<body>
<!-- Body main wrapper start -->
<div class="wrapper bg-white fix">

<!-- Header 4
============================================ -->
<div class="header-area header-area-4  clearfix">
	<!-- Header Top 4 -->
	<div class="header-top header-top-4">
		<div class="container">
			<div class="row">
				<!-- Header Top Left 4 -->
				<div class="header-top-left header-top-left-4 col-xs-4 text-left">
					<!-- Header Search -->
					<!-- Language & Currency -->
				</div>
				<!-- Header Top Center 4 -->
				<div class="header-top-center header-top-center-4 col-xs-4 text-center">
					<a href="index.html" class="logo-2"><img src="img/logo.png" alt="logo" /></a>
				</div>
				<!-- Header Top Right 4 -->
				<div class="header-top-right header-top-right-4 col-xs-4 text-right">
					<!-- Account Menu -->
					<!-- Mini Cart -->
					<div class="mini-cart-wrapper mini-cart-wrapper-4 float-right">
						<div class="mini-cart dropdown-menu right">
							<div class="mini-cart-product fix">
								<a href="product-details-1.html" class="image"><img src="img/mini-cart/1.jpg" alt="" /></a>
								<div class="content fix">
									<a href="product-details-1.html" class="title">Fashion Style</a>
									<p>Color: Black</p>
									<p>Size: SL</p>
									<button class="remove"><i class="zmdi zmdi-close"></i></button>
								</div>
							</div>
							<div class="mini-cart-product fix">
								<a href="product-details-1.html" class="image"><img src="img/mini-cart/2.jpg" alt="" /></a>
								<div class="content fix">
									<a href="product-details-1.html" class="title">Fashion Style</a>
									<p>Color: Black</p>
									<p>Size: SL</p>
									<button class="remove"><i class="zmdi zmdi-close"></i></button>
								</div>
							</div>
							<div class="mini-cart-product fix">
								<a href="product-details-1.html" class="image"><img src="img/mini-cart/3.jpg" alt="" /></a>
								<div class="content fix">
									<a href="product-details-1.html" class="title">Fashion Style</a>
									<p>Color: Black</p>
									<p>Size: SL</p>
									<button class="remove"><i class="zmdi zmdi-close"></i></button>
								</div>
							</div>
							<div class="mini-cart-checkout text-center">
								<a href="checkout.html">checkout</a>
							</div>
						</div>
					</div>
					<!-- Header Top Link -->
				</div>
			</div>
		</div>
	</div>
	<!-- Header Bottom 4 -->
	<div class="header-bottom sticky header-bottom sticky-4">
		<div class="container">
			<div class="row">
				<!-- Menu Wrapper 4 -->
				<div class="menu-wrapper menu-wrapper-4 text-center col-xs-12 hidden-sm hidden-xs">
					<div class="menu menu-4">
						<nav>
							<ul>
								<li class="active"><a href="index.html">home</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<!-- Mobile Menu Wrapper 2 -->
				<div class="mobile-menu-wrapper mobile-menu-wrapper-2 hidden-md hidden-lg col-xs-12">
					<div class="mobile-menu mobile-menu-2">
						<nav>
							<ul>
								<li class="active"><a href="index.html">home</a>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Page Banner Area
============================================ -->
<div id="page-banner" class="page-banner-area top-header-space-2">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="page-banner text-center"><h2>Shop List view</h2></div>
				<ul class="breadcrumbs">
					<li><a href="shop-list.html#">home</a></li>
					<li><span>Shop List view</span></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- Shop Page
============================================ -->
<div class="page-area pb-90 pt-90">
	<div class="container">
		<div class="row">
			<!-- Shop Top Bar -->
			<div class="shop-top-bar text-center mb-50 col-xs-12">
				<!-- Product View Mode -->
				<ul class="view-mode float-left text-left">
					<li><a href="shop-list.html#grid-view" data-toggle="tab"><i class="zmdi zmdi-apps"></i></a></li>
					<li class="active"><a href="shop-list.html#list-view" data-toggle="tab"><i class="zmdi zmdi-view-list"></i></a></li>
				</ul>
				<!-- Product Short By -->
				<!-- Product Showing Per Page -->
			</div>
		</div>
		 @yield('content')
		<div class="row">
			<!-- Shop Bottom Bar -->
			<div class="shop-top-bar text-center col-xs-12">
				<!-- Product Pagination -->
				<div class="pagination float-left">
					<p>Showing 1 - 16 of 97 items</p>
					<ul>
						<li><a href="shop-list.html#"><i class="zmdi zmdi-chevron-left"></i></a></li>
						<li class="active"><a href="shop-list.html#">1</a></li>
						<li><a href="shop-list.html#">2</a></li>
						<li><a href="shop-list.html#">3</a></li>
						<li><a href="shop-list.html#">4</a></li>
						<li><a href="shop-list.html#"><i class="zmdi zmdi-chevron-right"></i></a></li>
					</ul>
				</div>
				<!-- Product Showing Per Page -->
				<div class="pro-showing float-right text-left">
					<p>showing</p>
					<select>
						<option value="1">16</option>
						<option value="2">20</option>
						<option value="3">24</option>
						<option value="4">28</option>
						<option value="5">32</option>
					</select>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Brand Area
============================================ -->
<div class="brand-area pb-90">
	<div class="container">
	</div>
</div>
<!-- Footer Top Area
============================================ -->
<div class="footer-top-area pb-70 pt-70">
	<div class="container">
		<div class="row">
			<div class="footer-contact col-md-4 col-sm-6 col-xs-12">
				<img src="img/logo-2.png" alt="" />
				<div><span>Address :</span> <p>28 Green Tower, Street Name, <br />New York City, USA</p></div>
				<div><span>Cell-Phone :</span> <p>+8880 44338899</p></div>
				<div><span>Email :</span> <a href="shop-list.html#">yourmail@outlook.com</a></div>
				<div class="footer-social fix">
					<a href="https://www.facebook.com/devitems/?ref=bookmarks" target="_blank"><i class="zmdi zmdi-facebook"></i></a>
					<a href="https://www.instagram.com/devitems/" target="_blank"><i class="zmdi zmdi-instagram"></i></a>
					<a href="shop-list.html#"><i class="zmdi zmdi-rss"></i></a>
					<a href="https://twitter.com/devitemsllc" target="_blank"><i class="zmdi zmdi-twitter"></i></a>
					<a href="https://www.pinterest.com/devitemsllc/" target="_blank"><i class="zmdi zmdi-pinterest"></i></a>
				</div>
			</div>
			<div class="footer-account col-md-2 col-sm-6 col-xs-12">
				<h4>accounts</h4>
				<ul>
					<li><a href="account.html">My Account</a></li>
					<li><a href="wishlist.html">My Wishlist</a></li>
					<li><a href="cart.html">My Cart</a></li>
					<li><a href="login.html">Sign In</a></li>
					<li><a href="checkout.html">Check out</a></li>
				</ul>
			</div>
			<div class="footer-shipping col-md-2 col-sm-6 col-xs-12">
				<h4>shipping</h4>
				<ul>
					<li><a href="product-details-1.html">New Products</a></li>
					<li><a href="product-details-1.html">Top Sellers</a></li>
					<li><a href="product-details-1.html">Manufactirers</a></li>
					<li><a href="product-details-1.html">Suppliers</a></li>
					<li><a href="product-details-1.html">Specials</a></li>
				</ul>
			</div>
			<div class="footer-newsletter col-md-4 col-sm-6 col-xs-12">
				<h4>Email Newsletters</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor incididunt.</p>
				<form id="mc-form" class="mc-form" >
					<input id="mc-email" type="email" autocomplete="off" placeholder="Enter Address..." />
					<input id="mc-submit" type="submit" value="subscribe" />
				</form>
				<!-- mailchimp-alerts Start -->
				<div class="mailchimp-alerts text-centre">
					<div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
					<div class="mailchimp-success"></div><!-- mailchimp-success end -->
					<div class="mailchimp-error"></div><!-- mailchimp-error end -->
				</div><!-- mailchimp-alerts end -->
			</div>
		</div>
	</div>
</div>
<!-- Footer Bottom Area
============================================ -->
<div class="footer-bottom-area pb-20 pt-20">
	<div class="container">
		<div class="row">
			<div class="copyright text-left col-sm-6 col-xs-12">
				<p>Copyright &copy; 2017 <a href="../../index.html" target="_blank">Devitems</a>. All Right Reserved.</p>
			</div>
			<div class="payment-method text-right col-sm-6 col-xs-12">
				<img src="img/payment/1.png" alt="payment" />
				<img src="img/payment/2.png" alt="payment" />
				<img src="img/payment/3.png" alt="payment" />
				<img src="img/payment/4.png" alt="payment" />
				<img src="img/payment/5.png" alt="payment" />
			</div>
		</div>
	</div>
</div>

<!-- QUICKVIEW PRODUCT
============================================ -->
<div id="quickview-wrapper">
   <!-- Modal -->
   <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<div class="modal-product">
						<div class="product-images">
							<div class="main-image images">
								<img alt="#" src="img/product/quickview-photo.jpg"/>
							</div>
						</div><!-- .product-images -->

						<div class="product-info">
							<h1>Aenean eu tristique</h1>
							<div class="price-box-3">
								<hr />
								<div class="s-price-box">
									<span class="new-price">$160.00</span>
									<span class="old-price">$190.00</span>
								</div>
								<hr />
							</div>
							<a href="shop.html" class="see-all">See all features</a>
							<div class="quick-add-to-cart">
								<form method="post" class="cart">
									<div class="numbers-row">
										<input type="number" id="french-hens" value="3">
									</div>
									<button class="single_add_to_cart_button" type="submit">Add to cart</button>
								</form>
							</div>
							<div class="quick-desc">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero.
							</div>
							<div class="social-sharing">
								<div class="widget widget_socialsharing_widget">
									<h3 class="widget-title-modal">Share this product</h3>
									<ul class="social-icons">
										<li>
											<a target="_blank" title="Google +" href="https://plus.google.com/117030536115448126648" class="gplus social-icon"><i class="zmdi zmdi-google-plus"></i></a>
										</li>
										<li>
											<a target="_blank" title="Twitter" href="https://twitter.com/devitemsllc" class="twitter social-icon"><i class="zmdi zmdi-twitter"></i></a>
										</li>
										<li>
											<a target="_blank" title="Facebook" href="https://www.facebook.com/devitems/?ref=bookmarks" class="facebook social-icon"><i class="zmdi zmdi-facebook"></i></a>
										</li>
										<li>
											<a target="_blank" title="LinkedIn" href="https://www.linkedin.com/company/devitems-llc" class="linkedin social-icon"><i class="zmdi zmdi-linkedin"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div><!-- .product-info -->
					</div><!-- .modal-product -->
				</div><!-- .modal-body -->
			</div><!-- .modal-content -->
		</div><!-- .modal-dialog -->
   </div>
   <!-- END Modal -->
</div>

</div>
<!-- Body main wrapper end -->

<!-- Body main wrapper end -->


<!-- JS -->

<!-- jQuery JS
============================================ -->
<script src="{!! asset('store/js/vendor/jquery-1.12.0.min.js') !!}"></script>
<!-- Bootstrap JS
============================================ -->
<script src="{!! asset('store/js/bootstrap.min.js') !!}"></script>

<!-- Plugins JS
============================================ -->
<script src="{!! asset('store/js/plugins.js') !!}"></script>
<script src="{!! asset('store/js/app.js') !!}"></script>
<!-- Main JS
============================================ -->
<script src="{!! asset('store/js/main.js') !!}"></script>

</body>
</html>
