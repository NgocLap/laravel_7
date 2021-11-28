<!DOCTYPE html>
<html>
<head>
<base href="{{asset('public/layout/backend')}}/">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title') | Love Book</title>
{{-- <link href="css/bootstrap.min.css" rel="stylesheet"> --}}
<link href="css/datepicker3.css" rel="stylesheet">
{{-- <link href="css/styles.css" rel="stylesheet"> --}}
<script type="text/javascript" src="../../editor/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script src="js/lumino.glyphs.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
{{-- Link Admin Mới --}}
 <link rel="stylesheet" href="{{asset('public/cssAdminLTE2/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('public/cssAdminLTE2/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('public/cssAdminLTE2/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('public/cssAdminLTE2/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('public/cssAdminLTE2/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('public/cssAdminLTE2/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('public/cssAdminLTE2/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('public/cssAdminLTE2/plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">
	  <!-- Navbar -->
	  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
		<!-- Left navbar links -->
		<ul class="navbar-nav">
		  <li class="nav-item">
			<a class="nav-link" data-widget="pushmenu"  role="button"><i class="fas fa-bars"></i></a>
		  </li>
		  <li class="nav-item d-none d-sm-inline-block">
			<a href="{{asset('admin/home')}}" class="nav-link">Trang Chủ</a>
		  </li>
		  <li class="nav-item d-none d-sm-inline-block">
			<a href="index2.html" class="nav-link">Liên Hệ</a>
		  </li>
		</ul>
	
		<!-- SEARCH FORM -->
		<form class="form-inline ml-3">
		  <div class="input-group input-group-sm">
			<input class="form-control form-control-navbar" type="search" placeholder="Tìm kiếm..." aria-label="Search">
			<div class="input-group-append">
			  <button class="btn btn-navbar" type="submit">
				<i class="fas fa-search"></i>
			  </button>
			</div>
		  </div>
		</form>
	
		<!-- Right navbar links -->
		<ul class="navbar-nav ml-auto">
		  <!-- Messages Dropdown Menu -->
		  <li class="nav-item dropdown">
			<a class="nav-link" data-toggle="dropdown" href="index2.html">
			  <i class="far fa-comments"></i>
			  <span class="badge badge-danger navbar-badge">3</span>
			</a>
			<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
			  <a href="index2.html" class="dropdown-item">
				<!-- Message Start -->
				<div class="media">
				  <img src="{{asset('public/cssAdminLTE2/dist/img/user1-128x128.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
				  <div class="media-body">
					<h3 class="dropdown-item-title">
					  Brad Diesel
					  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
					</h3>
					<p class="text-sm">Hãy gọi tôi khi bạn cần thiết</p>
					<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Giờ trước</p>
				  </div>
				</div>
				<!-- Message End -->
			  </a>
			  <div class="dropdown-divider"></div>
			  <a href="index2.html" class="dropdown-item">
				<!-- Message Start -->
				<div class="media">
				  <img src="{{asset('public/cssAdminLTE2/dist/img/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
				  <div class="media-body">
					<h3 class="dropdown-item-title">
					  John Pierce
					  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
					</h3>
					<p class="text-sm">Tôi có cuộc hẹn với anh</p>
					<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Giờ trước</p>
				  </div>
				</div>
				<!-- Message End -->
			  </a>
			  <div class="dropdown-divider"></div>
			  <a href="index2.html" class="dropdown-item">
				<!-- Message Start -->
				<div class="media">
				  <img src="{{asset('public/cssAdminLTE2/dist/img/user3-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
				  <div class="media-body">
					<h3 class="dropdown-item-title">
					  Nora Silvester
					  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
					</h3>
					<p class="text-sm">Chúng ta sẽ đến nơi đã hẹn</p>
					<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Giờ trước</p>
				  </div>
				</div>
				<!-- Message End -->
			  </a>
			  <div class="dropdown-divider"></div>
			  <a href="index2.html" class="dropdown-item dropdown-footer">Xem tất cả tin nhắn</a>
			</div>
		  </li>
		  <!-- Notifications Dropdown Menu -->
		  <li class="nav-item dropdown">
			<a class="nav-link" data-toggle="dropdown" href="index2.html">
			  <i class="far fa-bell"></i>
			  <span class="badge badge-warning navbar-badge">15</span>
			</a>
			<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
			  <span class="dropdown-item dropdown-header">15 Thông Báo</span>
			  <div class="dropdown-divider"></div>
			  <a href="index2.html" class="dropdown-item">
				<i class="fas fa-envelope mr-2"></i> 4 tin nhắn mới
				<span class="float-right text-muted text-sm">3 mins</span>
			  </a>
			  <div class="dropdown-divider"></div>
			  <a href="index2.html" class="dropdown-item">
				<i class="fas fa-users mr-2"></i> 8 đề xuất kết bạn
				<span class="float-right text-muted text-sm">12 hours</span>
			  </a>
			  <div class="dropdown-divider"></div>
			  <a href="index2.html" class="dropdown-item">
				<i class="fas fa-file mr-2"></i> 3 thông báo mới
				<span class="float-right text-muted text-sm">2 days</span>
			  </a>
			  <div class="dropdown-divider"></div>
			  <a href="index2.html" class="dropdown-item dropdown-footer">Xem toàn bộ thông báo</a>
			</div>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="index2.html" role="button">
			  <i class="fas fa-th-large"></i>
			</a>
		  </li>
			  {{-- Logout --}}
			  <li class="nav-item dropdown">
				<a class="nav-link" data-toggle="dropdown" href="index2.html">
				  <i class="fas fa-user-alt"></i>
				</a>
				<div class="dropdown-menu ">
					<a href="index2.html" class="dropdown-toggle" data-toggle="dropdown"> {{Auth::user()->email}} </a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="{{asset('logout')}}"> Đăng xuất</a></li>
					</ul>
				</div>
				{{-- <a href="index2.html" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> {{Auth::user()->email}} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{asset('logout')}}"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
							</ul> --}}
			  </li>
			  
		</ul>
		
		
	  </nav>
	  <!-- /.navbar -->
	
	  <!-- Main Sidebar Container -->
	  <aside class="main-sidebar sidebar-dark-primary elevation-4">
		<!-- Brand Logo -->
		<a href="{{asset('admin/home')}}" class="brand-link">
		  <img src="{{asset('public/cssAdminLTE2/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
			   style="opacity: .8">
		  <span class="brand-text font-weight-light">AdminLNL </span>
		</a>
	
		<!-- Sidebar -->
		<div class="sidebar">
		  <!-- Sidebar user panel (optional) -->
		  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
			  <img src="{{asset('public/cssAdminLTE2/dist/img/lap.jpg')}}" class="img-circle elevation-2" alt="User Image">
			</div> 
			<div class="info">
			  <a  class="d-block">Lương Ngọc Lập</a>
			</div>
		  </div>
		  <nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
			  <!-- Add icons to the links using the .nav-icon class
				   with font-awesome or any other icon font library -->
				   {{-- <li class="nav-item">
					<a href="{{asset('admin/home')}}" class="nav-link">
					  <i class="nav-icon fas fa-th"></i>
					  <p>
						Trang Chủ
					  </p>
					</a>
				  </li> --}}
			  <li class="nav-item has-treeview menu-open">
				<a href="#" class="nav-link ">
				  <i class="nav-icon fas fa-tachometer-alt"></i>
				  <p>
					Dữ Liệu
					<i class="right fas fa-angle-left"></i>
				  </p>
				</a>
				<ul  class="nav nav-treeview" >
					<li class="nav-item">
						<a href="{{asset('admin/menu')}}"  class="nav-link ">
						  <i class="far fa-circle nav-icon"></i>
						  <p>Danh mục menu</p>
						</a>
					</li>  
					<li class="nav-item">
						<a href="{{asset('admin/product')}}"  class="nav-link ">
						  <i class="far fa-circle nav-icon"></i>
						  <p>Sản Phẩm</p>
						</a>
					  </li>
					  <li class="nav-item">
						<a href="{{asset('admin/category')}}"  class="nav-link ">
						  <i class="far fa-circle nav-icon"></i>
						  <p>Danh mục sản phẩm</p>
						</a>
					  </li> 
					  <li class="nav-item">
						<a href="{{asset('admin/productdiscount')}}"  class="nav-link ">
						  <i class="far fa-circle nav-icon"></i>
						  <p>Sản Phẩm giảm giá</p>
						</a>
					  </li>     
					  <li class="nav-item">
						<a href="{{asset('admin/categorydiscount')}}"  class="nav-link ">
						  <i class="far fa-circle nav-icon"></i>
						  <p>Danh mục SP giảm giá</p>
						</a>
					  </li>
					<li class="nav-item">
						<a href="{{asset('admin/news')}}"  class="nav-link ">
						  <i class="far fa-circle nav-icon"></i>
						  <p>Tin Tức</p>
						</a>
					  </li>  
					<li class="nav-item">
						<a href="{{asset('admin/information')}}"  class="nav-link ">
						  <i class="far fa-circle nav-icon"></i>
						  <p>Danh mục tin tức</p>
						</a>
					  </li>  
					<li class="nav-item">
						<a href="{{asset('admin/contentsv')}}"  class="nav-link ">
						  <i class="far fa-circle nav-icon"></i>
						  <p>Dịch Vụ</p>
						</a>
					  </li>  
					<li class="nav-item">
						<a href="{{asset('admin/service')}}"  class="nav-link ">
						  <i class="far fa-circle nav-icon"></i>
						  <p>Danh mục dịch vụ</p>
						</a>
					</li>
					 
					<li class="nav-item">
						<a href="{{asset('admin/contentintro')}}"  class="nav-link ">
						  <i class="far fa-circle nav-icon"></i>
						  <p>Giới Thiệu</p>
						</a>
					  </li> 
					<li class="nav-item">
						<a href="{{asset('admin/introduce')}}"  class="nav-link ">
						  <i class="far fa-circle nav-icon"></i>
						  <p>Danh mục giới thiệu</p>
						</a>
					</li> 
					<li class="nav-item">
						<a href="{{asset('admin/eventcontent')}}"  class="nav-link ">
						  <i class="far fa-circle nav-icon"></i>
						  <p>Sự Kiện</p>
						</a>
					  </li>
					<li class="nav-item">
						<a href="{{asset('admin/event')}}"  class="nav-link ">
						  <i class="far fa-circle nav-icon"></i>
						  <p>Danh mục Sự Kiện</p>
						</a>
					</li> 

				</ul>
			  </li>
			  <li class="nav-item">
				<a href="{{asset('public/cssAdminLTE2/pages/widgets.html')}}" class="nav-link">
				  <i class="nav-icon fas fa-th"></i>
				  <p>
					Widgets
					<span class="right badge badge-danger">New</span>
				  </p>
				</a>
			  </li>
			  <li class="nav-item has-treeview">
				<a href="index2.html" class="nav-link">
				  <i class="nav-icon fas fa-copy"></i>
				  <p>
					Tùy Chọn Giao Diện
					<i class="fas fa-angle-left right"></i>
					<span class="badge badge-info right">6</span>
				  </p>
				</a>
				<ul class="nav nav-treeview">
				  <li class="nav-item">
					<a href="{{asset('public/cssAdminLTE2/pages/layout/top-nav.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Thanh điều hướng trên cùng</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/cssAdminLTE2/pages/layout/top-nav-sidebar.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Điều hướng hàng đầu + Thanh bên</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/cssAdminLTE2/pages/layout/boxed.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Đóng hộp</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/cssAdminLTE2/pages/layout/fixed-sidebar.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Thanh bên cố định</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/cssAdminLTE2/pages/layout/fixed-topnav.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Sửa lỗi thanh điều hướng</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/cssAdminLTE2/pages/layout/fixed-footer.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Sửa Footer</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/cssAdminLTE2/pages/layout/collapsed-sidebar.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Thanh bên được thu gọn</p>
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="nav-item has-treeview">
				<a href="index2.html" class="nav-link">
				  <i class="nav-icon fas fa-chart-pie"></i>
				  <p>
					Biểu đồ
					<i class="right fas fa-angle-left"></i>
				  </p>
				</a>
				<ul class="nav nav-treeview">
				  <li class="nav-item">
					<a href="{{asset('public/cssAdminLTE2/pages/charts/chartjs.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Biểu đồ JS</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/cssAdminLTE2/pages/charts/flot.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Flot</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/cssAdminLTE2/pages/charts/inline.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Nội tuyến</p>
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="nav-item has-treeview">
				<a href="index2.html" class="nav-link">
				  <i class="nav-icon fas fa-tree"></i>
				  <p>
					Giao diện người dùng
					<i class="fas fa-angle-left right"></i>
				  </p>
				</a>
				<ul class="nav nav-treeview">
				  <li class="nav-item">
					<a href="{{asset('public/cssAdminLTE2/pages/UI/general.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Chung</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/cssAdminLTE2/pages/UI/icons.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Icons</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/cssAdminLTE2/pages/UI/buttons.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Nút</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/cssAdminLTE2/pages/UI/sliders.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Thanh trượt</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/cssAdminLTE2/pages/UI/modals.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Phương thức & Cảnh báo</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/cssAdminLTE2/pages/UI/navbar.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Thanh điều hướng & Tab</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/AdminLTE2/pages/UI/timeline.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Mốc thời gian</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/AdminLTE2/pages/UI/ribbons.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Ruy băng</p>
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="nav-item has-treeview">
				<a href="index2.html" class="nav-link">
				  <i class="nav-icon fas fa-edit"></i>
				  <p>
					Các hình thức
					<i class="fas fa-angle-left right"></i>
				  </p>
				</a>
				<ul class="nav nav-treeview">
				  <li class="nav-item">
					<a href="{{asset('public/AdminLTE2/pages/forms/general.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Yếu tố chung</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/AdminLTE2/pages/forms/advanced.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Yếu tố tiên tiến</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/AdminLTE2/pages/forms/editors.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Biên tập viên</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/AdminLTE2/pages/forms/validation.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Thẩm định</p>
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="nav-item has-treeview">
				<a href="index2.html" class="nav-link">
				  <i class="nav-icon fas fa-table"></i>
				  <p>
					Bảng
					<i class="fas fa-angle-left right"></i>
				  </p>
				</a>
				<ul class="nav nav-treeview">
				  <li class="nav-item">
					<a href="{{asset('public/AdminLTE2/pages/tables/simple.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Bảng đơn giản</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/AdminLTE2/pages/tables/data.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Dữ liệu</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/AdminLTE2/pages/tables/jsgrid.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>jsGrid</p>
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="nav-header">VÍ DỤ</li>
			  <li class="nav-item">
				<a href="{{asset('public/cssAdminLTE2/pages/calendar.html')}}" class="nav-link">
				  <i class="nav-icon far fa-calendar-alt"></i>
				  <p>
					Lịch
					<span class="badge badge-info right">2</span>
				  </p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="{{asset('public/cssAdminLTE2/pages/gallery.html')}}" class="nav-link">
				  <i class="nav-icon far fa-image"></i>
				  <p>
					Bộ sưu tập
				  </p>
				</a>
			  </li>
			  <li class="nav-item has-treeview">
				<a href="index2.html" class="nav-link">
				  <i class="nav-icon far fa-envelope"></i>
				  <p>
					Hộp thư
					<i class="fas fa-angle-left right"></i>
				  </p>
				</a>
				<ul class="nav nav-treeview">
				  <li class="nav-item">
					<a href="{{asset('public/cssAdminLTE2/pages/mailbox/mailbox.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Hộp thư đến</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/cssAdminLTE2/pages/mailbox/compose.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Biên Soạn</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/cssAdminLTE2/pages/mailbox/read-mail.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Đọc</p>
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="nav-item has-treeview">
				<a href="index2.html" class="nav-link">
				  <i class="nav-icon fas fa-book"></i>
				  <p>
					Trang
					<i class="fas fa-angle-left right"></i>
				  </p>
				</a>
				<ul class="nav nav-treeview">
				  <li class="nav-item">
					<a href="{{asset('public/cssAdminLTE2/pages/examples/invoice.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Hóa đơn</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/cssAdminLTE2/pages/examples/profile.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Hồ sơ</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/cssAdminLTE2/pages/examples/e-commerce.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Thương mại điện tử</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/cssAdminLTE2/pages/examples/projects.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Dự án</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/cssAdminLTE2/pages/examples/project-add.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Thêm Dự Án</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/cssAdminLTE2/pages/examples/project-edit.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Chỉnh Sửa Dự Án</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/cssAdminLTE2/pages/examples/project-detail.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Chi Tiết Dự Án</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/cssAdminLTE2/pages/examples/contacts.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Liên Hệ</p>
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="nav-item has-treeview">
				<a href="index2.html" class="nav-link">
				  <i class="nav-icon far fa-plus-square"></i>
				  <p>
					 User
					<i class="fas fa-angle-left right"></i>
				  </p>
				</a>
				<ul class="nav nav-treeview">
				  <li class="nav-item">
					<a href="{{asset('admin/user/register')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Quản lý dữ liệu Users</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/cssAdminLTE2/pages/examples/register.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Đăng Ký</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/cssAdminLTE2/pages/examples/forgot-password.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Quên mật khẩu</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/cssAdminLTE2/pages/examples/recover-password.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Khôi phục mật khẩu</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/cssAdminLTE2/pages/examples/lockscreen.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Màn hình khóa</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/cssAdminLTE2/pages/examples/legacy-user-menu.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Menu người dùng kế thừa</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/cssAdminLTE2/pages/examples/language-menu.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Menu ngôn ngữ</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/cssAdminLTE2/pages/examples/404.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Lỗi 404</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/cssAdminLTE2/pages/examples/500.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Lỗi 500</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/cssAdminLTE2/pages/examples/pace.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Tốc độ</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/cssAdminLTE2/pages/examples/blank.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Trang trống</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="{{asset('public/cssAdminLTE2/starter.html')}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Trang bắt đầu</p>
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="nav-header">ĐIỀU KHOẢN KHÁC</li>
			  <li class="nav-item">
				<a href="https://adminlte.io/docs/3.0" class="nav-link">
				  <i class="nav-icon fas fa-file"></i>
				  <p>Tài liệu</p>
				</a>
			  </li>
			  <li class="nav-header">VÍ DỤ CÁC CẤP </li>
			  <li class="nav-item">
				<a href="index2.html" class="nav-link">
				  <i class="fas fa-circle nav-icon"></i>
				  <p>Cấp độ 1</p>
				</a>
			  </li>
			  <li class="nav-item has-treeview">
				<a href="index2.html" class="nav-link">
				  <i class="nav-icon fas fa-circle"></i>
				  <p>
					Cấp độ 1
					<i class="right fas fa-angle-left"></i>
				  </p>
				</a>
				<ul class="nav nav-treeview">
				  <li class="nav-item">
					<a href="index2.html" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Cấp độ 2</p>
					</a>
				  </li>
				  <li class="nav-item has-treeview">
					<a href="index2.html" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>
						Cấp độ 2
						<i class="right fas fa-angle-left"></i>
					  </p>
					</a>
					<ul class="nav nav-treeview">
					  <li class="nav-item">
						<a href="index2.html" class="nav-link">
						  <i class="far fa-dot-circle nav-icon"></i>
						  <p>Cấp độ 3</p>
						</a>
					  </li>
					  <li class="nav-item">
						<a href="index2.html" class="nav-link">
						  <i class="far fa-dot-circle nav-icon"></i>
						  <p>Cấp độ 3</p>
						</a>
					  </li>
					  <li class="nav-item">
						<a href="index2.html" class="nav-link">
						  <i class="far fa-dot-circle nav-icon"></i>
						  <p>Cấp độ 3</p>
						</a>
					  </li>
					</ul>
				  </li>
				  <li class="nav-item">
					<a href="index2.html" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Cấp độ 2</p>
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="nav-item">
				<a href="index2.html" class="nav-link">
				  <i class="fas fa-circle nav-icon"></i>
				  <p>Cấp độ 1</p>
				</a>
			  </li>
			  <li class="nav-header">NHÃN</li>
			  <li class="nav-item">
				<a href="index2.html" class="nav-link">
				  <i class="nav-icon far fa-circle text-danger"></i>
				  <p class="text">Quan trọng</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="index2.html" class="nav-link">
				  <i class="nav-icon far fa-circle text-warning"></i>
				  <p>Cảnh báo</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="index2.html" class="nav-link">
				  <i class="nav-icon far fa-circle text-info"></i>
				  <p>Thông tin</p>
				</a>
			  </li>
			</ul>
		  </nav>
		  <!-- /.sidebar-menu -->
		</div>
		<!-- /.sidebar -->
	  </aside>
	
	 
	
		<!-- /.content-header -->
	
		@yield('main')
	  
		<footer class="main-footer">
			<strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLNL.io</a>.</strong>
			All rights reserved.
			<div class="float-right d-none d-sm-inline-block">
			</div>
		</footer>
		
		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->
	
	  
		<!-- Content Wrapper. Contains page content -->
		{{-- <div class="content-wrapper">
		  <!-- Content Header (Page header) -->
		  <div class="content-header">
			<div class="container-fluid">
			  <div class="row mb-2">
				<div class="col-sm-6">
				  <h1 class="m-0 text-dark">Dashboard</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
				  <ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Dashboard v1</li>
				  </ol>
				</div><!-- /.col -->
			  </div><!-- /.row -->
			</div><!-- /.container-fluid -->
		  </div>
		</div> --}}
	
		  <!-- /.content-header -->
		
		{{-- Trang Admin Cũ --}}
		{{-- <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: #30a5ff">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="{{asset('admin/home')}}">TES Admin</a>
					<ul class="user-menu">
						<li class="dropdown pull-right">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> {{Auth::user()->email}} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{asset('logout')}}"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
							</ul>
						</li>
					</ul>
				</div>
								
			</div><!-- /.container-fluid -->
		</nav>

		<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
			<ul class="nav menu">
				<li role="presentation" class="divider"></li>
				<li class="active"><a href="{{asset('admin/home')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Trang chủ</a></li>
				<li><a href="{{asset('admin/product')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Sản phẩm</a></li>
				<li><a href="{{asset('admin/category')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Danh mục Sản phẩm</a></li>
				<li><a href="{{asset('admin/news')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Tin Tức</a></li>
				<li><a href="{{asset('admin/information')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Danh Mục Tin tức</a></li>
				<li><a href="{{asset('admin/contentsv')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Dịch Vụ</a></li>
				<li><a href="{{asset('admin/service')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Danh Mục Dịch Vụ</a></li>
				<li role="presentation" class="divider"></li>
			</ul>
			
		</div><!--/.sidebar--> --}}

		
		
		{{-- <script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/chart.min.js"></script>
		<script src="js/chart-data.js"></script>
		<script src="js/easypiechart.js"></script>
		<script src="js/easypiechart-data.js"></script>
		<script src="js/bootstrap-datepicker.js"></script> --}}

		<!-- jQuery Admin ALTE2 -->
		<script src="{{asset('public/cssAdminLTE2/plugins/jquery/jquery.min.js')}}"></script>
		<!-- jQuery UI 1.11.4 -->
		<script src="{{asset('public/cssAdminLTE2/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<script>
		$.widget.bridge('uibutton', $.ui.button)
		</script>
		<!-- Bootstrap 4 -->
		<script src="{{asset('public/cssAdminLTE2/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
		<!-- ChartJS -->
		<script src="{{asset('public/cssAdminLTE2/plugins/chart.js/Chart.min.js')}}"></script>
		<!-- Sparkline -->
		<script src="{{asset('public/cssAdminLTE2/plugins/sparklines/sparkline.js')}}"></script>
		<!-- JQVMap -->
		<script src="{{asset('public/cssAdminLTE2/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
		<script src="{{asset('public/cssAdminLTE2/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
		<!-- jQuery Knob Chart -->
		<script src="{{asset('public/cssAdminLTE2/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
		<!-- daterangepicker -->
		<script src="{{asset('public/cssAdminLTE2/plugins/moment/moment.min.js')}}"></script>
		<script src="{{asset('public/cssAdminLTE2/plugins/daterangepicker/daterangepicker.js')}}"></script>
		<!-- Tempusdominus Bootstrap 4 -->
		<script src="{{asset('public/cssAdminLTE2/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
		<!-- Summernote -->
		<script src="{{asset('public/cssAdminLTE2/plugins/summernote/summernote-bs4.min.js')}}"></script>
		<!-- overlayScrollbars -->
		<script src="{{asset('public/cssAdminLTE2/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
		<!-- AdminLTE App -->
		<script src="{{asset('public/cssAdminLTE2/dist/js/adminlte.js')}}"></script>
		<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
		<script src="{{asset('public/cssAdminLTE2/dist/js/pages/dashboard.js')}}"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="{{asset('public/cssAdminLTE2/dist/js/demo.js')}}"></script>

		<script>
			$('#calendar').datepicker({
			});

			!function ($) {
				$(document).on("click","ul.nav li.parent > a > span.icon", function(){          
					$(this).find('em:first').toggleClass("glyphicon-minus");      
				}); 
				$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
			}(window.jQuery);

			$(window).on('resize', function () {
			if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
			})
			$(window).on('resize', function () {
			if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
			})
		</script>	


