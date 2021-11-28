@extends('frontend.master')
@section('title','Danh Mục Sản Phẩm Giảm Giá')
@section('main')
<link rel="stylesheet" href="css/category.css">	
	<div id="wrap-inner">
		<div class="products">
		<h3>Danh mục --> {{$cateName->catediscount_name}}</h3>
		<div class="product-list row">

			@foreach ($items as $item)
				<div class="product-item col-md-2 col-sm-6 col-xs-12 post">
					<a href="#"><img  src="{{asset('library/storage/app/avatar/'.$item->discount_img)}}" class="img-thumbnail"></a>
						<p><a href="#">{{$item->discount_name}}</a></p>
						<p><a href="#">Tác Giả : {{$item->discount_author}}</a></p>
						<p class="price" ><a style="color: red" href="#">Khuyến Mãi : {{$item->discount_promotion}}%</a></p>
						<p class="price">{{number_format($item->discount_price,0,',','.')}}VNĐ</p>	  
						<div class="marsk">
							<a href="{{asset('detaildiscount/'.$item->discount_id.'/'.$item->discount_slug.'.html')}}">Xem chi tiết</a>
						</div>                                    
					</div>
					@endforeach
			</div>                	                	
		</div>

		
		<div id="pagination" >
			<div class="row text-center">
				<div class="col-sm-12">
					{{$items->links()}}
				</div>
			</div>
		</div>
</div>
@stop
					
			