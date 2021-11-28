@extends('backend.master')
@section('title','Trang Chủ Quản Trị')
@section('main')
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Custom fonts for this template-->
	{{-- <link href="{{asset('public/FrontendAdmin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css"> --}}
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<!-- Custom styles for this template-->
	{{-- <link href="{{asset('public/FrontendAdmin/css/sb-admin-2.min.css')}}" rel="stylesheet"> --}}
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
   <!-- Main content -->
    <!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
		  <div class="container-fluid">
			<div class="row mb-2">
			  <div class="col-sm-6">
				<h1 class="m-0 text-dark">Bảng điều khiển</h1>
			  </div><!-- /.col -->
			  <div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
				  <li class="breadcrumb-item"><a href="{{asset('admin/home')}}">Trang Chủ</a></li>
				  <li class="breadcrumb-item active">Bảng điều khiển v1</li>
				</ol>
			  </div><!-- /.col -->
			</div><!-- /.row -->
		  </div><!-- /.container-fluid -->
		</div>
		<section class="content">
			<div class="container-fluid">
			  <!-- Small boxes (Stat box) -->
			  <div class="row">
				<div class="col-lg-3 col-6">
				  <!-- small box -->
				  <div class="small-box bg-info">
					<div class="inner">
					  <h3>150</h3>
					  <p>Đơn hàng mới</p>
					</div>
					<div class="icon">
					  <i class="ion ion-bag"></i>
					</div>
					<a href="index2.html" class="small-box-footer">Thêm thông tin <i class="fas fa-arrow-circle-right"></i></a>
				  </div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
				  <!-- small box -->
				  <div class="small-box bg-success">
					<div class="inner">
					  <h3>53<sup style="font-size: 20px">%</sup></h3>
	  
					  <p>Tỷ lệ thoát</p>
					</div>
					<div class="icon">
					  <i class="ion ion-stats-bars"></i>
					</div>
					<a href="index2.html" class="small-box-footer">Thêm thông tin <i class="fas fa-arrow-circle-right"></i></a>
				  </div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
				  <!-- small box -->
				  <div class="small-box bg-warning">
					<div class="inner">
					  <h3>44</h3>
	  
					  <p>Đăng ký người dùng</p>
					</div>
					<div class="icon">
					  <i class="ion ion-person-add"></i>
					</div>
					<a href="index2.html" class="small-box-footer">Thêm thông tin<i class="fas fa-arrow-circle-right"></i></a>
				  </div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
				  <!-- small box -->
				  <div class="small-box bg-danger">
					<div class="inner">
					  <h3>65</h3>
	  
					  <p>Khách truy cập duy nhất</p>
					</div>
					<div class="icon">
					  <i class="ion ion-pie-graph"></i>
					</div>
					<a href="index2.html" class="small-box-footer">Thêm thông tin<i class="fas fa-arrow-circle-right"></i></a>
				  </div>
				</div>
				<!-- ./col -->
			  </div>
			  <!-- /.row -->
			  <!-- Main row -->
			  <div class="row">
				<!-- Left col -->
				<section class="col-lg-7 connectedSortable">
				  <!-- Custom tabs (Charts with tabs)-->
				  <div class="card">
					<div class="card-header">
					  <h3 class="card-title">
						<i class="fas fa-chart-pie mr-1"></i>
						Bán hàng
					  </h3>
					  <div class="card-tools">
						<ul class="nav nav-pills ml-auto">
						  <li class="nav-item">
							<a class="nav-link active" href="#revenue-chart" data-toggle="tab">Khu vực</a>
						  </li>
						  <li class="nav-item">
							<a class="nav-link" href="#sales-chart" data-toggle="tab">Biểu đồ</a>
						  </li>
						</ul>
					  </div>
					</div><!-- /.card-header -->
					<div class="card-body">
					  <div class="tab-content p-0">
						<!-- Morris chart - Sales -->
						<div class="chart tab-pane active" id="revenue-chart"
							 style="position: relative; height: 300px;">
							<canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>                         
						 </div>
						<div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
						  <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>                         
						</div>  
					  </div>
					</div><!-- /.card-body -->
				  </div>
				  <!-- /.card -->
	  
				  <!-- DIRECT CHAT -->
				  <div class="card direct-chat direct-chat-primary">
					<div class="card-header">
					  <h3 class="card-title">Trò chuyện trực tiếp</h3>
	  
					  <div class="card-tools">
						<span data-toggle="tooltip" title="3 New Messages" class="badge badge-primary">3</span>
						<button type="button" class="btn btn-tool" data-card-widget="collapse">
						  <i class="fas fa-minus"></i>
						</button>
						<button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts"
								data-widget="chat-pane-toggle">
						  <i class="fas fa-comments"></i>
						</button>
						<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
						</button>
					  </div>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
					  <!-- Conversations are loaded here -->
					  <div class="direct-chat-messages">
						<!-- Message. Default to the left -->
						<div class="direct-chat-msg">
						  <div class="direct-chat-infos clearfix">
							<span class="direct-chat-name float-left">Lương Ngọc Lập</span>
							<span class="direct-chat-timestamp float-right">03/08/2020 2:00 pm</span>
						  </div>
						  <!-- /.direct-chat-infos -->
						  <img class="direct-chat-img" src="{{asset('public/cssAdminLTE2/dist/img/user1-128x128.jpg')}}" alt="message user image">
						  <!-- /.direct-chat-img -->
						  <div class="direct-chat-text">
							Mẫu này có thực sự miễn phí không? Thật không thể tin được!
						  </div>
						  <!-- /.direct-chat-text -->
						</div>
						<!-- /.direct-chat-msg -->
	  
						<!-- Message to the right -->
						<div class="direct-chat-msg right">
						  <div class="direct-chat-infos clearfix">
							<span class="direct-chat-name float-right">Đinh Văn Hậu</span>
							<span class="direct-chat-timestamp float-left">03/08/2020 2:05 pm</span>
						  </div>
						  <!-- /.direct-chat-infos -->
						  <img class="direct-chat-img" src="{{asset('public/cssAdminLTE2/dist/img/user3-128x128.jpg')}}" alt="message user image">
						  <!-- /.direct-chat-img -->
						  <div class="direct-chat-text">
							Bạn nên tin điều đó!
						  </div>
						  <!-- /.direct-chat-text -->
						</div>
						<!-- /.direct-chat-msg -->
	  
						<!-- Message. Default to the left -->
						<div class="direct-chat-msg">
						  <div class="direct-chat-infos clearfix">
							<span class="direct-chat-name float-left">Hà Trung Phong</span>
							<span class="direct-chat-timestamp float-right">03/08/2020  Jan 5:37 pm</span>
						  </div>
						  <!-- /.direct-chat-infos -->
						  <img class="direct-chat-img" src="{{asset('public/cssAdminLTE2/dist/img/user1-128x128.jpg')}}" alt="message user image">
						  <!-- /.direct-chat-img -->
						  <div class="direct-chat-text">
							Làm việc với AdminLTE trên một ứng dụng mới tuyệt vời! Muốn tham gia?
						  </div>
						  <!-- /.direct-chat-text -->
						</div>
						<!-- /.direct-chat-msg -->
	  
						<!-- Message to the right -->
						<div class="direct-chat-msg right">
						  <div class="direct-chat-infos clearfix">
							<span class="direct-chat-name float-right">Nguyễn Thành Tài</span>
							<span class="direct-chat-timestamp float-left">03/08/2020  6:10 pm</span>
						  </div>
						  <!-- /.direct-chat-infos -->
						  <img class="direct-chat-img" src="{{asset('public/cssAdminLTE2/dist/img/user3-128x128.jpg')}}" alt="message user image">
						  <!-- /.direct-chat-img -->
						  <div class="direct-chat-text">
							Tôi rất thích
						  </div>
						  <!-- /.direct-chat-text -->
						</div>
						<!-- /.direct-chat-msg -->
	  
					  </div>
					  <!--/.direct-chat-messages-->
	  
					  <!-- Contacts are loaded here -->
					  <div class="direct-chat-contacts">
						<ul class="contacts-list">
						  <li>
							<a href="index2.html">
							  <img class="contacts-list-img" src="{{asset('public/cssAdminLTE2/dist/img/user1-128x128.jpg')}}">
	  
							  <div class="contacts-list-info">
								<span class="contacts-list-name">
								  Nguyễn Chí Quang
								  <small class="contacts-list-date float-right">20/08/2020</small>
								</span>
								<span class="contacts-list-msg">Làm thế nào bạn có được? Tôi đã...</span>
							  </div>
							  <!-- /.contacts-list-info -->
							</a>
						  </li>
						  <!-- End Contact Item -->
						  <li>
							<a href="index2.html">
							  <img class="contacts-list-img" src="{{asset('public/cssAdminLTE2/dist/img/user7-128x128.jpg')}}">
	  
							  <div class="contacts-list-info">
								<span class="contacts-list-name">
								  Bùi Kiều Linh
								  <small class="contacts-list-date float-right">22/08/2020</small>
								</span>
								<span class="contacts-list-msg">Tôi sẽ đợi ...</span>
							  </div>
							  <!-- /.contacts-list-info -->
							</a>
						  </li>
						  <!-- End Contact Item -->
						  <li>
							<a href="index2.html">
							  <img class="contacts-list-img" src="{{asset('public/cssAdminLTE2/dist/img/user3-128x128.jpg')}}">
	  
							  <div class="contacts-list-info">
								<span class="contacts-list-name">
								 Bùi Công Anh
								  <small class="contacts-list-date float-right">20/08/2020</small>
								</span>
								<span class="contacts-list-msg">Tôi sẽ gọi lại cho bạn tại ...</span>
							  </div>
							  <!-- /.contacts-list-info -->
							</a>
						  </li>
						  <!-- End Contact Item -->
						  <li>
							<a href="index2.html">
							  <img class="contacts-list-img" src="{{asset('public/cssAdminLTE2/dist/img/user5-128x128.jpg')}}">
	  
							  <div class="contacts-list-info">
								<span class="contacts-list-name">
								  Nguyễn Văn Phương
								  <small class="contacts-list-date float-right">20/08/2020</small>
								</span>
								<span class="contacts-list-msg">Nơi mới của bạn ...</span>
							  </div>
							  <!-- /.contacts-list-info -->
							</a>
						  </li>
						  <!-- End Contact Item -->
						  <li>
							<a href="index2.html">
							  <img class="contacts-list-img" src="{{asset('public/cssAdminLTE2/dist/img/user6-128x128.jpg')}}">
	  
							  <div class="contacts-list-info">
								<span class="contacts-list-name">
								  Lê Văn Luân
								  <small class="contacts-list-date float-right">19/08/2020</small>
								</span>
								<span class="contacts-list-msg">Tôi có thể xem ...</span>
							  </div>
							  <!-- /.contacts-list-info -->
							</a>
						  </li>
						  <!-- End Contact Item -->
						  <li>
							<a href="index2.html">
							  <img class="contacts-list-img" src="{{asset('public/cssAdminLTE2/dist/img/user8-128x128.jpg')}}">
	  
							  <div class="contacts-list-info">
								<span class="contacts-list-name">
								  Bùi Thị Hòa Nhi
								  <small class="contacts-list-date float-right">19/08/2020</small>
								</span>
								<span class="contacts-list-msg">Đừng bận tâm tôi đã tìm thấy ...</span>
							  </div>
							  <!-- /.contacts-list-info -->
							</a>
						  </li>
						  <!-- End Contact Item -->
						</ul>
						<!-- /.contacts-list -->
					  </div>
					  <!-- /.direct-chat-pane -->
					</div>
					<!-- /.card-body -->
					<div class="card-footer">
					  <form action="#" method="post">
						<div class="input-group">
						  <input type="text" name="message" placeholder="Type Message ..." class="form-control">
						  <span class="input-group-append">
							<button type="button" class="btn btn-primary">Gửi</button>
						  </span>
						</div>
					  </form>
					</div>
					<!-- /.card-footer-->
				  </div>
				  <!--/.direct-chat -->
	  
				  <!-- TO DO List -->
				  <div class="card">
					<div class="card-header">
					  <h3 class="card-title">
						<i class="ion ion-clipboard mr-1"></i>
						Những việc cần làm
					  </h3>
	  
					  <div class="card-tools">
						<ul class="pagination pagination-sm">
						  <li class="page-item"><a href="index2.html" class="page-link">&laquo;</a></li>
						  <li class="page-item"><a href="index2.html" class="page-link">1</a></li>
						  <li class="page-item"><a href="index2.html" class="page-link">2</a></li>
						  <li class="page-item"><a href="index2.html" class="page-link">3</a></li>
						  <li class="page-item"><a href="index2.html" class="page-link">&raquo;</a></li>
						</ul>
					  </div>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
					  <ul class="todo-list" data-widget="todo-list">
						<li>
						  <!-- drag handle -->
						  <span class="handle">
							<i class="fas fa-ellipsis-v"></i>
							<i class="fas fa-ellipsis-v"></i>
						  </span>
						  <!-- checkbox -->
						  <div  class="icheck-primary d-inline ml-2">
							<input type="checkbox" value="" name="todo1" id="todoCheck1">
							<label for="todoCheck1"></label>
						  </div>
						  <!-- todo text -->
						  <span class="text">Thiết kế một chủ đề đẹp</span>
						  <!-- Emphasis label -->
						  <small class="badge badge-danger"><i class="far fa-clock"></i> 2 phút</small>
						  <!-- General tools such as edit or delete-->
						  <div class="tools">
							<i class="fas fa-edit"></i>
							<i class="fas fa-trash-o"></i>
						  </div>
						</li>
						<li>
						  <span class="handle">
							<i class="fas fa-ellipsis-v"></i>
							<i class="fas fa-ellipsis-v"></i>
						  </span>
						  <div  class="icheck-primary d-inline ml-2">
							<input type="checkbox" value="" name="todo2" id="todoCheck2" checked>
							<label for="todoCheck2"></label>
						  </div>
						  <span class="text">Làm cho chủ đề đáp ứng</span>
						  <small class="badge badge-info"><i class="far fa-clock"></i> 4 tiếng</small>
						  <div class="tools">
							<i class="fas fa-edit"></i>
							<i class="fas fa-trash-o"></i>
						  </div>
						</li>
						<li>
						  <span class="handle">
							<i class="fas fa-ellipsis-v"></i>
							<i class="fas fa-ellipsis-v"></i>
						  </span>
						  <div  class="icheck-primary d-inline ml-2">
							<input type="checkbox" value="" name="todo3" id="todoCheck3">
							<label for="todoCheck3"></label>
						  </div>
						  <span class="text">Hãy để chủ đề tỏa sáng như một ngôi sao</span>
						  <small class="badge badge-warning"><i class="far fa-clock"></i> 1 ngày</small>
						  <div class="tools">
							<i class="fas fa-edit"></i>
							<i class="fas fa-trash-o"></i>
						  </div>
						</li>
						<li>
						  <span class="handle">
							<i class="fas fa-ellipsis-v"></i>
							<i class="fas fa-ellipsis-v"></i>
						  </span>
						  <div  class="icheck-primary d-inline ml-2">
							<input type="checkbox" value="" name="todo4" id="todoCheck4">
							<label for="todoCheck4"></label>
						  </div>
						  <span class="text">Làm nội dung hay hơn, truyềnđọc cho người đọc tốt hơn</span>
						  <small class="badge badge-success"><i class="far fa-clock"></i> 3 ngày</small>
						  <div class="tools">
							<i class="fas fa-edit"></i>
							<i class="fas fa-trash-o"></i>
						  </div>
						</li>
						<li>
						  <span class="handle">
							<i class="fas fa-ellipsis-v"></i>
							<i class="fas fa-ellipsis-v"></i>
						  </span>
						  <div  class="icheck-primary d-inline ml-2">
							<input type="checkbox" value="" name="todo5" id="todoCheck5">
							<label for="todoCheck5"></label>
						  </div>
						  <span class="text">Kiểm tra tin nhắn và thông báo của bạn</span>
						  <small class="badge badge-primary"><i class="far fa-clock"></i> 1 tuần</small>
						  <div class="tools">
							<i class="fas fa-edit"></i>
							<i class="fas fa-trash-o"></i>
						  </div>
						</li>
						<li>
						  <span class="handle">
							<i class="fas fa-ellipsis-v"></i>
							<i class="fas fa-ellipsis-v"></i>
						  </span>
						  <div  class="icheck-primary d-inline ml-2">
							<input type="checkbox" value="" name="todo6" id="todoCheck6">
							<label for="todoCheck6"></label>
						  </div>
						  <span class="text">Chỉnh sửa web đẹp hơn, bổ sung thêm chức năng</span>
						  <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 tháng</small>
						  <div class="tools">
							<i class="fas fa-edit"></i>
							<i class="fas fa-trash-o"></i>
						  </div>
						</li>
					  </ul>
					</div>
					<!-- /.card-body -->
					<div class="card-footer clearfix">
					  <button type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Thêm mục</button>
					</div>
				  </div>
				  <!-- /.card -->
				</section>
				<!-- /.Left col -->
				<!-- right col (We are only adding the ID to make the widgets sortable)-->
				<section class="col-lg-5 connectedSortable">
	  
				  <!-- Map card -->
				  <div class="card bg-gradient-primary">
					<div class="card-header border-0">
					  <h3 class="card-title">
						<i class="fas fa-map-marker-alt mr-1"></i>
						Khách
					  </h3>
					  <!-- card tools -->
					  <div class="card-tools">
						<button type="button"
								class="btn btn-primary btn-sm daterange"
								data-toggle="tooltip"
								title="Date range">
						  <i class="far fa-calendar-alt"></i>
						</button>
						<button type="button"
								class="btn btn-primary btn-sm"
								data-card-widget="collapse"
								data-toggle="tooltip"
								title="Collapse">
						  <i class="fas fa-minus"></i>
						</button>
					  </div>
					  <!-- /.card-tools -->
					</div>
					<div class="card-body">
					  <div id="world-map" style="height: 250px; width: 100%;"></div>
					</div>
					<!-- /.card-body-->
					<div class="card-footer bg-transparent">
					  <div class="row">
						<div class="col-4 text-center">
						  <div id="sparkline-1"></div>
						  <div class="text-white">Khách</div>
						</div>
						<!-- ./col -->
						<div class="col-4 text-center">
						  <div id="sparkline-2"></div>
						  <div class="text-white">Online</div>
						</div>
						<!-- ./col -->
						<div class="col-4 text-center">
						  <div id="sparkline-3"></div>
						  <div class="text-white">Bán hàng</div>
						</div>
						<!-- ./col -->
					  </div>
					  <!-- /.row -->
					</div>
				  </div>
				  <!-- /.card -->
	  
				  <!-- solid sales graph -->
				  <div class="card bg-gradient-info">
					<div class="card-header border-0">
					  <h3 class="card-title">
						<i class="fas fa-th mr-1"></i>
						Biểu đồ bán hàng
					  </h3>
	  
					  <div class="card-tools">
						<button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
						  <i class="fas fa-minus"></i>
						</button>
						<button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
						  <i class="fas fa-times"></i>
						</button>
					  </div>
					</div>
					<div class="card-body">
					  <canvas class="chart" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
					</div>
					<!-- /.card-body -->
					<div class="card-footer bg-transparent">
					  <div class="row">
						<div class="col-4 text-center">
						  <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"
								 data-fgColor="#39CCCC">
	  
						  <div class="text-white">Đơn đặt hàng qua thư</div>
						</div>
						<!-- ./col -->
						<div class="col-4 text-center">
						  <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"
								 data-fgColor="#39CCCC">
	  
						  <div class="text-white">Online</div>
						</div>
						<!-- ./col -->
						<div class="col-4 text-center">
						  <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"
								 data-fgColor="#39CCCC">
	  
						  <div class="text-white">Trong cửa hàng</div>
						</div>
						<!-- ./col -->
					  </div>
					  <!-- /.row -->
					</div>
					<!-- /.card-footer -->
				  </div>
				  <!-- /.card -->
	  
				  <!-- Calendar -->
				  <div class="card bg-gradient-success">
					<div class="card-header border-0">
	  
					  <h3 class="card-title">
						<i class="far fa-calendar-alt"></i>
						Lịch
					  </h3>
					  <!-- tools card -->
					  <div class="card-tools">
						<!-- button with a dropdown -->
						<div class="btn-group">
						  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
							<i class="fas fa-bars"></i></button>
						  <div class="dropdown-menu" role="menu">
							<a href="index2.html" class="dropdown-item">Thêm sự kiện mới</a>
							<a href="index2.html" class="dropdown-item">Xóa sự kiện</a>
							<div class="dropdown-divider"></div>
							<a href="index2.html" class="dropdown-item">Xem lịch</a>
						  </div>
						</div>
						<button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
						  <i class="fas fa-minus"></i>
						</button>
						<button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
						  <i class="fas fa-times"></i>
						</button>
					  </div>
					  <!-- /. tools -->
					</div>
					<!-- /.card-header -->
					<div class="card-body pt-0">
					  <!--The calendar -->
					  <div id="calendar" style="width: 100%"></div>
					</div>
					<!-- /.card-body -->
				  </div>
				  <!-- /.card -->
				  
				</section>
				<!-- right col -->
			  </div>
			  <!-- /.row (main row) -->
			</div><!-- /.container-fluid -->
		  </section>
		  <!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

@stop	  

	
