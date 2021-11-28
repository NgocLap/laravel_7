@extends('frontend.master')
@section('title','Danh Mục Tin Tức')
@section('main')
<link rel="stylesheet" href="css/category.css">	
	<div id="wrap-inner">
		<div class="products">
            <h3>Danh mục --> {{$inforName->cate_name}}</h3>
		<div class="product-list row">

			@foreach ($items as $item)
				<div class="product-item col-md-6 col-sm-6 col-xs-12 post">
					<a href="#"><img  src="{{asset('library/storage/app/avatar/'.$item->news_img)}}" class="img-thumbnail"></a>
						<p><a href="#">{{$item->news_name}}</a></p>
                        <p class="price">{{$item->news_author}}</p>
              
                        <p style="font-weight: bold"><a href="#">{!!$item->news_description!!}</a></p>
						<div class="marsk">
							<a href="{{asset('detailsnews/'.$item->news_id.'/'.$item->news_slug.'.html')}}">Xem chi tiết</a>
							{{-- <a href="{{asset('detailnews/'.$item->news_id.'/'.$item->news_slug.'.html')}}">Xem tin tức</a> --}}
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
					
			