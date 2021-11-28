<!DOCTYPE html>
<html>
<head>
	<base href="{{asset('public/layout/frontend')}}/">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title> Love Book - @yield('title')</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/home.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('public/cssHeader/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('public/cssHeader/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/cssHeader/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/cssHeader/css/magnific-popup.css')}}">
    
    <link rel="stylesheet" href="{{asset('public/cssHeader/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('public/cssHeader/css/style.css')}}">

	<script type="text/javascript">
		$(function() {
			var pull        = $('#pull');
			menu        = $('nav ul');
			menuHeight  = menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});
		});

		$(window).resize(function(){
			var w = $(window).width();
			if(w > 320 && menu.is(':hidden')) {
				menu.removeAttr('style');
			}
		});
	</script>
	
</head>
<body>    
	<!-- header -->
	<div class="container-fluid px-md-5  pt-4 pt-md-5">
		<div class="row justify-content-between">
			<div class="col-md-8 order-md-last">
				<div class="row">
					<div class="col-md-6 text-center">
						<a class="navbar-brand" href="{{asset('/')}}">LOVE <span>BOOK</span> <small>Book Publishing Company</small></a>
					</div>
					<div class="col-md-6 d-md-flex justify-content-end mb-md-0 mb-3">
						<form  class="searchform order-lg-last"  role="search" method="get" action="{{asset('search/')}}">
				 			 <div class="form-group d-flex">
								<input type="text" class="form-control pl-3" placeholder="Tìm kiếm ..." name="result">
								<button type="submit" name="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
				  			</div>
						</form>
						
					
					</div>
				</div>
			</div>
			<div class="col-md-4 d-flex">
				<div class="social-media">
				<p class="mb-0 d-flex">
					<a  class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
					<a  class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
					<a  class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
					<a  class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
				</p>
		</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container-fluid">
	
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="fa fa-bars"></span> Menu
	  </button>
	  <div class="collapse navbar-collapse" id="ftco-nav">
		<a class="nav-link" href="{{asset('/')}}" ><img width="130" src="img/home/logod.png" alt=""></a>
		<ul class="nav navbar-nav " >
			<li class="nav-item active"><a style="font-size: 20px" class="nav-link" href="{{asset('/')}}" >Trang Chủ <span class="sr-only">(current)</span></a></li>
			<li class="nav-item"><a  style="font-size: 20px" class="nav-link" href="{{asset('/introduce')}}" >Giới Thiệu</a></li>
			<li  class="nav-item dropdown ">
				<a style="font-size: 20px" class="nav-link dropdown-toggle"  href="#" id="dropdownId" data-hover="dropdown" data-delay="30000" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tin Tức</a>
					<div class="dropdown-menu " aria-labelledby="dropdownId" >
						@foreach ($information as $cate)
							<a  class="dropdown-item" href="{{asset('information/'.$cate->cate_id.'/'.$cate->cate_slug.'.html')}}" title="" >{{$cate->cate_name}}</a>
						@endforeach	
					</div>
			</li>
		
			
			<li  class="nav-item dropdown  ">
				<a style="font-size: 20px" class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dịch Vụ</a>
					<div class="dropdown-menu" aria-labelledby="dropdownId">
						@foreach ($service as $cate)	
							<a class="dropdown-item" href="{{asset('service/'.$cate->ser_id.'/'.$cate->ser_slug.'.html')}}" title="" >{{$cate->ser_name}}</a> 				
						@endforeach	
					</div>
			</li>
			<li  class="nav-item"><a style="font-size: 20px" href="{{asset('public/cssHeader/book.html')}}" class="nav-link">Sách</a></li>
			<li class="nav-item"><a style="font-size: 20px" href="{{asset('public/cssHeader/author.html')}}" class="nav-link">Tác Giả</a></li>
			<li class="nav-item"><a  style="font-size: 20px" href="{{asset('public/cssHeader/blog.html')}}" class="nav-link">Blog</a></li>
		  {{-- <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li> --}}
		  <li class="nav-item"><a style="font-size: 20px" href="{{asset('public/cssHeader/contact.html')}}" class="nav-link">Liên Hệ</a></li>
		</ul>
		<div class="col-sm-1" >
			{{-- <i class="fas fa-shopping-cart" style="color: black"> --}}
			<a  style="font-size: 20px" class="display" href="{{asset('cart/show')}}" >Giỏ hàng</a>
			<a href="{{asset('cart/show')}}" >{{Cart::count()}}</a>			
			</i>
		</div>
	  </div>
	</div>
  </nav>
	
	<!-- /header -->
	<!-- endheader -->

	<!-- main -->


	<section id="body">
		<div class="container-fluid">
			{{-- <div class="row"> --}}
				{{-- <div id="sidebar" class="col-md-2" >
					<nav id="menu" style="font-weight: bold; color: white" >
						<ul>
                            <li class="menu-item" style=" background-color: #d86843">Danh mục sản phẩm</li>
                            @foreach ($categories as $cate)
                             <li class="menu-item" style=" background-color: #d86843;"><a href="{{asset('category/'.$cate->cate_id.'/'.$cate->cate_slug.'.html')}}" title="" style=" color: white;">{{$cate->cate_name}}</a></li>
                            @endforeach					
						</ul>
						<!-- <a href="#" id="pull">Danh mục</a> -->
					</nav>

					<div id="banner-l" class="text-center">
						<div class="banner-l-item">
							<a href="#"><img src="img/home/qc1.jpg" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="img/home/qc2.jpg" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="img/home/qc3.jpg" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="img/home/qc4.jpg" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="img/home/qc5.jpg" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="img/home/qc6.jpg" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="img/home/qc7.jpg" alt="" class="img-thumbnail"></a>
						</div>
					</div>
				</div> --}}

				{{-- <div id="main" class="col-md-10"> --}}
					<!-- main -->
					<!-- phan slide la cac hieu ung chuyen dong su dung jquey -->
					 {{-- <div id="slider">
						<div id="demo" class="carousel slide" data-ride="carousel">

							<!-- Indicators -->
							<ul class="carousel-indicators">
								<li data-target="#demo" data-slide-to="0" class="active"></li>
								<li data-target="#demo" data-slide-to="1"></li>
								<li data-target="#demo" data-slide-to="2"></li>
							</ul>

							<!-- The slideshow -->
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img height="450" width="900" src="img/home/bn2.jpg" alt="Los Angeles" >
								</div>
								<div class="carousel-item">
									<img height="450" width="900" src="img/home/bn3.jpg" alt="Chicago">
								</div>
								<div class="carousel-item">
									<img height="450" width="900" src="img/home/bn1.jpg" alt="New York" >
								</div>
							</div>

							<!-- Left and right controls -->
							<a class="carousel-control-prev" href="#demo" data-slide="prev">
								<span class="carousel-control-prev-icon"></span>
							</a>
							<a class="carousel-control-next" href="#demo" data-slide="next">
								<span class="carousel-control-next-icon"></span>
							</a>
						</div>
					</div>  --}}
					
					
                    <!--Warrap-->
                    @yield('main')
					<!-- end main -->
					
				{{-- </div> --}}
			{{-- </div> --}}
		</div>
	</section>
	<!-- endmain -->

	<!-- footer -->
	<br>
	<footer class="ftco-footer">
		<div class="container">
		  <div class="row mb-5">
			<div class="col-sm-12 col-md">
			  <div class="ftco-footer-widget mb-4">
				<h2 class="ftco-heading-2 logo"><a href="#">Liên hệ</a></h2>
				<p>Kết nối với chúng tôi từ xa, để tiến lại gần các độc giả</p>
				<ul class="ftco-footer-social list-unstyled mt-2">
				  <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
				  <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
				  <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
				</ul>
			  </div>
			</div>
			<div class="col-sm-12 col-md">
			  <div class="ftco-footer-widget mb-4 ml-md-4">
				<h2 class="ftco-heading-2">Liên kết bổ sung</h2>
				<ul class="list-unstyled">
				  <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Chương trình liên kết</a></li>
				  <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Dịch vụ kinh doanh</a></li>
				  <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Dịch vụ giáo dục</a></li>
				  <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Thẻ quà tặng</a></li>
				</ul>
			  </div>
			</div>
			<div class="col-sm-12 col-md">
			  <div class="ftco-footer-widget mb-4 ml-md-4">
				<h2 class="ftco-heading-2">Hợp pháp</h2>
				<ul class="list-unstyled">
				  <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Tham gia với chúng tôi</a></li>
				  <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Blog</a></li>
				  <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Riêng tư &amp; Chính Sách</a></li>
				  <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Kỳ hạn &amp; Điều kiện</a></li>
				</ul>
			  </div>
			</div>
			<div class="col-sm-12 col-md">
			   <div class="ftco-footer-widget mb-4">
				<h2 class="ftco-heading-2">Công ty</h2>
				<ul class="list-unstyled">
				  <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Về chúng tôi</a></li>
				  <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Blog</a></li>
				  <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Liên lạc</a></li>
				  <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Nghề nghiệp</a></li>
				</ul>
			  </div>
			</div>
			<div class="col-sm-12 col-md">
			  <div class="ftco-footer-widget mb-4">
				  <h2 class="ftco-heading-2">Bạn Muốn Hỏi ?</h2>
				  <div class="block-23 mb-3">
					<ul>
					  <li><span class="icon fa fa-map marker"></span><span class="text">98 Ngô Tất Tố, Phường 19, Bình Thạnh, TP.Hồ Chí Minh</span></li>
					  <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+84 0327556254</span></a></li>
					  <li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span class="text">lovebook@gmail.com</span></a></li>
					  <li>
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3919.2490460938893!2d106.7090975!3d10.7922279!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528b2715d085f%3A0xe0a24427fccf63bf!2zOTggxJDGsOG7nW5nIE5nw7QgVOG6pXQgVOG7kSwgUGjGsOG7nW5nIDE5LCBCw6xuaCBUaOG6oW5oLCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1595298427440!5m2!1svi!2s" width="200" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					  </li>
					 
					</ul>
				  </div>
			  </div>
			</div>
		  </div>
		</div>
		<div class="container-fluid px-0 py-5 bg-black">
			<div class="container">
				<div class="row">
				<div class="col-md-12">
		  
				  <p class="mb-0" style="color: rgba(255,255,255,.5);"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		Copyright &copy;<script>document.write(new Date().getFullYear());</script> Love Book Company | This template is made with <i class="fa fa-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">LoveBook.com</a>
		<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				</div>
			  </div>
			</div>
		</div>
	  </footer>
	<!-- endfooter -->
	<script type="text/javascript">
		$('.multi-item-carousel .item').each(function(){
		  var next = $(this).next();
		  if (!next.length) {
			next = $(this).siblings(':first');
		  }
		  next.children(':first-child').clone().appendTo($(this));
		  
		  if (next.next().length>0) {
			next.next().children(':first-child').clone().appendTo($(this));
		  } else {
			$(this).siblings(':first').children(':first-child').clone().appendTo($(this));
		  }
		});
	  </script>
	  <script src="{{asset('public/cssHeader/js/jquery.min.js')}}"></script>
	  <script src="{{asset('public/cssHeader/js/jquery-migrate-3.0.1.min.js')}}"></script>
	  <script src="{{asset('public/cssHeader/js/popper.min.js')}}"></script>
	  <script src="{{asset('public/cssHeader/js/bootstrap.min.js')}}"></script>
	  <script src="{{asset('public/cssHeader/js/jquery.easing.1.3.js')}}"></script>
	  <script src="{{asset('public/cssHeader/js/jquery.waypoints.min.js')}}"></script>
	  <script src="{{asset('public/cssHeader/js/jquery.stellar.min.js')}}"></script>
	  <script src="{{asset('public/cssHeader/js/owl.carousel.min.js')}}"></script>
	  <script src="{{asset('public/cssHeader/js/jquery.magnific-popup.min.js')}}"></script>
	  <script src="{{asset('public/cssHeader/js/jquery.animateNumber.min.js')}}"></script>
	  <script src="{{asset('public/cssHeader/js/scrollax.min.js')}}"></script>
	  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	  <script src="{{asset('public/cssHeader/js/google-map.js')}}"></script>
	  <script src="{{asset('public/cssHeader/js/main.js')}}"></script>
</body>
</html>