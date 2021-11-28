@extends('frontend.master')
@section('title','Chi Tiết Sản Phẩm')
@section('main')
<link rel="stylesheet" href="css/details.css">
<div id="wrap-inner">
	<div id="product-info">
		<div class="clearfix"></div>
		<h3>{{$item->prod_name}}</h3>
		<div class="row">
			<div id="product-img" class="col-xs-12 col-sm-12 col-md-3 text-center">
				<img height="340px" src="{{asset('library/storage/app/avatar/'.$item->prod_img)}}">
			</div>
			<div id="product-details" class="col-xs-12 col-sm-12 col-md-9">
				<p>Giá: <span class="price">{{number_format($item->prod_price,0,',','.')}}VNĐ</span></p>
				<p>Tác Giả: {{$item->prod_author}}</p> 
				<p>Bảo hành: {{$item->prod_warranty}}</p> 
				<p>Phụ kiện: {{$item->prod_accessories}}</p>
				<p>Tình trạng: {{$item->prod_condition}}</p>
				<p>Khuyến mại: {{$item->prod_promotion}}%</p>
				<p>Sản phẩm : @if($item->prod_status==1)Còn hàng @else Hết hàng @endif</p>
				<form action="">
						
					<p class="add-cart text-center">
						<a href="{{asset('cart/add/'.$item->prod_id)}}">Đặt hàng online</a>
					</p>
				</form>
				
			</div>
		</div>							
	</div>
	{{-- <div id="product-detail">
		<h3>Chi tiết sản phẩm</h3>
		<p class="text-justify">{!!$item->prod_description!!}</p>
	</div> --}}

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container-fluid">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<div role="tabpanel" class="tabs">
					<ul class="nav navbar-nav " >
						<li role="presentation" id="tab1" class="nav-item">
							<a href="#content_detail-1" aria-controls="content_detail-1" role="tab" data-toggle="tab"  style="font-size: 20px" class="nav-link" >
								Chi Tiết Sản Phẩm
							</a>
						</li>
					
						<li role="presentation"  id="tab2" class="nav-item">
							<a href="#list_content-1"  aria-controls="list_content-1" role="tab" data-toggle="tab"  style="font-size: 20px" class="nav-link" >
								Phụ Kiện Đi Chung
							</a>
						</li>
						<li role="presentation" id="tab3" class="nav-item">
							<a href="#rate_list"  aria-controls="rate_list" role="tab" data-toggle="tab"  style="font-size: 20px" class="nav-link" >
								Bình Luận
							</a>
						</li>
					</ul>
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fade active in " id="content_detail-1" style="font-size: 20px; font-weight: bold">
						<div class="med-cart__desc ">
							<p class="text-justify" >{!!$item->prod_description!!}</p>
						</div> 
					</div>
					<div role="tabpanel" class="tab-pane fade active in" id="list_content-1" style="font-size: 20px; color: red; font-weight: bold">
						<div class="med-cart__desc">
							<p class="text-justify">
								<ul>
									<li>{!!$item->prod_accessories!!}</li>
								</ul>
							</p>
						</div> 
					</div>
					<div role="tabpanel" class="tab-pane fade active in" id="rate_list">
						<div class="med-cart__desc">
							<div id="comment">
								<h3>Bình luận</h3>
								<div class="col-md-12 comment">
									<form method="post">
										<div class="form-group">
											<label for="email">Email:</label>
											<input required type="email" class="form-control" id="email" name="email">
										</div>
										<div class="form-group">
											<label for="name">Tên:</label>
											<input required type="text" class="form-control" id="name" name="name">
										</div>
										<div class="form-group">
											<label for="cm">Bình luận:</label>
											<textarea required rows="10" id="cm" class="form-control" name="content"></textarea>
										</div>
										<div class="form-group text-right">
											<button type="submit" class="btn btn-default">Gửi</button>
										</div>
										{{csrf_field()}}
									</form>
								</div>
							</div>
							<div id="comment-list">
								@foreach ($comments as $comment)
								<ul>
									<li class="com-title">
										{{$comment->com_name}}
										<br>
										<span>{{date('d/m/Y H:i',strtotime($comment->created_at))}}</span>	
									</li>
									<li class="com-details">
										{{$comment->com_content}}
									</li>
								</ul>
								@endforeach
							</div>
						</div>
					</div>
			</div>
		</div>
		</div>
	</nav>

{{-- <div id="comment">
	<h3>Bình luận</h3>
	<div class="col-md-9 comment">
		<form method="post">
			<div class="form-group">
				<label for="email">Email:</label>
				<input required type="email" class="form-control" id="email" name="email">
			</div>
			<div class="form-group">
				<label for="name">Tên:</label>
				<input required type="text" class="form-control" id="name" name="name">
			</div>
			<div class="form-group">
				<label for="cm">Bình luận:</label>
				<textarea required rows="10" id="cm" class="form-control" name="content"></textarea>
			</div>
			<div class="form-group text-right">
				<button type="submit" class="btn btn-default">Gửi</button>
			</div>
			{{csrf_field()}}
		</form>
	</div>
</div>
<div id="comment-list">
	@foreach ($comments as $comment)
	<ul>
		<li class="com-title">
			{{$comment->com_name}}
			<br>
			<span>{{date('d/m/Y H:i',strtotime($comment->created_at))}}</span>	
		</li>
		<li class="com-details">
			{{$comment->com_content}}
		</li>
	</ul>
	@endforeach	
</div>					 --}}
</div>	
@stop