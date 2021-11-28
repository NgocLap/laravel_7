@extends('frontend.master')
@section('title','Danh Mục Dịch Vụ   ')
@section('main')
<link rel="stylesheet" href="css/category.css">	
	<div id="wrap-inner">
		<div class="products">
		<h3>Dịch Vụ --> {{$serName->ser_name}}</h3>
		<div class="product-list row">

			@foreach ($items as $item)
			<div class="product-item col-md-4 col-sm-6 col-xs-12 post">
				<a href="#"><img  src="{{asset('library/storage/app/avatar/'.$item->content_img)}}" class="img-thumbnail"></a>
				
				<div class="marsk">
					<a href="{{asset('detailservice/'.$item->content_id.'/'.'.html')}}">Xem Dịch Vụ</a>
				</div>                                    
			</div>
			@endforeach
			</div>                	                	
		</div>

		<div id="pagination">
			<div class="row text-center">
				<div class="col-sm-12">
					{{$items->links()}}
				</div>
			</div>
	</div>
</div>
@stop
					
			