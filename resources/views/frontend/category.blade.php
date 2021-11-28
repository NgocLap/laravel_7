@extends('frontend.master')
@section('title','Danh Mục Sản Phẩm')
@section('main')
<link rel="stylesheet" href="css/category.css">	
	<div id="wrap-inner">
		<div class="products">
		<h3>Danh mục --> {{$cateName->cate_name}}</h3>
		<div class="product-list row">

			@foreach ($items as $item)
				<div class="product-item col-md-2 col-sm-6 col-xs-12 post">
					<a href="#"><img  src="{{asset('library/storage/app/avatar/'.$item->prod_img)}}" class="img-thumbnail"></a>
						<p><a href="#">{{$item->prod_name}}</a></p>
						<p class="price">{{number_format($item->prod_price,0,',','.')}}VNĐ</p>	  
						<div class="marsk">
							<a href="{{asset('detail/'.$item->prod_id.'/'.$item->prod_slug.'.html')}}">Xem chi tiết</a>
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
					
			