<script>
	$('#calendar').datepicker({
	});
  
	!function ($) {
		$(document).on("click","ul.nav li.parent > a > span.icon", function(){          
			$(this).find('em:first').toggleClass("glyphicon-minus");      
		}); 
		$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
	}(window.jQuery);
  
	$(window).on('resize', function () {
	  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
	})
	$(window).on('resize', function () {
	  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
	})
	// Chang Image add product
	function changeImg(input){
		//Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
		if(input.files && input.files[0]){
			var reader = new FileReader();
			//Sự kiện file đã được load vào website
			reader.onload = function(e){
				//Thay đổi đường dẫn ảnh
				$('#avatar').attr('src',e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}
	$(document).ready(function() {
		$('#avatar').click(function(){
			$('#img').click();
		});
	});
   </script>

		<script>
	$('input#name').keyup(function(event) {
		/* Act on the event */
		var title, slug;
    //Lấy text từ thẻ input title 
	title = $(this).val();
    //Đổi chữ hoa thành chữ thường
	slug = title.toLowerCase();
	
    //Đổi ký tự có dấu thành không dấu
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
    slug = slug.replace(/đ/gi, 'd');
    //Xóa các ký tự đặt biệt
    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
    //Đổi khoảng trắng thành ký tự gạch ngang
    slug = slug.replace(/ /gi, "-");
    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
    slug = slug.replace(/\-\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-/gi, '-');
    slug = slug.replace(/\-\-/gi, '-');
    //Xóa các ký tự gạch ngang ở đầu và cuối
    slug = '@' + slug + '@';
    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    //In slug ra textbox có id “slug”
    $('input#slug').val(slug);
});
</body>

</html>