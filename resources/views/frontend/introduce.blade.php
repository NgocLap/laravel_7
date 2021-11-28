@extends('frontend.master')
@section('title','Danh Mục Giới Thiệu ')
@section('main')
<link rel="stylesheet" href="css/category.css">	
	<div id="wrap-inner">
		<div class="products">
		<h3>Giới Thiệu --> {{$introName->intro_name}}</h3>
		<div class="product-list row">

			@foreach ($items as $item)
			<div class="product-item col-md-4 col-sm-6 col-xs-12 post">
				<a href="#"><img  src="{{asset('library/storage/app/avatar/'.$item->contentintro_img)}}" class="img-thumbnail"></a>
				
				<div class="marsk">
					<a href="{{asset('detailsintroduce/'.$item->contentintro_id.'/'.'.html')}}">Xem thông tin</a>
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
					
			