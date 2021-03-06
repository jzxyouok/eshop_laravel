<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{$title}}</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('css/main.css')}}" rel="stylesheet">
	<link href="{{asset('css/responsive.css')}}" rel="stylesheet">
	<link href="{{asset('css/custom.css')}}" rel="stylesheet">


	<!-- BlueImp Gallery CSS-->
	<link href="{{asset('http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css')}}" rel="stylesheet">
	<link href="{{asset('https://raw.github.com/blueimp/Bootstrap-Image-Gallery/master/css/bootstrap-image-gallery.css')}}" rel="stylesheet">
	<link href="{{asset('https://raw.github.com/blueimp/Bootstrap-Image-Gallery/master/css/demo.css')}}" rel="stylesheet">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	@yield('css_content')

    <!--[if lt IE 9]>
    {{--<script src="js/html5shiv.js"></script>--}}
    {{--<script src="js/respond.min.js"></script>--}}
    {{--<![endif]-->       --}}
    {{--<link rel="shortcut icon" href="images/ico/favicon.ico">--}}
    {{--<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">--}}
    {{--<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">--}}
    {{--<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">--}}
    {{--<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">--}}


</head><!--/head-->

<body>
	<header id="header"><!--header-->
        <!-- <div class="header_top">--><!--header_top-->
            <!-- <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> --><!--/header_top-->

        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="{{url('')}}"><img src="{{asset('images/home/logo-eshop-angkasa.png')}}" alt="" height="40px;"/></a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <!-- <li><a href="#"><i class="fa fa-user"></i> {{Auth::check() ? Auth::user()->name : 'Account'}}</a></li> -->
                                <!-- <li><a href="{{url('checkout')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li> -->
                                <li><a href="{{url('backend/login')}}"><i class="fa fa-briefcase"></i> Merchants</a></li>
                                <li><a href="{{url('cart')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                                <li class="main-dropdown">
									<a href="{{Auth::check() ? '#' : url('auth/login')}}"><i class="fa fa-user" aria-hidden="true"></i> {{Auth::check() ? 'Logout' : 'Login'}}</a>
									@if(Auth::check())
									<ul class="dropdown-menu dropdown-user">
										<li>
											<a href="#"><i class="fa fa-user fa-fw"></i> {{ Auth::user()->name }}</a>
										</li>
										<li>
											<a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
										</li>
										<li class="divider"></li>
										<li>
											<a href="/auth/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
										</li>
									</ul>
									@endif
								</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->

        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{url('')}}" {{$page == 'home' ? 'class=active' : ''}}>Home</a></li>
                                <li><a href="{{url('products')}}" {{$page == 'products' ? 'class=active' : ''}}>Products</a></li>
                                <li><a href="{{url('blog')}}" {{$page == 'blog' ? 'class=active' : ''}}>Blog</a></li>
                                <li><a href="{{url('contact-us')}}" {{$page == 'contact_us' ? 'class=active' : ''}}>Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search"/>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->
		<!-- {{url('products')}} -->

		@yield('content')

<!--Footer HTML code from E-Shopper Template-->
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>E-Shop</span></h2>
							<p>E-Shop is an online shopping portal for its members to purchase products and apply for financing from Koperasi.</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="{{asset('images/home/map.png')}}" alt="" />
							<p>Angkasa Kuala Lumpur, Malaysia (MY)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">T-Shirt</a></li>
								<li><a href="#">Mens</a></li>
								<li><a href="#">Womens</a></li>
								<li><a href="#">Gift Cards</a></li>
								<li><a href="#">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2016 Angkasa E-Shop. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.multibase.com.my">Multibase</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="{{asset('js/jquery.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('js/price-range.js')}}"></script>
    <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

    <!-- BlueImp Gallery JS -->
	<script src="{{asset('http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js')}}"></script>
	<script src="{{asset('http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js')}}"></script>
	<script src="{{asset('https://raw.github.com/blueimp/Bootstrap-Image-Gallery/master/js/bootstrap-image-gallery.js')}}"></script>
	<script src="{{asset('https://raw.github.com/blueimp/Bootstrap-Image-Gallery/master/js/demo.js')}}"></script>

    <!-- Zoom Product -->
   < <script src="{{asset('js/zoom_product.js')}}"></script>
   
   <!-- Popover Click -->
   <script type="text/javascript">
	$(document).ready(function(){
	    $('[data-toggle="popover"]').popover();   
	});
	</script>
	<style type="text/css">
		.popover-product{
	        margin-bottom: 20px;
	    }
	</style>




   	@yield('js_content')


</body>
</html>