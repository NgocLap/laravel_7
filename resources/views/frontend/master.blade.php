<!DOCTYPE html>
<html>
<head>
	<base href="{{asset('public/layout/frontend')}}/">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title> Love Book - @yield('title')</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	{{-- <link rel="stylesheet" href="css/home.css"> --}}
	<link rel="stylesheet" href="css/home2.css">
	{{-- <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script> --}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
					<div class="col-md-6 text-center" >
						<a class="navbar-brand" href="{{asset('/')}}" style="font-size: 30px">LOVE <span>BOOK</span> <small>Book Publishing Company</small></a>
					</div>
					<div class="col-md-6 d-md-flex justify-content-end mb-md-0 mb-3">
						<form  class="searchform order-lg-last"  role="search" method="get" action="{{asset('search/')}}">
				 			 <div class="form-group d-flex">
								<input type="text" class="form-control pl-3" placeholder="T??m ki???m ..." name="result">
								<button type="submit" name="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
				  			</div>
						</form>
						
					
					</div>
				</div>
			</div>
			
			<div class="col-md-4 d-flex">
				<div class="social-media">
				<p class="mb-0 d-flex">
					
					<a  class = "d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
					<a  class = "d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
					<a  class = "d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
					<a  class = "d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
				</p>
		</div>
			</div>
		</div>
	</div>
	{{-- <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container-fluid">
	
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="fa fa-bars"></span> Menu
	  </button>
	  <div class="collapse navbar-collapse" id="ftco-nav">
		<a class="nav-link" href="{{asset('/')}}" ><img width="130" src="img/home/logod.png" alt=""></a>
		<ul class="nav navbar-nav " >
			<li class="nav-item active"><a style="font-size: 20px" class="nav-link" href="{{asset('/')}}" >Trang Ch??? <span class="sr-only">(current)</span></a></li>
			<li class="nav-item"><a  style="font-size: 20px" class="nav-link" href="{{asset('/introduce2')}}" >Gi???i Thi???u</a></li>
			<li  class="nav-item dropdown ">
				<a style="font-size: 20px" class="nav-link dropdown-toggle"  href="#" id="dropdownId" data-hover="dropdown" data-delay="30000" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tin T???c</a>
					<div class="dropdown-menu " aria-labelledby="dropdownId" >
						@foreach ($information as $cate)
							<a  class="dropdown-item" href="{{asset('information/'.$cate->cate_id.'/'.$cate->cate_slug.'.html')}}" title="" >{{$cate->cate_name}}</a>
						@endforeach	
					</div>
			</li>
			
			<li  class="nav-item dropdown  ">
				<a style="font-size: 20px" class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">D???ch V???</a>
					<div class="dropdown-menu" aria-labelledby="dropdownId">
						@foreach ($service as $cate)	
							<a class="dropdown-item" href="{{asset('service/'.$cate->ser_id.'/'.$cate->ser_slug.'.html')}}" title="" >{{$cate->ser_name}}</a> 				
						@endforeach	
					</div>
			</li>
			<li  class="nav-item dropdown ">
				<a style="font-size: 20px" class="nav-link dropdown-toggle"  href="#" id="dropdownId" data-hover="dropdown" data-delay="30000" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">S??ch</a>
					<div class="dropdown-menu " aria-labelledby="dropdownId" >
						@foreach ($categories as $cate)
						<a class="dropdown-item" href="{{asset('category/'.$cate->cate_id.'/'.$cate->cate_slug.'.html')}}" title="" >{{$cate->cate_name}}</a>
						@endforeach	
					</div>
			</li>
			
			<li class="nav-item"><a style="font-size: 20px" href="{{asset('public/cssHeader/author.html')}}" class="nav-link">T??c Gi???</a></li>
			<li class="nav-item"><a  style="font-size: 20px" href="{{asset('public/cssHeader/blog.html')}}" class="nav-link">Blog</a></li>
		
		  <li class="nav-item"><a style="font-size: 20px" href="{{asset('public/cssHeader/contact.html')}}" class="nav-link">Li??n H???</a></li>
		</ul>
		<div class="col-sm-1" >
			
			<a  style="font-size: 20px" class="display" href="{{asset('cart/show')}}" >Gi??? h??ng</a>
			<a href="{{asset('cart/show')}}" >{{Cart::count()}}</a>			
			</i>
		</div>
	  </div>
	</div>
  </nav> --}}

 
  {{-- <nav class="navbar navbar-expand-sm navbar-light bg-light">
	  <a class="navbar-brand" href="#">Navbar</a>
	  <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
		  aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="collapsibleNavId">
		  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			  <li class="nav-item active">
				  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
			  </li>
			  <li class="nav-item">
				  <a class="nav-link" href="#">Link</a>
			  </li>
			  <li class="nav-item dropdown">
				  <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
				  <div class="dropdown-menu" aria-labelledby="dropdownId">
					  <a class="dropdown-item" href="#">Action 1</a>
					  <a class="dropdown-item" href="#">Action 2</a>
				  </div>
			  </li>
		  </ul>
		  <form class="form-inline my-2 my-lg-0">
			  <input class="form-control mr-sm-2" type="text" placeholder="Search">
			  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		  </form>
	  </div>
  </nav> --}}


  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	{{-- <a class="navbar-brand" href="#">Menu</a>
	<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
		aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span> --}}
	<div class="container-fluid" >
		<div class="collapse navbar-collapse"  >
			<a class="nav-link" href="{{asset('/')}}" ><img width="120" src="img/home/logod.png" alt=""></a>
			<ul class="nav navbar-nav "  >
				@foreach ($menu as $menus)
				<li class="nav-item dropdown " >
						<a class="nav-link dropdown-toggle" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="{{asset('menu/'.$menus->menu_id.'/'.$menus->menu_slug.'.html')}}" title="" >{{$menus->menu_name}}</a>
						<div class="dropdown-menu" aria-labelledby="dropdownId">

							{{-- Gi???i Thi???u --}}
							@foreach ($introduce as $cate )
								@if($menus->menu_id == $cate->intro_menu )
									<a class="dropdown-item" href="{{asset('introduce/'.$cate->intro_id.'/'.$cate->intro_slug.'.html')}}" title="" >{{$cate->intro_name}}</a>
								@endif
							@endforeach

							{{-- Tin t???c --}}
							@foreach ($information as $cate )
								@if($menus->menu_id == $cate->infor_menu )
									<a class="dropdown-item" href="{{asset('information/'.$cate->cate_id.'/'.$cate->cate_slug.'.html')}}" title="" >{{$cate->cate_name}}</a>
								@endif
							@endforeach

							{{-- S???n ph???m --}}
							@foreach ($categories as $cate)
								@if($menus->menu_id == $cate->cate_menu)
									<a class="dropdown-item" href="{{asset('category/'.$cate->cate_id.'/'.$cate->cate_slug.'.html')}}" title="" >{{$cate->cate_name}}</a>
								@endif	
							@endforeach  

							{{-- D???ch V??? --}}
							@foreach ($service as $cate)
								@if($menus->menu_id == $cate->ser_menu)
								<a class="dropdown-item" href="{{asset('service/'.$cate->ser_id.'/'.$cate->ser_slug.'.html')}}" title="" >{{$cate->ser_name}}</a> 				
								@endif	
							@endforeach

							{{-- S???n ph???m gi???m gi?? --}}
							@foreach ($categoridiscount as $cate)
								@if($menus->menu_id == $cate->catediscount_menu)
									<a class="dropdown-item" href="{{asset('categorydiscount/'.$cate->catediscount_id.'/'.$cate->catediscount_slug.'.html')}}" title="" >{{$cate->catediscount_name}}</a>
								@endif	
							@endforeach 

						</div>					
				</li>
				@endforeach
			</ul>
			<div class="col-sm-1" >
				<a  style="font-size: 20px" class="display" href="{{asset('cart/show')}}" >Gi??? h??ng : </a>
				<a class="display" href="{{asset('cart/show')}}" >{{Cart::count()}}</a>	
			</div>
		</div>
	</div>
  </nav>
  
	<hr>
	<!-- /header -->
	<!-- endheader -->

	<!-- main -->


	<section id="body">
		<div class="container-fluid">
			<div class="row">
				<div id="sidebar" class="col-md-2" >
					<nav id="menu" style="font-weight: bold; color: white" >
						<ul>
							<li class="menu-item" style=" background-color: #d86843">Danh m???c s???n ph???m</li>
							@foreach ($categories as $cate)
							 <li class="menu-item" style=" background-color: #d86843;"><a href="{{asset('category/'.$cate->cate_id.'/'.$cate->cate_slug.'.html')}}" title="" style=" color: white;">{{$cate->cate_name}}</a></li>
							@endforeach		
							
						</ul>
			
					</nav>
	
					<div id="banner-l" class="text-center">
						<div class="banner-l-item">
							<a ><img src="img/home/qc1.jpg" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a ><img src="img/home/qc2.jpg" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a ><img src="img/home/qc3.jpg" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a ><img src="img/home/qc4.jpg" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a ><img src="img/home/qc5.jpg" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a ><img src="img/home/qc6.jpg" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a ><img src="img/home/qc7.jpg" alt="" class="img-thumbnail"></a>
						</div>
					</div>
				</div>
				
				

				<div id="main" class="col-md-10">
					<!-- main -->
					<!-- phan slide la cac hieu ung chuyen dong su dung jquey -->
					 <div id="slider">
						<div id="demo" class="carousel slide" data-ride="carousel" data-interval="1800">
							<!-- Indicators -->
							
							<ul class="carousel-indicators">
									<li data-target="#demo" data-slide-to="0" class="active"></li>
									<li data-target="#demo" data-slide-to="1" ></li>
									<li data-target="#demo" data-slide-to="2" ></li>
							</ul>

							<!-- The slideshow -->
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img height="400" width="1200" src="img/home/bn1.jpg" alt="Los Angeles" >
								</div>
								<div class="carousel-item">
									<img height="400" width="1200" src="img/home/banner2.jpg" alt="Chicago">
								</div>
								<div class="carousel-item">
									<img height="400" width="1200" src="img/home/bn3.jpg" alt="New York" >
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
					</div> 
					
					
					<!--Warrap-->
					@yield('main')
					<!-- end main -->
				</div>
				{{-- <div id="main" class="col-md-2">
					<nav id="menu" style="font-weight: bold; color: white" >
						<ul>
							<li class="menu-item" style=" background-color: #d86843">Danh m???c tin t???c</li>
							@foreach ($information as $cate)
							 <li class="menu-item" style=" background-color: #d86843;"><a href="{{asset('information/'.$cate->cate_id.'/'.$cate->cate_slug.'.html')}}" title="" style=" color: white;">{{$cate->cate_name}}</a></li>
							@endforeach					
						</ul>
						<!-- <a href="#" id="pull">Danh m???c</a> -->
					</nav>
				</div> --}}
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
				<h2 class="ftco-heading-2 logo"><a href="#">Li??n h???</a></h2>
				<p>K???t n???i v???i ch??ng t??i t??? xa, ????? ti???n l???i g???n c??c ?????c gi???</p>
				<ul class="ftco-footer-social list-unstyled mt-2">
				  <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
				  <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
				  <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
				</ul>
			  </div>
			</div>
			<div class="col-sm-12 col-md">
			  <div class="ftco-footer-widget mb-4 ml-md-4">
				<h2 class="ftco-heading-2">Li??n k???t b??? sung</h2>
				<ul class="list-unstyled">
				  <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Ch????ng tr??nh li??n k???t</a></li>
				  <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>D???ch v??? kinh doanh</a></li>
				  <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>D???ch v??? gi??o d???c</a></li>
				  <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Th??? qu?? t???ng</a></li>
				</ul>
			  </div>
			</div>
			<div class="col-sm-12 col-md">
			  <div class="ftco-footer-widget mb-4 ml-md-4">
				<h2 class="ftco-heading-2">H???p ph??p</h2>
				<ul class="list-unstyled">
				  <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Tham gia v???i ch??ng t??i</a></li>
				  <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Blog</a></li>
				  <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Ri??ng t?? &amp; Ch??nh S??ch</a></li>
				  <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>K??? h???n &amp; ??i???u ki???n</a></li>
				</ul>
			  </div>
			</div>
			<div class="col-sm-12 col-md">
			   <div class="ftco-footer-widget mb-4">
				<h2 class="ftco-heading-2">C??ng ty</h2>
				<ul class="list-unstyled">
				  <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>V??? ch??ng t??i</a></li>
				  <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Blog</a></li>
				  <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Li??n l???c</a></li>
				  <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Ngh??? nghi???p</a></li>
				</ul>
			  </div>
			</div>
			<div class="col-sm-12 col-md">
			  <div class="ftco-footer-widget mb-4">
				  <h2 class="ftco-heading-2">B???n Mu???n H???i ?</h2>
				  <div class="block-23 mb-3">
					<ul>
					  <li><span class="icon fa fa-map marker"></span><span class="text">98 Ng?? T???t T???, Ph?????ng 19, B??nh Th???nh, TP.H??? Ch?? Minh</span></li>
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