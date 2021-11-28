@extends('frontend.master')
@section('title','Trang Chủ')
@section('main')
<script type="text/javascript">
	function updateCart(qty, rowId){
		$.get(
			'{{asset('cart/update')}}',
			{qty:qty,rowId:rowId},
			function(){
				location.reload();
			}
		);
	}
</script>
<div id="wrap-inner">

	<div class="products">
		<h3 style="color: #d86843; font-weight: bold">SẢN PHẨM NỔI BẬT --></h3>
		<div class="product-list row">
			@foreach ($featured as $item)
			<div class="product-item col-md-2 col-sm-6 col-xs-12 post">
				<a href="#"><img src="{{asset('library/storage/app/avatar/'.$item->prod_img)}}" class="img-thumbnail"></a>
				<p><a style="color: black; font-weight: bold" href="#">{{$item->prod_name}}</a></p>
				<p >Tác Giả : <a  href="#">{{$item->prod_author}}</a></p>
				<p class="price">{{number_format($item->prod_price,0,',','.')}}VNĐ</p>	 
				<div class="marsk">
					<a href="{{asset('detail/'.$item->prod_id.'/'.$item->prod_slug.'.html')}}" >Xem chi tiết </a>
				</div>  
			</div>
			{{-- <a href="{{asset('cart/add/'.$item->prod_id)}}">Thêm vào giỏ hàng</a> --}}
			@endforeach
										
		</div>                	                	
	</div>

	<div class="products">
		<h3 style="color: #d86843; font-weight: bold">SẢN PHẨM GIẢM GIÁ --></h3>
		<div class="product-list row">
			@foreach ($discount as $item)
			<div class="product-item col-md-2 col-sm-6 col-xs-12 post">
				<a href="#"><img src="{{asset('library/storage/app/avatar/'.$item->discount_img)}}" class="img-thumbnail"></a>
				<p><a style="color: black; font-weight: bold" href="#">{{$item->discount_name}}</a></p>
				<p >Tác Giả : <a  href="#">{{$item->discount_author}}</a></p>
				<p class="price">Giảm Giá : <a style="color: red" href="#">{{$item->discount_promotion}}%</a></p>
				<p class="price">{{number_format($item->discount_price,0,',','.')}}VNĐ</p>	 
				<div class="marsk">
					<a href="{{asset('detaildiscount/'.$item->discount_id.'/'.$item->discount_slug.'.html')}}" >Xem chi tiết </a>
				</div>  
			</div>
			{{-- <a href="{{asset('cart/add/'.$item->prod_id)}}">Thêm vào giỏ hàng</a> --}}
			@endforeach
										
		</div>                	                	
	</div>

	<div class="products">
		<h3  style="color: #d86843; font-weight: bold">SẢN PHẨM MỚI --></h3>
		<div class="product-list row">

			@foreach ($news as $item)
			<div class="product-item col-md-2 col-sm-6 col-xs-12 post">
				<a href="#"><img  src="{{asset('library/storage/app/avatar/'.$item->prod_img)}}" class="img-thumbnail"></a>
				<p><a style="color: black; font-weight: bold" href="#">{{$item->prod_name}}</a></p>
				<p >Tác Giả : <a  href="#">{{$item->prod_author}}</a></p>
				<p class="price">{{number_format($item->prod_price,0,',','.')}}VNĐ</p>	  
				<div class="marsk">
					<a href="{{asset('detail/'.$item->prod_id.'/'.$item->prod_slug.'.html')}}">Xem chi tiết</a>
				</div>                                    
			</div>
			@endforeach
					
		</div>    
	</div>

	

	<div class="products">
		<h3 style="color: #d86843; font-weight: bold">TIN TỨC NỔI BẬT --></h3>
		<div class="product-list row">

			@foreach ($featured2 as $item)
			<div class="product-item col-md-4 col-sm-6 col-xs-12 post">
				<a href="#"><img  src="{{asset('library/storage/app/avatar/'.$item->news_img)}}" class="img-thumbnail"></a>
				<a href="#">{{$item->news_name}}</a>
				<p class="price">{{$item->news_author}}</p>	
				<a href="">{!!$item->news_description!!}</a>

				<div class="marsk">
					<a href="{{asset('detailsnews/'.$item->news_id.'/'.$item->news_slug.'.html')}}">Xem tin tức</a>
				</div>     
			</div>
			@endforeach
										
		</div>                	                	
	</div>

	<div class="products">
		<h3  style="color: #d86843; font-weight: bold">TIN TỨC MỚI --></h3>
		<div class="product-list row">

			@foreach ($news2 as $item)
			<div class="product-item col-md-3 col-sm-6 col-xs-12 post">
				<a href="#"><img  src="{{asset('library/storage/app/avatar/'.$item->news_img)}}" class="img-thumbnail"></a>
				<p><a href="#">{{$item->news_name}}</a></p>
				<p class="price">{{$item->news_author}}</p>	  
				<div class="marsk">
					<a href="{{asset('detailsnews/'.$item->news_id.'/'.$item->news_slug.'.html')}}">Xem tin tức</a>
				</div>                                    
			</div>
			@endforeach
					
		</div>    
	</div>
	{{-- <div class="products">
		<h3 style="color: #d86843; font-weight: bold">DỊCH VỤ NỔI BẬT --></h3>
		<div class="product-list row">
			@foreach ($featured3 as $item)
			 <div class="product-item col-md-6 col-sm-6 col-xs-12 post">
				<a href="#"><img  src="{{asset('library/storage/app/avatar/'.$item->content_img)}}" class="img-thumbnail"></a>
				<a href="">{!!$item->content_description!!}</a>
				<div class="marsk">
					<a href="{{asset('detailservice/'.$item->content_id.'.html')}}">Xem tin tức</a>
				 </div>     
			</div> 
			@endforeach

								
		</div>                	                	
	</div> --}}

</div>
@stop					
			