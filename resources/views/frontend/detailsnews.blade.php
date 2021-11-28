@extends('frontend.master')
@section('title','News Tin Tức')
@section('main')
<link rel="stylesheet" href="css/details.css">
<div id="wrap-inner">
						<div id="product-info">
                            <div class="clearfix"></div>
                            <center><h3>{{$item->news_name}}</h3></center>
							
							<div class="row">
								<div id="product-img" class="col-xs-12 col-sm-12 col-md-3 text-center">
                                        <img height="340px" src="{{asset('library/storage/app/avatar/'.$item->news_img)}}">
								</div>
								<div id="product-details" class="col-xs-12 col-sm-12 col-md-9">
									{{-- <p>Bảo hành: {{$item->prod_warranty}}</p> 
									<p>Phụ kiện: {{$item->prod_accessories}}</p>
									<p>Tình trạng: {{$item->prod_condition}}</p>
									<p>Khuyến mại: {{$item->prod_promotion}}</p> --}}
									
								</div>
							</div>							
						</div>
						<div id="product-detail">
							{{-- <h3>Chi tiết sản phẩm</h3> --}}
							<p style="font-weight: bold" class="text-justify">{!!$item->news_description!!}</p>
							
						</div>
						<p style="font-weight: bold" class="text-justify">{!!$item->news_content!!}</p>
                        
						<div id="comment">
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
							
						</div>
</div>	
@stop